"use strict";
$(document).ready(function () {
  //constants
  const validation_status_code = 422;
  const error_msg = "Oops! Something went wrong. Please try again later.";
  const success_msg = "User Successfully Inserted";
  const debugging = true;
  const notify_style = "inverse";

  function notify(message, type) {
    $.growl({
      message: message
    }, {
      type: type,
      allow_dismiss: false,
      label: "Cancel",
      className: "btn-xs btn-inverse",
      placement: {
        from: "top",
        align: "right"
      },
      delay: 3000,
      animate: {
        enter: "animated fadeInRight",
        exit: "animated fadeOutRight"
      },
      spacing: 10,
      offset: {
        x: 30,
        y: 30
      }
    });
  }

  $("#basic-forms").steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    autoFocus: true
  });
  $("#verticle-wizard").steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slide",
    stepsOrientation: "vertical",
    autoFocus: true
  });

  $("#design-wizard").steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    autoFocus: true
  });

  var form = $("#user-create-form").show();
  form
    .steps({
      headerTag: "h3",
      bodyTag: "fieldset",
      transitionEffect: "slide",
      stepsOrientation: "vertical",
      autoFocus: true,
      onStepChanging: function (event, currentIndex, newIndex) {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex) {
          return true;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex) {
          // To remove error styles
          form.find(".body:eq(" + newIndex + ") label.error").remove();
          form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
      },
      onStepChanged: function (event, currentIndex, priorIndex) {
        // Used to skip the "Warning" step if the user is old enough.
        if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
          form.steps("next");
        }
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3) {
          form.steps("previous");
        }
      },
      onFinishing: function (event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
      },
      onFinished: function (event, currentIndex) {
        var url = $('.content input[name="ajax_url"]').val();
        var form = $(this);
        var data = form.serialize();
        var form_action = $('.content input[name="form_action"]').val();
        $.ajax({
          type: "POST",
          url: url,
          // dataType: "json",
          data: form.serialize(), // serializes the form's elements.
          beforeSend: function () {},
          complete: function () {},
          success: function (response) {

            if (response) {
              var json_response = JSON.parse(response);
              // status code for validation
              if (json_response.code == validation_status_code) {
                for (var errors in json_response.message)
                  notify(json_response.message[errors], notify_style);
              } else {
                $('.page-body').html(json_response.page);
              }
            } else {
              notify(error_msg, notify_style);
            }

          }
        });

        event.preventDefault(); // avoid to execute the actual submit of the form.
      }
    })
    .validate({
      errorPlacement: function errorPlacement(error, element) {
        element.before(error);
      },
      rules: {
        confirm_password: {
          equalTo: "#password",
          required: true
        },
        password: {
          min: 3,
          required: true
        },
        first_name: {
          required: true
        },
        last_name: {
          required: true
        },
        phone: {
          required: true
        },
        mobile: {
          required: true,
        },
        address_1: {
          required: true,
        },
        address_2: {
          required: true,
        },
        city: {
          required: true
        },
        email: {
          required: true,
          remote: {
            url: $('.content input[name="ajax_url"]').val(),
            type: "POST",
            data: {
              email: function () {
                return $("#email").val();
              },
              action: "check-email-exists",
              _token: $('#token').val()
            }
          }
        }
      },
      messages: {
        name: "Please specify your username",
        confirm_password: {
          required: "Password Confirmation should be matched"
        },
        email: {
          required: "We need your email address to contact you",
          remote: "The email has been taken",
        }
      }

    });
});