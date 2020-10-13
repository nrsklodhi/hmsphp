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
                                                   <div class="indent-left">
                                                   
                                                            <div class="wrapper prev-indent-bot2">
                                                                
               <?php
																 
																 
     if (isset($_REQUEST['activate'])){
	  $activate = $_POST['activate']; 
        foreach($activate as $a) 
  
{
   include "nrsk_event_db_connection.php";
  $sql1="Select * FROM event_arrangements where arrangement_id=$a";
    	$rs = mysql_query($sql1) or die(mysql_error());
		//$_SESSION['myitems']=mysql_num_rows($rs);
		if(mysql_num_rows($rs)>0)
		
		{ 
			while($row = mysql_fetch_array($rs))
	{
		
	     $arrid[]=$row['arrangement_id'];
	  
		$my[]=$row['material_price'];
       
	}
			
			
		}
}


  $arrlength=count($arrid);
  $_SESSION['myitems']= $arrlength;
  for($x=0;$x<$arrlength;$x++)
  {
  echo $arrid[$x];
    include "nrsk_event_db_connection.php";
	$sql = "INSERT INTO arrangement_packg_details SET arr_packg_id='$_SESSION[arr_packg_id]' ,arrangement_id='$arrid[$x]'"; 
	
	

	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
		
		
		echo "<tr><td>Data Inserted</td><tr>" ;
	

	}
  echo "<br>";
  }
  
  $add=0;
foreach($my as $value){
	
 $add=$add+$value;
 $_SESSION['hr_rate']=$add;
}	

   }
   									 
  if(isset($_REQUEST['img_submit3_x']))
	
	{ 
	
	
	// $_SESSION['event_name_id'] = $_REQUEST['event_name'];
	 //$_eid=$_SESSION['event_name_id'];
	  
include "nrsk_event_db_connection.php";
		$sql = "UPDATE arrangement_package SET arr_packg_price='$_SESSION[hr_rate]' ,arr_packg_items='$_SESSION[myitems]' WHERE arr_packg_id=$_SESSION[arr_packg_id]"; 
	
	
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
	header('Location:view_arr_page.php');
	}
	
	
	
	 
	}
  ?>
                                                                
                                                                
                                                              <form id="contact-id" name="choose_eve" method="post">
                                                              <fieldset>
                                                               
               <table width="600" border="0" cellspacing="2" cellpadding="10">
               <?php
			   echo "<tr><td><b>Package Name</b></td><td>".$_SESSION['packname']."<br><br></td></tr>";
			   
			   
			   ?>
               <tr><td height="30" colspan="2"><b>Choose items you want in package!</b></td></tr>
  <?php
    include "nrsk_event_db_connection.php";
	$sql1="Select * FROM event_arrangements ";
    	$rs = mysql_query($sql1) or die(mysql_error());
	$_SESSION['myrowsc']	=mysql_num_rows($rs);
		if(mysql_num_rows($rs)>0)
	{
		$c=0;
	while($row = mysql_fetch_array($rs))
	{
		
		echo "<tr><td height=35 width=300><span class=text-form><strong>".$row['material_name']. " </strong></span></td><td width=200> <input type=checkbox value=".$row['arrangement_id']." name=activate[]>&nbsp; &nbsp; Rs. &nbsp;".$row['material_price']."</td><tr>"; 
		
		
		$c++;
		
		$_SESSION['hr_pid']=$row['arrangement_id'];
	   
			}
			
			
	}


?>


  <tr><td><br></td></tr>
</table>
               
             <?php  echo "<tr><td><br></td></tr></table>";
			 ?>
                <br>
                <div align="center">  
     <input type="image"  src="images/button (2).png" name="img_submit3">
     
                                            </div>                
                                              </fieldset>	
                                            </form>

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
