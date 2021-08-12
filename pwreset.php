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
                <h5> Forgot Password</h5>
                <span>Please enter your email to receive a link to create a new password via email.</span>
            </div>    
          </div>

          <div class="row">
            <div class="col col-md-12 col-sm-12" id="login-form">
            <form method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
            
              <button type="submit" class="btn btn-pink btn-block">Send</button>
            </form>
            </div>
          </div>  

          </div>

        </div>
<?php
  include('footer.php');
?>