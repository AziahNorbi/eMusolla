<html>
<style type="text/css">
body{
	font-family:Arial;
	font-size:12px;
	color:black;
}
p{
	font-family:Tahoma;
	font-size:15px;
	font-style:shadow;
	margin:10;
	color:black;
	
}
 td{
	  font-family:century gothic;
      font-size:15px;
	  color:black;
	   }
	
</style>
</head>
<body>
<body background="1.jpg">
<?php
	$x= $_POST['surau'];
		
	 mysql_connect("localhost", "root") or die (mysql_error());
	 mysql_select_db("surau") or die (mysql_error());
	 
	 $result = mysql_query("SELECT T_NamaAktiviti, T_TarikhMula,T_id_Aktiviti FROM tempahan WHERE T_Lokasi='$x'") or die (mysql_error());
 //    SELECT *FROM `surau`WHERE `T_id_Aktiviti` LIKE 'H1'	 
         echo "<table border='1' cellspacing='0' cellpadding='10' align='center'>";
		 echo "<h3><center> Pengesahan Tempahan </h3></center><br>";
		 echo "<center>Nama Musolla : $x </center><br>";
         echo "<tr><th>Nama Aktiviti Dan Program </th>
				   <th>Tarikh</th>
				   <th colspan='2'> Pengesahan </th>
			  </tr>";
			 						
             while($row = mysql_fetch_array($result))
             {
				 echo "<tr><td>";
				 echo $row['T_NamaAktiviti'];
				 $kod_aktiviti = $row['T_id_Aktiviti'];
				 echo "</td><td>";
				 echo $row['T_TarikhMula'];
			     echo "</td><td>";
				 echo "<a href=\"list1.php?id=$kod_aktiviti\"><img src='right.jpg' width='58' height='42'></a>";
				 echo "</td><td>";
				 echo "<a href=\"deletelist1.php?id=$kod_aktiviti\"><img src='wrong.jpg' width='58' height='42'></a>";
				 echo "</td></tr>";
	         }
?>
</body>
</html>