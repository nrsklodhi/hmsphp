<?php
				include "nrsk_event_db_connection.php";
				$sql="Select * From menu_table ";	
				
				$rs = mysql_query($sql) or die(mysql_error());
				$myrows = mysql_num_rows($rs);
				 /*echo $myrows ;
				 echo "<br>";*/
	if(mysql_num_rows($rs)>0)
	{	
	echo
	 "<table width=821 border=0 cellspacing=2 cellpadding=10 align=center>
  <tr>
    <th width=259 height=40 scope=row >Package Name</th>
    <th width=228 scope=row>Package Items</th>
    <th width=228 scope=row>Package Rate</th>
  </tr>";	
	 
	 for ($i=0; $i<$myrows; $i++) 
	{
	$row = mysql_fetch_array($rs);
  echo "
  <tr>
    <th height=30 scope=row valign=top>".$row['menu_package']."</th>";
	echo "<td width=266>".$row['menu_package_items']."&nbsp; Menu Items</td>";
	echo "<td width=266>".$row['menu_price']."</td>";
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
	
	
	
                ?>           