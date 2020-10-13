<?php
	ob_start();
	session_start();
	
	if (!isset($_SESSION['s_username'])&&!isset($_SESSION['s_uid'])) {
  
  header('Location:admin_home.php');
  exit();
}
?>
<html>
<head>
</head>
<body>

   <?php
							   if(isset($_REQUEST['delid'])){
								   $delid=$_REQUEST['delid'];
								   
	 
								   
				include "nrsk_event_db_connection.php";
				$sql="DELETE From order_table  WHERE order_id='$delid' AND u_id='$_SESSION[u_id]' ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 
	if($rs == 1)
	{	
	
		include "nrsk_event_db_connection.php";
				$sql="DELETE From event_order  WHERE order_id='$delid' ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 
	if($rs == 1)
	{	
	
	
			include "nrsk_event_db_connection.php";
				$sql="DELETE From ordered_arrangements  WHERE order_id='$delid'";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 
	if($rs == 1)
	{	
	
	
				include "nrsk_event_db_connection.php";
				$sql="DELETE From ordered_hr  WHERE order_id='$delid'  ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 
	if($rs == 1)
	{	
	
	
			include "nrsk_event_db_connection.php";
				$sql="DELETE From ordered_menu  WHERE order_id='$delid' ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 
	if($rs == 1)
	{	
	
	
		header('Location:del_order.php');		
	
	
	
	}
  		
	
	
	
	}
  	
	
	
	
	}
  		
	
	
	
	}
  
				
	
	
	
	}
  
	 
	
	
	
		
	   
	
	
			 }
	
	
	
	
	
                
  ?>                
                 </body>
                 </html>