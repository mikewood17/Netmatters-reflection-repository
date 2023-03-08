<!DOCTYPE html>
<!-- head -->

<?php

include("includes/db-connect.php");

$conn = OpenCon();

?>

<!--/.header-->
<?php include("includes/header.php"); ?>

<!-- main content -->
<div class="middle">

    <div class="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="slash">/</li>
                <li>Our Offices</li>
            </ul>
        </div>
    </div>
    <div class="section top">
        <div class="container">
            <h1>Our Offices</h1>
        </div>
    </div>
    <div class="office-addresses">
        <div class="container">
            <div class="address-row">
                <div class="seperator">
                    <div class="address-item">
                        <div class="address-img">
                            <a href="#">
                                <img src="img/offices/london-office.jpg">
                            </a>
                        </div>
                        <div class="address-content">
                            <h2>London Office</h2>
                            <p>
                                Unit G6,<br>
                                Pixel Business Centre,<br>
                                110 Brooker Road, Waltham Abbey,<br>
                                London,<br>
                                EN9 1JH
                            </p>
                            <div class="tel">
                                <a>02045 397354</a>
                            </div>
                            <a class="button" href="#">VIEW MORE</a>
                        </div>
                        <div class="map">

                        </div>
                    </div>
                </div>
                <div class="seperator">
                    <div class="address-item">
                        <div class="address-img">
                        <a href="#">
                                <img src="img/offices/cambridge-office.jpg">
                            </a>
                        </div>
                        <div class="address-content">
                            <h2>Cambridge Office</h2>
                            <p>
                                Unit 1.31,<br>
                                St John's Innovation Centre,<br>
                                Cowley Road, Milton,<br>
                                Cambridge,<br>
                                CB4 0WS
                            </p>
                            <div class="tel">
                                <a>01223 375772</a>
                            </div>
                            <a class="button" href="#">VIEW MORE</a>
                        </div>
                        <div class="map">

                        </div>
                    </div>
                </div>
                <div class="seperator">
                    <div class="address-item">
                        <div class="address-img">
                        <a href="#">
                                <img src="img/offices/wymondham-office.jpg">
                            </a>
                        </div>
                        <div class="address-content">
                            <h2>Wymondham Office</h2>
                            <p>
                                Unit 15,<br>
                                Penfold Drive,<br>
                                Gateway 11 Business Park,<br>
                                Wymondham, Norfolk,<br>
                                NR18 0WZ
                            </p>
                            <div class="tel">
                                <a>01603 704020</a>
                            </div>
                            <a class="button" href="#">VIEW MORE</a>
                        </div>
                        <div class="map">

                        </div>
                    </div>
                </div>
                <div class="seperator">
                    <div class="address-item">
                        <div class="address-img">
                        <a href="#">
                                <img src="img/offices/yarmouth-office.jpg">
                            </a>
                        </div>
                        <div class="address-content">
                            <h2>Great Yarmouth Office</h2>
                            <p>
                                Suite F23,<br>
                                Beacon Innovation Centre,<br>
                                Beacon Park, Gorleston,<br>
                                Great Yarmouth, Norfolk,<br>
                                NR31 7RA
                            </p>
                            <div class="tel">
                                <a>01493 603204</a>
                            </div>
                            <a class="button" href="#">VIEW MORE</a>
                        </div>
                        <div class="map">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-section container">
        <div class="contact-container">
            <p>
                <strong>
                    Email us on:
                </strong>
                <br>
            </p>
            <p class="sales-email">
                <a href="#">sales@netmatters.com</a>
            </p>
            <p>
                <strong>
                    Business hours:
                </strong>
            </p>
            <p>
                <strong>
                    Monday - Friday 07:00 - 18:00
                </strong>
            </p>
        </div>
        <div class="ooh">
                <a href="#">
                    <p><strong>Out of Hours IT Support</strong></p>
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
        </div>
        <div class="form-container">
            <form class="enquiry-form" method="POST">
                <div class="form-input_wrapper">
                    <div class="input input-md">
                        <div class="form-group">
                            <label for="name" class="required">Your Name</label>
                            <input class="form-control" name="name" type="text" id="name">
                        </div>
                    </div>
                    <div class="input input-md">
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input class="form-control" name="company" type="text" id="company">
                        </div>
                    </div>
                    <div class="input input-md">
                        <div class="form-group">
                            <label for="email" class="required">Your Email</label>
                            <input class="form-control" name="email" type="email" id="email">
                        </div>
                    </div>
                    <div class="input input-md">
                        <div class="form-group">
                            <label for="telephone" class="required">Your Telephone Number</label>
                            <input class="form-control" name="telephone" type="text" id="telephone">
                        </div>
                    </div>
                    <div class="input input-lrg">
                        <div class="form-group">
                            <label for="subject" class="required">Subject</label>
                            <input class="form-control" name="subject" type="text" id="subject">
                        </div>
                    </div>
                    <div class="input input-lrg">
                        <div class="form-group">
                            <label for="message" class="required">Message</label>
                            <textarea class="form-control" name="message" type="text" id="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="sign-up_info">
                    <div class="checkbox-container">
                        <span class="checkbox"></span>
                        <input type="checkbox">
                    </div>
                    <div class="sign-up_body">
                        <span class="privacy-policy">	Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</span>
                    </div>
                </div>
                <div class="action-container">
                    <button name="submit" class="enquire-btn button">Send Enquiry</button>
                    <small>
                        <span class="error">*</span>Fields Required
                    </small>
                </div>
            </form>
        </div>
        


    </div>

<!--/Signup Section-->
            
<?php include("includes/signup.php"); ?> 
</div>

<!-- Side menu section -->

<?php include("includes/side_menu.php"); ?> 

<!-- cookie popup -->
          
<?php include("includes/cookie.php"); ?>

<!--/Footer-->
         
<?php include("includes/footer.php");?>
