<?php
  include('header.php');
?>

<main class="content">
  <div class="row m-0 p-2">

    <div class="back-cta col-12 col-md-12 pt-2 pb-3">
      <a href="onboarding.php"><i class="fas fa-angle-left fa-2x"></i></a>
    </div>

    <div class="text-colored col-12 col-md-12 pb-5 px-4">
      <h4> Create your</h4>
    </div>   

    <div class="col-12 col-md-12 px-4">
      <form method="post" action="login.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Phone">
        </div>
        <button type="submit" class="btn btn-pink btn-block">Sign up</button>
        <small id="passwordHelpBlock" class="termsnconditions form-text text-muted text-center">By clicking Sign up you agree to our <a href="#">Terms and Conditions</a> </small>      
      </form>
    </div>
     
    <div class="col-12 col-md-12 p-0 m-0 form-footer text-center fixed-bottom pb-1">
      Already have an account? <a href="login.php">Log in</a>
    </div>
  </div>
</main>

<?php
  include('footer.php');
?>