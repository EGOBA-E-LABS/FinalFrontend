<?php
  include('header.php');
?>

        <div class="hmform">

          <section class="back-cta">
                <a href="onboarding.php"><i class="fa fa-angle-left fa-2x"></i></a>
          </section>

          <section class="title">
            <div class="col col-md-12 col-sm-12 login-title">
                <h5> Log in to</h5>
            </div>    
          </section>

          <section class="form">
            <div class="col col-md-12 col-sm-12 login-form">
            <form method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <a href="pwreset.php"><p class="fp"> Forgot Password? </p></a>
              <button type="submit" class="btn btn-pink btn-block">Log in</button>
            </form>
            </div>
          </section>  

          <section class="bottom-cta">
            <div class="col col-md-12 col-sm-12 login-footer">
              <p class="text-center">
                Don't have an account?  <a href="registration.php">Sign up</a>
              </p>
            </div>
          </section>

          </div>
          
<?php
  include('footer.php');
?>