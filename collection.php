<?php
	include('header.php');
?>

<main class="content">

  <div class="row m-0 p-0 collection-header">
    <div class="col-12 col-md-12 collection-img">
      <img src="assets/img/burger.png" class="img-fluid d-block px-0 mx-auto">
      <div class="d-flex align-items-start flex-column overlap-head" style="height: 245px;">
        <div class="mb-auto"><i class="fas fa-angle-left fa-2x pt-3"></i></div>
        <div class="pb-2"><h2>Burgers</h2></div>
      </div>
    </div>
  </div>

  <!-- outside cover-->
  <div class="row pb-4 m-0 mt-n5 p-0 collection-container">
    <div class="col-9 col-md-10 col-lg-11 pt-3 text-muted">
      128 restaurants
    </div>
      <div class="col-3 col-md-2 col-lg-1 pt-3 pl-4">
        <i class="fas fa-align-left text-colored fa-2x pl-4"></i>
      </div>
  </div>
  <!-- outside cover end -->

  <!-- inside card -->
  <div class="row m-0 p-0">
    <!-- card 1 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="d-flex card-col p-2 mb-3">
        <div class="align-self-center">
          <div class="img-container-small-col py-auto">
            <img src="assets/img/burger.png" alt="...">  
          </div>
        </div>
        <div class="flex-grow-1 pl-2" data-toggle="collapse" data-target=".collapseprofile">
          <h5>Buger Queen</h5>
            <p>
              <small class="text-muted pr-1">Cafe</small>
              <small class="text-muted pr-1">Western Food</small>
              <small class="text-muted">$$</small>
            </p>
            <span class="text-colored">
              <i class="fa fa-star pr-2"></i>4.9 
              <small class="text-muted"> (124 ratings)</small>
            </span> 
        </div>
        <div class="d-flex flex-column icon-col">
          <div class="p-2 ml-auto">
              <i class="far fa-heart"></i>
              <!-- <i class="fas fa-heart red"></i> -->
          </div>
          <div class="p-2"><button class="btn-pink-col px-2">Offer</button></div>
        </div>
      </div>
    </div>
    <!-- card 1 end -->

    <!-- card 2 favourite added -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="d-flex card-col shadow p-2 mb-3">
        <div class="align-self-center">
          <div class="img-container-small-col py-auto">
            <img src="assets/img/burger.png" alt="...">  
          </div>
        </div>
        <div class="flex-grow-1 pl-2" data-toggle="collapse" data-target=".collapseprofile">
          <h5>Buger Queen</h5>
            <p>
              <small class="text-muted pr-1">Cafe</small>
              <small class="text-muted pr-1">Western Food</small>
              <small class="text-muted">$$</small>
            </p>
            <span class="text-colored">
              <i class="fa fa-star pr-2"></i>4.9 
              <small class="text-muted"> (124 ratings)</small>
            </span> 
        </div>
        <div class="d-flex flex-column icon-col">
          <div class="p-2 ml-auto">
              <!-- <i class="far fa-heart"></i> -->
              <i class="fas fa-heart red"></i>
          </div>
          <div class="p-2"><button class="btn-pink-col px-2">Offer</button></div>
        </div>
      </div>
    </div>
    <!-- card 2 end favourite added-->

    <!-- card 3 No offer-->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="d-flex card-col p-2 mb-3">
        <div class="align-self-center">
          <div class="img-container-small-col py-auto">
            <img src="assets/img/burger.png" alt="...">  
          </div>
        </div>
        <div class="flex-grow-1 pl-2" data-toggle="collapse" data-target=".collapseprofile">
          <h5>Buger Queen</h5>
            <p>
              <small class="text-muted pr-1">Cafe</small>
              <small class="text-muted pr-1">Western Food</small>
              <small class="text-muted">$$</small>
            </p>
            <span class="text-colored">
              <i class="fa fa-star pr-2"></i>4.9 
              <small class="text-muted"> (124 ratings)</small>
            </span> 
        </div>
        <div class="d-flex flex-column icon-col">
          <div class="p-2 ml-auto">
              <i class="far fa-heart"></i>
              <!-- <i class="fas fa-heart red"></i> -->
          </div>
          <!-- <div class="p-2"><button class="btn-pink-col px-2">Offer</button></div> -->
        </div>
      </div>
    </div>
    <!-- card 3 end No offer-->

    <!-- card 4 -->
    <div class="col-12 col-md-6 col-lg-4">
      <div class="d-flex card-col p-2 mb-3">
        <div class="align-self-center">
          <div class="img-container-small-col py-auto">
            <img src="assets/img/burger.png" alt="...">  
          </div>
        </div>
        <div class="flex-grow-1 pl-2" data-toggle="collapse" data-target=".collapseprofile">
          <h5>Buger Queen</h5>
            <p>
              <small class="text-muted pr-1">Cafe</small>
              <small class="text-muted pr-1">Western Food</small>
              <small class="text-muted">$$</small>
            </p>
            <span class="text-colored">
              <i class="fa fa-star pr-2"></i>4.9 
              <small class="text-muted"> (124 ratings)</small>
            </span> 
        </div>
        <div class="d-flex flex-column icon-col">
          <div class="p-2 ml-auto">
              <i class="far fa-heart"></i>
              <!-- <i class="fas fa-heart red"></i> -->
          </div>
          <div class="p-2"><button class="btn-pink-col px-2">Offer</button></div>
        </div>
      </div>
    </div>
    <!-- card 4 end -->
    
  </div>
  <!-- inside card end-->

</main>	

<?php
	include('footer.php');
?>