<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Netmatters</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/fc803fbe6f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="js/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="js/owl/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="scss/application.css">
    <link href="css/hamburgers.css" rel="stylesheet">
	<link rel="stylesheet" href="scss/flexbox.css">
</head>
<body class="Wrapper" style="overflow:auto;">
    <div class="main">
        
<!--/.main-header--> 
        <header class="header">
                <div class="upper container col-12">
                    <div class="name col-xs-3 col-sm-6 col-md-5 col-lg-4">
                        <a href="index.php"><img class="top-logo" src="img/netmatters-logo.png" alt="netmatters logo"></a>
                    </div>
                    <div class="main-nav nav col-xs-3">
                        <div class="container_button">
                            <a class="main-nav_btn" href="#">
                                <button class="button-1 nav-btn">
                                    <i class="fa-solid fa-computer-mouse"></i>Support
                                </button>
                            </a>
                            <a class="main-nav_btn" href="contact.php">
                                <button class="button-2 nav-btn">
                                    <i class="fa-solid fa-paper-plane"></i>Contact
                                </button>
                            </a>
                        </div>
                        <div class="important-nav">
                            <div class="search">
                                <input type="text" class="hidden-md search-bar form-control" placeholder="Search...">
                                <button type="submit" class=" button-3 search-btn">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                            <div class="hidden-sm hidden-md hidden-lg">
                                <a href="#"><i class="phone-icon fa-solid fa-phone-volume"></i></a>
                            </div>
                            <button class="hamburger hamburger--spin button-4 nav-btn" type="button">
                                <span class="hamburger-box">
                                  <span class="hamburger-inner"></span>
                                </span>
                              </button>
                        </div>
                    </div>
                </div>
                <div class="container hidden-sm hidden-md hidden-lg search-mobile">
                    <form class="search-form" action="#">
                        <input class="search-bar-mobile form-control" placeholder="Search..." type="text">
                        <button type="submit" class="search-submit">
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        </button>
                    </form>
                </div>  
            <div class="secondary-nav nav">
                <div class="nav-container">
                    <div class="nav-item-1 top-nav">
                        <a href="#">
                            <i class="nav-icon nav-icon-1 fa-solid fa-box-open"></i>
                            <br><small>Bespoke</small><br>Software
                            <div class="triangle"></div>
                        </a> 
                            <div class="nav-dropdown">
                                <div class="container">
                                    <ul class="sub-content">
                                        <li class="sub-title">Bespoke Software</li>
                                        <li><i class="fa-solid fa-bars-staggered"></i><a href="#">Workflow</a></li>
                                        <li><i class="fa-solid fa-gears"></i><a href="#">Automation</a></li>
                                        <li><i class="fa-solid fa-code-merge"></i><a href="#">Integration</a></li>
                                        <li><i class="fa-regular fa-folder-open"></i><a href="#">Database</a></li>
                                        <li><i class="fa-solid fa-arrow-right-arrow-left"></i><a href="#">Sharepoint</a></li>
                                        <li><i class="fa-solid fa-list-check"></i><a href="#">Management</a></li>
                                        <li><i class="fa-solid fa-eye-low-vision"></i><a href="#">Navision</a></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    <div class="nav-item-2 top-nav">
                        <a href="#">
                            <i class="nav-icon nav-icon-2 fa-solid fa-desktop"></i>
                            <br><small>IT</small><br>Support
                            <div class="triangle"></div>
                        </a> 
                            <div class="nav-dropdown">
                                <div class="container">
                                    <ul class="sub-content">
                                        <li class="sub-title">IT Support</li>
                                        <li><i class="fa-solid fa-headphones-simple"></i><a href="#">Managed IT</a></li>
                                        <li><i class="fa-solid fa-briefcase"></i><a href="#">Business IT</a></li>
                                        <li><i class="fa-solid fa-computer"></i><a href="#">Office 365</a></li>
                                        <li><i class="fa-solid fa-graduation-cap"></i><a href="#">Consultancy</a></li>
                                        <li><i class="fa-solid fa-cloud"></i><a href="#">Cloud Provider</a></li>
                                        <li><i class="fa-solid fa-hard-drive"></i><a href="#">Data Backup</a></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                       
                    <div class="nav-item-3 top-nav">
                        <a href="#">
                            <i class="nav-icon nav-icon-3 fa-solid fa-chart-simple"></i>
                            <br><small>Digital</small><br>Marketing
                            <div class="triangle"></div>
                        </a> 
                        <div class="nav-dropdown">
                            <div class="container">
                                <ul class="sub-content">
                                    <li class="sub-title">Digital Marketing</li>
                                    <li><i class="fa-solid fa-magnifying-glass"></i><a href="#">Search (SEO)</a></li>
                                    <li><i class="fa-solid fa-money-bill-wave"></i><a href="#">Paid (PPC)</a></li>
                                    <li><i class="fa-solid fa-arrow-trend-up"></i><a href="#">Conversion (CRO)</a></li>
                                    <li><i class="fa-solid fa-arrow-trend-up"></i><a href="#">onversion (CRO)</a></li>
                                    <li><i class="fa-solid fa-envelope"></i><a href="#">Email</a></li>
                                    <li><i class="fa-solid fa-users"></i><a href="#">Social Media</a></li>
                                    <li><i class="fa-solid fa-marker"></i><a href="#">Content Marketing</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>

                    <div class="nav-item-4 top-nav" >
                        <a href="#">
                            <i class="nav-icon nav-icon-4 fa-solid fa-phone">
                            </i><br><small>Telecom</small><br>Services
                            <div class="triangle"></div>
                        </a> 
                        <div class="nav-dropdown">
                            <div class="container">
                                <ul class="sub-content">
                                    <li class="sub-title">Telecom Services</li>
                                    <li><i class="fa-solid fa-square-phone"></i><a href="#">Business Mobile</a></li>
                                    <li><i class="fa-solid fa-phone"></i><a href="#">Hosted VoIP</a></li>
                                    <li><i class="fa-solid fa-phone-volume"></i><a href="#">Business VoIP</a></li>
                                    <li><i class="fa-solid fa-signal"></i><a href="#">Business Broadband</a></li>
                                    <li><i class="fa-solid fa-handshake"></i><a href="#">Leased Line</a></li>
                                    <li><i class="fa-solid fa-mobile-retro"></i><a href="#">3CX Systems</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="nav-item-5 top-nav">
                        <a href="#">
                            <i class="nav-icon nav-icon-5 fa-solid fa-code"></i>
                            <br><small>Web</small><br>Design
                            <div class="triangle"></div>
                        </a> 
                        <div class="nav-dropdown">
                            <div class="container">
                                <ul class="sub-content">
                                    <li class="sub-title">Web Design</li>
                                    <li><i class="fa-solid fa-palette"></i><a href="#">Stylish Websites</a></li>
                                    <li><i class="fa-solid fa-cart-shopping"></i><a href="#">eCommerce Stores</a></li>
                                    <li><i class="fa-solid fa-rectangle-ad"></i><a href="#">Branding & Design</a></li>
                                    <li><i class="fa-brands fa-app-store-ios"></i><a href="#">App Development</a></li>
                                    <li><i class="fa-solid fa-cloud-arrow-down"></i><a href="#">Web Hosting</a></li>
                                    <li><i class="fa-solid fa-desktop"></i><a href="#">Pay Monthly Websites</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>

                    <div class="nav-item-6 top-nav">
                        <a href="#">
                            <i class="nav-icon nav-icon-6 fa-solid fa-shield-halved"></i>
                            <br><small>Cyber</small><br>Security
                            <div class="triangle"></div>
                        </a> 
                        <div class="nav-dropdown">
                            <div class="container">
                                <ul class="sub-content">
                                    <li class="sub-title">Cyber Security</li>
                                    <li><i class="fa-regular fa-paste"></i><a href="#">Assessment</a></li>
                                    <li><i class="fa-solid fa-clock"></i><a href="#">Management</a></li>
                                    <li><i class="fa-solid fa-microscope"></i><a href="#">Penetration Testing</a></li>
                                    <li><i class="fa-solid fa-graduation-cap"></i><a href="#">Cyber Essentials Certification</a></li>
                                    <li><i class="fa-solid fa-shield-halved"></i><a href="#">PCI/DSS</a></li>
                                    <li><i class="fa-solid fa-lock"></i><a href="#">Hacker Prevention</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="nav-item-7 top-nav">
                        <a href="#">
                            <i class="nav-icon nav-icon-7 fa-solid fa-graduation-cap"></i>
                            <br><small>Developer</small><br>Course
                            <div class="triangle"></div>
                        </a> 
                        <div class="nav-dropdown">
                            <div class="container">
                                <ul class="sub-content">
                                    <li class="sub-title">Developer Course</li>
                                    <li><i class="fa-solid fa-laptop-code"></i><a href="#">Train For A Career In Tech</a></li>
                                    <li><i class="fa-solid fa-file-code"></i><a href="#">Skills Bootcamp</a></li>
                                    <li><i class="fa-solid fa-circle-question"></i><a href="#">Scion Scheme FAQ</a></li>
                                    <li><i class="fa-solid fa-handshake"></i><a href="#">Scion Collaborators</a></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </header>