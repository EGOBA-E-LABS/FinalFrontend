<?php
  include('header.php');
?>

        <div class="hmform">

          <section class="back-cta">
                <a href="login.php"><i class="fa fa-angle-left fa-2x"></i></a>
          </section>

          <section class="title mb-5">
            <div class="col-md-12 col-sm-12 login-title">
                <h5> Forgot Password</h5>
                <span>Please enter your email to receive a link to create a new password via email.</span>
            </div>    
          </section>

          <section class="pwresetform">
            <div class="col-md-12 col-sm-12 login-form">

            <form method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-pink btn-block">Send</button>
            </form>
            </div>
          </section>  

        </div>
<?php
  include('footer.php');
?>