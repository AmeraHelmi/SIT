<?php 
    include_once 'dbconfig.php'; 
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SIT</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>
        
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
           <a href="ara.php" style="float:right;margin-bottom:20px;font-size:18px; "><b>Switch To Arabic</b></a> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">

                            <h1 style="color:#EE640F;">SIT</h1>
                            <span ><p style="color:#93410E;"><b>Specialist Information Technology</b></p></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="#feature-modal" data-toggle="modal">
                                <i class="fa fa-magic"></i>
                                <p>Offers</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="#portfolio-modal" data-toggle="modal">
                                <i class="fa fa-file-photo-o"></i>
                                <p>Portfolio</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#about-modal" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                <p>About Us</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/about-03.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/about-02.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/about-01.jpg" class="img-responsive" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="#service-modal" data-toggle="modal">
                                        <i class="fa fa-area-chart"></i>
                                        <p>Services</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                    <a href="#team-modal" data-toggle="modal">
                                        <i class="fa fa-users"></i>
                                        <p>Team</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
                            <a href="#contact-modal" data-toggle="modal">
                                <i class="fa fa-envelope-o"></i>
                                <p>Contact</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="#testimonial-modal" data-toggle="modal">
                                <i class="fa fa-comment-o"></i>
                                <p>Testimonial</p>
                            </a>
                        </div>
                        
                        <div class="menu-item blue">
                            <a href="#news-modal" data-toggle="modal">
                                <i class="fa fa-mortar-board"></i>
                                <p>Latest News</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        

        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>Developed by <a href="https://www.facebook.com/amera.helmi6" target="_blank">Amera Helmi</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        
        <!-- Start Feature Section -->
        <div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Offers</h3>
                            <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['offer_desc']."</p>"; }?>
                        </div>
                    </div>
                <?php
              
                // SQL query
                $strSQL = "SELECT * FROM offer";

                // Execute the query (the recordset $rs contains the result)
                $rs = mysql_query($strSQL);
                

                while($row = mysql_fetch_array($rs)) {
                ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature">
                        <i class="fa fa-magic"></i>
                        <div class="feature-content">
                    <?php
                        echo "<h3>".$row['name']."</h3> 
                            <p>".$row['description'].
                            "</p>";
                    ?>
                        </div>
                    </div>
                </div>
                <?php
                }
                mysql_close();
                ?>
                     
                    <!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Feature Section -->
        
        
        
        <!-- Start Portfolio Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Portfolio</h3>
                             <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['project_desc']."</p>"; }?>
                        </div>
                    </div>
                    <div class="row">
                    <?php

                      // Connect to database server
                            mysql_connect("localhost", "root", "amera123")or die (mysql_error ());
                            // Select database
                            mysql_select_db("sit") or die(mysql_error());
    
                    // SQL query
                    $strSQL = "SELECT * FROM project";

                    // Execute the query (the recordset $rs contains the result)
                    $rs = mysql_query($strSQL);
                    
                    while($row = mysql_fetch_array($rs)) {
                    ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-magic"></i>
                                <div class="feature-content">
                                    <?php
                                        echo "<h3>".$row['name']."</h3> 
                                            <p>".$row['descrription'].
                                            "</p><h5>".$row['url']."</h5>";
                                            ?>

                                </div>
                            </div>
                    </div>
                    <?php
                    }
                    mysql_close();
                    ?>
                   </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Portfolio Section -->
        
        
        <!-- Start About Us Section -->
        <div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>About Us</h3>
                          
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text">
                                   <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['about']."</p>"; }?>

                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="skill-shortcode">
                        
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Web Design</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="60">
                                            <span class="progress-bar-span" >60%</span>
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>HTML & CSS</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="95">
                                            <span class="progress-bar-span" >95%</span>
                                            <span class="sr-only">95% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Wordpress</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="80">
                                            <span class="progress-bar-span" >80%</span>
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Joomla</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="100">
                                            <span class="progress-bar-span" >100%</span>
                                            <span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Extension</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="70">
                                            <span class="progress-bar-span" >70%</span>
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-tab">
                        
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Our Mission</a></li>
                                    <li><a href="#tab-2" role="tab" data-toggle="tab">Our Vission</a></li>
                                    <li><a href="#tab-3" role="tab" data-toggle="tab">Company History</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="tab-1">
                                           <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['mision']."</p>"; }?>
                                     </div>


                                    <div class="tab-pane" id="tab-2">
                                           <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['vision']."</p>"; }?>
                                    </div>


                                    <div class="tab-pane" id="tab-3">
                                           <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['history']."</p>"; }?>
                                    </div>

                                </div><!-- /.tab-content -->

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End About Us Section -->
        
        
        <!-- Start Service Section -->
        <div class="section-modal modal fade" id="service-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
               
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Service</h3>
                              <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['service_desc']."</p>"; }?>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                              
                              // Connect to database server
                            mysql_connect("localhost", "root", "amera123")or die (mysql_error ());
                            // Select database
                            mysql_select_db("sit") or die(mysql_error());
    
                                // SQL query
                                $strSQL = "SELECT * FROM service";

                                // Execute the query (the recordset $rs contains the result)
                                $rs = mysql_query($strSQL);
    
                                // Loop the recordset $rs
                                // Each row will be made into an array ($row) using mysql_fetch_array
                                while($row = mysql_fetch_array($rs)) {
                        ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-magic"></i>
                                <div class="feature-content">
                                    <?php
                                        // Write the value of the column FirstName (which is now in the array $row)
                                        echo "<h3>".$row['name']."</h3> 
                                            <p>".$row['description'].
                                            "</p><h5>".$row['type']."</h5>";?>
                                </div>
                            </div>
                    </div>
                        <?php 
                                }
                                mysql_close();
                        ?>
                </div><!-- /.row -->
            </div>
        </div>
    </div>
        <!-- End Service Section -->
        
        
        <!-- Start Team Member Section -->
        <div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
             
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Expert Team</h3>
                              <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['team_desc']."</p>"; }?>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                       <?php
                       
                           // Connect to database server
                            mysql_connect("localhost", "root", "amera123")or die (mysql_error ());
                            // Select database
                            mysql_select_db("sit") or die(mysql_error());
    
                            // SQL query
                            $strSQL = "SELECT * FROM team";

                            // Execute the query (the recordset $rs contains the result)
                            $rs = mysql_query($strSQL);

                            // Loop the recordset $rs
                            // Each row will be made into an array ($row) using mysql_fetch_array
                            while($row = mysql_fetch_array($rs)) {
                        ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-magic"></i>
                                <div class="feature-content">
                                    <?php
                                        // Write the value of the column FirstName (which is now in the array $row)
                                        echo "<h3>".$row['name']."</h3> 
                                            <p>".$row['title'].
                                            "</p><h5>".$row['fb']."</h5>";
                                    ?>
                                </div>
                            </div>
                        </div>

                        <?php
                                }
                                mysql_close();
                        ?>
                      
                </div><!-- /.row -->
            </div>
        </div>
    </div>
</div>
        <!-- End Team Member Section -->
        
        
        <!-- Start Latest News Section -->
        <div class="section-modal modal fade" id="news-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Exclusive News</h3>
                              <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<p>".$row['new_desc']."</p>"; }?>
                        </div>
                    </div>
                    <div class="container">
                    <div class="row">
                        <?php
                                 // Connect to database server
                            mysql_connect("localhost", "root", "amera123")or die (mysql_error ());
                            // Select database
                            mysql_select_db("sit") or die(mysql_error());
    
                                // SQL query
                                $strSQL = "SELECT * FROM new";

                                // Execute the query (the recordset $rs contains the result)
                                $rs = mysql_query($strSQL);
                                
                                // Loop the recordset $rs
                                // Each row will be made into an array ($row) using mysql_fetch_array
                                while($row = mysql_fetch_array($rs)) {
                        ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <!-- <i class="fa fa-magic"></i> -->
                                <div><img src="images/news.jpeg"></div>
                                <div class="feature-content">
                                    <?php
                                        // Write the value of the column FirstName (which is now in the array $row)
                                        echo "<h3>".$row['title']."</h3> 
                                            <p>".$row['description'].
                                            "</p><h5>".$row['new_date']."</h5>";
                                    ?>
                                </div>
                            </div>
                    </div>
                                <?php
                                        }
                                        mysql_close();
                                ?>
                     
            </div><!-- /.row -->
        </div>
    </div>
</div>
</div>

        
        <!-- End Latest News Section -->
        
        
        
        <!-- Start Contact Section -->
        <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Contact With Us</h3>
                          
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Contact info</h4>
                                <ul>   <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<li><strong>E-mail: </strong>".$row['email']."</li>
                          <li><strong>Phone: </strong>".$row['phone']."</li>
                          <li><strong>Mobile: </strong>".$row['mobile']."</li>
                          <li><strong>Web: </strong>".$row['web']."</li>
                          "; }?>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-social text-center">
                                <ul>
                                   <?php 
                            $strSQL = "SELECT * FROM others";
                            $rs = mysql_query($strSQL);
                            while($row = mysql_fetch_array($rs)) {
               
                           echo "<li><a href=".$row['tw']."><i class='fa fa-twitter'></i></a></li>
                           <li><a href=".$row['fb']."><i class='fa fa-facebook'></i></a></li>
                           <li><a href=".$row['linkedin']."><i class='fa fa-linkedin'></i></a></li>
                           <li><a href=".$row['google']."><i class='fa fa-google-plus'></i></a></li>"; }?>
                                
                                  
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Working Hours</h4>
                                <ul>
                                    <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                                    <li><strong>Thurs-Fri :</strong> 12 pm to 10 pm</li>
                                    <li><strong>Sat :</strong> 9 am to 3 pm</li>
                                    <li><strong>Sunday :</strong> Closed</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
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
        <!-- End Contact Section -->
        
        
         <!-- Start Testimonial Section -->
        <div class="section-modal modal fade contact" id="testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Client's Speech About Us</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/team/manage-1.png" class="img-responsive" alt="...">
                                <h4>John Doe</h4>
                                <div class="speech">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/team/manage-2.png" class="img-responsive" alt="...">
                                <h4>John Doe</h4>
                                <div class="speech">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/team/manage-3.png" class="img-responsive" alt="...">
                                <h4>John Doe</h4>
                                <div class="speech">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="testimonial">
                                <img src="images/team/manage-4.png" class="img-responsive" alt="...">
                                <h4>John Doe</h4>
                                <div class="speech">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    
                </div>
                
            </div>
        </div>
        <!-- End Testimonial Section -->
        
    </body>
    
</html>