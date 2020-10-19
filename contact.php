<?php include('header.php'); ?>
       
		<!-- **Main - Starts** --> 
		<div id="main">
        	
            <div class="parallax full-width-bg">
                <div class="container">
                    <div class="main-title">
                        <h1>Contact Us</h1>
                        <div class="breadcrumb">
                            <a href="index.php">Home</a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current">Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Primary Starts -->
            <section id="primary" class="content-full-width">
                
                <div id="map"></div> 
                <div class="dt-sc-margin50"></div>
                <div class="container">
                    <div class="column dt-sc-three-fourth first">
                        <div class="hr-title">
                            <h3>Give a Message</h3>
                            <div class="title-sep">
                            </div>
                        </div>
                        <form method="post" class="dt-sc-contact-form" action="php/send.php" name="frmcontact">
                            <div class="column dt-sc-one-third first">
                                <p> <span> <input type="text" placeholder="Name*" name="txtname" value="" required /> </span> </p>
                            </div>
                            <div class="column dt-sc-one-third">
                                <p> <span> <input type="email" placeholder="Email*" name="txtemail" value="" required /> </span> </p>
                            </div>
                            <div class="column dt-sc-one-third">
                                <p> <span> <input type="text" placeholder="Phone" name="txtphone" value="" /> </span> </p>
                            </div>
                            <p> <textarea placeholder="Message*" name="txtmessage" required ></textarea> </p>
                            <p> <input type="submit" value="Send Message" name="submit" /> </p>
                        </form>
                        <div id="ajax_contact_msg"></div>
                    </div>
                    
                    <div class="column dt-sc-one-fourth">
                        <div class="hr-title">
                            <h3>Contact Info</h3>
                            <div class="title-sep">
                            </div>
                        </div>
                        <p class="dt-sc-contact-detail"> We are located in Melbourne, serving clients worldwide. Shoot us an email, give us a call, or fill out our Project Brief if you're interested in getting started.  </p>
                        <!-- **dt-sc-contact-info - Starts** -->
                        <div class="dt-sc-contact-info">
                            <p> <i class="fa fa-location-arrow"></i> 121 King St, Melbourne VIC 3000,<br/> Australia </p>
                            <p> <i class="fa fa-phone"></i> +61 3 8376 6284 </p>
                            <p> <i class="fa fa-globe"></i> <a href="#"> envato.com </a> </p>
                            <p> <i class="fa fa-envelope"></i> <a href="#"> grandjade@gmail.com </a> </p>
                        </div> <!-- **dt-sc-contact-info - Ends** -->
                    </div>
                    
                </div>
                <div class="dt-sc-margin80"></div>

        </div> <!-- **Main - Ends** --> 
        
<?php include('footer.php'); ?>