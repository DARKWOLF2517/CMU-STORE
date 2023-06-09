<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="/css/stylesheet.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-4 p-md-5">
          <h3 class="text-center mb-4">CMU-STORE-AMS</h3>

          <form action="#" class="login-form">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
                <input type="text" class="form-control rounded-left" placeholder="Username" required="">
              </div>
            </div>
            <div class="form-group d-flex">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
                <input type="password" class="form-control rounded-left" placeholder="Password" required="">
              </div>
            </div>
            <div class="form-group d-md-flex">
              <div class="w-50">
                <label>
                  <input type="checkbox" checked="">
                  Remember Me
                </label>
              </div>
              <div class="w-50 text-md-right">
                <a href="#">Forgot Password</a>
              </div>
            </div>
            <div class="form-group text-right">
              <button type="submit" class="btn btn-primary rounded submit">Log In</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
