<?php
   require_once __DIR__.'./session/checkSession.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>sign up</title>
  <?php
    require_once './head-link.php';
  ?>
</head>

<body>
  <div class="container-fluid ">
    <div class="row d-flex align-items-center justify-content-center" style="height:100vh;">
      <div class="col-md-6">
        <div class="card p-4">
          <div class="card-body">
            <div class="card-title text-center mb-4 text-primary">
              Register
            </div>
            <form action="" method="POST" id="sign_up" name="sign_up">
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
              </div>

              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <textarea name="address" class="form-control" id="address" cols="10" rows="4" placeholder="Address"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="phone_number" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone number">
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="col-sm-1">
                  <a href="#" id="showPassword">
                    <img src="./assets/images/show-password.png" style="height: 18px;
    width: 18px;" /></a>
                </div>
              </div>

              <div class="form-group row">
                <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                  <input type="checkbox" class="form-check-input" id="tos" name="tos">
                  <label class="form-check-label" for="tos">I agree all statements in Terms of service.</label>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-sm-6">
                Already have account ?
                  <a href="./"> Login here</a>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-sm-3">
                  <button class="btn btn-primary form-control submit-btn" name="submitBtn" id="submitBtn">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/js/register.js"></script>
  <script src="./assets/js/show-password.js"></script>
</body>

</html>