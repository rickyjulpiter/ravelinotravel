    <div class="navigation">  
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu">
                    <!-- start Navbar (Header) -->
                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="index.php"><img alt="Image" src="images/Yatra-01.png"></a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper pull-right">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="<?php if($page=='index'){echo 'active';} ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="<?php if($page=='aboutus'){echo 'active';} ?>">
                                    <a href="aboutus.php">About Us</a>
                                </li>
                                 <li>
                                    <a href="#">Our Services <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="#">Tour & Destination</a></li>
                                        <li><a href="#">Tour Packages</a></li>
                                        <li><a href="#">Ticketing</a></li>
                                        <li><a href="#">Car Rental</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if($page=='contactus'){echo 'active';} ?>">
                                    <a href="contactus.php">Contact Us</a>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>