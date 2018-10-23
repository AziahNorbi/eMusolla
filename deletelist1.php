<html>
<body>
<h4><center> Program Dan Aktiviti Telah Dipadam </h4></center>
<?php
	
	$db=mysql_connect("localhost", "root") or die (mysql_error());
	mysql_select_db("surau",$db) or die (mysql_error());
	
		
	if(isset($_GET['id'])){
		$kod=$_GET['id']; // Kena letak id bagi surau tu.. supaya pegang nilai 
						  // echo "nama =>".$kod; 
						  //SELECT *FROM `surau`WHERE `T_id_Aktiviti` LIKE 'H1		
	
		//$q = "SELECT *FROM surau WHERE T_id_Aktiviti LIKE \"$kod\"";
		$z = $_GET['id'];
		$strSQL = "DELETE FROM tempahan WHERE T_id_Aktiviti = '$z'";
		$result=mysql_query($strSQL,$db)
				or die(mysql_error());
		
	}
	
?>

</body>
</html>