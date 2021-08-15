<?php
  include('header.php');
?>

<main class="content">
  <div class="row m-0">
    <div class="main-content col-12 col-md-3 col-sm-12 mx-auto">
      <a href="login.php" class="d-block text-right text-colored h5 pt-3">Log in</a>

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
                <img src="assets/img/c1.png" class="img-fluid img-carousel-main" alt="...">
                <div class="carousel-caption d-md-block">
                  <h5>Find foods you love</h5>
                  <p class="w-75 mx-auto my-0 text-muted">Discover the best foods from over 1,000 restaruants.</p>
                </div>
              </div>
              <div class="carousel-item" data-interval="3000">
                <img src="assets/img/c2.png" class="img-fluid img-carousel-main" alt="...">
                <div class="carousel-caption d-md-block">
                  <h5>Fast Delivery</h5>
                  <p class="w-75 mx-auto my-0 text-muted">Fast delivery to your home, office and wherever you are.</p>
                </div>
              </div>
              <div class="carousel-item" data-interval="3000">
                <img src="assets/img/c3.png" class="img-fluid img-carousel-main" alt="...">
                <div class="carousel-caption d-md-block">
                  <h5>Live Tracking</h5>
                  <p class="w-75 mx-auto my-0 text-muted">Real time tracking of your food on the app after ordered.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- carousel -->
        </section>

        <!-- button -->
        <section class="buttons carsoual-main">
          <a href="registration.php" class="btn btn-pink btn-block">
            Create Account
          </a>
          <a href="" class="btn btn-grey btn-block">
              <i class="fab fa-facebook-f"></i> 
              <span class="ml-2">Continue with Facebook</span>
          </a>
          <a href="" class="btn btn-grey btn-block">
              <i class="fab fa-google"></i> 
              <span class="ml-2">Continue with Gmail</span>
          </a>
        </section>
      <!-- button -->
    </div>
  </div>
</main>
<?php
  include('footer.php');
?>