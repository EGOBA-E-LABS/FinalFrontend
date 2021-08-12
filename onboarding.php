<?php
  include('header.php');
?>
          <div class="col col-md-3 col-sm-12" id="cahead">

              <a href="login.php"><p class="text-right">Log in</p></a>

              <!-- carousel -->
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="3000">
                    <img src="assets/img/c1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>Find foods you love</h5>
                      <p>Discover the best foods from over 1,000 restaruants.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-interval="3000">
                    <img src="assets/img/c2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>Fast Delivery</h5>
                      <p>Fast delivery to your home, office and wherever you are.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-interval="3000">
                    <img src="assets/img/c3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                      <h5>Live Tracking</h5>
                      <p>Real time tracking of your food on the app after ordered.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- carousel -->
          

          <!-- button -->

          <button class="btn btn-pink btn-block">Create Account</button>
          <button class="btn btn-grey btn-block"><i class="fa fa-facebook" aria-hidden="true"></i> Continue with Facebook</button>

          <!-- button -->

          </div>

<?php
  include('footer.php');
?>