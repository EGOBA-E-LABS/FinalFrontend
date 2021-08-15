<?php
  include('header.php');
?>

<main class="content">
  <div class="row m-0 p-2">
  
    <div class="back-cta col-12 col-md-12 pt-2 pb-3">
      <a href="onboarding.php"><i class="fas fa-angle-left fa-2x"></i></a>
    </div>

    <div class="text-colored col-12 col-md-12 pb-5 px-4">
      <h4> Log in to</h4>
    </div>    

    <div class="col-12 col-md-12 px-4">
      <form method="post" action="home.php">
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <a href="pwreset.php"><p class="fp"> Forgot Password? </p></a>
        <button type="submit" class="btn btn-pink btn-block">Log in</button>
      </form>
    </div>

    <div class="col-12 col-md-12 p-0 m-0 form-footer">
      Don't have an account? <a href="registration.php">Sign up</a>
    </div>

  </div>
</main>
          
<?php
  include('footer.php');
?>