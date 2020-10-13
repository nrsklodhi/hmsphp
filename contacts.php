<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>     
	<!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page5">
	<!--==============================header=================================-->
    <?php include('header.php');?><div class="ic"></div>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">Contact Form</h3>
                                                    <form id="contact-form" method="post" enctype="multipart/form-data">                    
                                                        <fieldset>
                                                              <label><span class="text-form">Name:</span><input name="p1" type="text" size="40"/></label>
                                                              <label><span class="text-form">Email:</span><input name="p2" type="text" size="40"/></label>   
                                                              <label><span class="text-form">Phone:</span><input name="p3" type="text"size="40" /></label>                                    
                                                              <div class="wrapper"><div class="text-form">Message:</div><textarea></textarea></div>
                                                              <div class="buttons">
                                                                  <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                                                  <a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                                                              </div>                             
                                                        </fieldset>						
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
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12">
                	<div class="wrapper">
                   	  <article class="grid_3">
                        	<h3 class="prev-indent-bot">Our Address</h3>
                            <dl>
                                <dt class="indent-bot"><h2>Site Office</h2>
                                padri tigdda patera,<br>
                                damoh (M.P.)india</dt>
                                <dd><span><h2>phone 1 :</h2></span>  +916264505593</dd>
                                <dd><span><h2>phone 2 :</h2></span>  +919171403616</dd>
                                <dd><span><h2>FAX:</h2></span>  +9171403616</dd>
                                <dd><strong><h2>E-mail:</h2></strong> <a href="#">nrsksetvices@gmail.com</a></dd>
                            </dl>
                        </article>
                        <article class="grid_9">
                        	<h3 class="prev-indent-bot"><figure class="img-indent frame">
                              <img src="images/sam'shotel.png" width="350" height="300"></figure>
                       	    Miscellaneous Info</h3> 
                          <strong> Since 2018 NRsK Events Organizers have started in KUNDALPUR(patera). Expanding the project these events were also organized and well managed in new Places in INDIA. As the time passed NRsK's Events Organizers flourished and today we are present in(Jablapur,Sagar,Damoh,Hatta,Panna,KUNDALPUR,Patera). </strong>

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
   <?php include('footer.php');?>
</body>
</html>
