<?php
  include('header.php');
?>

        <div id="loginform">

          <div class="row">
            <div class="col" id="login-head">
                <a href="login.php"><i class="fa fa-angle-left fa-2x"></i></a>
            </div>
          </div>

          <div class="row header">
            <div class="col col-md-12 col-sm-12" id="login-title">
                <h5> Create your</h5>
            </div>    
          </div>

          <div class="row">
            <div class="col col-md-12 col-sm-12" id="login-form">
            <form method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
              </div>
              <button type="submit" class="btn btn-pink btn-block">Sign up</button>
              <p id="tc-text">By clicking Sign up you agree to our <a href="pwreset.php">Terms and Conditions </p></a>
            </form>
            </div>
          </div>  

          <div class="row">
            <div class="col col-md-12 col-sm-12" id="login-footer">
              <p class="text-center">
                Already an account?  <a href="login.php">Log in</a>
              </p>
            </div>
          </div>

          </div>

        </div>
<?php
  include('footer.php');
?>