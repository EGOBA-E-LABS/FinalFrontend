<?php
  include('header.php');
?>

<main class="account ">
        <!-- first section -->
        <div class="mainprofile row m-0">
            <div class="col-3 col-md-1 img-container-pp m-2">
                <img src="assets/img/profileimg.png"   alt="">

            </div>
            <div class="col-8 col-md-10 p-3 ml-md-5 pl-4">
                <div class="media">
                    
                    <div class="media-body">
                      <h5 class="mt-0"><strong>Kelly  Chan</strong></h5>
                      <p class="text-muted">kellych@gmail.com</p>
                    </div>
                  
                </div>
            </div>
        </div>

        <!-- accordian section -->
        <div class=" accordiansection row m-0 mt-3 mb-5 pb-5">
            <div class="col">

                <div class="accordion" id="accordionexample">
                    <!-- profile -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-10" data-toggle="collapse" data-target=".collapseone">
                                    profile 
                                </div>
                                <div class="col-2" data-toggle="collapse" data-target=".collapseone">
                                    <i class="fas fa-angle-right pl-3 "></i>
                                </div>
                            </div>

                            <div  class="collapse collapseone mt-3" data-parent="#accordionexample">
                                <div class="card card-body">
                                    <h5>Profile</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- payment method -->
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-10" data-toggle="collapse" data-target=".collapse2">
                                    payment method
                                </div>
                                <div class="col-2" data-toggle="collapse" data-target=".collapse2">
                                    <i class="fas fa-angle-right pl-3 "></i>
                                </div>
                            </div>

                            <div  class="collapse collapse2 mt-3" data-parent="#accordionexample">
                                <div class="card card-body">
                                    <h5>Payment method</h5> ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- order history -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-10" data-toggle="collapse" data-target=".collapse3">
                                    Order History
                                </div>
                                <div class="col-2" data-toggle="collapse" data-target=".collapse3">
                                    <i class="fas fa-angle-right pl-3 "></i>
                                </div>
                            </div>

                            <div  class="collapse collapse3 mt-3" data-parent="#accordionexample">
                                <div class="card card-body">
                                    <h5>Order History</h5> ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Delivery Address -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-10" data-toggle="collapse" data-target=".collapse4">
                                    Delivery Address
                                </div>
                                <div class="col-2" data-toggle="collapse" data-target=".collapse4">
                                    <i class="fas fa-angle-right pl-3 "></i>
                                </div>
                            </div>

                            <div  class="collapse collapse4 mt-3" data-parent="#accordionexample">
                                <div class="card card-body ">
                                    <h5>Delivery Address</h5> ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Settings -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-10" data-toggle="collapse" data-target=".collapse5">
                                    Settings
                                </div>
                                <div class="col-2" data-toggle="collapse" data-target=".collapse5">
                                    <i class="fas fa-angle-right pl-3 "></i>
                                </div>
                            </div>

                            <div  class="collapse collapse5 mt-3" data-parent="#accordionexample">
                                <div class="card card-body">
                                    <h5>Settings</h5> ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- About us  -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-10" data-toggle="collapse" data-target=".collapse6">
                                    About us
                                </div>
                                <div class="col-2" data-toggle="collapse" data-target=".collapse6">
                                    <i class="fas fa-angle-right pl-3 "></i>
                                </div>
                            </div>

                            <div  class="collapse collapse6 mt-3" data-parent="#accordionexample">
                                <div class="card card-body">
                                    <h5>About us</h5> ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Support Center -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-10" data-toggle="collapse" data-target=".collapse7">
                                    Support Center
                                </div>
                                <div class="col-2" data-toggle="collapse" data-target=".collapse7">
                                    <i class="fas fa-angle-right pl-3 "></i>
                                </div>
                            </div>

                            <div  class="collapse collapse7 mt-3" data-parent="#accordionexample">
                                <div class="card card-body">
                                    <h5>Support Center</h5> ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- logout -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                <div class="col-10 pl-1">
                                <a href="#"><button class="btn">Logout</button></a>
                                </div>
                                <div class="col-2">
                                    <a href="#"><button class="btn"><i class="fas fa-sign-out-alt"></i> </button></a>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
    <div class="row m-0 p-2 pt-3 fixed-bottom bottom-nav">
        <div class="col-4 col-md-4 mx-auto px-auto text-center">
            <a href="home.php" class="active">
                <div class="row"> 
                    <i class="fas fa-home mx-auto"></i>
                </div>
                <span class="pb-2">Restaurants</span> 
            </a>
        </div>
        <div class="col-4 col-md-4 mx-auto px-auto text-center">
            <a href="home.php">
                <div class="row"> 
                    <i class="fas fa-fire mx-auto"></i>
                </div>
                <span>Offers</span> 
            </a>
        </div>
        <div class="col-4 col-md-4 mx-auto px-auto text-center">
            <a href="home.php">
                <div class="row"> 
                    <i class="fas fa-user mx-auto"></i>
                </div>
                <span>Account</span> 
            </a>
        </div>
    </div>
    <!-- Bottom Navigation -->

</main>
        

<?php
  include('footer.php');
?>