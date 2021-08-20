<?php
	include('header.php');
?>

<main class="content">
  <div class="row m-0 p-0 fixed-top res-title shadow" id="fixedtitle">

    <div class="col-12 col-md-12">
      <div class="d-flex align-items-start flex-row">
        <div class="mr-auto p-2">
          <a href="home.php"><i class="fas fa-angle-left fa-2x black"></i></a>
        </div>
        <div class="p-2 mr-auto my-auto">
          <h5 class="text-center d-flex-grow-1"> Really Cool </h5>
        </div>
        <div class="p-2">
          <i class="fas fa-heart text-colored fa-2x align-items-end"></i>
        </div>
      </div>
    </div>
  </div>

  
  <div class="row m-0 p-0 collection-header">
    <div class="col-12 col-md-12 collection-img">
      <img src="assets/img/burger.png" class="img-fluid d-block px-0 mx-auto">
      <div class="d-flex align-items-start flex-column overlap-head" style="height: 225px;">
        <div class="mb-auto"><a href="home.php"><i class="fas fa-angle-left fa-2x pt-3"></i></a></div>
        <div class="pb-2 ml-auto btn btn-white d-flex align-items-start px-5">20-30 mins</div>
      </div>
    </div>
  </div>

  <!-- outside cover-->
  <div class="row pb-4 m-0 mt-n5 p-0 collection-container">
    <div class="col-9 col-md-10 col-lg-11 pt-3 text-muted heading1">
      <h3 class="text-colored"> Really Cool</h3>
    </div>
      <div class="col-3 col-md-2 col-lg-1 pt-3 pl-4 heading2">
        <i class="fas fa-heart text-colored fa-2x pl-4"></i>
      </div>
 
    <div class="col-12 col-md-12 col-lg-12 pt-5">
      <div class="primary-color">
        <span class="text-colored">
          <i class="fa fa-star"></i> 4.9
        </span>
        <span class="text-mutedpr-2">
          (124 rating) 
        </span> 
        <span class="pr-2">
          Burger
        </span>
        <span class="pr-2">
          Western Food
        </span>
        <span>
          $$$
        </span>
      </div>
      <div class="primary-color">
        <i class="fa fa-map-marker text-colored pr-1"></i>
        <span class="text-muted">456 Jamal, kathamandu Nepal</span>
      </div>
    </div>
    
  </div>

<!-- Menu -->
  <div class="row m-0 p-0 res-menu pb-3">
    <div class="col-12 col-md-12 pl-4 pr-0 m-0 py-2">
    <b>Popular Choices</b>
      <section class="h-slider">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="img-container-small d-flex align-items-center justify-content-center">
              <img src="assets/img/offer.png">
            </div>
            <p>Offers</p>
          </div>
        </div>
      </section>
    </div>
</div>

  <form class="row mx-auto menu-list pb-3" method="POST" action="test.php">
        <div class="col-12 col-md-12 px-1">
            <h6 class="pl-4">Starter</h6>
        </div>
        <!-- Menu Item 1 -->
        <div class="col-12 col-md-4 pb-3">
          <input id="frenchfries" type="checkbox" value="French Fries" name="menu[]"/>
          <label for="frenchfries" class="p-4">
            <div class="d-flex row">
              <div class="flex-grow-1 pl-2 mr-4 menu-item">
                <h5>French Fries</h5>
                  <p>
                    <small class="text-muted pr-1">Fried Half Boiled Potatoes served with Cocktail Sauce</small>
                  </p>
              </div>
              <div class="d-flex flex-column icon-col">
                <div class="p-2 ml-5">
                  $15
                </div>
                <div class="p-2 ml-auto text-colored"><i class="fa fa-star"></i>Popular</div>
              </div>
            </div>
          </label>
        </div>
        <!-- Menu Item 1 -->

        <!-- Menu Item 2 -->
        <div class="col-12 col-md-4 pb-3">
          <input id="potatowedges" type="checkbox" value="Potato Wedges" name="menu[]" />
          <label for="potatowedges" class="p-4">
            <div class="d-flex row">
              <div class="flex-grow-1 pl-2 menu-item mr-4">
                <h5>Potato Wedges</h5>
                  <p>
                    <small class="text-muted pr-1">Baked Half Fried Potatoes with skin served with Cocktail Sauce</small>
                  </p>
              </div>
              <div class="d-flex flex-column icon-col">
                <div class="p-2 ml-5">
                  $15
                </div>
                <div class="p-2 ml-auto text-colored"><i class="fa fa-star"></i>Popular</div>
              </div>
            </div>
          </label>
        </div>
        <!-- Menu Item 2 -->

        <!-- Menu Item 2 -->
        <div class="col-12 col-md-4 pb-3">
          <input id="potatowedges" type="checkbox" value="Potato Wedges" name="menu[]" />
          <label for="potatowedges" class="p-4">
            <div class="d-flex row">
              <div class="flex-grow-1 pl-2 menu-item mr-4">
                <h5>Potato Wedges</h5>
                  <p>
                    <small class="text-muted pr-1">Baked Half Fried Potatoes with skin served with Cocktail Sauce</small>
                  </p>
              </div>
              <div class="d-flex flex-column icon-col">
                <div class="p-2 ml-5">
                  $15
                </div>
                <div class="p-2 ml-auto text-colored"><i class="fa fa-star"></i>Popular</div>
              </div>
            </div>
          </label>
        </div>
        <!-- Menu Item 2 -->

        <!-- Menu Item 2 -->
        <div class="col-12 col-md-4 pb-3">
          <input id="potatowedges" type="checkbox" value="Potato Wedges" name="menu[]" />
          <label for="potatowedges" class="p-4">
            <div class="d-flex row">
              <div class="flex-grow-1 pl-2 menu-item mr-4">
                <h5>Potato Wedges</h5>
                  <p>
                    <small class="text-muted pr-1">Baked Half Fried Potatoes with skin served with Cocktail Sauce</small>
                  </p>
              </div>
              <div class="d-flex flex-column icon-col">
                <div class="p-2 ml-5">
                  $15
                </div>
                <div class="p-2 ml-auto text-colored"><i class="fa fa-star"></i>Popular</div>
              </div>
            </div>
          </label>
        </div>
        <!-- Menu Item 2 -->

        <!-- Menu Item 2 -->
        <div class="col-12 col-md-4 pb-3">
          <input id="potatowedges" type="checkbox" value="Potato Wedges" name="menu[]" />
          <label for="potatowedges" class="p-4">
            <div class="d-flex row">
              <div class="flex-grow-1 pl-2 menu-item mr-4">
                <h5>Potato Wedges</h5>
                  <p>
                    <small class="text-muted pr-1">Baked Half Fried Potatoes with skin served with Cocktail Sauce</small>
                  </p>
              </div>
              <div class="d-flex flex-column icon-col">
                <div class="p-2 ml-5">
                  $15
                </div>
                <div class="p-2 ml-auto text-colored"><i class="fa fa-star"></i>Popular</div>
              </div>
            </div>
          </label>
        </div>
        <!-- Menu Item 2 -->

        <div class="col-12 col-md-12 fixed-bottom fixed-checkout pb-2 pt-1">
            <div class="d-flex align-items-center">
                <button class="btn btn-pink-col px-5 mx-auto" type="submit" name="btn_add_to_cart">
                Add to basket               
                </button>      
            </div>      
        </div>
    </form>
<!-- Menu -->

</main>	

<?php
	include('footer.php');
?>