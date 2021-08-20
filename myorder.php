<?php 
include("header.php");
?>

<main class="content">
    <!-- heading -->
    <div class="row mt-4 m-0 p-0">
        <div class="col-4 col-lg-5 col-md-5 pl-0 back-cta">
            <a href="#"><i class="fas fa-angle-left fa-2x pl-3"></i></a>
        </div>
        <div class="col-6 col-lg-6 col-md-5 ml-2">
            My Order
        </div>
    </div>

    <!-- myorder card section -->
    <div class="row m-0 mt-3 p-0">
        <!-- card 1 -->
        <div class="col-12 col-md-12 col-lg-12">
            <div class="d-flex  p-2 mb-3">
                <div class="align-self-center">
                    <div class="myorder-img-container py-auto">
                        <img src="assets/img/burger.png" alt="...">
                    </div>
                </div>
                <div class="flex-grow-1 pl-3">
                    <h5>Burger Queen</h5>
                    <p>
                        <small class="text-muted pr-1">Cafe</small>
                        <small class="text-muted pr-1">Western Food</small>
                        <small class="text-muted">$$</small>
                    </p>
                    <span class="text-colored d-block">
                        <i class="fa fa-star pr-2"></i>4.9
                        <small class="text-muted"> (124 ratings)</small>
                    </span>
                    <span class="text-colored ">
                        <i class="fas fa-map-marker-alt pr-2"></i>
                        <small class="text-muted">123 Rock Street, Newyork City</small>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <!-- myorder food items -->
    <form class="row m-0 p-0 px-2 form-group menu-group" method="POST" action="Test1.php">
        <div class="col-12 col-md-12 fooditem food">
               <div class="d-flex flex-row mb-3 menus">
                  <div class="flex-grow-1">
                      <input type="text" name="menu-item" value="Classic Cheese Burger" class="form-control text-left p-0 m-0" readonly>
                  </div>
                  <div class="m-0 pl-auto">
                    <input type="text" name="rate" value="$12" class="form-control p-0 m-0 rate" size="3" readonly>
                  </div>
              </div>
        </div>

        <div class="col-12 col-md-12 text-colored noborder fooditem py-3">
            <a href="">
                Add more foods
            </a>
        </div>
  
        <div class="col-12 ">
            <div class="d-flex food py-3">
                <div class="flex-grow-1">
                    Delivery instructions
                </div>
                <div class="text-colored addnote-btn" data-toggle="collapse" data-target="#collapseaddnote">
                        Add notes <i class="fa fa-plus"></i>
                </div>
                
            </div>
            <div class="collapse  mt-3" id="collapseaddnote">
                    
            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3"></textarea>
                    
                </div>
        </div>
        <div class="col-12 ">
            <div class="d-flex  pt-3">
                <div class="flex-grow-1">
                    Sub-total
                </div>

                <div class="pl-auto">
                    <strong><input type="text" class="form-control" name="sub-total" value="$12.00" size="4" readonly></strong>
                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="d-flex food py-0">
                <div class="flex-grow-1">
                    Delivery cost
                </div>

                <div>
                    <strong><input type="text" class="form-control" name="delivery" value="Free" size="2" readonly></strong>
                </div>
            </div>
        </div>
        <div class="col-12 py-4">
            <button class="btn checkout-btn" type="submit" name="btn_checkout">Checkout</button>
        </div>

    </form>

</main>





<?php
include("footer.php");
?>