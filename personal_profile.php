<?php include'header.php'; ?>
<!-- Personal Profile -->

    <div class="wrapper">
        <!-- Page Heading -->
        <div class="container">
            <div id="search__part__innerpage">
                <div class="search__part--innerpages">
                    <div class="header-pages_heading text-center text-white">
                        <h3 class="m-0">Account Details </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Heading -->
        <!-- Content -->
        <div class="container pb-5">
            <div class="row">
                <!-- List One -->
                <div class="col account_leftside">
                    <!--Navbar-->
                    <nav class="navbar navbar-light amber lighten-4 mb-4 d-none">

                        <!-- Navbar brand -->
                        <a class="navbar-brand" href="#">Navbar</a>

                        <!-- Collapse button -->
                        <button class="navbar-toggler first-button" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent20" aria-controls="navbarSupportedContent20"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <div class="animated-icon1"><span></span><span></span><span></span></div>
                        </button>

                        <!-- Collapsible content -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent20">

                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            </ul>
                            <!-- Links -->

                        </div>
                        <!-- Collapsible content -->
                    </nav>
                    <!--/.Navbar-->
                    <div class="account_details_menu  pb-4">
                        <div class="account_user">
                            <div class="media p-3 pt-4 pb-5">
                                <a class="d-flex mr-3" href="#">
                                    <div class="account_user_img">
                                        <img src="assets/img/presonal.png" alt="" />
                                    </div>
                                </a>
                                <div class="media-body">
                                    <div class="account_user_details">
                                        <h5 class="m-0">John Smith</h5>
                                        <p class="m-0">johnsmith@gmail.com</p>
                                        <p class="m-0">+1 987-654-321</p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group list-group-flush nav flex-column nav-pills vertial-accouts-tabs"
                                id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class=" nav-link list-group-item  text-left d-block active" id="v-pills-home-tab"
                                    data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Personal Profile</a>
                                <a class=" nav-link list-group-item  text-left d-block" id="v-pills-profile-tab"
                                    data-toggle="pill" href="#v-pills-profile" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">My Favourites</a>
                                <a class=" nav-link list-group-item  text-left d-block" id="v-pills-messages-tab"
                                    data-toggle="pill" href="#v-pills-messages" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">My Messages</a>
                                <a class=" nav-link list-group-item  text-left d-block" id="v-pills-settings-tab"
                                    data-toggle="pill" href="#v-pills-settings" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false">My Notifications</a>
                                <a class=" nav-link list-group-item  text-left d-block" id="v-pills-rate-our-app-tab"
                                    data-toggle="pill" href="#v-pills-rate-our-app" role="tab"
                                    aria-controls="v-pills-rate-our-app" aria-selected="false">Rate Our App</a>
                                <a class=" nav-link list-group-item  text-left d-block" id="v-pills-change-password-tab"
                                    data-toggle="pill" href="#v-pills-change-password" role="tab"
                                    aria-controls="v-pills-change-password" aria-selected="false">Change Password</a>
                                    <a class=" nav-link list-group-item  text-left d-block popup-with-zoom-anim" href="#delete-dialog">Delete this Account</a>
                                <a class=" nav-link list-group-item  text-left d-block">Logout</a>
                            </div>                           
                        </div>
                    </div>
                    <div class="advirtisement mt-4">
                        <img src="assets/img/Advistise/advitisment.jpg" alt="Mobilecoderz" class="img-fluid">
                    </div>
                </div>
                <!-- End List One -->
                <div class="col account_rightside">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="account_content bg-white p-3">
                                <h3 class="heading_bottom_border fsz22 mb-3">Personal Profile</h3>
                                <!-- Personal Profile Form -->
                                <form class="mb-5">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="personl_user_img">
                                                <div class="user_img">
                                                    <img src="assets/img/presonal.png" alt="" class="img-fluid" />
                                                </div>
                                                <label for="user_img_btn" class="btn-change-photo">Change Phote</label>
                                                <input type="file" id="user_img_btn" class="d-none" name="user_img" />
                                            </div>
                                        </div>
                                        <div class="col-sm-9 presonal_user_form">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="user_name">Your Name</label>
                                                        <input type="text" class="form-control" name="" id="user_name"
                                                            placeholder="Enter Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="user_email">Email Address</label>
                                                        <input type="email" class="form-control" name="" id="user_email"
                                                            placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="user_phone">Your Phone Number</label>
                                                        <input type="text" class="form-control" name="" id="user_phone"
                                                            placeholder="Enter Your Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="user_gender">Gender</label>
                                                        <input type="text" class="form-control" name="" id="user_gender"
                                                            placeholder="Enter Gender">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="user_address">Your Address</label>
                                                        <input type="text" class="form-control" name=""
                                                            id="user_address" placeholder="Enter Your Address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button class="btn-login btn-save mt-4">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Personal Profile Form -->

                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="account_content bg-white p-3">
                                <h3 class="heading_bottom_border fsz22 mb-3">My Favourites</h3>
                                <!-- Personal Profile Form -->
                                <div class="mb-5">
                                    <div class="row">
                                        <!-- List start -->
                                        <div class="col-sm-12">
                                            <div class="search__items profile_list">
                                                <div class="search__items--left ">
                                                    <div class="featured_image">
                                                        <img src="assets/img/search/1.png" alt="hotel 1"
                                                            class="img-fluid search__items--img" />
                                                        <div class="featured_image_count">
                                                            <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                                        </div>
                                                        <div class="feature_button">
                                                            <a href="details.html" class="commerical">Residential
                                                            </a>
                                                            <a href="javascript:void(0);" class="rent">Rent</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search__items--right ">
                                                    <div class="search__item_gaps">
                                                        <div class="row">
                                                            <div class="col-sm-9 pr-0">
                                                                <div class="row">
                                                                    <div class="col-sm-9">
                                                                        <div class="search__item_heading mb-3">
                                                                            <a href="javascript:void(0);">
                                                                                <h3>Relaxing Apartment</h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3 p-0">
                                                                        <div
                                                                            class="search__item_view text-center mt-1 p-0">
                                                                            <img src="assets/img/eye.png" alt="view" />
                                                                            1,332
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="currency search_currency">
                                                                    <span class="blue">$ 40</span>
                                                                    <span>D </span>
                                                                    <span class="blue"> 60</span>
                                                                    <span>W</span>
                                                                </div>
                                                                <div class="search__item_location mb-3">
                                                                    <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <div class="search__item_area">
                                                                            Area - <span>2500 M<sup>2</sup></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <div class="search__item_area">
                                                                            Date Created - <span>12-08-2019
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="account_action">
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">
                                                                            <a href="#" class="action_delete">Remove</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List start -->
                                        <!-- List start -->
                                        <div class="col-sm-12">
                                            <div class="search__items profile_list">
                                                <div class="search__items--left">
                                                    <div class="featured_image">
                                                        <img src="assets/img/search/3.png" alt="hotel 1"
                                                            class="img-fluid search__items--img" />
                                                        <div class="featured_image_count">
                                                            <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                                        </div>
                                                        <div class="feature_button">
                                                            <a href="javascript:void(0);" class="commerical">Residential
                                                            </a>
                                                            <a href="javascript:void(0);" class="rent">Rent</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search__items--right">
                                                    <div class="search__item_gaps">
                                                        <div class="row">
                                                            <div class="col-sm-9 pr-0">
                                                                <div class="row">
                                                                    <div class="col-sm-9">
                                                                        <div class="search__item_heading mb-3">
                                                                            <a href="details.html">
                                                                                <h3>Relaxing Apartment</h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3 p-0">
                                                                        <div
                                                                            class="search__item_view text-center mt-1 p-0">
                                                                            <img src="assets/img/eye.png" alt="view" />
                                                                            1,332
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="currency search_currency">
                                                                    <span class="blue">$ 40</span>
                                                                    <span>D </span>
                                                                    <span class="blue"> 60</span>
                                                                    <span>W</span>
                                                                </div>
                                                                <div class="search__item_location mb-3">
                                                                    <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <div class="search__item_area">
                                                                            Area - <span>2500 M<sup>2</sup></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <div class="search__item_area">
                                                                            Date Created - <span>12-08-2019
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="account_action">
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">
                                                                            <a href="#" class="action_delete">Remove</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List start -->
                                        <!-- List start -->
                                        <div class="col-sm-12">
                                            <div class="search__items profile_list">
                                                <div class="search__items--left">
                                                    <div class="featured_image">
                                                        <img src="assets/img/search/2.png" alt="hotel 1"
                                                            class="img-fluid search__items--img" />
                                                        <div class="featured_image_count">
                                                            <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                                        </div>
                                                        <div class="feature_button">
                                                            <a href="javascript:void(0);" class="commerical">Residential
                                                            </a>
                                                            <a href="javascript:void(0);" class="rent">Rent</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search__items--right">
                                                    <div class="search__item_gaps">
                                                        <div class="row">
                                                            <div class="col-sm-9 pr-0">
                                                                <div class="row">
                                                                    <div class="col-sm-9">
                                                                        <div class="search__item_heading mb-3">
                                                                            <a href="details.html">
                                                                                <h3>Relaxing Apartment</h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3 p-0">
                                                                        <div
                                                                            class="search__item_view text-center mt-1 p-0">
                                                                            <img src="assets/img/eye.png" alt="view" />
                                                                            1,332
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="currency search_currency">
                                                                    <span class="blue">$ 40</span>
                                                                    <span>D </span>
                                                                    <span class="blue"> 60</span>
                                                                    <span>W</span>
                                                                </div>
                                                                <div class="search__item_location mb-3">
                                                                    <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <div class="search__item_area">
                                                                            Area - <span>2500 M<sup>2</sup></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <div class="search__item_area">
                                                                            Date Created - <span>12-08-2019
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="account_action">
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">
                                                                            <a href="#" class="action_delete">Remove</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List start -->
                                        <!-- List start -->
                                        <div class="col-sm-12">
                                            <div class="search__items profile_list">
                                                <div class="search__items--left">
                                                    <div class="featured_image">
                                                        <img src="assets/img/search/4.png" alt="hotel 1"
                                                            class="img-fluid search__items--img" />
                                                        <div class="featured_image_count">
                                                            <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                                        </div>
                                                        <div class="feature_button">
                                                            <a href="javascript:void(0);" class="commerical">Residential
                                                            </a>
                                                            <a href="javascript:void(0);" class="rent">Rent</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search__items--right">
                                                    <div class="search__item_gaps">
                                                        <div class="row">
                                                            <div class="col-sm-9 pr-0">
                                                                <div class="row">
                                                                    <div class="col-sm-9">
                                                                        <div class="search__item_heading mb-3">
                                                                            <a href="details.html">
                                                                                <h3>Relaxing Apartment</h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3 p-0">
                                                                        <div
                                                                            class="search__item_view text-center mt-1 p-0">
                                                                            <img src="assets/img/eye.png" alt="view" />
                                                                            1,332
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="currency search_currency">
                                                                    <span class="blue">$ 40</span>
                                                                    <span>D </span>
                                                                    <span class="blue"> 60</span>
                                                                    <span>W</span>
                                                                </div>
                                                                <div class="search__item_location mb-3">
                                                                    <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <div class="search__item_area">
                                                                            Area - <span>2500 M<sup>2</sup></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <div class="search__item_area">
                                                                            Date Created - <span>12-08-2019
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="account_action">
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">
                                                                            <a href="#" class="action_delete">Remove</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List start -->
                                        <!-- List start -->
                                        <div class="col-sm-12">
                                            <div class="search__items profile_list">
                                                <div class="search__items--left">
                                                    <div class="featured_image">
                                                        <img src="assets/img/search/5.png" alt="hotel 1"
                                                            class="img-fluid search__items--img" />
                                                        <div class="featured_image_count">
                                                            <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                                        </div>
                                                        <div class="feature_button">
                                                            <a href="javascript:void(0);" class="commerical">Residential
                                                            </a>
                                                            <a href="javascript:void(0);" class="rent">Rent</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search__items--right">
                                                    <div class="search__item_gaps">
                                                        <div class="row">
                                                            <div class="col-sm-9 pr-0">
                                                                <div class="row">
                                                                    <div class="col-sm-9">
                                                                        <div class="search__item_heading mb-3">
                                                                            <a href="details.html">
                                                                                <h3>Relaxing Apartment</h3>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3 p-0">
                                                                        <div
                                                                            class="search__item_view text-center mt-1 p-0">
                                                                            <img src="assets/img/eye.png" alt="view" />
                                                                            1,332
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="currency search_currency">
                                                                    <span class="blue">$ 40</span>
                                                                    <span>D </span>
                                                                    <span class="blue"> 60</span>
                                                                    <span>W</span>
                                                                </div>
                                                                <div class="search__item_location mb-3">
                                                                    <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <div class="search__item_area">
                                                                            Area - <span>2500 M<sup>2</sup></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <div class="search__item_area">
                                                                            Date Created - <span>12-08-2019
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="account_action">
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">

                                                                        </li>
                                                                        <li class="list-group-item border-0">
                                                                            <a href="#" class="action_delete">Remove</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List start -->
                                        <!-- List start -->
                                    </div>
                                </div>
                                <!-- End Personal Profile Form -->

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="account_content bg-white p-3">
                                <h3 class="heading_bottom_border fsz22 mb-3">Personal Profile 2</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <div class="account_content bg-white p-3">
                                <h3 class="heading_bottom_border fsz22 mb-3">Personal Profile 3</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-rate-our-app" role="tabpanel"
                            aria-labelledby="v-pills-rate-our-app-tab">
                            <div class="account_content bg-white p-3">
                                <h3 class="heading_bottom_border fsz22 mb-3">v-pills-rate-our-app</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-change-password" role="tabpanel"
                            aria-labelledby="v-pills-change-password-tab">
                            <div class="account_content bg-white p-3">
                                    <h3 class="heading_bottom_border fsz22 mb-3">Change Password</h3>
                                    <form class=" presonal_user_form mb-5">
                                        <P>Enter your new password below  We're just being extra careful.</P>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                  <label for="your_password">Your Password</label>
                                                  <input type="text" class="form-control" name="" id="your_password"  placeholder="Enter Password">                                              
                                                </div>
                                            </div>
                                            <div class="col-100"></div>                                                                                
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="create_new_password">Create New Password<small>(must be more than 8 characters)</small></label>
                                                    <input type="text" class="form-control" name="" id="create_new_password" placeholder="Enter New Password">                                              
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="repeat_password">Repeat Password</label>
                                                    <input type="text" class="form-control" name="" id="repeat_password" placeholder="Enter Repeat Password">                                              
                                                </div>
                                            </div>                                        
                                        </div>
                                        <button class="btn-login btn-save mt-4">Submit</button>
                                    </form>
                                </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- End Content -->
    </div>

<!-- End Personal Profile -->
<?php include'footer.php'; ?>