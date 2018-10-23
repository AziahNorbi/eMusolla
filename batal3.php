<html>
<body>
<h4><center> Program Dan Aktiviti Telah Dibatalkan </h4></center>
<form method="GET">
<?php
	
	$m = $_GET['id'];
	
	$db=mysql_connect("localhost", "root") or die (mysql_error());
	mysql_select_db("surau",$db) or die (mysql_error()); 
	
		$strSQL = "DELETE FROM tempahan WHERE T_NoMatrik = '$m'";
		$result=mysql_query($strSQL,$db)
				or die(mysql_error());

?>
</form>
</body>
</html>