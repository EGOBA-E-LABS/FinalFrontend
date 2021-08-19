<?php 
include("header.php");
?>

<main class="myoffer">
    <!-- heading -->
    <div class="row mt-4 m-0">
        <div class="col-4 col-lg-5 col-md-5 pl-0">
            <a href="#"><i class="fas fa-angle-left fa-2x pl-3"></i></a>
        </div>

        <div class="col-6 col-lg-6  col-md-5 ml-2">
            My Order
        </div>

    </div>

    <!-- myorder card section -->
    <div class="row m-0 mt-3 p-0">
        <!-- card 1 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="d-flex  p-2 mb-3">
                <div class="align-self-center">
                    <div class="myorder-img-container py-auto">
                        <img src="assets/img/burger.png" alt="...">
                    </div>
                </div>
                <div class="flex-grow-1 pl-3">
                    <h5>Buger Queen</h5>
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
        <div class="col-12 col-md-6 col-lg-4">
            <div class="d-flex  p-2 mb-3">
                <div class="align-self-center">
                    <div class="myorder-img-container py-auto">
                        <img src="assets/img/burger.png" alt="...">
                    </div>
                </div>
                <div class="flex-grow-1 pl-3">
                    <h5>Buger Queen</h5>
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
    <div class="row m-0 p-0 fooditem">
        <div class="col-12 col-md-12">
            <div class="d-flex food py-3">
                <div class="flex-grow-1">
                    Classic Cheese burgers X 1
                </div>
                <div>
                    $16
                </div>
            </div>
            <div class="d-flex food py-3">
                <div class="flex-grow-1">
                    American Beef burgers X 1
                </div>
                <div>
                    $14
                </div>
            </div>
            <div class="d-flex food py-3">
                <div class="flex-grow-1">
                    Sweet Potato Chips X 1
                </div>
                <div>
                    $12
                </div>
            </div>
            <div class="d-flex food py-3">
                <div class="flex-grow-1">
                    chiken Wings Basket X 1
                </div>
                <div>
                    $12
                </div>
            </div>
            <div class="d-flex food py-3 text-colored noborder">
                <div class="flex-grow-1">
                    Add more foods
                </div>

            </div>

        </div>
    </div>

    <!-- cost and delivery section -->

    <div class="row m-0 p-0 delivery">
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
                    
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    
                </div>
        </div>
        <div class="col-12 ">
            <div class="d-flex  pt-3">
                <div class="flex-grow-1">
                    Sub-total
                </div>

                <div>
                    <strong>$64</strong>
                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="d-flex food py-0">
                <div class="flex-grow-1">
                    Delivery cost
                </div>

                <div>
                    <strong>Free</strong>
                </div>
            </div>
        </div>


    </div>

    <div class="row  p-0 m-0 my-5">
        <div class="col ">
            <a href="checkout.php"><button class="btn checkout-btn">Checkout</button></a>

        </div>

    </div>


    <!-- <a href="#" ><button class=" checkout-btn  ">Checkout</button></a> -->

</main>





<?php
include("footer.php");
?>