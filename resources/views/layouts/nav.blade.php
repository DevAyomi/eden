<!-- Main Header Nav -->
        <header class="header-nav menu_style_home_five navbar-scrolltofixed stricky main-menu">
            <div class="container">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" src="images/header-logo.svg" alt="header-logo.svg">
                        <button type="button" id="menu-btn">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Responsive Menu Structure-->
                    <ul id="respMenu" class="ace-responsive-menu float-left wa" data-menu-style="horizontal">
                        <li> <a href="#"><span class="title">Home</span></a></li>
                        <li> <a href="#"><span class="title">Listing</span></a>
                            <ul>
                                <li> <a href="page-listing-v3.html">Listing Styles</a></li>
                                <li><a href="page-listing-v7.html">Listing Map</a></li>
                                <li><a href="page-listing-single-v3.html">Listing Single</a></li>
                                <li> <a href="#">Agent</a>
                                    <!-- Level Three-->
                                    <ul>
                                        <li><a href="page-agent-list.html">Agent List</a></li>
                                        <li><a href="page-agent-single.html">Agent Single</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#">Agency</a>
                                    <!-- Level Three-->
                                    <ul>
                                        <li><a href="page-agency-list.html">Agency List</a></li>
                                        <li><a href="page-agency-single.html">Agency Single</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="#"><span class="title">Pages</span></a>
                            <ul>
                                <li><a href="page-about.html">About Us</a></li>
                                <li><a href="page-gallery.html">Gallery</a></li>
                                <li><a href="page-faq.html">Faq</a></li>
                                <!-- <li><a href="page-error.html">404 Page</a></li> -->
                                <li><a href="page-terms.html">Terms and Conditions</a></li>
                            </ul>
                        </li>
                        <li><a href="page-contact.html">Contact</a></li>
                    </ul>
                    <a href="index.html" class="navbar_brand dn-md">
                        <img class="logo1 img-fluid" src="images/header-logo3.svg" alt="header-logo3.svg">
                        <img class="logo2 img-fluid" src="images/header-logo2.svg" alt="header-logo2.svg">
                        <span>Eden home & Rentals </span>
                    </a>
                    <ul id="respMenu2" class="ace-responsive-menu float-right wa" data-menu-style="horizontal">
                       @if (Auth::check() )
                        <li class="list-inline-item list_c">
                             <form method="post" action="{{ route('/logout') }}">
                                @csrf
                               <button class="mt-4 btn btn-info">Logout</button>
                            </form>
                        </li>
                       @else
                        <li class="list-inline-item list_c"><a href="{{ route('/register') }}">Register</a></li>
                        <li class="list-inline-item list_c"><a href="{{ route('/login') }}">Login</a></li>
                       @endif

                    </ul>
                </nav>
            </div>
        </header>
       
        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
             <div class="header stylehome1">
                    <div class="main_logo_home2 text-center"> <img class="nav_logo_img img-fluid mt10" src="images/header-logo.svg" alt="header-logo.svg"> <span class="mt15">Eden Homes</span> </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item">
                            <a class="custom_search_with_menu_trigger msearch_icon" href="#"></a>
                        </li>
                        
                        <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
                    </ul>
                </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><a href="index.html"><span>Home</span></a></li>
                    <li><span>Listing</span>
                        <ul>
                            <li><a href="page-listing-v3.html"><span>Listing Styles</span></a></li>
                            <li><a href="page-listing-v7.html"><span>Listing Map</span></a></li>
                            <li><a href="page-listing-single-v2.html"><span>Listing Single</span></a></li>
                        </ul>
                    </li>
                    <li><span>Pages</span>
                        <ul>
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                            <li><a href="page-faq.html">Faq</a></li>
                            <!-- <li><a href="page-error.html">404 Page</a></li> -->
                            <li><a href="page-terms.html">Terms and Conditions</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contact.html">Contact</a></li>
                     @if (Auth::check() )
                        <li>
                             <form method="post" action="{{ route('/logout') }}">
                                @csrf
                               <button class="mt-4 btn btn-info">Logout</button>
                            </form>
                        </li>
                       @else
                        <li><a href="{{ route('/register') }}">Register</a></li>
                        <li><a href="{{ route('/login') }}">Login</a></li>
                       @endif
                </ul>
            </nav>
        </div>