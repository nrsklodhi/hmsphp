<?php
	
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script> 

<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","arrangement_data.php?q="+str,true);
xmlhttp.send();
}
</script>


<script>
function showData2(str)
{
if (str=="")
  {
  document.getElementById("txtHint2").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","decoration_data.php?s="+str,true);
xmlhttp.send();
}
</script>

<script>
function showData3(str)
{
if (str=="")
  {
  document.getElementById("txtHint3").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint3").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","menu_data.php?m="+str,true);
xmlhttp.send();
}
</script>



<script>
function showData4(str)
{
if (str=="")
  {
  document.getElementById("txtHint4").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint4").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","beverage_data.php?b="+str,true);
xmlhttp.send();
}
</script>

<script type="text/javascript" src="js/alltoggle_div.js">
</script>
	<!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
</head>
<body id="page4">
	<!--==============================header=================================-->
	<?php include('header.php');?>
	<div class="ic">More Website Templates  @ TemplateMonster.com - August22nd 2011!</div>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                           <div class="trans" style="background-color:#FFFFD7">
                           <div class="container_12">
                           &nbsp; &nbsp; 
                           <div class="mytab">
                          
                           <div id="TabbedPanels1" class="TabbedPanels">
                             <ul class="TabbedPanelsTabGroup">
                               <li class="TabbedPanelsTab" tabindex="0">My Profile</li>
                               <li class="TabbedPanelsTab" tabindex="0">Place Order</li>
                               <li class="TabbedPanelsTab" tabindex="0">Choose Menu</li>
                               <li class="TabbedPanelsTab" tabindex="0">Order History</li>
                             </ul>
                             
                             
                             
                             <div class="TabbedPanelsContentGroup">
                               <div class="TabbedPanelsContent">
                               <div  class="mytabcontents" >
                              
                               <div class="mytable">
                               <h2> <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Here are your Profile Details!</h2><?php
	
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
   <td  align=left> &nbsp; &nbsp; " . $row['u_name'] . " &nbsp; </td>
  </tr>
  <tr>
    <th height=50 scope=row  align=left>&nbsp; &nbsp; &nbsp; &nbsp;  Email</th>
    <td  align=left> &nbsp; &nbsp; " . $row['u_email'] . " &nbsp; </td>
  </tr>
  <tr>
    <th height=50 scope=row  align=left> &nbsp; &nbsp; &nbsp; &nbsp;  Password</th>
    <td  align=left> &nbsp; &nbsp; "  . $row['u_pass'] . " &nbsp;  </td>
  </tr>
  <tr>
    <th height=50 scope=row  align=left>&nbsp; &nbsp; &nbsp; &nbsp;  Country</th>
    <td  align=left> &nbsp; &nbsp;  " . $row['u_country'] . " &nbsp; </td>
  </tr>
  <tr>
    <th height=50 scope=row  align=left> &nbsp; &nbsp; &nbsp; &nbsp; Address</th>
    <td  align=left> &nbsp; &nbsp; " . $row['u_address'] . " &nbsp; </td>
  </tr>
  <tr>
    <th scope=row height=50 align=left > &nbsp; &nbsp; &nbsp; &nbsp; Contact No</th>
    <td  align=left > &nbsp; &nbsp;  " . $row['u_contact'] . " &nbsp;  <br> <br> </td>
  </tr>
  <tr><td bgcolor=#FFCC99 width=2000 colspan=3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  </td>
  </tr>
</table>
";
		
		}
	
	mysql_close($con);
	
?> 
                               </div>
         
    
   
  
</div>
         </div>
                            <?php
					   
	if(isset($_REQUEST['order_submit']))
	{    $_SESSION['event_type'] = $_REQUEST['event_type'];
	$_SESSION['event_city'] = $_REQUEST['event_city'];
		 $_SESSION['event_date'] = $_REQUEST['event_date'];
	$_SESSION['guests'] = $_REQUEST['guests'];
	$_SESSION['event_theme']= $_REQUEST['event_theme'];
	$_SESSION['arrangement_pack'] = $_REQUEST['arrangement_pack'];
	$_SESSION['deco_pack'] = $_REQUEST['deco_pack'];
		
		
	}
   
		
		
?>
                            
                            
                               <div class="TabbedPanelsContent">
                                 <div class="mytabcontents"> <h2><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Fill the form!</h2>
                                   <form action="" method="post" name="event_order">
                                     <table width="943" border="0" cellspacing="2" cellpadding="10">
                                       <tr>
                                         <td colspan="3" ><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Please read these instructions carefully before submitting your query.<br>
                                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Our quotation depends on your date and location of event, selection of theme and the number of guests at the Event.<br>
                                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; If the date for the Event is not yet finalised, choose an approximate date and mention this in your comments. <br>
                                     <br>
                                     
                                     </td>
                                     
                                       <tr>
                                         <td colspan="3"><br></td>
                                       </tr>
                                       <tr>
                                         <th width="324" height="50" scope="row" align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Type of Event</th>
                                         <td width="573">
                                           <?php  
  echo "<select name=event_type class=mydropdown >";
		include "nrsk_event_db_connection.php";
		$sql="Select * From event_type";
		
		$rs = mysql_query($sql) or die(mysql_error());
		$myrows =mysql_num_rows($rs);
		//$_SESSION['$_aa']= $myrows;
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	echo "<option value=" . $row['event_id'] . ">" . $row['event_name'] . "</option>";

	}
	mysql_close($con);
	}
	  echo "</select>"; 
	  
               ?>    </td>
                                       </tr>
                                       <tr>
                                         <th scope="row" height="50" align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; City/Location of Event</th>
                                         <td><input name="event_city" type="text" size="40" maxlength="35" class="mydropdown"></td>
                                       </tr>
                                       <tr>
                                         <th scope="row" height="50" align="left" >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Date of Event</th>
                                         <td><input name="event_date" type="text" value="Format (Year-Month-Day)" size="40" maxlength="30" class="mydropdown" ></td>
                                       </tr>
                                       <tr>
                                         
                                       <tr>
                                         <th scope="row" height="50" align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Number of Guests</th>
                                         <td><input name="guests" type="text" value="Estimate your guests number" size="40" maxlength="30" class="mydropdown"></td>
                                       </tr>
                                       <tr>
                                         <th scope="row" height="50"  align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Select Theme</th>
                                         <td><?php  
  echo "<select name=event_theme class=mydropdown >";
		include "nrsk_event_db_connection.php";
		$sql="Select * From event_themes";
		
		$rs = mysql_query($sql) or die(mysql_error());
		$myrows =mysql_num_rows($rs);
		//$_SESSION['$_aa']= $myrows;
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	echo "<option value=" . $row['theme_id'] . ">" . $row['theme_name'] . "</option>";

	}
	mysql_close($con);
	}
	  echo "</select>"; 
	  
               ?>    </td>
                                       </tr>
                                       <tr>
                                     <th scope="row" height="50"  align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Choose Arrangement Package</th>
              <td>                        
                                      
     <?php  
  echo "<select name=arrangement_pack class=mydropdown onChange=showUser(this.value)>";
		include "nrsk_event_db_connection.php";
		$sql="Select * From arrangement_package";
		
		$rs = mysql_query($sql) or die(mysql_error());
		$myrows =mysql_num_rows($rs);
		//$_SESSION['$_aa']= $myrows;
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	echo "<option value=" . $row['arr_packg_id'] . ">" . $row['arr_packg_name'] . "</option>";

	}
	mysql_close($con);
	}
	  echo "</select>"; 
	  
               ?>    
               </td>
               </tr>
               <tr><td colspan="3" >  
                             
<div class="mypackages" id="txtHint"> <?php
			   include "nrsk_event_db_connection.php";
				$sql="Select * From arrangement_package where arr_packg_id=1";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=828 border=0 cellspacing=2 cellpadding=10 align=center>
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
	echo "<td width=266>".$row['arr_packg_items']."&nbsp; Menu Items</td>";
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
	
	
	
			   
			   ?>  </div>  
    
	 </td>
										 
   </tr>
                        <tr><td colspan="3">
					
						</td></tr>
						       <tr>
                                         <th scope="row" height="50" align="left" ><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Choose Decoration Package</th>
                                         <td width="573"><br>
                                         <?php
                               
  echo "<select name=deco_pack class=mydropdown onChange=showData2(this.value)>";
		include "nrsk_event_db_connection.php";
		$sql="Select * From decoration_packages";
		
		$rs = mysql_query($sql) or die(mysql_error());
		$myrows =mysql_num_rows($rs);
		
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	echo "<option value=" . $row['dec_packg_id'] . ">" . $row['dec_packg_name'] . "</option>";

	}
	mysql_close($con);
	}
	  echo "</select>"; 
	  
               ?>    
							</td>
                            
                                       </tr>
                                       
                                       <tr><td colspan="3"><br>
                                       
                                       <div class="mypackages" id="txtHint2">
                                       <?php
				include "nrsk_event_db_connection.php";
				$sql="Select * From  decoration_packages where dec_packg_id=1";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=828 border=0 cellspacing=2 cellpadding=10 align=center>
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
	echo "<td width=266>".$row['dec_packg_price']."</td>";
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
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
    ?>
                                       
                                       </div>
                                       </td></tr>
                                      
                                          <tr>
                                         <th scope="row" height="50" align="left" ><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Other Arrnagements</th>
                                         <td>
                                         <bR> <input name="media" type="checkbox" value="5"> Head Table and Podium on Stage
                                      <br><input name="stationary" type="checkbox" value="4"> Pen and Pads on each Table &nbsp <br>
                                          <input name="media" type="checkbox" value="1"> MultiMedia <br><input name="mic" type="checkbox" value="2"> MIC </td></tr>
                                          
                                        <tr><th scope="row" height="50" align="left" ><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; If Yes</th>
                                        <td> <br><select name="mic_num" class="mydropdown">
       <option> Specify number of MICs</option>
       <option value="1"> &nbsp; 1 &nbsp; </option>
      <option value="2"> &nbsp; 2 &nbsp; </option>
       <option value="3"> &nbsp; 3 &nbsp; </option>
      <option value="4"> &nbsp; 4 &nbsp; </option>
       <option value="5"> &nbsp; 5 &nbsp; </option>
      <option value="6"> &nbsp; 6  &nbsp; </option>
                                        
                                         </select>
                                         </td>
                                         </tr>
                                         
                                       <tr>
                                         <td colspan="4" align="center"><br><input name="order_submit" type="submit" value="SUBMIT" class="mybutton">
                                           &nbsp; &nbsp;
                                           <input name="reset" type="reset" value="RESET" class="mybutton">
                                           <br>
                                           <br></td>
                                       </tr>
                                     </table>
                                   </form>
                                 </div>
                               </div>
                               <div class="TabbedPanelsContent"><div class="mytabcontents"><h2><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Fill the form!</h2>
                               
                               
                               
                                 <?php
					   
	if(isset($_REQUEST['event_submit']))
	
	
	{    
	 
	   $p_event_type=$_SESSION['event_type'];
	$p_event_city=$_SESSION['event_city'];
	$p_event_date=$_SESSION['event_date'];
	$p_event_theme=$_SESSION['event_theme'];
	$p_guests=$_SESSION['guests'];
	$p_arrangement_pack=$_SESSION['arrangement_pack'];
	$p_deco_pack=$_SESSION['deco_pack'];
	   $p_my_menu = $_REQUEST['my_menu'];
		$p_beverages = $_REQUEST['beverages'];	
		
	include "nrsk_event_db_connection.php";
	 	
	$sql = "INSERT INTO event_order SET event_id='$p_event_type', city_loc='$p_event_city', date_of_event='$p_event_date', theme_id='$p_event_theme', no_of_guests='$p_guests', arr_packg_id='$p_arrangement_pack', dec_packg_id='$p_deco_pack', menu_packg_id='$p_my_menu', bev_packg_id='$p_beverages'";
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
		
		
echo "<tr><td>Record Inserted</td></tr>";
		
	

	}
	
	
	else{
		
		echo "<tr><td>Failed to insert!</td></tr>";
	}
	mysql_close($con);	
	}
	   
	   
   
		
		
?>
                                   <form action="" method="post" name="menu_order">
                                     <table width="943" border="0" cellspacing="2" cellpadding="10">
                                       <tr>
                                         <td colspan="3"><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Please read these instructions carefully before submitting your query.
                                         <br>
                                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Our quotation depends on your date and location of event, selection of theme and the number of guests at the Event. <br> <br></td>
                                       </tr>
                                      
                                       <tr>
                                         <th scope="row" height="50"  align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Select Menu</th>
                                         <td>
										<?php  
  echo "<select name=my_menu class=mydropdown onChange=showData3(this.value)>";
		include "nrsk_event_db_connection.php";
		$sql="Select * From menu_table";
		
		$rs = mysql_query($sql) or die(mysql_error());
		$myrows =mysql_num_rows($rs);
		
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	echo "<option value=" . $row['menu_packg_id'] . ">" . $row['menu_package'] . "</option>";

	}
	mysql_close($con);
	}
	  echo "</select>"; 
	  
               ?>    
										 </td>
                                       </tr>
                                       
                                       <tr>
                                       <td colspan="3"> 
                                     <div class="mypackages" id="txtHint3" >
                                     <?php


             
				include "nrsk_event_db_connection.php";
				$sql="Select * From menu_table where menu_packg_id=1 ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=821 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left> <br>Package Items</th>
    <th width=228 scope=row align=left><br>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['menu_package']."</th>";
	echo "<td width=266>".$row['menu_package_items']."&nbsp; Menu Items</td>";
	echo "<td width=266> Rs. &nbsp;".$row['menu_price']."</td>";
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
		 <td width=228 colspan=3 align=left>".$mrow['package_item']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
	echo "</div>";



?>
                                     
                                     </div>
                                       </td></tr>
                                     <tr><td colspan="3"> <br> <br></td></tr>
									 
    <th width="309" height="50" scope="row" align="left" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Beverages or Drinks </th>
	
    <td width="588">
	 <?php  
  echo "<select name=beverages class=mydropdown onChange=showData4(this.value)>";
		include "nrsk_event_db_connection.php";
		$sql="Select * From  beverage_packages";
		
		$rs = mysql_query($sql) or die(mysql_error());
		$myrows =mysql_num_rows($rs);
		//$_SESSION['$_aa']= $myrows;
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	echo "<option value=" . $row['bev_packg_id'] . ">" . $row['bev_packg_name'] . "</option>";

	}
	mysql_close($con);
	}
	  echo "</select>"; 
	  
               ?>    
	</td> </tr>
	
	
    <tr> <td colspan="4">
   <div class="mypackages" id="txtHint4" >
   <?php

                
				
				include "nrsk_event_db_connection.php";
				$sql="Select * From beverage_packages where bev_packg_id=1 ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=821 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=259 height=40 scope=row ><br>Package Name</th>
    <th width=228 scope=row align=left><br>Package Items</th>
    <th width=228 scope=row align=left><br> Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['bev_packg_name']."</th>";
	echo "<td width=266 >".$row['bev_packg_items']."&nbsp; Package Items</td>";
	echo "<td width=266>Rs. &nbsp; ".$row['bev_packg_price']."</td>";
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
		 <td width=228 colspan=3 align=left>".$mrow['beverage_name']."</td>
    
  </tr>";
  
		
	}
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	?>



   </div>
	
   </td>
    </tr>
    <th width="309" height="50" scope="row"  align="left"> <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Side orders </th>
                                         <td width="588"> <br> <br><input name="drinks" type="checkbox" value="3" onSelect="">  Mineral Water<br>@ Rs 150 + Tax per Bottle&nbsp; &nbsp; &nbsp; &nbsp;
                                         <br>
                                         <br>
                                         
                                         <input name="softdrink" type="checkbox" value="3">  Assorted Soft Drinks <br>
                                         @ Rs 85 + Tax per Bottle <br><br> </td>
                                         </tr>
                                        
                                         <th scope="row" height="50"  align="left">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Any other information you want to give</th>
                                         <td><textarea name="comments" cols="31" rows="7"></textarea></td>
                                      <tr>
                                         <td colspan="4" align="center"><br><input name="event_submit" type="submit" value="SUBMIT" class="mybutton">
                                           &nbsp; &nbsp;
                                           <input name="reset" type="reset" value="RESET" class="mybutton">
                                           <br>
                                           <br></td>
                                       </tr>
                                     </table>
									 </table>
                                   </form>
                                 </div>
                                 </div>
                                 
                                 
                               <div class="TabbedPanelsContent">Content 4</div>
                               
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
            	    <article class="grid_4">
            	      <h3 class="p2">Our Events </h3>
          	      </article>
            	    <article class="grid_8">
            	    <h3 class="prev-indent-bot2">Online Event Management</h3>
            	    <div class="wrapper">
            	      <figure class="img-indent frame2"><img src="images/pay2.jpg" alt="" width="170"/></figure>
            	      <p class="prev-indent-bot color-4">We are facilitating you to choose the color, theme, decorations, menu, location and lighings for your own very Events just by registering on our website, Then login to your account and make your moments golden by selecting according to your choice!!
हम आपको कलर लाइट सिस्टम डेकोरेशन ट्रांसपोर्टेशन (बस गाड़ियाँ ) आपके अनुसार भोजन के मेनू केटरिंग आदि जो एक इवेंट प्रोग्राम में होता है सब प्रोवाइड करते है.					  </p>
            	      <p class="prev-indent-bot">No need to come personally arrange the things , it all will be done by our dedicated and skilled staff!</p>
            	      </article>
          	      </div>
          	    </div>
   	  <div class="wrapper">
   	    <figure class="img-indent frame2"><img src="images/pay.jpg" alt="" width="170"/></figure>
   	    <figure class="img-indent frame2"><img src="images/pay3.jpg" alt="" width="170"/></figure>
 	    </div>
           	  </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
<?php include('footer.php');?>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    </script>
</body>
</html>

