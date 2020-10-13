<?php
	ob_start();
	session_start();
	
	
	if (isset($_SESSION['s_username'])&& isset($_SESSION['s_uid'])) {
  
  header('Location:myadmin.php');
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
    <?php include('header.php');?>
	<div class="ic"></div>
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box p3" style="background-color:#FFFFD7">
                                <div class="padding">
                                <div class="trans" style="background-color:#FFFFD7">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                                <div class="wrapper">
                                                
                                                     <h3 class="p2" align="center">Login</h3>
                                                            
                                                      <div align="center">
                                                                <form name="user_login" action="" method="post">
                            <table width="400" height="214" align="center" cellspacing="10">
                            <tr>
                            <td width="100" ><h5>UserName</h5></td>
                            <td><input name="u_name" type="text" size="40" maxlength="30"></td></tr>
                            <tr><td><h5>Password</h5></td>
                            <td><input name="pass" type="password" size="40" maxlength="30"></td></tr>
                         <tr>   
                          <td colspan="2" align="center"> <input type="image"  name="u_login" src="images/button (3).png"></td>
                          <tr><td colspan="2"><br></td></tr>
                          </table>
          </form>
                          <?php
	if(isset($_REQUEST['u_login_x']))
	{
		 $u_name=$_REQUEST['u_name'];
	    $u_pass=$_REQUEST['pass'];
	    include "nrsk_event_db_connection.php";
		$sql="Select * From admin_table Where admin_username='$u_name' AND admin_pass='$u_pass'";
		
		$rs = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($rs)>0)
	{
		
	while($row = mysql_fetch_array($rs))
	{
		
		$_SESSION['s_name']=$row['admin_name'];
		$_SESSION['s_id']= $row['admin_id'];
		$_SESSION['s_username']=$row['admin_username'];
		$_SESSION['s_pass']= $row['admin_pass'];
		
		header("Location: myadmin.php");
	
	}
	mysql_close($con);
	}
	else
	{
		echo"<font color=#663300 size=+4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid login</font>";
	}
	
	}
	?>
                                                          </div>
                                                        </div>
                                                    </article>
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
