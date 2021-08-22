<?php
include("header.php");
?>

<main>
    <!-- top section -->
    <div class="row m-0 mt-3">
        <div class="col-1 pt-1 pl-1 pr-0">
            <a href=""><i class="fas fa-angle-left fa-2x"></i></a>

        </div>

        <div class="col-10 col-md-10 col-sm-10 pl-0">
            <div class="form-gorup" data-toggle="collapse" data-target="#searchbox">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text search-icon"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control search-bar" placeholder="Search">
                </div>
            </div>
        </div>

        <div class="col-1 p-0 pt-1">
            <i class="fas fa-times fa-2x"></i>
        </div>
    </div>

    <!-- search result section -->
    <div class="row m-0">
        <div class="col collapse"  id="searchbox">
            <div class="d-flex food py-2">
               <div class="flex-grow-1 ml-2">
                    <small>Starz Cafe</small>
               </div>

            </div>
            <div class="d-flex food py-2">
               <div class="flex-grow-1 ml-2">
                    <small>Blackstarz Coffee Shop</small>
               </div>

            </div>
            <div class="d-flex food py-2">
               <div class="flex-grow-1 ml-2">
                    <small>Starz Night Restaurant</small>
               </div>

            </div>
            <div class="d-flex food py-2">
               <div class="flex-grow-1 ml-2">
                    <small>Starz Pizza</small>
               </div>

            </div>

        </div>
    </div>

    <!-- recent search -->

    <div class="row pl-3 m-0">
        <div class="col-12 py-3">
            Recent search
        </div>

        <div class="col-12">
           <div class="d-flex food py-3">
               <div class="myorder-img-container">
                   <img src="assets/img/pizza.png" alt="">
               </div>

               <div class="flex-grow-1 pl-2">
                   <p class=" my-0"><Strong>Super Good Cafe</Strong></p>
                   <p class="text-muted my-0"><small>Cafe Western food</small></p>
                   <p class=""><span class="text-colored"><small><i class="fas fa-star"></i> 4.9</small></span> <span class="text-muted"><small>(124 ratings)</small></span></p>
               </div>

           </div>
           <div class="d-flex food py-3">
               <div class="myorder-img-container">
                   <img src="assets/img/pizza.png" alt="">
               </div>

               <div class="flex-grow-1 pl-2">
                   <p class=" my-0"><Strong>Awesome Black Smith</Strong></p>
                   <p class="text-muted my-0"><small>Cafe Western food</small></p>
                   <p class=""><span class="text-colored"><small><i class="fas fa-star"></i> 4.9</small></span> <span class="text-muted"><small>(124 ratings)</small></span></p>
               </div>

           </div>
        </div>

    </div>




</main>


<?php
include("footer.php");
?>