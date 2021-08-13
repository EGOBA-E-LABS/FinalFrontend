<?php
  include('header.php');
?>

    <div class="home">

        <section class="title text-muted small mt-3 ml-4">
          Delivering to          
        </section>

        <section class="sub-title my-2 ml-4">
          Current Location         
        </section>

        <section class="bar ml-4 mb-4">
            <button class="searchbtn col-2 col-md-1"><i class="fa fa-search"></i></button>
            <input type="text" class="searchbar col-8 col-md-10 ml-n1" name="search" Placeholder="Search">
            <i class="fa fa-bars ml-4"></i>
        </section>

        <section class="h-slider ml-4">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="assets/img/box.png" alt="">
                    <p>test</p>
                </div>
                <div class="item">
                    <img src="assets/img/box.png" alt="">
                    <p>test</p>
                </div>
                <div class="item">
                    <img src="assets/img/box.png" alt="">
                    <p>test</p>
                </div>
                <div class="item">
                    <img src="assets/img/box.png" alt="">
                    <p>test</p>
                </div>
          </section>

          <section class="bottom-card col-12 col-md-3 mx-auto">

            <div class="card mb-3 mx-4 my-2">
              <img class="card-img-top" src="assets/img/cardimg.png" alt="Card image cap">
              <button>asdjk</button>
                <div class="card-body">
                  <h5 class="card-title"><b>Hollywood Starz Cafe</b></h5>
                    <span class="primary-color"><i class="fa fa-star"></i>&nbsp;4.9</span><span class="card-text">
                      <small class="text-muted">&nbsp;&nbsp;Last updated 3 mins ago</small></span>
                </div>
            </div>

          </section>

        </div>

    </div>
    
<?php
  include('footer.php');
?>