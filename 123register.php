<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
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
<body id="page4">
	<?php include('header.php');?>
    
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
                               <li><a href="home.php">Home</a></li>
                                <li><a href="events.php">Events</a></li>
                                <li><a href="portfolio.php">Our Portfolio</a></li>
                                
                            <li><a href="pricing.php">Prices</a></li>
                                <li><a href="contacts.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1>
                            <a class="logo" href="home.php">NRsk<strong>'s</strong></a>
                            <span>Event Organizers</span>
                        </h1>
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" method="post" enctype="multipart/form-data">
                          <img src="images/pic-1.png" width="22" height="29"> <strong> (+91) 9171403616</strong>
                        </form>
                     </div>
                     
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header><div class="ic"></div>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                           <div class="trans" style="background-color:#FFFFD7">
                           <div class="container_12">
                           <h3 class="p0"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Register Yourself!!<br></h3>
                          
                           <table width="785" height="644"  align="center" cellpadding="30" cellspacing="30">
                           <tr><td colspan="3" align="center"> <h1><strong>Please read these instructions carefully before submitting your query.</strong></h1></td></tr>
                           <tr><td colspan="3"><h2>
 &nbsp; &nbsp; &nbsp; &nbsp; Enter your real name. Email should be valid as it will be used as your login username.<br>
&nbsp; &nbsp; &nbsp; &nbsp; All the fields are required.</h2></td></tr>
                             <tr>
                              <td width="190" align="right"><h2>1.</h2></td> <td width="190" align="middle"><h2>Full Name</h2></td>
                               <td><form name="u_register" action="" method="post">
                               <input name="name" type="text" size="40" maxlength="30"></td>
                             </tr>
                             <tr>
                             <tr>
                              <td width="190" align="right"><h2>2.</h2></td> <td width="190" align="middle"><h2>CNIC</h2></td>
                               <td><input name="cnic" type="text" size="40" maxlength="30"></td>
                             </tr>
                               <td width="190" align="right"><h2>3.</h2></td> <td align="middle"><h2>Email</h2></td>
                               <td><input name="email" type="text" size="40" maxlength="30"></td>
                             </tr>
                              <tr>
                               <td width="190" align="right"><h2>4.</h2></td> <td align="middle"><h2>Password</h2></td>
                               <td><input name="pass" type="password" size="40" maxlength="30"></td>
                             </tr>
                             <tr>
                               <td width="190" align="right"><h2>5.</h2></td> <td align="middle"><h2>Country</h2></td>
                               <td><select name="country">
                               <option value="Iran">Iran</option>
                               <option value="China">China</option>
                               <option value="Pakistan">Pakistan</option>
                               <option value="India">India</option>
                               </select></td>
                             </tr>
                             <tr>
                               <td width="190" align="right"><h2>6.</h2></td> <td align="middle"><h2>Address</h2></td>
                               <td><textarea name="address" cols="31" rows="5"></textarea></td>
                             </tr>
                             <tr>
                               <td width="190" align="right"><h2>7.</h2></td> <td align="middle"><h2>Contact No.</h2></td>
                               <td ><input name="contact_no" type="text" size="40" maxlength="30"></td>
                             </tr>
                        <tr>
                         <tr><td  colspan="3" align="middle"><h2><img src="captcha/c8.jpg" width="101" height="37" alt="XXX"></h2></td>
                              </tr>
                                <td width="190" align="right"><h2>8.</h2></td> <td width="190" align="middle"><h2>Enter image code.</h2></td>
                                 <td ><input name="image" type="text" size="40" maxlength="30"></td>
                              </tr>
                              
                             <tr>
                               <td colspan="3" align="center"><input name="u_insert" type="submit" value="SUBMIT"> &nbsp; &nbsp; <input name="reset" type="reset" value="RESET">
                               </td>
                              
                               
                             </tr></form>
                           </table>
                           <h3 class="p0"><br>
                           </h3>
                           
                       <?php
					   
	if(isset($_REQUEST['u_insert']))
	{    $p_name = $_REQUEST['name'];
		$p_cnic = $_REQUEST['cnic'];
		$p_email = $_REQUEST['email'];
		$p_pass = $_REQUEST['pass'];
		$p_add= $_REQUEST['address'];
		$p_contact = $_REQUEST['contact_no'];
		$p_country = $_REQUEST['country'];
		
	
		
		
	include "nrsk_event_db_connection.php";
	 	
	$sql = "INSERT INTO user_registration_table SET u_name='$p_name',u_cnic='$p_cnic', u_country='$p_country', u_Pass='$p_pass', u_address='$p_add', u_contact='$p_contact', u_email='$p_email'";
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
		echo "<tr>";
		echo "<td colspan=5 align=center  bgcolor=#000099> Record Inserted<br>Page Refresh in 05 seconds</td>";
		echo "</tr>";
	
		header('Location:login.php');
	}
	//mysql_close($con);	
	}
	   
   
		
		
?>
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
                    	<article class="grid_4">
                        	<h3 class="p2">Our Events </h3>
                            <div class="wrapper">
                            	<figure class="img-indent frame2"><img src="images/pay.jpg" alt="" width="170"/></figure>
                            <figure class="img-indent frame2"><img src="images/pay3.jpg" alt="" width="170"/></figure>
                            </div>
                        </article>
                        <article class="grid_8">
                        	<h3 class="prev-indent-bot2">Online Event Management</h3>
                            <div class="wrapper"> <figure class="img-indent frame2"><img src="images/pay2.jpg" alt="" width="170"/></figure>
                                <p class="prev-indent-bot color-4">We are facilitating you to choose the color, theme, decorations, menu, location and lighings for your own very Events just by registering on our website, Then login to your account and make your moments golden by selecting according to your choice!! </p>
                                <p class="prev-indent-bot">No need to come personally arrange the things , it all will be done by our dedicated and skilled staff!</p>
                               
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

