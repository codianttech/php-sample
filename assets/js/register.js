$(document).ready(function() {
    $.validator.addMethod("passwordStrength", function(value, element) {
      // Require at least one lowercase letter, one uppercase letter, one digit, and one special character
      return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/.test(value);
    }, "Password must include at least one lowercase letter, one uppercase letter, one digit, and one special character");

    $("#sign_up").validate({
      rules: {
        name: {
          required: true,
          minlength: 2,
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 8,
          maxlength: 15,
          passwordStrength: true,
        },
        password_confirmation: {
          equalTo: "#password"
        },
        address: {
          minlength: 5,
          maxlength: 150
        },
        phone_number: {
          required: true,
          digits: true,
          rangelength: [10, 12]
        },
        tos: {
          required: true
        },

      },
      messages: {
        name: {
          required: "Please enter your name.",
          min: "Name must be at least 2 characters long"
        },
        email: {
          required: "Please enter your email.",
          email: "Please enter a valid email address."
        },
        password: {
          required: "Please enter password.",
          minlength: "Password must be at least 8 characters long",
          maxlength: "Password must not exceed 15 characters",
        },
        password_confirmation: {
          equalTo: "Please enter same password again",
        },
        address: {
          minlength: "Address must be at least 5 characters long",
          maxlength: "Address must not exceed 150 characters",
        },
        phone_number: {
          required: "Please enter phone number",
          digits: "Please enter phone number in digits only",
          rangelength: "Please enter phone number between 10 to 12 digit"
        },
        tos: {
          required: "Please accept terms and conditions"
        },
      },
      submitHandler: function(form, e) {
        e.preventDefault();
        var formData = $('#sign_up').serialize();
        $.ajax({
          url: "./src/register",
          type: "POST",
          data: formData,
          success: function(response) {
            response = JSON.parse(response);
            console.log(response);
            if (response.status) {
              swal("", response.message, "success");
              setTimeout(function() {
                location.href = "./";
              }, 700);
            } else {
              swal("", response.message, "error");
            }
          }
        });
      }
    });
  })