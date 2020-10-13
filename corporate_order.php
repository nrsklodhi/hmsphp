<?php
	session_start();
	if (!isset($_SESSION['s_email'])&&!isset($_SESSION['s_uid'])) {
    header('Location:login.php');
  exit();
}

	
	include "nrsk_event_db_connection.php";
	$sql1="Select order_id From order_table WHERE u_id=$_SESSION[s_uid]";
    	$rs = mysql_query($sql1) or die(mysql_error());
		if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
	    $_SESSION['od_id']=$row['order_id'];
	
	
			}
	}

?>
<html>
<head>
 <title>Place Order</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
   


 <script type="text/javascript" src="mysc.js">

</script>


</head>
<body> 
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
 
  <tr><td colspan="4"><br></td></tr>
</table> 
                      <div class="wrapper">
                                            <div class="grid_12">
                                                  <div class="indent-left">
                                                	<h3 class="p2">Fill the Form Carefully!</h3>
                          	 <?php
							 
							 						 
							 
 
   if (isset($_REQUEST['activate'])){
	  $activate = $_POST['activate']; 
        foreach($activate as $a) 
  
{
   include "nrsk_event_db_connection.php";
$sql1="Select * FROM hr_table where hr_id=$a";
    	$rs = mysql_query($sql1) or die(mysql_error());
		if(mysql_num_rows($rs)>0)
		
		{
			while($row = mysql_fetch_array($rs))
	{
		
	     $arrid[]=$row['hr_id'];
	    $myarr[]=$row['hr_name'];
		$my[]=$row['hr_price'];

	}
			
			
		}
}


  $arrlength=count($arrid);
  for($x=0;$x<$arrlength;$x++)
  {
  echo $arrid[$x];
    include "nrsk_event_db_connection.php";
		$sql = "INSERT INTO ordered_hr SET order_id='$_SESSION[od_id]' ,hr_id='$arrid[$x]'"; 
	
	
	
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
   
    if(isset($_REQUEST['img_submit_x']))
	
	{ 
	$_SESSION['event_timing'] = $_REQUEST['event_timing'];
	 $_SESSION['event_city'] = $_REQUEST['event_city'];
	  $_SESSION['event_date'] = $_REQUEST['event_date']; 
	$_SESSION['event_type'] = $_REQUEST['event_type'];
	$_SESSION['guests'] = $_REQUEST['guests'];
	$_SESSION['event_theme']= $_REQUEST['event_theme'];
	$_SESSION['arrangement_pack'] = $_REQUEST['arrangement_pack'];
	$_SESSION['deco_pack'] = $_REQUEST['deco_pack'];
	
	
		  include "nrsk_event_db_connection.php";
		$sql = "INSERT INTO event_order SET order_id='$_SESSION[od_id]' ,event_timings='$_SESSION[event_timing]',event_id='$_SESSION[event_type]', event_location='$_SESSION[event_city]', date_of_event='$_SESSION[event_date]', no_of_guests= '$_SESSION[guests]'"; 
	
	
	
	$rs = mysql_query($sql) or die(mysql_error());
	
	if($rs == 1)
	{
		
		
		echo "<tr><td>Data Inserted</td><tr>" ;
	

	}
	
	
	
	
	     include "nrsk_event_db_connection.php";
		$msql = "INSERT INTO ordered_arrangements SET order_id='$_SESSION[od_id]' ,theme_id='$_SESSION[event_theme]', hr_packg_id=$_SESSION[hr_pid],   arr_packg_id='$_SESSION[arrangement_pack]', dec_packg_id='$_SESSION[deco_pack]'"; 
	
	
	$mrs = mysql_query($msql) or die(mysql_error());
	
	if($mrs == 1)
	{
	echo "<tr><td>Data Inserted</td><tr>" ;
	header('Location:menu_submit.php');	
	
	}
		
	mysql_close($con);
	
	//	echo 	$_SESSION['deco_pack'];
		
	}
            
     ?>
 <form name="event_order" id="contact-form" method="post" enctype="multipart/form-data"  >                    
                                                  
                                                  
                                                                                      	
	
                                                        <fieldset>
                                                        <label><span class="text-form"><strong>Event Timing :</strong></span> <select name="event_timing" class="mydropdown">
                                                             <option value="Day Event">Day Event</option>
                                                             <option value="Night Event">Night Event</option>
                                                             
                                                             </select></label> 
                                                              
                                                          <label><span class="text-form"><strong>City/Location of Event</strong> </span>
                                                      <input name="event_city"  type="text"  width="260" size="50"/></label>   
                                                              <label><span class="text-form" ><strong>Date of Event </strong></span><input name="event_date" type="text" width="260" size="50" /> &nbsp; &nbsp; Format (Year-Month-Day)</label>                       
                                                          <label><span class="text-form" ><strong>Number of Guests </strong></span><input name="guests"  type="text" width="260" size="50"/></label>   
                                                          
                                                      
   <label> <span class="text-form"><strong>Event Type</strong> </span>
   
   <?php  
  echo "<select name=event_type class=mydropdown >";
		include "nrsk_event_db_connection.php";
		$sql="Select * From event_type where main_event_id= $_SESSION[event_name_id]";
		
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
	  
               ?></label>
               
                                                          <label><span class="text-form"><strong>Select Theme</strong></span><?php  
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
	  
               ?></label>     
               <table width="400" border="0" cellspacing="2" cellpadding="10">
  <?php
    include "nrsk_event_db_connection.php";
	$sql1="Select * FROM hr_table h, hr_detail_table d WHERE h.hr_id=d.hr_id AND main_event_id=$_SESSION[event_name_id]";
    	$rs = mysql_query($sql1) or die(mysql_error());
	$_SESSION['myrowsc']	=mysql_num_rows($rs);
		if(mysql_num_rows($rs)>0)
	{
		$c=0;
	while($row = mysql_fetch_array($rs))
	{
		
		echo "<tr><td height=30><span class=text-form><strong>".$row['hr_name']. " </strong></span></td><td width=200> <input type=checkbox value=".$row['hr_id']." name=activate[]>&nbsp; &nbsp; Rs. &nbsp;".$row['hr_price']."</td><tr>"; 
		
		
		$c++;
		
		$_SESSION['hr_pid']=$row['hr_packg_id'];
	   
			}
			
			
	}


?>


  <tr><td><br></td></tr>
</table>
               
                                                     
                                                          <label><span class="text-form"><strong>Choose Arrangement Package</strong></span><?php  
  echo "<select name=arrangement_pack class=mydropdown onChange=showData1(this.value)>";
		include "nrsk_event_db_connection.php";
		$sql="Select * From arrangement_package where main_event_id= $_SESSION[event_name_id]";
		
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
	  
               ?></label>
               
             
               <div class="mypackages" id="txtHint1">
               <?php
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
	
	
	
			   
			   ?>  
               </div>
            <?php
			echo "<table><tr><td><br></td></tr></table>";
			?>   
    
                                                              <label><span class="text-form"> <strong>Choose Decoration Package</strong></span><?php
                               
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
	  
               ?></label>
                                                            
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
                          <?php
			echo "<table><tr><td><br></td></tr></table>";
			?>  
                         <div class="buttons">  <table width="354" align="center"> <tr><td width="155" align="right">
                        <input type="image"  src="images/button.png" name="img_submit" ></td>
<td width="101" align="right">  <input type="image"  src="images/button (1).png" name="img_reset" >
</td></tr></table>
                                            </div>                
                                                    </fieldset>						
        
                                                    </form>
                                                    
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
                      <p>Sam's Event managers are supervising diverse corporate events, such as product launches, press conferences, corporate anniversary parties, meetings, conferences, and marketing programs such as road shows and grand opening events.
                      </p>
                      <p class="prev-indent-bot color-4">

NRsK Evenst Organizers are handling a variety of specific event-related services, which can range from a few select services for clients with limited budgets, to handling all creative, technical and logistical aspects of an event.</p>
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

