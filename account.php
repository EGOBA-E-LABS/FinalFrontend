<?php
  include('header.php');
?>

<main class="content">

<!-- title section -->
    <div class="row m-0 p-0 pt-3 account-header">  
        <div class="col-3 col-md-2 py-4 pr-5 pl-4">
            <div class="img-container-pp">
                <img src="assets/img/landing.png" alt="">
            </div>
        </div> 
        <div class="col-9 col-md-10 my-auto pl-5">
            <h5>Kelly Ch</h5>
            <p class="text-muted">kelly@gmail.com</p>
        </div>       
    </div>
<!-- title section -->

<!-- accordion -->
    <div class="row m-0 p-0">
        <div class="col-12 col-md-12">  
            <div class="accordion" id="profileaccordion">
                <div class="card">

                    <!-- Profile -->
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1" data-toggle="collapse" data-target=".collapseprofile">
                                Profile 
                            </div>
                            <div class="icon" data-toggle="collapse" data-target=".collapseprofile">
                                <i class="fas fa-angle-right pl-3 "></i>
                            </div>
                        </div>
                            <div class="collapse collapseprofile mt-3" data-parent="#profileaccordion">
                                <div class="card card-body">
                                    <h5>Profile</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>
                    </div>
                    <!-- Profile -->
                    <!-- Payment Method -->
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1" data-toggle="collapse" data-target=".collapsepayment">
                                Payment Method 
                            </div>
                            <div class="icon" data-toggle="collapse" data-target=".collapsepayment">
                                <i class="fas fa-angle-right pl-3 "></i>
                            </div>
                        </div>
                            <div class="collapse collapsepayment mt-3" data-parent="#profileaccordion">
                                <div class="card card-body">
                                    <h5>Payment Method</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>
                    </div>
                    <!-- Payment Method -->
                    <!-- Order History -->
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1" data-toggle="collapse" data-target=".collapseorderh">
                                Order History 
                            </div>
                            <div class="icon" data-toggle="collapse" data-target=".collapseorderh">
                                <i class="fas fa-angle-right pl-3 "></i>
                            </div>
                        </div>
                            <div class="collapse collapseorderh mt-3" data-parent="#profileaccordion">
                                <div class="card card-body">
                                    <h5>Order History</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>
                    </div>
                    <!-- Order History -->
                    <!-- Delivery Address -->
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1" data-toggle="collapse" data-target=".collapsedeliveryadd">
                                Delivery Address
                            </div>
                            <div class="icon" data-toggle="collapse" data-target=".collapsedeliveryadd">
                                <i class="fas fa-angle-right pl-3 "></i>
                            </div>
                        </div>
                            <div class="collapse collapsedeliveryadd mt-3" data-parent="#profileaccordion">
                                <div class="card card-body">
                                    <h5>Delivery Address</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>
                    </div>
                    <!-- Delivery Address -->
                    <!-- Settings -->
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1" data-toggle="collapse" data-target=".collapsesettings">
                                Settings
                            </div>
                            <div class="icon" data-toggle="collapse" data-target=".collapsesettings">
                                <i class="fas fa-angle-right pl-3 "></i>
                            </div>
                        </div>
                            <div class="collapse collapsesettings mt-3" data-parent="#profileaccordion">
                                <div class="card card-body">
                                    <h5>Settings</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>
                    </div>
                    <!-- Settings -->
                    <!-- About Us -->
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1" data-toggle="collapse" data-target=".collapseabout">
                                About Us
                            </div>
                            <div class="icon" data-toggle="collapse" data-target=".collapseabout">
                                <i class="fas fa-angle-right pl-3 "></i>
                            </div>
                        </div>
                            <div class="collapse collapseabout mt-3" data-parent="#profileaccordion">
                                <div class="card card-body">
                                    <h5>About Us</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>
                    </div>
                    <!-- About Us -->
                    <!-- Support Center -->
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="flex-grow-1" data-toggle="collapse" data-target=".collapsesupport">
                                Support Center
                            </div>
                            <div class="icon" data-toggle="collapse" data-target=".collapsesupport">
                                <i class="fas fa-angle-right pl-3 "></i>
                            </div>
                        </div>
                            <div class="collapse collapsesupport mt-3" data-parent="#profileaccordion">
                                <div class="card card-body">
                                    <h5>Support Center</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro enim laudantium facere ipsum veniam quibusdam perspiciatis cum eius rerum atque.
                                </div>
                            </div>
                    </div>
                    <!-- Support Center -->
                    <!-- Logout -->
                    <div class="card-header">
                        <a href="home.php">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                Logout
                            </div>
                            <div class="icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                        </div>
                        </a>    
                    </div>
                    <!-- Logout -->
                </div>  
            </div>
        </div>
    </div>
<!-- accordian section -->

<!-- Bottom Navigation -->
    <div class="row m-0 p-2 pt-3 fixed-bottom bottom-nav">
        <div class="col-4 col-md-4 mx-auto px-auto text-center">
            <a href="home.php">
                <div class="row"> 
                    <i class="fas fa-home mx-auto"></i>
                </div>
                <span class="pb-2">Restaurants</span> 
            </a>
        </div>
        <div class="col-4 col-md-4 mx-auto px-auto text-center">
            <a href="offer.php">
                <div class="row"> 
                    <i class="fas fa-fire mx-auto"></i>
                </div>
                <span>Offers</span> 
            </a>
        </div>
        <div class="col-4 col-md-4 mx-auto px-auto text-center">
            <a href="account.php" class="active">
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