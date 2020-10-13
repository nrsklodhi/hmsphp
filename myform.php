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
<form action="" method="post" name="myform">

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
		
		    //$myarray=array();
			while($row = mysql_fetch_array($rs))
	{
		
	     $arrid[]=$row['hr_id'];
	    $myarr[]=$row['hr_name'];
		$my[]=$row['hr_price'];
		
	   
	   echo "<br>"; 
	   
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
$arrlength=count($myarr);
for($x=0;$x<$arrlength;$x++)
  {
  echo $myarr[$x];
  echo "<br>";
  }

$add=0;
foreach($my as $value){
	
 echo $add=$add+$value."<br />";
 $_SESSION['hr_rate']=$add;
}	

//header ('Location:next.php');
   }
   
 
?>
<?php
    include "nrsk_event_db_connection.php";
	$sql1="Select * FROM hr_table h, hr_detail_table d WHERE h.hr_id=d.hr_id AND main_event_id=$_SESSION[event_name_id]";
    	$rs = mysql_query($sql1) or die(mysql_error());
		if(mysql_num_rows($rs)>0)
	{
		$c=0;
	while($row = mysql_fetch_array($rs))
	{
		
		echo "<tr><td height=30><span class=text-form><strong>".$row['hr_name']. " </strong></span></td><td><input type=checkbox value=".$row['hr_id']." name=activate[]></td><tr>"; 
		
		$c++;
		
		echo "<br>";
	    
	  //echo $_SESSION['myarray'];
	  
	
	   
			}
			
			
	}


?>


<table width="300" border="0" cellspacing="2" cellpadding="10">
  <tr>
     <label><span class="text-form"><strong></strong></span></label><td width="171"><input type="radio" name="dj" value="18">Yes</td>
    <td width="83">&nbsp;<input type="radio" name="dj" value="no">No</td>
  </tr>
  <tr>
    <td><input type="radio" name="makeup" value="19">Yes</td>
    <td>&nbsp;<input type="radio" name="makeup" value="19">No</td>
  </tr>
  <tr>
    <td><input type="radio" name="manager" value="21" />Yes</td>
    <td>&nbsp;<input type="radio" name="manager" value="21" />No</td>
  </tr>
  <tr>
    <td><input type="radio" name="photographer" value="23">Yes</td>
    <td>&nbsp;<input type="radio" name="photographer" value="23">No</td>
  </tr>
  <tr>
    <td> <input name="video" type="radio" value="" />Yes</td>
    <td>&nbsp; <input name="video" type="radio" value="" />No</td>
  </tr>
</table>
<input name="submit" type="submit" />
</form>
</body>
</html>