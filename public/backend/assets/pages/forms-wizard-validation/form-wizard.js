"use strict";
$(document).ready(function() {
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
  // $('#date,#datejoin').bootstrapMaterialDatePicker({
  //        time: false,
  //        clearButton: true
  //    });
  //  $("#example-date-inputS").bootstrapMaterialDatePicker({
  //                time: false,
  //                clearButton: true
  //            });

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
          data: form.serialize(), // serializes the form's elements.
          success: function(response) {
            // console.log(response.message[error]);
            if (response.validation_error) {
              alert("in");
              for (var msg in response.message) {
                alert(response.message[msg][0]);
                // notify(response.message[msg][0], "inverse");
              }
            } else {
              notify(response);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            // var message = JSON.parse(xhr.responseJSON.message);
            // for (var msg in message) {
            //   notify(message[msg][0], "inverse");
            // }
          }
        });

        event.preventDefault(); // avoid to execute the actual submit of the form.

        alert("Submitted!");

        // var username = $('.content input[name="name"]').val();
        // var email = $('.content input[name="email"]').val();
        // var password = $('.content input[name="password"]').val();
        // var first_name = $('.content input[name="first_name"]').val();
        // var last_name = $('.content input[name="last_name"]').val();
        // var country = $('.content input[name="country"]').val();
        // var address_1 = $('.content input[name="address_1"]').val();
        // var address_2 = $('.content input[name="address_2"]').val();
        // var phone = $('.content input[name="phone"]').val();
        // var mobile = $('.content input[name="mobile"]').val();
        // var job_title = $('.content input[name="job_title"]').val();
        // var bio = $('.content input[name="bio"]').val();
        // var family_details = $('.content input[name="family_details"]').val();
        // var gender = $('.content input[name="gender"]').val();
        // var education = $('.content input[name="education"]').val();
        // var family_details = $('.content input[name="family_details"]').val();
        // var dob = $('.content input[name="dob"]').val();
        // var profile_pic = $('.content input[name="profile_pic"]').val();
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
