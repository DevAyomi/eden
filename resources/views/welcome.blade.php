<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Eden home & Rentals advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Eden home & Rentals - Real Estate ">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Title -->
    <title>Eden homes and Rentals</title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
      @include('layouts.nav')
        <!-- Modal -->
       

        <!-- Home Design -->
        <section class="home-one home3-overlay bg-home3 mt0">
            <div class="container">
                <div class="row posr">
                    <div class="col-lg-12">
                        <div class="home_content home3">
                            <div class="home-text text-center">
                                <h2 class="fz60 mb25">Let’s find a home that’s perfect for you</h2>
                                <p class="fz16 color-white">Search confidently with your trusted source of homes for sale or rent</p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-xl-9">
                                    <div class="home_tabs home3 mt60">
                                        <ul class="nav justify-content-center nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="true">Buy</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="sold-tab" data-toggle="tab" href="#sold" role="tab" aria-controls="sold" aria-selected="false">Sold</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                                <div class="home_adv_srch_opt mt0">
                                                    <div class="wrapper">
                                                        <div class="home_adv_srch_form home3">
                                                            <form class="p20">
                                                                <div class="form-row align-items-center">
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap">
                                                                                <select class="selectpicker show-tick" multiple>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Condo">Condo</option>
                                        <option value="Studio">Studio</option>
                                        <option value="Villa">Villa</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap">
                                                                                <select class="selectpicker">
                                        <option value="">All Cities</option>
                                        <option value="NewYork">New York</option>
                                        <option value="London">London</option>
                                        <option value="Paris">Paris</option>
                                        <option value="Istanbul">Istanbul</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap">
                                                                                <select class="selectpicker">
                                        <option value="">Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="small_dropdown2 home3">
                                                                            <div id="prncgs3" class="btn dd_btn">
                                                                                <span>Max.Price</span>
                                                                                <label><span class="fa fa-angle-down"></span></label>
                                                                            </div>
                                                                            <div class="dd_content2 home3">
                                                                                <div class="pricing_acontent">
                                                                                    <div class="mt20 ml10" id="slider"></div>
                                                                                    <span id="slider-range-value1"></span>
                                                                                    <span id="slider-range-value2"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input2 ml20 ml0-1200 p0-lg">
                                                                        <button type="submit" class="btn search-btn mt0-md ml0-md"><span class="fa fa-search"></span> Search</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                                <div class="home_adv_srch_opt mt0">
                                                    <div class="wrapper">
                                                        <div class="home_adv_srch_form home3">
                                                            <form class="p20">
                                                                <div class="form-row align-items-center">
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap style2-dropdown">
                                                                                <select class="selectpicker">
                                        <option>Property Type</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Condo">Condo</option>
                                        <option value="Studio">Studio</option>
                                        <option value="Villa">Villa</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap style2-dropdown">
                                                                                <select class="selectpicker">
                                        <option>Location</option>
                                        <option value="NewYork">New York</option>
                                        <option value="London">London</option>
                                        <option value="Paris">Paris</option>
                                        <option value="Istanbul">Istanbul</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap style2-dropdown">
                                                                                <select class="selectpicker">
                                        <option>Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="small_dropdown2 home3">
                                                                            <div id="prncgs2" class="btn dd_btn">
                                                                                <span>Max.Price</span>
                                                                                <label><span class="fa fa-angle-down"></span></label>
                                                                            </div>
                                                                            <div class="dd_content2 home3">
                                                                                <div class="pricing_acontent">
                                                                                    <div class="slider-range"></div>
                                                                                    <input type="text" class="amount" placeholder="$11,200">
                                                                                    <input type="text" class="amount2" placeholder="$15,200">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input2 ml20 ml0-1200 p0-lg">
                                                                        <button type="submit" class="btn search-btn mt0-md ml0-md"><span class="fa fa-search"></span> Search</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
                                                <div class="home_adv_srch_opt mt0">
                                                    <div class="wrapper">
                                                        <div class="home_adv_srch_form home3">
                                                            <form class="p20">
                                                                <div class="form-row align-items-center">
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap style2-dropdown">
                                                                                <select class="selectpicker show-tick" multiple>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Condo">Condo</option>
                                        <option value="Studio">Studio</option>
                                        <option value="Villa">Villa</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap style2-dropdown">
                                                                                <select class="selectpicker">
                                        <option value="">All Cities</option>
                                        <option value="NewYork">New York</option>
                                        <option value="London">London</option>
                                        <option value="Paris">Paris</option>
                                        <option value="Istanbul">Istanbul</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="form-group">
                                                                            <div class="select-wrap style2-dropdown">
                                                                                <select class="selectpicker">
                                        <option value="">Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                      </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input mb15-md">
                                                                        <div class="small_dropdown2 home3">
                                                                            <div id="prncgs4" class="btn dd_btn">
                                                                                <span>Max.Price</span>
                                                                                <label><span class="fa fa-angle-down"></span></label>
                                                                            </div>
                                                                            <div class="dd_content2 home3">
                                                                                <div class="pricing_acontent">
                                                                                    <div class="slider-range"></div>
                                                                                    <input type="text" class="amount3" placeholder="$11,200">
                                                                                    <input type="text" class="amount4" placeholder="$15,200">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto home_form_input2 ml20 ml0-1200 p0-lg">
                                                                        <button type="submit" class="btn search-btn mt0-md ml0-md"><span class="fa fa-search"></span> Search</button>
                                                                    </div>
                                                                </div>
                                                            </form>
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
                </div>
            </div>
        </section>

        <!-- Property Cities -->
        <section class="property-city pb70 bb1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h2>Explore Our Properties</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec sollicitudin</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature_place_home2_slider">
                            <div class="item">
                                <div class="properti_city">
                                    <div class="thumb"><img class="img-fluid w100" src="images/property/ep1.jpg" alt="ep1.jpg"></div>
                                    <div class="overlay">
                                        <div class="details">
                                            <div class="icon"><span class="flaticon-home"></span></div>
                                            <h4><a href="page-listing-single-v5.html">House</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="properti_city">
                                    <div class="thumb"><img class="img-fluid w100" src="images/property/ep2.jpg" alt="ep2.jpg"></div>
                                    <div class="overlay">
                                        <div class="details">
                                            <div class="icon"><span class="flaticon-apartment"></span></div>
                                            <h4><a href="page-listing-single-v5.html">Apartment</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="properti_city">
                                    <div class="thumb"><img class="img-fluid w100" src="images/property/ep3.jpg" alt="ep3.jpg"></div>
                                    <div class="overlay">
                                        <div class="details">
                                            <div class="icon"><span class="flaticon-business-and-trade"></span></div>
                                            <h4><a href="page-listing-single-v5.html">Office</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="properti_city">
                                    <div class="thumb"><img class="img-fluid w100" src="images/property/ep4.jpg" alt="ep4.jpg"></div>
                                    <div class="overlay">
                                        <div class="details">
                                            <div class="icon"><span class="flaticon-villa"></span></div>
                                            <h4><a href="page-listing-single-v5.html">Villa</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="properti_city">
                                    <div class="thumb"><img class="img-fluid w100" src="images/property/ep5.jpg" alt="ep.jpg"></div>
                                    <div class="overlay">
                                        <div class="details">
                                            <div class="icon"><span class="flaticon-living-room"></span></div>
                                            <h4><a href="page-listing-single-v5.html">Room</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Properties -->
        <section class="feature-property bb1 pb70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="main-title text-center">
                            <h2>Recent listings for rent</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb">
                                <img class="img-whp" src="images/property/fl1.jpg" alt="fl1.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                    </ul>
                                    <ul class="tag2 mb0">
                                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt2">
                                    <ul class="listing_gallery mb0">
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="badge_icon">
                                        <a href="#"><img src="images/agent/1.png" alt="1.png"></a>
                                    </div>
                                    <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                                    <p>Quincy St, Brooklyn, NY, USA</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                    <span class="heading-color fw600">$7,500/mo</span></a></li>
                                    </ul>
                                    <ul class="fp_meta float-right mb0">
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb"> <img class="img-whp" src="images/property/fl2.jpg" alt="fl2.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                    </ul>
                                    <ul class="tag2 mb0">
                                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt2">
                                    <ul class="listing_gallery mb0">
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="badge_icon">
                                        <a href="#"><img src="images/agent/2.png" alt="2.png"></a>
                                    </div>
                                    <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                                    <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <small><del class="body-color">$2,800/mo</del></small><br>
                                                <span class="heading-color fw600">$5,250/mo</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="fp_meta float-right mb0">
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb"> <img class="img-whp" src="images/property/fl3.jpg" alt="fl3.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                    </ul>
                                    <ul class="tag2 mb0">
                                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt2">
                                    <ul class="listing_gallery mb0">
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="badge_icon">
                                        <a href="#"><img src="images/agent/3.png" alt="3.png"></a>
                                    </div>
                                    <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                                    <p>251 SW 6th Ln Florida City, FL</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <small><del class="body-color">$2,800/mo</del></small><br>
                                                <span class="heading-color fw600">$2,300/mo</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="fp_meta float-right mb0">
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb"> <img class="img-whp" src="images/property/fl4.jpg" alt="fl4.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                    </ul>
                                    <ul class="tag2 mb0">
                                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt2">
                                    <ul class="listing_gallery mb0">
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="badge_icon">
                                        <a href="#"><img src="images/agent/4.png" alt="4.png"></a>
                                    </div>
                                    <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                                    <p>4 W 21st St Flatiron District, New York, NY</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <small><del class="body-color">$2,800/mo</del></small><br>
                                                <span class="heading-color fw600">$1,900/mo</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="fp_meta float-right mb0">
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Properties -->
        <section class="feature-property bb1 pb70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="main-title text-center">
                            <h2>Recent listings for sale</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb">
                                <img class="img-whp" src="images/listing/rlsh31.jpg" alt="rlsh31.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                    </ul>
                                    <ul class="tag2 mb0">
                                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt2">
                                    <ul class="listing_gallery mb0">
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="badge_icon">
                                        <a href="#"><img src="images/agent/1.png" alt="1.png"></a>
                                    </div>
                                    <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                                    <p>Quincy St, Brooklyn, NY, USA</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                    <span class="heading-color fw600">$7,500/mo</span></a></li>
                                    </ul>
                                    <ul class="fp_meta float-right mb0">
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb"> <img class="img-whp" src="images/listing/rlsh32.jpg" alt="rlsh32.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                    </ul>
                                    <ul class="tag2 mb0">
                                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt2">
                                    <ul class="listing_gallery mb0">
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="badge_icon">
                                        <a href="#"><img src="images/agent/2.png" alt="2.png"></a>
                                    </div>
                                    <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                                    <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <small><del class="body-color">$2,800/mo</del></small><br>
                                                <span class="heading-color fw600">$5,250/mo</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="fp_meta float-right mb0">
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb"> <img class="img-whp" src="images/listing/rlsh33.jpg" alt="rlsh33.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                    </ul>
                                    <ul class="tag2 mb0">
                                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt2">
                                    <ul class="listing_gallery mb0">
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="badge_icon">
                                        <a href="#"><img src="images/agent/3.png" alt="3.png"></a>
                                    </div>
                                    <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                                    <p>251 SW 6th Ln Florida City, FL</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <small><del class="body-color">$2,800/mo</del></small><br>
                                                <span class="heading-color fw600">$2,300/mo</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="fp_meta float-right mb0">
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="feat_property">
                            <div class="thumb"> <img class="img-whp" src="images/listing/rlsh34.jpg" alt="rlsh34.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                    </ul>
                                    <ul class="tag2 mb0">
                                        <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt2">
                                    <ul class="listing_gallery mb0">
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                        <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <div class="badge_icon">
                                        <a href="#"><img src="images/agent/4.png" alt="4.png"></a>
                                    </div>
                                    <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                                    <p>4 W 21st St Flatiron District, New York, NY</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <small><del class="body-color">$2,800/mo</del></small><br>
                                                <span class="heading-color fw600">$1,900/mo</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="fp_meta float-right mb0">
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                        <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Divider -->
        <section class="divider home-style3 parallax" data-stellar-background-ratio="0.2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h2 class="text-white">Why Choose Us</h2>
                            <p class="text-white">We provide full service at every step.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="why_chose_us home3">
                            <div class="icon"> <span class="flaticon-discord"></span> </div>
                            <div class="details">
                                <h4 class="text-white">Trusted By Thousands</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="why_chose_us home3">
                            <div class="icon"> <span class="flaticon-house"></span> </div>
                            <div class="details">
                                <h4 class="text-white">Wide Renge Of Properties</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="why_chose_us home3">
                            <div class="icon"> <span class="flaticon-calculator"></span> </div>
                            <div class="details">
                                <h4 class="text-white">Financing Made Easy</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="why_chose_us home3">
                            <div class="icon"> <span class="flaticon-maps"></span> </div>
                            <div class="details">
                                <h4 class="text-white">See Neighborhoods</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Testimonials -->
        <section class="our-testimonial pb10 bb1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h2>Our Testimonials</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial_slider_home1">
                            <div class="item">
                                <div class="testimonial_post home3 text-center">
                                    <div class="details">
                                        <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                                    </div>
                                    <div class="thumb"> <img src="images/testimonial/1.png" alt="1.png"> </div>
                                    <div class="client_details">
                                        <h4 class="title">Marvin McKinney</h4>
                                        <div class="client-postn">Designer</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_post home3 text-center">
                                    <div class="details">
                                        <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                                    </div>
                                    <div class="thumb"> <img src="images/testimonial/2.png" alt="2.png"> </div>
                                    <div class="client_details">
                                        <h4 class="title">Theresa Webb</h4>
                                        <div class="client-postn">Host</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_post home3 text-center">
                                    <div class="details">
                                        <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                                    </div>
                                    <div class="thumb"> <img src="images/testimonial/3.png" alt="3.png"> </div>
                                    <div class="client_details">
                                        <h4 class="title">Robert Fox</h4>
                                        <div class="client-postn">Reporter</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_post home3 text-center">
                                    <div class="details">
                                        <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                                    </div>
                                    <div class="thumb"> <img src="images/testimonial/4.png" alt="4.png"> </div>
                                    <div class="client_details">
                                        <h4 class="title">Guy Hawkins</h4>
                                        <div class="client-postn">Developer</div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial_post home3 text-center">
                                    <div class="details">
                                        <p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                                    </div>
                                    <div class="thumb"> <img src="images/testimonial/1.png" alt="1.png"> </div>
                                    <div class="client_details">
                                        <h4 class="title">Marvin McKinney</h4>
                                        <div class="client-postn">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team -->
        <section class="our-team pb40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h2>Meet Our Agents</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team_slider_home1">
                            <div class="item">
                                <div class="team_member">
                                    <div class="thumb"> <img class="img-fluid" src="images/team/1.jpg" alt="1.jpg">
                                        <div class="overylay">
                                            <ul class="social_icon">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="page-agent-single.html">Robert Fox</a></h4>
                                        <p>Lead Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_member">
                                    <div class="thumb"> <img class="img-fluid" src="images/team/2.jpg" alt="2.jpg">
                                        <div class="overylay">
                                            <ul class="social_icon">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="page-agent-single.html">Floyd Miles</a></h4>
                                        <p>CEO, Director</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_member">
                                    <div class="thumb"> <img class="img-fluid" src="images/team/3.jpg" alt="3.jpg">
                                        <div class="overylay">
                                            <ul class="social_icon">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="page-agent-single.html">Albert Flores</a></h4>
                                        <p>Marketer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_member">
                                    <div class="thumb"> <img class="img-fluid" src="images/team/4.jpg" alt="4.jpg">
                                        <div class="overylay">
                                            <ul class="social_icon">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="page-agent-single.html">Darlene Robertson</a></h4>
                                        <p>Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_member">
                                    <div class="thumb"> <img class="img-fluid" src="images/team/5.jpg" alt="5.jpg">
                                        <div class="overylay">
                                            <ul class="social_icon">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h4><a href="page-agent-single.html">Savannah Nguyen</a></h4>
                                        <p>Lead Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Partners -->
        <section class="our-newslatter bg-ptrn2 pt70 pb70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="start_partner">
                            <h2>Sign up for newsletter</h2>
                            <p>and get latest news & update</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_social_widget">
                            <form class="footer_mailchimp_form home3">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <input type="email" class="form-control" id="inlineFormInput" placeholder="Enter your email">
                                        <button type="submit" class="flaticon-email"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer -->
        <section class="footer_one home3">
            <div class="container pb90">
                <div class="row">
                    <div class="col-sm-5 col-md-5 col-lg-3 col-xl-2">
                        <div class="footer_contact_widget">
                            <h4>Contact Us</h4>
                            <ul class="list-unstyled">
                                <li class="text-white df"><span class="flaticon-map mr15"></span><a href="#">329 Queensberry Street, North Melbourne VIC 3051, Australia.</a></li>
                                <li class="text-white"><span class="flaticon-phone mr15"></span><a href="#">+123 456 7890</a></li>
                                <li class="text-white"><span class="flaticon-mail-inbox-app mr15"></span><a href="#">support@edenhomes.com</a></li>
                            </ul>
                        </div>
                        <div class="footer_social_widget mt20">
                            <ul class="mb0">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_qlink_widget">
                            <h4>Discover</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Chicago</a></li>
                                <li><a href="#">Los Angeles</a></li>
                                <li><a href="#">Miami</a></li>
                                <li><a href="#">New York</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2">
                        <div class="footer_qlink_widget pl0">
                            <h4>Lists by Category</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Apartments</a></li>
                                <li><a href="#">Condos</a></li>
                                <li><a href="#">Houses</a></li>
                                <li><a href="#">Offices</a></li>
                                <li><a href="#">Retail</a></li>
                                <li><a href="#">Villas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2">
                        <div class="footer_qlink_widget pl0">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">User’s Guide</a></li>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">Press Info</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2">
                        <div class="footer_qlink_widget pl0">
                            <h4>Properties</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Buy</a></li>
                                <li><a href="#">Rent</a></li>
                                <li><a href="#">Sell</a></li>
                                <li><a href="#">Landlords</a></li>
                                <li><a href="#">New Homes</a></li>
                                <li><a href="#">Overseas Properties</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2">
                        <div class="footer_qlink_widget pl0">
                            <h4>Agents & Offices</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Find an Office</a></li>
                                <li><a href="#">Find an Agent</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Franchising</a></li>
                                <li><a href="#">Head Office</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container pt10 pb30">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="copyright-widget mt10 mb15-767">
                            <p>Copyright © 2021 Eden home & Rentals. All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="footer_logo_widget text-center mb15-767">
                            <div class="wrapper">
                                <div class="logo text-center"> <img src="images/footer-logo.svg" alt="footer-logo.svg"> <span class="logo_title text-white pl15">Houzing</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="footer_menu_widget text-right tac-md mt15">
                            <ul>
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><a href="#">Site Map</a></li>
                                <li class="list-inline-item"><a href="#">Privacy policy</a></li>
                                <li class="list-inline-item"><a href="#">Cookie Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome home3" href="#"><i class="fa fa-angle-up"></i></a> </div>
    <!-- Wrapper End -->
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mmenu.all.js"></script>
    <script src="js/ace-responsive-menu.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotop.js"></script>
    <script src="js/snackbar.min.js"></script>
    <script src="js/simplebar.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/scrollto.js"></script>
    <script src="js/jquery-scrolltofixed-min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/progressbar.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/timepicker.js"></script>
    <script src="js/pricing-slider.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Custom script for all pages -->
    <script src="js/script.js"></script>
</body>

</html>