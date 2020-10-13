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
                                                              <li><a href="view_decorations.php">View Decoration Packages</a></li>
                                                                <li><a href="add_deco.php">Add Decoration Package</a></li>
                                                                <li><a href="edit_deco.php">Edit Decoration Packages</a></li>
                                                                <li><a href="view_deco.php">View Decorations</a></li>
                                                                <li><a href="add_new_deco.php">Add Decorations</a></li>
                                                              <li><a href="edit_decorations.php">Edit Decorations</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                            <h3 class="p2">Decoration Packages are!</h3>
                                                            <div class="wrapper prev-indent-bot2">
                                                                
                                                                 <?php
				include "nrsk_event_db_connection.php";
				$sql="Select * From event_decorations";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=500 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=150 height=40 scope=row >Decoration Name</th>
    <th width=290 scope=row align=left>&nbsp; &nbsp; &nbsp; Type Name</th>
    <th width=100 scope=row align=left>Price</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top >".$row['event_dec_name']."</td>";
	
	
	echo "</tr>";
	  $dec_id= $row['event_dec_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From decoration_details where event_dec_id=$dec_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=200> </td>";
		
		 echo "<td width=250 align=left bgcolor=#FFFFCC>&nbsp; &nbsp; &nbsp; ".$mrow['dec_type_name']."</td>";
		  echo "<td >Rs. &nbsp; ".$mrow['dec_price']."</td>";
    
 echo" </tr>";
  
		
	}
	 echo " <tr><td></td> <td bgcolor=#FFCC99 colspan=2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
  </td>
  </tr>";
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
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
</body>
</html>
