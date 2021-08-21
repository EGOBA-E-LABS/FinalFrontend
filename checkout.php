<?php
include("header.php");
?>
<main>
    <!-- delivery address field -->
    <div class="checkout-addressfield" id="checkoutaddress">
        <div class="row mt-4 m-0 checkout-border-btm">
            <div class="col-4 col-lg-5 col-md-5 pl-0">
                <a href="#"><i class="fas fa-angle-left fa-2x pl-3"></i></a>
            </div>

            <div class="col-6 col-lg-6  col-md-5 ml-2">
                Checkout
            </div>

            <div class="col-12 mt-4">
                <p>Delivery Address</p>
            </div>

            <div class="col-9  col-lg-10 col-md-9 mb-4">
                <p>
                <h4>123 York StBrooklyn, NY 11201</h4>
                </p>
            </div>

            <div class="col-3 col-lg-2 col-md-3 text-colored pt-3">
                <a href="#"> Change</a>
            </div>

        </div>
    </div>

    <!-- Payment section -->


    <div class="row checkout-paymentfield checkout-border-btm pb-3 m-0 ">
        <div class="col-12 mt-3">
            <p>Payment Method</p>

        </div>

        <div class="col-12 my-1">
            <div class="card fooditem py-3">
                <div class="d-flex">
                    <div class=" pt-2 mx-2">
                        <img src="assets/img/visalogo.png" alt="">
                    </div class="flex-grow-1">
                    <p class="card-title pt-2">**** **** **** 1234</p>

                </div>


            </div>
        </div>

        <div class="col-12 ">
            <div class="card fooditem py-3">
                <div class="d-flex">
                    <div class=" pt-2 mx-2">
                        <img src="assets/img/maillogo.png" alt="">
                    </div class="flex-grow-1">
                    <h5 class="card-title pt-3">Jacky@gmail.com</h5>

                </div>


            </div>
        </div>
    </div>
    <!-- COUPON section -->
    <div class="coupon row m-0 my-3 checkout-border-btm pb-2">
        <div class="col-8 col-lg-10 col-md-9">
            Enter Coupon
        </div>
        <div class="col-4  col-lg-2 col-md-3 text-colored">
            <strong>HUNGRY10</strong>
        </div>
    </div>

    <!-- summary section -->
    <div class="row summary m-0">
        <div class="col-12">
            <div class="d-flex py-1">
                <div class="flex-grow-1">
                    Subtotal

                </div>
                <div>
                    <strong> $64.00</strong>
                </div>
            </div>
            <div class="d-flex py-1">
                <div class="flex-grow-1">
                    Delivery Cost

                </div>
                <div>
                    <strong> Free</strong>
                </div>
            </div>
            <div class="d-flex py-1 pb-3 checkout-border-btm-thin">
                <div class="flex-grow-1">
                    Discount

                </div>
                <div>
                    <strong> -$6.4</strong>
                </div>
            </div>
            <div class="d-flex py-1">
                <div class="flex-grow-1">
                    Total

                </div>
                <div class="text-colored">
                    <strong> $57.60</strong>
                </div>
            </div>
        </div>

    </div>

    <!-- button section -->

    <div class="row  p-0 m-0 my-5">
        <div class="col ">
           <!-- <a href="" id="toggle"><button class="btn checkout-btn" >Send Order</button></a>  -->
           <button class="btn checkout-btn"  id="toggle">Send Order</button>

        </div>

    </div>

    <!-- order confirm section -->
    <div class="row oconfirm m-0 " id="oconfirm" style="display:none;">
        <div class="col-12 col-md-12">
            <div class="d-flex-column mt-5">
                <div class="text-center">
                    <img src="assets/img/oconfirmimg.png" alt="">

                </div>

                <div class="col-8 mx-auto text-center  my-4">
                    <h5>Thank you for</h5>
                    <p>
                        <small class="text-muted">You can track the delivery in the "Orders" section</small>
                    </p>
                </div>
            </div>
        </div>
        <!-- buttons -->
        <div class="col-12  ">
            <a href="checkout.php"><button class="btn checkout-btn my-3">Track my order </button></a>
            <a href="checkout.php"><button class="btn oconfirm-btn">Order something else</button></a>

        </div>

    </div>



</main>

<script>
const targetDiv = document.getElementById("oconfirm");
const targetDiv1 = document.getElementById("checkoutaddress");
console.log(targetDiv);
const btn = document.getElementById("toggle");
btn.onclick = function() {
    if (targetDiv.style.display !== "none") {
        targetDiv.style.display = "none";
    } else {
        targetDiv.style.display = "block";
        targetDiv1.style.background = "#707070";
    }


};


</script>

<?php
include("footer.php");
?>