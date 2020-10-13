<?php
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prices</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>    
	
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
                           <h3 class="p0">&nbsp; &nbsp; &nbsp; &nbsp; Welcome Dear User!<br></h3>
                           <div class="mytab">
                             <div id="TabbedPanels1" class="TabbedPanels">
                               <ul class="TabbedPanelsTabGroup">
                                 <li class="TabbedPanelsTab" tabindex="0">Arrangements</li>
                                 <li class="TabbedPanelsTab" tabindex="0">Decorations</li>
                                 <li class="TabbedPanelsTab" tabindex="0">Drinks and Beverages</li>
                                 <li class="TabbedPanelsTab" tabindex="0">Menu</li>
                               </ul>
                               <div class="TabbedPanelsContentGroup">
                                 <div class="TabbedPanelsContent"> <br>
                                   <br>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Our Rates Details<br>
  <br>
  <br>
  <div class="mytabcontents">
  
  
  <?php
				include "nrsk_event_db_connection.php";
				$sql="Select * From arrangement_package a, events_table t WHERE a.main_event_id=t.main_event_id ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=850 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr> <th width=259 height=40 scope=row >Event Type</th>
    <th width=259 height=40 scope=row >Package Name</th>
    <th width=235 scope=row align=left>&nbsp; &nbsp; &nbsp; Arrangement Items</th>
    <th width=200 scope=row align=left>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['main_event_name']."</th>";
   echo" <th height=30 scope=row valign=top>".$row['arr_packg_name']."</th>";

	echo "<td>&nbsp; &nbsp; &nbsp; ".$row['arr_packg_items']."&nbsp; Items</td>";
	echo "<td >&nbsp; &nbsp; &nbsp; Rs. &nbsp;".$row['arr_packg_price']."&nbsp;</td>";
	echo "</tr>";
	$eve_id=$row['main_event_id'];
	$dec_id= $row['arr_packg_id'];
	 

	  
	  $msql="Select * From event_arrangements e , arrangement_packg_details d where arr_packg_id=$dec_id AND e.arrangement_id=d.arrangement_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				
				  		
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=1; $j<=$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=228 align=right>".$j.". &nbsp; </td>
		 <td colspan=3 align=left bgcolor=#FFFFCC> &nbsp; &nbsp; &nbsp; ".$mrow['material_name']."</td>
    
  </tr>";
  
 
		
	}
	echo " <tr><td></td> <td bgcolor=#FFCC99 colspan=3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
  </td>
  </tr>";
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
                ?>           
	
    </div>
       </div>
													 
								 
  <div class="TabbedPanelsContent"><br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Our Rates Details<br><br><br>
                                  <div class="mytabcontents">
                                  
                                 <?php
				include "khan_event_db_connection.php";
				$sql="Select * From decoration_packages ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=650 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=249 height=40 scope=row >Package Name</th>
    <th width=230 scope=row align=left>&nbsp; &nbsp; &nbsp; Package Items</th>
    <th width=180 scope=row align=left>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top >".$row['dec_packg_name']."</td>";
	echo "<td >&nbsp; &nbsp; &nbsp; ".$row['dec_packg_items']."Decoration Items</td>";
	echo "<td >Rs. &nbsp; ".$row['dec_packg_price']."</td>";
	echo "</tr>";
	  $dec_id= $row['dec_packg_id'];
	  /*echo $dec_id;
	  
	  echo "<br>";*/
	  
	  $msql="Select * From decoration_pckg_details d , decoration_details e where d.dec_packg_id=$dec_id AND d.dec_id=e.dec_id";	
					
	$mrs = mysql_query($msql) or die(mysql_error());
		$mrows = mysql_num_rows($mrs);
				 /*echo $mrows;
				 echo "<br>" ;	*/		
	if(mysql_num_rows($mrs)>0)
	{
		
	for ($j=0; $j<$mrows; $j++){
		
		$mrow = mysql_fetch_array($mrs);
		 echo "<tr><td width=228> </td>
		 <td width=230 colspan=3 align=left bgcolor=#FFFFCC>&nbsp; &nbsp; &nbsp; ".$mrow['dec_type_name']."</td>
    
  </tr>";
  
		
	}
	 echo " <tr><td></td> <td bgcolor=#FFCC99 colspan=2> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
  </td>
  </tr>";
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
                ?>                </div>
                                 </div>
                                 <div class="TabbedPanelsContent"> <br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Our Rates Details<br><br><br>
                                  <div class="mytabcontents">
                                 
                                 
								<?php
				include "khan_event_db_connection.php";
				$sql="Select * From beverage_packages b , events_table t WHERE b.main_event_id=t.main_event_id ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=921 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
  <th width=200 height=40 scope=row >Event Name</th>
    <th width=200 height=40 scope=row >Package Name</th>
    <th width=228 scope=row align=left>&nbsp; &nbsp; &nbsp; Package Items</th>
    <th width=228 scope=row align=left>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['main_event_name']."</th>
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
	
	echo " <tr><td></td> <td bgcolor=#FFCC99 colspan=3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
  </td>
  </tr>";
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
                ?>           
                                 </div>
                                 </div>
                                 <div class="TabbedPanelsContent"> <br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Our Rates Details<br><br><br>
                                  <div class="mytabcontents">
                                 <?php
				include "khan_event_db_connection.php";
				$sql="Select * From menu_table m, events_table t WHERE m.main_event_id=t.main_event_id";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=921 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
  <th width=200 height=40 scope=row >Event Name</th>
    <th width=200 height=40 scope=row >Package Name</th>
    <th width=228 scope=row align=left>&nbsp; &nbsp; &nbsp;  Package Items</th>
    <th width=228 scope=row align=left>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
  <th height=30 scope=row valign=top>".$row['main_event_name']."</th>
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
	 echo " <tr><td></td> <td bgcolor=#FFCC99 colspan=3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
  </td>
  </tr>";
	}
  
	 
	}
	
	mysql_close($con);
	
	
	
echo "<tr><td><br><br></td></tr></table>";
	}
	
	
	
                ?>           

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
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    </script>
</body>
</html>

