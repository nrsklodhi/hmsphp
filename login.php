<?php
	ob_start();
	session_start();
	if (isset($_SESSION['s_email'])&&isset($_SESSION['s_uid'])) {
  
  header('Location:myprofile.php');
  exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
	<!--==============================header=================================-->
    <?php include('header.php');?><div class="ic"></div>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                           <div class="trans" style="background-color:#FFFFD7">
                           <div class="container_12">
                           <h3 class="p0">&nbsp; &nbsp; &nbsp; &nbsp; Login Here!<br></h3>
                          
                           <table width="785" height="254"  align="center" cellpadding="30" cellspacing="30">
                           <form name="user_login" action="" method="post">
                           <tr><td colspan="3" align="center"> <h1><strong>Make sure capslock is off .</strong></h1></td></tr>
                          
                             
                             
                             <tr>
                               <td width="190" align="right"><h2>1.</h2></td> <td align="middle"><h2>Username</h2></td> 
                               <td><input name="u_name" type="text" size="40" maxlength="30"></td>
                             </tr>
                             <tr>
                               <td width="190" align="right"><h2>2.</h2></td> <td align="middle"><h2>Password</h2></td>
                              
                               <td ><input name="pass" type="password" size="40" maxlength="30"></td>
                             </tr>
                             
                             <tr>
                               <td colspan="3" align="center"><input type="image" src="images/button (3).png" name="u_login" ></td>
                             </tr> 
                             </form>
                           </table>
                           <h3 class="p0"><br>
                           </h3>
                                      <?php
	if(isset($_REQUEST['u_login_x']))
	{
		 $u_name=$_REQUEST['u_name'];
	   $u_pass=$_REQUEST['pass'];
	    include "khan_event_db_connection.php";
		$sql="Select * From user_registration_table Where u_email='$u_name' AND u_Pass='$u_pass'";
		
		$rs = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		//$_SESSION=array();
		$_SESSION['s_email']=$row['u_email'];
		$_SESSION['s_uname']=$row['u_name'];
		$_SESSION['s_uid']= $row['u_id'];
		
		header("Location: myprofile.php");
	
	}
	mysql_close($con);
	}
	else
	{
		echo"<font color=#663300 size=+4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid login</font>";
	}
	
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
            	    <div class="wrapper">
            	      <figure class="img-indent frame2"><img src="images/pay2.jpg" alt="" width="170"/></figure>
            	      <p class="prev-indent-bot color-4">We are facilitating you to choose the color, theme, decorations, menu, location and lighings for your own very Events just by registering on our website, Then login to your account and make your moments golden by selecting according to your choice!!
            	      No need to come personally to arrange the things , it all will be done by our dedicated and skilled staff!</p>
                      <p>NRsK's Event managers are supervising diverse corporate events, such as product launches, press conferences, corporate anniversary parties, meetings, conferences, and marketing programs such as road shows and grand opening events.
                      </p>
                      <p class="prev-indent-bot color-4">

NRsK's Evenst Organizers are handling a variety of specific event-related services, which can range from a few select services for clients with limited budgets, to handling all creative, technical and logistical aspects of an event.</p>
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

