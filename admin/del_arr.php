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
                                                               <li><a href="mange_arrangements.php">View Arrangements Packages</a></li>
                                                                <li><a href="add_arr.php">Add Arrangements Package</a></li>
                                                                <li><a href="edit_arr_main_page.php">Edit Arrangements Packages</a></li>
                                                                <li><a href="view_arrangements.php">View Arrangements</a></li>
                                                                <li><a href="add_new_arr.php">Add Arrangements</a></li>
                                                                <li><a href="edit_arrangements.php">Edit Arrangements</a></li>
                                                               
                                                                
                                                                
                                                            </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                            <h3 class="p2"> The Arrangements are !</h3>
                                                            <div class="wrapper prev-indent-bot2">
                                                             
                                                                 
                                                                <?php
																
	if (isset($_REQUEST['delid'])){
	$delid = $_REQUEST['delid'];
	
	
	include "nrsk_event_db_connection.php";
	$sql="DELETE From event_arrangements WHERE arrangement_id=$delid";
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
	header('Location:view_arrangements.php');	
	}
	
																}
	?>
    
    <?php  
	if (isset($_REQUEST['editid'])){
	$editid=$_REQUEST['editid'];
	
 include "nrsk_event_db_connection.php";
$sql = "SELECT * FROM event_arrangements where arrangement_id='$editid'"; 
	
	
	
	$rs = mysql_query($sql) or die(mysql_error());
	
		if(mysql_num_rows($rs)>0)
	{
		
	

		while($row = mysql_fetch_array($rs))
		{
			
		 $name= $row['material_name'];
         $price=$row['material_price'];
        
	}
	
	}
	
	
	 
	}
	
	
                                        
?>


 <table>
                                                                
                                                              <form id="contact-id" name="choose_eve" method="post">
                                                              <fieldset>
                                                               <tr><td height="35"><span class="text-form"> <strong>  Enter the Arrangement Name :</strong></span> </td><td><input name="name" type="text" size="38" value="<?php echo $name?>"></td></tr>
                                                               <tr><td height="35"><span class="text-form"> <strong>  Enter the Arrangement Price :</strong></span></td><td><input name="price" type="text" size="38" value="<?php echo $price?>"></td></tr>
															   
               </label>
             <?php  echo "<tr><td><br></td></tr></table>";
			 ?>
                <br>
                <div align="center">  
     <input type="image"  src="images/button (2).png" name="img_submit3">
     
                                            </div>                
                                              </fieldset>	
                                            </form>
                                        </fieldset>
                                        </table>
                                        
                                        

                                                               
                                        <?php
  if(isset($_REQUEST['img_submit3_x']))
	
	{ 
	
	
	 $_name = $_REQUEST['name'];
	 $_price=$_REQUEST['price'];
	  include "nrsk_event_db_connection.php";
		$sql = "UPDATE event_arrangements SET material_name='$_name' , material_price='$_price' WHERE arrangement_id='$editid'"; 
	
	
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{

	header('Location:view_arrangements.php');

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
</body>
</html>
