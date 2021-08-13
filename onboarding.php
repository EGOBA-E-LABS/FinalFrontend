<?php
  include('header.php');
?>
<main class="content">
  <div class="container-fluid">
    <div class="row"></div>
  </div>
    <div class="main-content cahead col-12 col-md-3 col-sm-12 mx-auto">

    <a href="login.php"><p class="text-right">Log in</p></a>

    <!-- carousel -->
    <section class="carousel">

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="3000">
            <img src="assets/img/c1.png" class="img-fluid" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Find foods you love</h5>
              <p>Discover the best foods from over 1,000 restaruants.</p>
            </div>
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="assets/img/c2.png" class="img-fluid " alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Fast Delivery</h5>
              <p>Fast delivery to your home, office and wherever you are.</p>
            </div>
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="assets/img/c3.png" class="img-fluid" alt="...">
            <div class="carousel-caption d-md-block">
              <h5>Live Tracking</h5>
              <p>Real time tracking of your food on the app after ordered.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- carousel -->
    </section>

    <!-- button -->
    <section class="buttons carsoual-main">
      <a href="registration.php"><button class="btn btn-pink btn-block">Create Account</button></a>
      <a href=""><button class="btn btn-grey btn-block"><i class="fa fa-facebook" aria-hidden="true"></i> Continue with Facebook</button></a>
      <a href=""><button class="btn btn-grey btn-block"><i class="fa fa-google" aria-hidden="true"></i> Continue with Gmail</button></a>
    </section>
    <!-- button -->

  </div>
</main>
<?php
  include('footer.php');
?>