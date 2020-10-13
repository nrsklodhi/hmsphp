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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

echo $_SESSION['hr_names'];
?>
</body>
</html>