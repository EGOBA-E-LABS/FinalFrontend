<?php
include("header.php")
?>

<main>
    <!-- delivery time header -->
    <div class="trackorder row m-0 py-2 food">
        <div class="col-3">
            <a href="#"><i class="fas fa-angle-left fa-2x pl-3"></i></a>
        </div>
        <div class="col-6 text-center mb-3">
            Track your order
        </div>

        <div class="col-3 text-colored">
            Chat <i class="fas fa-comments"></i>
        </div>

        <div class="col-12">
            <p class="text-center mb-1"><small>Estimated Delivery Time</small> </p>
            <h4 class="text-colored text-center"><strong> 05:30 PM</strong></h4>
        </div>

    </div>
    <!--Rider detail  section  -->
    <div class="row torider m-0 mt-4">
        <div class="col-2 col-md-1 ml-4 to-img-container">
            <img class="px-0" src="assets/img/offer.png" wi alt="">
        </div>
        <div class="col-5 col-md-8">
            <p class="my-0"><small>Your Rider</small> </p>
            <p class="my-0"><strong>Jason Stroll</strong></p>
        </div>

        <div class="col-4  pr-0 col-md-2">
            <p class="text-colored my-0 ml-4 pl-4 "><small><i class="fas fa-star"></i> 4.9</small> </p>
            <p class="text-muted pl-3"> <small>(124 ratings)</small></p>
        </div>
    </div>

    <!-- progress bar -->
    <div class="row toprogress m-0 mt-4 py-4">
        <div class="col-12 pl-5">
            <div class="d-flex py-3">
                <div>
                    <i class="fas fa-circle vl"></i>
                </div>

                <div class="flex-grow-1 ml-4">
                    <small>Order Confirmed</small>
                </div>
            </div>

            <div class="d-flex py-3">
                <div>
                    <i class="fas fa-circle vl"></i>
                </div>

                <div class="flex-grow-1 ml-4">
                    <small>Preparing your order</small>
                </div>
            </div>

            <div class="d-flex py-3">
                <div>
                    <i class="fas fa-circle vl"></i>
                </div>

                <div class="flex-grow-1 ml-4">
                    <small>Order is ready at the restaurant</small>
                </div>
            </div>

            <div class="d-flex py-3">
                <div>
                    <i class="fas fa-circle vl active"></i>
                </div>

                <div class="flex-grow-1 ml-4  active">
                    <small>Rider is picking up your order</small>
                </div>
            </div>

            <div class="d-flex py-3">

                <div class="flex-grow-1 ml-4 pl-3 text-muted">
                    <small>Rider is nearby your place</small>
                </div>
            </div>


        </div>


    </div>

    <!-- button section -->

    <div class="col-12 my-5 ">

        <a href="checkout.php"><button class="btn oconfirm-btn btn-block">Cancel Your Order</button></a>

    </div>

<div class="row">
  <div class="span6">
    <div class="mycontent-left">
    </div>
  </div>
  <div class="span6">
    <div class="mycontent-right">
    </div>
  </div>
</div>

</main>

<?php
include("footer.php")
?>