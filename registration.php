<?php
  include('header.php');
?>

        <div class="hmform">

          <section class="back-cta">
                <a href="login.php"><i class="fa fa-angle-left fa-2x"></i></a>
          </section>

          <section class="title">
            <div class="col-md-12 col-sm-12 login-title">
                <h5> Create your</h5>
            </div>    
          </section>

          <section class="form">
            <div class="col col-md-12 col-sm-12 login-form">
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
              <small id="passwordHelpBlock" class="termsnconditions form-text text-muted">By clicking Sign up you agree to our <a href="#">Terms and Conditions</a> </small>
              
            </form>
            </div>
          </section>  

          <section class="bottom-cta">
            <div class="col col-md-12 col-sm-12 login-footer">
              <p class="text-center">
                Already an account?  <a href="login.php">Log in</a>
              </p>
            </div>
          </section>

        </div>
<?php
  include('footer.php');
?>