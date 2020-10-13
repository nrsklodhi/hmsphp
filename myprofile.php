<?php
	
	session_start();
	
	if (!isset($_SESSION['s_email'])&&!isset($_SESSION['s_uid'])) {
  
  header('Location:login.php');
  exit();
}

if(isset($_SESSION['od_id'])){
	
	$_SESSION['od_id']=0;
	
	
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   


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
                  <div class="box p3" style="background-color:#FFFFD7">
                  <div class="trans" style="background-color:#FFFFD7">
                    <div class="container_12">
                         <table width="962" border="0" cellspacing="2" cellpadding="10"  >
  <tr>
  <td width="44" colspan=""> <br> </td>
  </tr>
  <tr>
  
    <th width="218" scope="row"  bgcolor="#000000"><a href="myprofile.php" target="_self"><img src="images/button (5).png" width="144" height="40"></a><br></th>
    <th width="179"  bgcolor="#000000"> <a href="select_event.php" target="_self"><img src="images/button (6).png" width="157" height="40"></a>
     <br> </td>
   
    <th width="239"  bgcolor="#000000"> <a href="order_history.php" target="_self"><img src="images/button (8).png" width="178" height="40"></a><br></th>
  </tr>
  <tr><td colspan="4"><br></td></tr>
</table> 
                      <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">This is Your Profile Data</h3>
                                                    
  
      <?php
	
	include "nrsk_event_db_connection.php";
	 $s_id = $_SESSION['s_uid'];

	$sql = "SELECT * FROM user_registration_table WHERE u_id='$s_id' ";
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	while($row = mysql_fetch_array($rs))
	{
		echo  "
		
		<table width=950 height=300 border=0 align=center cellpadding=10 cellspacing=2>
  <tr><td> <br> <br> </td></tr>";
  echo "<tr> <th height=50 scope=row  align=left width=200> &nbsp; &nbsp; &nbsp; &nbsp; Name</th>
   <td  align=left bgcolor=#FFFFCC> &nbsp; &nbsp; " . $row['u_name'] . " &nbsp; </td>
  </tr>
  <tr>
    <th height=50 scope=row  align=left>&nbsp; &nbsp; &nbsp; &nbsp;  Email</th>
    <td  align=left bgcolor=#FFFFCC> &nbsp; &nbsp; " . $row['u_email'] . " &nbsp; </td>
  </tr>
  <tr>
    <th height=50 scope=row  align=left> &nbsp; &nbsp; &nbsp; &nbsp;  Password</th>
    <td  align=left bgcolor=#FFFFCC> &nbsp; &nbsp; "  . $row['u_pass'] . " &nbsp;  </td>
  </tr>
  <tr>
    <th height=50 scope=row  align=left>&nbsp; &nbsp; &nbsp; &nbsp;  Country</th>
    <td  align=left bgcolor=#FFFFCC> &nbsp; &nbsp;  " . $row['u_country'] . " &nbsp; </td>
  </tr>
  <tr>
    <th height=50 scope=row  align=left> &nbsp; &nbsp; &nbsp; &nbsp; Address</th>
    <td  align=left bgcolor=#FFFFCC> &nbsp; &nbsp; " . $row['u_address'] . " &nbsp; </td>
  </tr>
  <tr>
    <th scope=row height=50 align=left > &nbsp; &nbsp; &nbsp; &nbsp; Contact No</th>
    <td  align=left bgcolor=#FFFFCC> &nbsp; &nbsp;  " . $row['u_contact'] . " &nbsp;  <br> <br> </td>
  </tr>
  <tr><td bgcolor=#FFCC99 width=2000 colspan=3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  </td>
  </tr>
</table>
";
		
		}
	
	mysql_close($con);
	
?> 
                                                    
                                                 <?php
			echo "<table><tr><td><br></td></tr></table>";
			?>     
                                                </div>
                                            </div>
                                        </div>

                       
                       
                               <div>
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

NRsk's Evenst Organizers are handling a variety of specific event-related services, which can range from a few select services for clients with limited budgets, to handling all creative, technical and logistical aspects of an event.</p>
            	      </article>
          	      </div>
          	    </div>
   	  
           	  </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
<?php include('footer.php');?></body>
</html>

