<?php require_once './session/checkSession.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
<?php require_once './head-link.php'; ?>
</head>

<body>
  <div class="container-fluid ">
    <div class="row d-flex align-items-center justify-content-center" style="height:100vh;">
      <div class="col-md-6">
        <div class="card p-4">
          <div class="card-body">
            <div class="card-title text-center mb-4 text-primary">
              Login
            </div>
            <form action="" method="POST" id="sign_up" name="sign_up">
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="col-sm-1">
                  <a href="#" id="showPassword">
                    <img src="./assets/images/show-password.png" style="height: 18px; width: 18px;" /></a>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-sm-4">
                Don't have account ?
                  <a href="./signup"> Register here</a>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-sm-3">
                  <button class="btn btn-primary form-control submit-btn"
                    name="submitBtn" id="submitBtn">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/js/login.js"></script>
  <script src="./assets/js/show-password.js"></script>
</body>

</html>