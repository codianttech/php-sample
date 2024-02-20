$(document).ready(function() {
    $.validator.addMethod("passwordStrength", function(value, element) {
      // Require at least one lowercase letter, one uppercase letter, one digit, and one special character
      return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/.test(value);
    }, "Password must include at least one lowercase letter, one uppercase letter, one digit, and one special character");

    $("#sign_up").validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
        },

      },
      messages: {
        email: {
          required: "Please enter your email"
        },
        password: {
          required: "Please enter your password",
        },
      },
      submitHandler: function(form, e) {
        e.preventDefault();
        var formData = $('#sign_up').serialize();
        $.ajax({
          url: "./src/login",
          type: "POST",
          data: formData,
          success: function(response) {
            console.log(response);
            response = JSON.parse(response);
            console.log(response);
            if (response.status) {
              swal("", response.message, "success");
              setTimeout(function() {
                location.href = "./home";
              }, 700);
            } else {
              swal("", response.message, "error");
            }
          }
        });
      }
    });
    
  });