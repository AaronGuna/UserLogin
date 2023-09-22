<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Register Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"  />
</head>
<body>
  <div class="container mt-5">
    <h2>My Account</h2>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3>Login</h3>
          </div>
          <div class="card-body">
            <form method="post" action="actionlogin.php">
              <div class="form-group">
                <label for="email">Email address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password <span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <button type="submit" name="login" class="btn btn-light">LOGIN</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3>Register</h3>
          </div>
          <div class="card-body">
            <form method="post" action="actionregister.php">
              <div class="form-group">
                <label for="email">Email address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password <span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <button type="submit" name="register" class="btn btn-light">REGISTER</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
