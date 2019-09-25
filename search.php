<?php include 'header.php'; ?>
 <!-- Search Part -->
    <div class="wrapper pb-5">

        <div class="container">
            <div id="search__part__innerpage">
                <div class="search__part--innerpages">
                    <div class="search__part--panel">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12 text-white text-center mb-0">
                                    <div class="search_options">
                                        <div class="custom-control custom-radio custom-control-inline mr-3">
                                            <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                                            <label class="custom-control-label" for="defaultInline1">Commercial</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                                            <label class="custom-control-label" for="defaultInline2">Residential</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="form-group col-md-3 mb-20">
                                    <select class="form-control">
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-20">
                                    <select class="form-control">
                                        <option value="">Property Type</option>
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-20">
                                    <div class="dropdown main_max_price">
                                        <button class="dropdown-toggle max_price" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Max. Price
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu3">
                                            <div class="form-row p-2">
                                                <div class="col-6">
                                                    <label for="Deftar">Deftar</label>
                                                    <input type="text" if="Deftar" placeholder="200" />
                                                </div>
                                                <div class="col-6">
                                                    <label for="Waraqa">Waraqa</label>
                                                    <input type="text" if="Waraqa" placeholder="40" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3 mb-20">
                                    <input type="text" class="form-control" placeholder="Enter Max Area" />
                                </div>
                                <div class="form-group col-md-3 mb-20">
                                    <select class="form-control">
                                        <option value="">Select Governorate</option>
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-20">
                                    <select class="form-control">
                                        <option value=""> Select City/Town</option>
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                        <option value="">Buy</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 mb-20">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend border-0">
                                            <div class="input-group-text bg-white ">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Select District/Neighborhood">
                                    </div>
                                </div>
                                <div class="form-group col-md-2 mb-20">
                                    <button class="form-control btn btn-primary d-block">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Part -->
        <!-- Search top Bar -->
        <div class="wrapper_inner wrapper_inner--margin">
            <div class="container mb-3">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="search__property-list">
                            <span>
                                <i class="fas fa-list-ul"></i>
                            </span>
                            Property Listing
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="search__location">
                            <ul class="d-flex float-right">
                                <li>
                                    <a href="#advanceFilter" class="popup-with-zoom-anim search_list--map">
                                        <i class="fas fa-filter"></i> &nbsp; Advance Filter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="search_list--map">
                                        <img src="assets/img/location_home.png"> &nbsp; List Map
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <button class="bg-transparent border-0 dropdown-toggle" type="button"
                                            id="sortBy" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Sort By
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sortBy">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search top bar -->
        <!-- Search Items -->
        <div class="container">
            <div class="row">
                <!-- Items One -->
                <div class="col-sm-12">
                    <div class="search__items">
                        <div class="search__items--left">
                            <div class="featured_image">
                                <img src="assets/img/search/1.png" alt="hotel 1" class="img-fluid search__items--img" />
                                <div class="featured_image_count">
                                    <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                </div>
                                <div class="feature_image_heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="feature_button">
                                    <a href="javascript:void(0);" class="commerical">Commercial</a>
                                    <a href="javascript:void(0);" class="rent">Rent</a>
                                </div>
                            </div>
                        </div>
                        <div class="search__items--right">
                            <div class="search__item_gaps">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="search__item_heading">
                                            <a href="javascript:void(0);">
                                                <h3>Relaxing Apartment</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_view text-center">
                                            <img src="assets/img/eye.png" alt="view" /> 1,500
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="currency search_currency">
                                                        <span class="blue">$ 40</span>
                                                        <span>D </span>
                                                        <span class="blue"> 60</span>
                                                        <span>W</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="search__item_location">
                                                        <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                    </div>
                                                    <div class="search__item-items">
                                                        <ul>
                                                            <li>
                                                                <img src="assets/img/hall.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>2 Halls</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/bed.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>4 Bedrooms</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/bath.png" alt="Bath Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>3 Bathrooms</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/garage.png" alt="Garage" class=" d-none d-sm-block mx-auto">
                                                                <p>1 Garage</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3  d-none d-sm-block">
                                                    <div class="search__item_map text-center">
                                                        <a class="popup-with-zoom-anim d-block" href="#small-dialog">
                                                            <i class="fas fa-map-marker-alt"></i> <br>Map View
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_property text-right">
                                                    <a href="agency_details.html">
                                                <img src="assets/img/property/live_property.png" alt="real_estate" />
                                                </a>
                                            </div>
                                        </div>
    
                                        <div class="col-sm-3">
                                            <div class="search__item_area">
                                                Area - <span>2500 M<sup>2</sup></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-none d-sm-block">
                                            <div class="search_item_furnishings">
                                                <span>Furnished</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_post text-right">
                                                Post on 26-05-2019
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Items One -->
                <!-- Items Two -->
                <div class="col-sm-12">
                    <div class="search__items">
                        <div class="search__items--left">
                            <div class="featured_image">
                                <img src="assets/img/search/2.png" alt="hotel 1" class="img-fluid search__items--img" />
                                <div class="featured_image_count">
                                    <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                </div>
                                <div class="feature_image_heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="feature_button">
                                    <a href="javascript:void(0);" class="commerical">Commercial</a>
                                    <a href="javascript:void(0);" class="rent">Rent</a>
                                </div>
                            </div>
                        </div>
                        <div class="search__items--right">
                            <div class="search__item_gaps">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="search__item_heading">
                                            <a href="javascript:void(0);">
                                                <h3>Office Apartment</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_view text-center">
                                            <img src="assets/img/eye.png" alt="view" /> 1,332
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="currency search_currency">
                                                        <span class="blue">$ 50</span>
                                                        <span>D </span>
                                                        <span class="blue"> 80</span>
                                                        <span>W</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="search__item_location">
                                                        <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                    </div>
                                                    <div class="search__item-items">
                                                        <ul>
                                                            <li>
                                                                <img src="assets/img/hall.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>2 Halls</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/bed.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>4 Bedrooms</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/bath.png" alt="Bath Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>3 Bathrooms</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/garage.png" alt="Garage" class=" d-none d-sm-block mx-auto">
                                                                <p>1 Garage</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 d-none d-sm-block">
                                                    <div class="search__item_map text-center">
                                                        <a class="popup-with-zoom-anim d-block" href="#small-dialog">
                                                            <i class="fas fa-map-marker-alt"></i> <br>Map View
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_property text-right">
                                                    <a href="agency_details.html">
                                                <img src="assets/img/property/legacy_park.png" alt="real_estate" />
                                                </a>
                                            </div>
                                        </div>
    
                                        <div class="col-sm-3">
                                            <div class="search__item_area">
                                                Area - <span>1150 M<sup>2</sup></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-none d-sm-block">
                                            <div class="search_item_furnishings">
                                                <span>Unfurnished</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_post text-right">
                                                Post on 26-05-2019
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="search__items">
                        <div class="search__items--left">
                            <div class="featured_image">
                                <img src="assets/img/search/3.png" alt="hotel 1" class="img-fluid search__items--img" />
                                <div class="featured_image_count">
                                    <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                </div>
                                <div class="feature_image_heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="feature_button">
                                    <a href="javascript:void(0);" class="commerical">Commercial</a>
                                    <a href="javascript:void(0);" class="rent">Rent</a>
                                </div>
                            </div>
                        </div>
                        <div class="search__items--right">
                            <div class="search__item_gaps">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="search__item_heading">

                                                <a href="javascript:void(0)">
                                            <h3>Real Luxury Villa</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_view text-center">
                                            <img src="assets/img/eye.png" alt="view" /> 1,799
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="currency search_currency">
                                                    <span class="blue">$ 90</span>
                                                    <span>D </span>
                                                    <span class="blue"> 30</span>
                                                    <span>W</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="search__item_location">
                                                    <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                </div>
                                                <div class="search__item-items">
                                                        <ul>
                                                            <li>
                                                                <img src="assets/img/hall.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>2 Halls</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/bed.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>4 Bedrooms</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/bath.png" alt="Bath Rooms" class=" d-none d-sm-block mx-auto">
                                                                <p>3 Bathrooms</p>
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/garage.png" alt="Garage" class=" d-none d-sm-block mx-auto">
                                                                <p>1 Garage</p>
                                                            </li>
                                                        </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 d-none d-sm-block">
                                                <div class="search__item_map text-center">
                                                    <a class="popup-with-zoom-anim d-block" href="#small-dialog">
                                                        <i class="fas fa-map-marker-alt"></i> <br>Map View
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_property text-right">
                                                <a href="agency_details.html">
                                            <img src="assets/img/property/real_estate.png" alt="real_estate" />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="search__item_area">
                                            Area - <span>850 M<sup>2</sup></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 d-none d-sm-block">
                                        <div class="search_item_furnishings">
                                            <span>Unfurnished</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_post text-right">
                                            Post on 26-05-2019
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="search__items">
                        <div class="search__items--left">
                            <div class="featured_image">
                                <img src="assets/img/search/4.png" alt="hotel 1" class="img-fluid search__items--img" />
                                <div class="featured_image_count">
                                    <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                </div>
                                <div class="feature_image_heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="feature_button">
                                    <a href="javascript:void(0);" class="commerical">Commercial</a>
                                    <a href="javascript:void(0);" class="rent">Rent</a>
                                </div>
                            </div>
                        </div>
                        <div class="search__items--right">
                            <div class="search__item_gaps">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="search__item_heading">
                                                <a href="javascript:void(0)">
                                            <h3>Luxury Villa</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_view text-center">
                                            <img src="assets/img/eye.png" alt="view" /> 1,264
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="currency search_currency">
                                                        <span class="blue">$ 120</span>
                                                        <span>D </span>
                                                        <span class="blue"> 60</span>
                                                        <span>W</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="search__item_location">
                                                        <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                    </div>
                                                    <div class="search__item-items">
                                                            <ul>
                                                                    <li>
                                                                        <img src="assets/img/hall.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>2 Halls</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/bed.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>4 Bedrooms</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/bath.png" alt="Bath Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>3 Bathrooms</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/garage.png" alt="Garage" class=" d-none d-sm-block mx-auto">
                                                                        <p>1 Garage</p>
                                                                    </li>
                                                                </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 d-none d-sm-block">
                                                    <div class="search__item_map text-center">
                                                        <a class="popup-with-zoom-anim d-block" href="#small-dialog">
                                                            <i class="fas fa-map-marker-alt"></i> <br>Map View
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_property text-right">
                                                    <a href="agency_details.html">
                                                <img src="assets/img/property/real_estate_2.png" alt="real_estate" />
                                                </a>
                                            </div>
                                        </div>
    
                                        <div class="col-sm-3">
                                            <div class="search__item_area">
                                                Area - <span>1600 M<sup>2</sup></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-none d-sm-block">
                                            <div class="search_item_furnishings">
                                                <span>Furnished</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_post text-right">
                                                Post on 26-05-2019
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advirtisement search__items border-0">
                        <img src="assets/img/Advistise_hori.png" alt="advistise_hore" class="img-fluid" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="search__items">
                        <div class="search__items--left">
                            <div class="featured_image">
                                <img src="assets/img/search/5.png" alt="hotel 1" class="img-fluid search__items--img" />
                                <div class="featured_image_count">
                                    <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                </div>
                                <div class="feature_image_heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="feature_button">
                                    <a href="javascript:void(0);" class="commerical">Commercial</a>
                                    <a href="javascript:void(0);" class="rent">Rent</a>
                                </div>
                            </div>
                        </div>
                        <div class="search__items--right">
                            <div class="search__item_gaps">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="search__item_heading">
                                                <a href="javascript:void(0)">
                                            <h3>Masons Villas</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_view text-center">
                                            <img src="assets/img/eye.png" alt="view" /> 1,332
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="currency search_currency">
                                                        <span class="blue">$ 120</span>
                                                        <span>D </span>
                                                        <span class="blue"> 60</span>
                                                        <span>W</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="search__item_location">
                                                        <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                    </div>
                                                    <div class="search__item-items">
                                                            <ul>
                                                                    <li>
                                                                        <img src="assets/img/hall.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>2 Halls</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/bed.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>4 Bedrooms</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/bath.png" alt="Bath Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>3 Bathrooms</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/garage.png" alt="Garage" class=" d-none d-sm-block mx-auto">
                                                                        <p>1 Garage</p>
                                                                    </li>
                                                                </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 d-none d-sm-block">
                                                    <div class="search__item_map text-center">
                                                        <a class="popup-with-zoom-anim d-block" href="#small-dialog">
                                                            <i class="fas fa-map-marker-alt"></i> <br>Map View
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_property text-right">
                                                    <a href="agency_details.html">
                                                <img src="assets/img/property/mojo_homes.png" alt="real_estate" />
                                                </a>
                                            </div>
                                        </div>
    
                                        <div class="col-sm-3">
                                            <div class="search__item_area">
                                                Area - <span>1600 M<sup>2</sup></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-none d-sm-block">
                                            <div class="search_item_furnishings">
                                                <span>Furnished</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_post text-right">
                                                Post on 26-05-2019
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="search__items">
                        <div class="search__items--left">
                            <div class="featured_image">
                                <img src="assets/img/search/6.png" alt="hotel 1" class="img-fluid search__items--img" />
                                <div class="featured_image_count">
                                    <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                </div>
                                <div class="feature_image_heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="feature_button">
                                    <a href="javascript:void(0);" class="commerical">Commercial</a>
                                    <a href="javascript:void(0);" class="rent">Rent</a>
                                </div>
                            </div>
                        </div>
                        <div class="search__items--right">
                            <div class="search__item_gaps">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="search__item_heading">
                                            <a href="javascript:void(0)">
                                                <h3>Great Home for Single fmaily</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_view text-center">
                                            <img src="assets/img/eye.png" alt="view" /> 1,832
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="currency search_currency">
                                                        <span class="blue">$ 115</span>
                                                        <span>D </span>
                                                        <span class="blue"> 60</span>
                                                        <span>W</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="search__item_location">
                                                        <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                    </div>
                                                    <div class="search__item-items">
                                                            <ul>
                                                                    <li>
                                                                        <img src="assets/img/hall.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>2 Halls</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/bed.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>4 Bedrooms</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/bath.png" alt="Bath Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>3 Bathrooms</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/garage.png" alt="Garage" class=" d-none d-sm-block mx-auto">
                                                                        <p>1 Garage</p>
                                                                    </li>
                                                                </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 d-none d-sm-block">
                                                    <div class="search__item_map text-center">
                                                        <a class="popup-with-zoom-anim d-block" href="#small-dialog">
                                                            <i class="fas fa-map-marker-alt"></i> <br>Map View
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_property text-right">
                                                    <a href="agency_details.html">
                                                <img src="assets/img/property/real_estate_3.png" alt="real_estate" />
                                                </a>
                                            </div>
                                        </div>
    
                                        <div class="col-sm-3">
                                            <div class="search__item_area">
                                                Area - <span>1500 M<sup>2</sup></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-none d-sm-block">
                                            <div class="search_item_furnishings">
                                                <span>Furnished</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_post text-right">
                                                Post on 20-07-2019
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="search__items">
                        <div class="search__items--left">
                            <div class="featured_image">
                                <img src="assets/img/search/7.png" alt="hotel 1" class="img-fluid search__items--img" />
                                <div class="featured_image_count">
                                    <img src="assets/img/cammra.png" alt="" /> 12 Photos
                                </div>
                                <div class="feature_image_heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="feature_button">
                                    <a href="javascript:void(0);" class="commerical">Commercial</a>
                                    <a href="javascript:void(0);" class="rent">Rent</a>
                                </div>
                            </div>
                        </div>
                        <div class="search__items--right">
                            <div class="search__item_gaps">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="search__item_heading">
                                            <a href="javascript:void(0);">
                                                <h3>Beautiful Single Home</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 d-none d-sm-block">
                                        <div class="search__item_view text-center">
                                            <img src="assets/img/eye.png" alt="view" /> 1,936
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="currency search_currency">
                                                        <span class="blue">$ 80</span>
                                                        <span>D </span>
                                                        <span class="blue"> 20</span>
                                                        <span>W</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="search__item_location">
                                                        <i class="fas fa-map-marker-alt"></i> Al Mansour
                                                    </div>
                                                    <div class="search__item-items">
                                                            <ul>
                                                                    <li>
                                                                        <img src="assets/img/hall.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>2 Halls</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/bed.png" alt="Bed Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>4 Bedrooms</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/bath.png" alt="Bath Rooms" class=" d-none d-sm-block mx-auto">
                                                                        <p>3 Bathrooms</p>
                                                                    </li>
                                                                    <li>
                                                                        <img src="assets/img/garage.png" alt="Garage" class=" d-none d-sm-block mx-auto">
                                                                        <p>1 Garage</p>
                                                                    </li>
                                                                </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 d-none d-sm-block">
                                                    <div class="search__item_map text-center">
                                                        <a class="popup-with-zoom-anim d-block" href="#small-dialog">
                                                            <i class="fas fa-map-marker-alt"></i> <br>Map View
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_property text-right">
                                                <a href="agency_details.html">
                                                    <img src="assets/img/property/realand.png" alt="real_estate" />
                                                </a>
                                            </div>
                                        </div>
    
                                        <div class="col-sm-3">
                                            <div class="search__item_area">
                                                Area - <span>1300 M<sup>2</sup></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 d-none d-sm-block">
                                            <div class="search_item_furnishings">
                                                <span>Unfurnished</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-none d-sm-block">
                                            <div class="search__item_post text-right">
                                                Post on 22-07-2019
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>