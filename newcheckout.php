<?php 
include("header.php");
?>

<main class="content-empty">
    <!-- heading -->
    <div class="row mt-4 m-0 p-0 pb-3 white-bg">
        <div class="col-4 col-lg-5 col-md-5 pl-0 back-cta">
            <a href="#"><i class="fas fa-angle-left fa-2x pl-3"></i></a>
        </div>
        <div class="col-6 col-lg-6 col-md-5 ml-2">
            Check out
        </div>
    </div>

    <!-- myorder food items -->
    <form class="row m-0 p-0 px-2 form-group menu-group" method="POST" id="checkout-form">
        <div class="col-12 col-md-12 white-bg mb-3">
               <div class="d-flex flex-row mb-3 menus">
                  <div class="flex-grow-1">
                    <small><p class="mb-2">Delivery Address</p></small>
                      <textarea class="address-text pt-0 ml-0 mt-0" id="deliveryadd" rows="2" value="123,Ktm,Maitidevi">123,Ktm,Maitidevi
                      </textarea> 
                  </div>
                  <div class="m-0 pl-auto pt-4">
                    <a href=""><p class="text-colored">Change</p></a>
                  </div>
              </div>
        </div>

        <div class="col-12 col-md-12 white-bg mb-3 pt-3">
               <div class="d-flex flex-row mb-3 menus">
                  <div class="flex-grow-1">
                    <small><p class="mb-2">Payment Method</p></small>
                      
                  </div>
                  <div class="m-0 pl-auto">
                    <a href=""><p class="text-colored">Add <i class="fas fa-plus"> </i> </p></a>
                  </div>
              </div>
              <div class="d-flex pb-3">
                <div class="inputGroup payment-card">
                    <input id="radio1" name="payment" type="radio" value="most_popular"/>
                        <label for="radio1" class="p-4">
                            <div class="d-flex row">
                              <div class="d-flex flex-column">
                                    <img src="https://pngimg.com/uploads/paypal/paypal_PNG20.png" width="50px" height="50px">
                              </div>
                              <div class="flex-grow-1 pl-2 mr-4 menu-item mt-auto">
                                <p>sadjsak@gmail.com</p>
                              </div>
                              <div class="d-flex flex-column icon-col justify-content-center">
                                <div class="p-2 ml-auto text-colored"></div>
                              </div>
                            </div>
                        </label>
                </div>
              </div>

              <div class="d-flex pb-3">
                <div class="inputGroup payment-card">
                    <input id="radio2" name="payment" type="radio" value="most_popular"/>
                        <label for="radio2" class="p-4">
                            <div class="d-flex row">
                              <div class="d-flex flex-column">
                                    <img src="https://pngimg.com/uploads/paypal/paypal_PNG20.png" width="50px" height="50px">
                              </div>
                              <div class="flex-grow-1 pl-2 mr-4 menu-item mt-auto">
                                <p>sadjsak@gmail.com</p>
                              </div>
                              <div class="d-flex flex-column icon-col justify-content-center">
                                <div class="p-2 ml-auto text-colored"></div>
                              </div>
                            </div>
                        </label>
                </div>
              </div>
        </div>

        <div class="col-12 col-md-12 white-bg mb-3 pt-3">
               <div class="d-flex flex-row mb-3 menus">
                  <div class="flex-grow-1">
                      Enter Coupon
                  </div>
                  <div class="m-0 pl-auto">
                    <input type="text" name="coupon" value="HUNGRY10" class="form-control p-0 m-0 rate text-colored" size="8">
                  </div>
              </div>
        </div>
  
        <div class="col-12 col-md-12 white-bg pt-3">
            <h4> Summary </h4>
        </div>
        <div class="col-12 col-md-12 white-bg">
            <div class="d-flex  pt-3">
                <div class="flex-grow-1">
                    Sub-total
                </div>
                <div class="pl-auto">
                    <strong><input type="text" class="form-control bold" name="sub-total" value="$12.00" size="4" readonly></strong>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 white-bg">
            <div class="d-flex py-0">
                <div class="flex-grow-1">
                    Delivery cost
                </div>
                <div>
                    <b><input type="text" class="form-control bold" name="delivery" value="Free" size="2" readonly></b>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 white-bg">
            <div class="d-flex food py-0">
                <div class="flex-grow-1">
                    Discount
                </div>
                <div>
                    <strong><input type="text" class="form-control bold" name="delivery" value="0" size="2" readonly></strong>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-12 white-bg">
            <div class="d-flex py-0">
                <div class="flex-grow-1">
                    Total
                </div>
                <div>
                    <strong><input type="text" class="form-control bold-total text-colored" name="delivery" value="$12" size="2" readonly></strong>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 white-bg py-4">
            <button class="btn checkout-btn" type="submit" name="btn_checkout" id="btnanimate">Send Order</button>
        </div>

    </form>
   <!--  <button id="btnanimate">
      show
    </button> -->

    <!-- order confirm section -->
    <section class="oconfirm">
    <div class="row m-0">
        <div class="col-12 col-md-12 col-lg-12 blacklayout">
        </div>
      </div>
      <div class="row m-0 oconfirm-bg">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="d-flex-column mt-5">
                <div class="text-center pt-3">
                    <img src="assets/img/oconfirmimg.png" alt="">
                </div>

                <div class="col-8 mx-auto text-center  my-4">
                    <h5 class="text-colored">Thank you for</h5>
                    <p>
                        <small class="text-muted">You can track the delivery in the "Orders" section</small>
                    </p>
                </div>
            </div>
        </div>
        <!-- buttons -->
        <div class="col-12 pb-4">
            <a href="checkout.php"><button class="btn checkout-btn my-3">Track my order </button></a>
            <a href="checkout.php"><button class="btn oconfirm-btn btn-block">Order something else</button></a>
        </div>
    </div>
  </section>

</main>


<?php
include("footer.php");
?>