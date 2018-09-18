"use strict";
$(document).ready(function() {
  //validation error status code
  const validation_status_code = 422;
  const error_message = "Oops! Something went wrong. Please try again later.";
  const insert_message = "Successfully Inserted";
  const debugging = true;
  const notify_style = "inverse";

  function notify(message, type) {
    $.growl(
      {
        message: message
      },
      {
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
      }
    );
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
      onStepChanging: function(event, currentIndex, newIndex) {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex) {
          return true;
        }
        // Forbid next action on "Warning" step if the user is to young
        if (newIndex === 3 && Number($("#age-2").val()) < 18) {
          return false;
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
      onStepChanged: function(event, currentIndex, priorIndex) {
        // Used to skip the "Warning" step if the user is old enough.
        if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
          form.steps("next");
        }
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3) {
          form.steps("previous");
        }
      },
      onFinishing: function(event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
      },
      onFinished: function(event, currentIndex) {
        var form = $(this);
        var url = $('.content input[name="ajax_url"]').val();
        var data = form.serialize();
        var form_action = $('.content input[name="form_action"]').val();
        $.ajax({
          type: "POST",
          url: url,
          dataType: "json",
          data: form.serialize(), // serializes the form's elements.
          success: function(response) {
            var json_response = JSON.parse(response);
            // status code for validation
            if (json_response.statuscode == validation_status_code) {
              for (var errors in json_response.message)
                notify(json_response.message[errors], notify_style);
            } else {
              window.location.href = "user/view/".response.data.id;
              alert(window.location.href);
              notify(json_response.message, notify_style);
              console.log(json_response.data);
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
        password: {
          equalTo: "#confirm_password"
        }
      }
    });
});