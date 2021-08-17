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
          <div class="input-group">
            <input type="password" class="form-control password" placeholder="Password">
            <div class="input-group-append">
              <a href="pwreset.php" class="input-group-text bg-transparent border-left-0 text-colored forgot-pass">Forgot?</a>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-pink btn-block btn-form">Log in</button>
      </form>
    </div>

    <div class="col-12 col-md-12 p-0 m-0 pb-1 text-center form-footer fixed-bottom">
      Don't have an account? <a href="registration.php">Sign up</a>
    </div>

  </div>
</main>
          
<?php
  include('footer.php');
?>