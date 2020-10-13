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
                                                              <li><a href="menu_page.php">View Menu Packages</a></li>
                                                                <li><a href="add_menu.php">Add Menu Package</a></li>
                                                                <li><a href="edit_menu.php">Edit Menu Packages</a></li>
                                                                <li><a href="view_menu_dt.php">View Menu Dishes</a></li>
                                                                <li><a href="add_new_menu.php">Add Menu Dishes</a></li>
                                                                <li><a href="edit_menu_dish.php">Edit Menu Dishes</a></li>
                                                               
                                                                
                                                                
                                                            </ul>
                                                        </div>
                                                    </article>
                                                    <article class="grid_8 omega">
                                                        <div class="indent-right">
                                                         
                                                            <div class="wrapper prev-indent-bot2">
         <h3 class="p2"> &nbsp; &nbsp; You Chose Menu Package To Edit :</h3>
                                                           
                                                                
                                                               
<form name="edit_pack" method="post" id="">
<table width="500">
                                                              <tr> <td height="35">
                                                               <span class="text-form"> <strong>  Choose Event :</strong></span> 
															  </td> 
															  <td ><?php
	
	echo "<select name=event_name class=mydropdown onChange=showData6(this.value)>";
		include "nrsk_event_db_connection.php";
		$sql="Select * From events_table";
		
		$rs = mysql_query($sql) or die(mysql_error());
		$myrows =mysql_num_rows($rs);
		
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	echo "<option value=" . $row['main_event_id'] . ">" . $row['main_event_name'] . "</option>";

	}
	mysql_close($con);
	}
	  echo "</select>"; 
	  
               ?>
               
               </td></tr>

 <?php
	$editid = $_REQUEST['editid'];
	include "nrsk_event_db_connection.php";
				$sql="Select * From events_table a, menu_table t WHERE a.main_event_id= $_SESSION[event_name_id] AND t.menu_packg_id=$editid";
	$rs = mysql_query($sql) or die(mysql_error());
	
	while($row=mysql_fetch_array($rs))
	{
		
		 $t_ename = $row['main_event_name'];
		$t_pname = $row['menu_package'];
		$t_items = $row['menu_package_items'];
		$t_price= $row['menu_price'];
		
	}
	
	echo "<tr><td height=35><b>Event Type of this Menu Package is :<b></td><td>".$t_ename."</td></tr>";
	
	
	 echo "<tr> <td height=35>
               <span class=text-form> <strong> Enter Package Name :</strong></span></td><td> <input size=38 type=input name=package value='".$t_pname."'></td></tr>";
         
		  echo "<tr> <td height=35>
               <span class=text-form> <strong> Packge Price :</strong></span></td><td><input name=price type=text size=38 value=".$t_price." readonly></td></tr>";
			    echo "<tr> <td height=35>
               <span class=text-form> <strong>No. of Items :</strong></span></td><td><input readonly name=items type=text size=38 value=".$t_items."></td></tr>";
			   echo "<tr><td valign=top><b>Already in Package :<b></td><td >
			   ";
			   
			   
	include "nrsk_event_db_connection.php";
	$msql="Select * From menu_details e , menu_packg_details d where menu_packg_id=$editid AND e.menu_detail_id=d.menu_detail_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				
				  		
	
		if(mysql_num_rows($mrs)>0)
	{
		
	

		while($mrow = mysql_fetch_array($mrs))
		{
			
		 echo $mrow['package_item'];
        echo "<br>";
     
		
	}
	
	}
	
	echo "</td></tr>";

	?>
                   <tr><td height="30" colspan="2"><b>Choose items you want in package!</b></td></tr>
  <?php
    include "nrsk_event_db_connection.php";
	$sql1="Select * FROM menu_details ";
    	$rs = mysql_query($sql1) or die(mysql_error());
	$_SESSION['myrowsc']	=mysql_num_rows($rs);
		if(mysql_num_rows($rs)>0)
	{
		$c=0;
	while($row = mysql_fetch_array($rs))
	{
		
		echo "<tr><td height=35><span class=text-form><strong>".$row['package_item']. " </strong></span></td><td width=200> <input type=checkbox value=".$row['menu_detail_id']." name=activate[]>&nbsp; &nbsp; Rs. &nbsp;".$row['menu_dtl_price']."</td><tr>"; 
		
		
		$c++;
		
		$_SESSION['hr_pid']=$row['menu_detail_id'];
	   
			}
			
			
	}


?>
    
             <?php  echo "<tr><td><br></td></tr></table>";
			 ?>
                <br>
                <div align="center">  
     <input type="image"  src="images/button (2).png" name="img_submit3">
     
                                            </div>                
                                              	
                                              </table>
                                            </form>
	
		
	<?php  echo "<tr><td><br></td></tr></table>";
			 ?>
 <?php
	
	 if (isset($_REQUEST['activate'])){
	  $activate = $_POST['activate']; 
        foreach($activate as $a) 
  
{
   include "nrsk_event_db_connection.php";
  $sql1="Select * FROM menu_details where menu_detail_id=$a";

    	$rs = mysql_query($sql1) or die(mysql_error());
		//$_SESSION['myitems']=mysql_num_rows($rs);
		if(mysql_num_rows($rs)>0)
		
		{ 
			while($row = mysql_fetch_array($rs))
	{
		
	      $arrid[]=$row['menu_detail_id'];
	  
		$my[]=$row['menu_dtl_price'];
       
	}
			
			
		}
}

$sql = "DELETE FROM menu_packg_details WHERE menu_packg_id=$editid";
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
	 $arrlength=count($arrid);
  $_SESSION['myitems']= $arrlength;
  foreach($arrid as $value2)
  {
    echo $value2;
    include "nrsk_event_db_connection.php";
	
	$sql = "INSERT INTO menu_packg_details SET menu_detail_id='$value2' , menu_packg_id='$editid'"; 
	
	

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

   }
   						
    if(isset($_REQUEST['img_submit3_x']))
	{
		echo $p_name = $_REQUEST['package'];
		$p_event = $_REQUEST['event_name'];
		
	include "nrsk_event_db_connection.php";
	 	
	$sql = "UPDATE menu_table SET main_event_id=$p_event , menu_package='$p_name' ,menu_price='$_SESSION[hr_rate]' ,menu_package_items='$_SESSION[myitems]' WHERE menu_packg_id=$editid";
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
		echo "<tr>";
		echo "<td colspan=5 align=center bgcolor=#99CC00>Record Updated<br>Page Refresh in 05 seconds</td>";
		echo "</tr>";
		
		header('refresh:3, url=edit_menu_package.php');
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
