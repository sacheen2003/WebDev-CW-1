<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<section class="bg" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="inner" style="margin-bottom:80px; background: hsla(0, 0%, 100%, 0.4); backdrop-filter: blur(3px); position:relative; top: 50px;">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="logo" >
                </div>

                <div style="position:relative; left: 42%; top: 3px; padding-top:40px">
                    <form method="post" action="action.php">

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11" s><b style="width=100px">Email Address</Address></b></label>
                      <input type="email" id="form2Example11" class="form-con"
                        placeholder="Enter Your Email Address" name="email"/>
                      
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22" ><b>Password</b></label>
                      <input type="password" id="form2Example22" class="form-con" placeholder="Enter Your Password" name="password"/>
                      
                    </div>

                    <div style="position:relative ; left:63px"><div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login" style="position:relative; left: 26px;">Login</button>
                      <div><a class="text-muted" href="#!" style="padding-left:63px;">Forgot password?</a></div>
                    </div></div>

                    <div style="position:relative; left:90px; margin-top:-42px;">
                      <div class="d-flex align-items-center justify-content-center pb-4" style="width: 231px;">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <a href="register.php" style="color: white">Register</a>
                      </div>
                    </div>

                  </form>
                </div>

              </div>
            </div>
            
          </div>
        </div>
    </div>
  </div>
</section>
</body>
</html>