<?php
	ob_start();
	session_start();
	
	if (!isset($_SESSION['s_username'])&&!isset($_SESSION['s_uid'])) {
  
  header('Location:admin_home.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
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
<body id="page2">
	<!--==============================header=================================-->
    <header>
    <?php
if (!isset($_SESSION['s_name'])){
                          echo "<div class=mybar id=L1 style=background-image:url(images/bg-top-tail2.jpg)> 
      <div class=menu> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                <a href=admin_home.php>Login</a> </div></div>";     
    }
	
	
	else
	{

 echo "  <div class=mybar  id=L2 style=background-image:url(images/bg-top-tail2.jpg)> 
      <div class=menu>  &nbsp; &nbsp;";
	
	$name= $_SESSION['s_name'];
echo " Welcome $name ";
	echo " &nbsp; | &nbsp; <a href=myadmin.php class=active><strong>My Home</strong></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             <a href=logout.php><strong>Logout</strong></a>
							 
							 <br>  </div></div>";



                         }
    ?>
    
   
    <div class="row-2">
       	<div class="main">
            	<div class="container_12">





                	<div class="grid_9">
                    	<h1>
                            <a class="logo" href="home.php">Sam<strong>'s</strong></a>
                            <span>Event Organizers</span>
                        </h1>
                       
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" method="post" enctype="multipart/form-data">
                    	  <img src="images/cooltext1148775572.png" width="298" height="46">
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
                                <div class="wrapper">
                                  <table width="981" border="0" cellspacing="10" cellpadding="" align="center">
  <tr><td colspan="6"><br></td></tr>
  <tr>
    <td width="183">&nbsp; &nbsp; &nbsp; <a href="mange_arrangements.php"> <img src="images/admin (3).png" width="183" height="38"></a></td>
    <td width="159">&nbsp; <a href="view_decorations.php"><img src="images/admin (4).png" width="159" height="38"></a></td>
    <td width="108"><span><a href="orders_page.php"><img src="images/admin (5).png" width="108" height="39"></a></span></td>
    <td width="97"><a href="menu_page.php"><img src="images/admin (7).png" width="97" height="38"></a></td>
    <td width="140"><a href="beverages_page.php"><img src="images/admin (8).png" width="140" height="38"></a></td>
    <td width="160"><a href="users_page.php"><img src="images/admin (6).png" width="95" height="38"></a></td>
    </tr>
    <tr><td colspan="6"><br></td></tr>

  
 
</table>
                                            <div class="grid_12">
                                                <div class="wrapper">
                                                    <article class="grid_4 alpha">
                                                        <div class="indent">
                                                            <h3 class="prev-indent-bot2">Your Links : </h3>
                                                            <ul class="list-2">
                                                              <li><a href="orders_page.php">View Orders</a></li>
                                                                <li><a href="del_order.php">Delete Order</a></li>
                                                               
                                                               
                                                                
                                                                
                                                            </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                            <h3 class="p2"> The Orders Details are !</h3>
                                                            <div class="wrapper prev-indent-bot2">
                                                            
                               <?php
							   if(isset($_REQUEST['myid'])){
								   $myid=$_REQUEST['myid'];
								   
	 
								   
								   	include "nrsk_event_db_connection.php";
				$sql="Select * From user_registration_table u, order_table o WHERE u.u_id=o.u_id AND u.u_id='$myid' ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=600 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
  <th width=200 height=40 scope=row align=left>Content</th>
    <th width=200 height=40 scope=row align=left >Data</th>
   
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>";
   echo "<tr><td ><b>Name</b></td><td>". $row['u_name']."</td>";
        echo "<tr><td><b>CNIC no.</b></td><td>".$row['u_cnic']."</td></tr>";
		echo "<tr><td ><b>Contact no.</b></td><td>". $row['u_contact']."</td></tr>";
        echo "<tr><td ><b>Email</b></td><td>".$row['u_email']."</td></tr>";
		 echo "<tr><td><b>Address</b></td><td>". $row['u_address']."</td></tr>";
        echo "<tr><td ><b>Order ID</b></td><td>".$row['order_id']."</td></tr>";
		echo "<tr><td ><b>Date Of Order</b></td><td>". $row['date_of_order']."</td></tr>";
        echo "<tr><td><b>Time Of Order</b></td><td>".$row['time_of_order']."</td></tr>";
		 echo "<tr><td><b>Total Bill Payable</b></td><td>Rs. &nbsp;".$row['total_bill']."</td></tr>";
		$_SESSION['event'] =$row['main_event_id'];
		$od_id=$row['order_id'];
	
	  $msql="Select * From event_order u, ordered_arrangements o WHERE (u.order_id='$od_id' AND o.order_id='$od_id') ";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		  echo "<tr><td ><b>Date of Event</b></td><td>".$mrow['date_of_event']."</td></tr>";
		 echo "<tr><td><b>Event Timings</b></td><td>". $mrow['event_timings']."</td></tr>";
        echo "<tr><td ><b>Event Location</b></td><td>".$mrow['event_location']."</td></tr>";
		 echo "<tr><td><b>No. of Guests</b></td><td>". $mrow['no_of_guests']."</td></tr>";
       
    
          $_SESSION['eve_id']=$mrow['event_id'];
		 $_SESSION['theme_id']= $mrow['theme_id'];
       $_SESSION['arr_id']= $mrow['arr_packg_id'];
	 $_SESSION['pack_id']=  $mrow['dec_packg_id'];
	$_SESSION['event_id']=  $mrow['event_id'];	
	}
	
	}
  
	 
	}
	
	
		}
	    include "nrsk_event_db_connection.php";
		$sql="Select * From ordered_hr h, hr_table t where h.order_id='$od_id' AND h.hr_id=t.hr_id";
		
		$rs = mysql_query($sql) or die(mysql_error());
		$myrows =mysql_num_rows($rs);
		
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		echo "<tr><TD width= 200> <strong>".$row['hr_name']."&nbsp;</strong></td> <td width= 200>Rs. &nbsp;". $row['hr_price']."</td></tr>";
	 

	}
	mysql_close($con);
	}
	
			 include "nrsk_event_db_connection.php";
        $sql = "SELECT * FROM events_table WHERE main_event_id=$_SESSION[event]";
	
	$rs = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
		
	echo "<tr><td ><b>Event Type</td>";	
		
	echo	"<td>".$row['main_event_name']."</td></tr>";
		
			}
	
	}
 include "nrsk_event_db_connection.php";
        $sql = "SELECT * FROM event_themes WHERE theme_id=$_SESSION[theme_id]";
	
	$rs = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		

		echo "<tr><td><b>Event Theme</td>";	
		echo "<td>".$_SESSION['theme_name']=$row['theme_name']."</td></tr>";
		
			}
	
	}
	include "nrsk_event_db_connection.php";
        $sql = "SELECT * FROM event_type WHERE event_id=$_SESSION[event_id]";
	
	$rs = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	
		echo "<tr><td><b>Event Name</td>";	
		echo "<td>".$_SESSION['event_type_name']=$row['event_name']."<br></td></tr></table>";
		
			}
	
	}         
	
	
	
	include "nrsk_event_db_connection.php";
				$sql="Select * From arrangement_package where arr_packg_id=$_SESSION[arr_id]";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=600 border=0 cellspacing=2 cellpadding=10 align=center>
	 <tr><td colspan=3><br></td></tr>
	 <tr><td colspan=3><strong>Ordered Arrangement Package is!</strong></td></tr>
	 
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left><br> Package Items</th>
    <th width=228 scope=row align=left><br> Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['arr_packg_name']."</th>";
	echo "<td width=266>".$row['arr_packg_items']."&nbsp; Package Items</td>";
	echo "<td width=266> &nbsp; Rs.".$row['arr_packg_price']."  </td>";
	echo "</tr>";
	  $dec_id= $row['arr_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From event_arrangements e , arrangement_packg_details d where arr_packg_id=$dec_id AND e.arrangement_id=d.arrangement_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left>".$mrow['material_name']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br></td></tr></table>";
	}
	
	include "nrsk_event_db_connection.php";
				$sql="Select * From  decoration_packages where dec_packg_id=$_SESSION[pack_id]";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=600 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr><td colspan=3><strong>Ordered Decortion Package is!</strong></td></tr>
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left><br> Package Items</th>
    <th width=228 scope=row align=left><br> Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['dec_packg_name']."</th>";
	echo "<td width=266 >".$row['dec_packg_items']."&nbsp; Package Items</td>";
	echo "<td width=266>Rs. &nbsp;".$row['dec_packg_price']."</td>";
	echo "</tr>";
	  $dec_id= $row['dec_packg_id'];
	  
	  $msql="Select * From decoration_pckg_details d , decoration_details e where d.dec_packg_id=$dec_id AND d.dec_id=e.dec_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
						
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left>".$mrow['dec_type_name']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
	 include "nrsk_event_db_connection.php";
      $sql = "SELECT * FROM ordered_menu WHERE order_id='$od_id'";
	
	$rs = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
     	$_SESSION['menuid']=$row['menu_packg_id'];
     	$_SESSION['bev']=$row['bev_packg_id'];
			}
	
	}
	include "nrsk_event_db_connection.php";
				$sql="Select * From beverage_packages WHERE bev_packg_id='$_SESSION[bev]'; ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=600 border=0 cellspacing=2 cellpadding=10 align=center>
	 <tr><td colspan=3><strong>Ordered Beverages are!</strong></td></tr>
  <tr>
 
    <th width=200 height=40 scope=row >Package Name</th>
    <th width=228 scope=row align=left>&nbsp; &nbsp; &nbsp; Package Items</th>
    <th width=228 scope=row align=left>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
   
    <th height=30 scope=row valign=top>".$row['bev_packg_name']."</th>";
	echo "<td width=266 >&nbsp; &nbsp; &nbsp; ".$row['bev_packg_items']."&nbsp; Package Items</td>";
	echo "<td width=266>Rs. &nbsp;".$row['bev_packg_price']."</td>";
	echo "</tr>";
	  $dec_id= $row['bev_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From bev_packg_details b , beverages_table d where b.bev_packg_id=$dec_id AND b.beverage_id=d.beverage_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left bgcolor=#FFFFCC>&nbsp; &nbsp; &nbsp; ".$mrow['beverage_name']."</td>
    
  </tr>";
  
		
	}
	
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
				                  
				include "nrsk_event_db_connection.php";
				$sql="Select * From menu_table WHERE menu_packg_id='$_SESSION[menuid]';";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=600 border=0 cellspacing=2 cellpadding=10 align=center>
	 <tr><td colspan=3><strong>Ordered Arrangement Menu is!</strong></td></tr>
  <tr>
 
    <th width=200 height=40 scope=row >Package Name</th>
    <th width=228 scope=row align=left>&nbsp; &nbsp; &nbsp;  Package Items</th>
    <th width=228 scope=row align=left>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
 
    <th height=30 scope=row valign=top>".$row['menu_package']."</th>";
	echo "<td width=266>&nbsp; &nbsp; &nbsp; ".$row['menu_package_items']."&nbsp; Menu Items</td>";
	echo "<td width=266>Rs. &nbsp;".$row['menu_price']."&nbsp; </td>";
	echo "</tr>";
	  $dec_id= $row['menu_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From menu_details d , menu_packg_details m where menu_packg_id=$dec_id AND d.menu_detail_id=m.menu_detail_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=228 colspan=3 align=left bgcolor=#FFFFCC>&nbsp; &nbsp; &nbsp; ".$mrow['package_item']."</td>
    
  </tr>";
  
		
	}
	
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
							   }
	
	
	
	
	
                
  ?>                
      
  
                  </div>
                                   </article>
                                </div>
                             </div>
                         </div>
                      </div>
                  </div>
              </div>
          </div>
                            <div class="container_12">
                            	<div class="wrapper">
                                	
                                	
                                   
                                  
                                </div>
                            </div>
      </div>
                    </div>
                </div>
            </div>	
    </div>
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12"></div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
<?php include('footer.php');?>
</html>

