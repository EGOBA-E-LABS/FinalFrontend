<?php
  include('header.php');
?>

<main class="content">
  <div class="row m-0 p-2">

    <div class="back-cta col-12 col-md-12 pt-2 pb-3">
      <a href="onboarding.php"><i class="fas fa-angle-left fa-2x"></i></a>
    </div>

    <div class="text-colored col-12 col-md-12 pb-5 px-4">
      <h4> Forgot Password</h4>
      <span class="text-muted">Please enter your email to receive a link to create a new password via email.</span>
    </div>

    <div class="col-12 col-md-12 px-4">
      <form method="post">
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email">
        </div>
        <button type="submit" class="btn btn-pink btn-block">Send</button>
      </form>
    </div>
         
  </div>
</main>

<?php
  include('footer.php');
?>