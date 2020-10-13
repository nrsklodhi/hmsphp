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
                                                              <li><a href="view_decorations.php">View Decoration Packages</a></li>
                                                                <li><a href="add_deco.php">Add Decoration Package</a></li>
                                                                <li><a href="edit_deco.php">Edit Decoration Packages</a></li>
                                                                <li><a href="view_arrangements.php">View Arrangements</a></li>
                                                                <li><a href="add_new_arr.php">Add Arrangements</a></li>
                                                                <li><a href="edit_arrangements.php">Edit Arrangements</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                            <h3 class="p2">Select the Decoration Type!</h3>
                                                            <div class="wrapper prev-indent-bot2">
                                                                         
                                                                 <?php
													    if (isset($_REQUEST['editid'])){
														$editid=$_REQUEST['editid'];   
														include "nrsk_event_db_connection.php";
	
	                     $sql = "SELECT * FROM decoration_packages WHERE dec_packg_id='$editid'";
						 $rs = mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
		$_price=$row['dec_packg_price'];
	   $_name=$row['dec_packg_name'];
	   $_items=$row['dec_packg_items'];
			}
			
			
	}
	    }
		 ?>
                                                         
                                                              <form id="contact-id" name="deco" method="post">
                                                              
                                   
                                                               
               <table width="400" border="0" cellspacing="2" cellpadding="10">
               <tr><td height="30"><span class="text-form"> <strong>  Package Name :</strong></span></td><td><input type="text" name="pname" size="38" value="<?php echo $_name ?>"></td></tr>
               <tr><td height="30"><span class="text-form"> <strong>  Package Price :</strong></span></td><td><input type="text" name="price" size="38" value="<?php echo $_price ?>" readonly></td></tr>
               <tr><td height="30"><span class="text-form"> <strong>  Package Items :</strong></span></td><td><input type="text" name="items" size="38" value="<?php echo $_items ?>" readonly></td></tr>
               <tr><td height="30" colspan="2">Choose decorations you want in package!</td></tr>
  <?php
    include "nrsk_event_db_connection.php";
	$sql1="Select * FROM decoration_details ";
    	$rs = mysql_query($sql1) or die(mysql_error());
	$_SESSION['myrowsc']	=mysql_num_rows($rs);
		if(mysql_num_rows($rs)>0)
	{
		$c=0;
	while($row = mysql_fetch_array($rs))
	{
		
		echo "<tr><td height=30><span class=text-form><strong>".$row['dec_type_name']. " </strong></span></td><td width=200> <input type=checkbox value=".$row['dec_id']." name=activate[]>&nbsp; &nbsp; Rs. &nbsp;".$row['dec_price']."</td><tr>"; 
		
		
		$c++;
		
		$_SESSION['hr_pid']=$row['dec_id'];
	   
			}
			
			
	}


?>


  <tr><td><br></td></tr>
</table>
            
                <br>
                <div >  
     <input type="image"  src="images/button (2).png" name="img_submit5">
     
                                            </div>                
                                              </fieldset>	
                                            </form>

                    
             <?php  echo "<tr><td><br></td></tr></table>";
			 ?>                                              
    
                               <?php
																 														 
   									 
       if(isset($_REQUEST['img_submit5_x']))
	   {
	  $_SESSION['pack_name']=$_REQUEST['pname'];
        include "nrsk_event_db_connection.php";
		$sql = "UPDATE decoration_packages SET dec_packg_name='$_SESSION[pack_name]' WHERE dec_packg_id='$editid'"; 
	
	
	
	   $rs = mysql_query($sql) or die(mysql_error());
	
	   if($rs == 1)
	   {

          if (isset($_REQUEST['activate'])){
	      $activate = $_POST['activate']; 
          foreach($activate as $a) 
  
  {
   include "nrsk_event_db_connection.php";
  $sql1="Select * FROM decoration_details where dec_id=$a";
    	$rs = mysql_query($sql1) or die(mysql_error());
		//$_SESSION['myitems']=mysql_num_rows($rs);
		if(mysql_num_rows($rs)>0)
		
		{ 
			while($row = mysql_fetch_array($rs))
	{
		
	     $arrid[]=$row['dec_id'];
	  
		$my[]=$row['dec_price'];
       
	}
			
			
		}
}

$sql = "DELETE FROM decoration_pckg_details WHERE dec_packg_id=$editid";
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
  $arrlength=count($arrid);
  $_SESSION['myitems']= $arrlength;
  
  for($x=0;$x<$arrlength;$x++)
  {
  echo $arrid[$x];
    include "nrsk_event_db_connection.php";
	$sql = "INSERT INTO decoration_pckg_details SET dec_packg_id='$editid' ,dec_id='$arrid[$x]'"; 
	
	

	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
		
		
		echo "<tr><td>Data Inserted</td><tr>" ;
	

	}
  echo "<br>";
  }
	}
  $add=0;
foreach($my as $value){
	
 $add=$add+$value;
 $_SESSION['hr_rate']=$add;
}	



       include "nrsk_event_db_connection.php";
		$sql = "UPDATE decoration_packages SET dec_packg_price='$_SESSION[hr_rate]' ,dec_packg_items='$_SESSION[myitems]' WHERE dec_packg_id=$editid"; 
	
	
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
	header('Location:edit_deco.php');
	}
	

   }
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
