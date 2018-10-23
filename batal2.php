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
<form method="GET">

<table border='1' cellspacing='0' cellpadding='10' align='center'>

<?php
	$x= $_GET['matrik'];
		
	 mysql_connect("localhost", "root") or die (mysql_error());
	 mysql_select_db("surau") or die (mysql_error());
	 
	 $result = mysql_query("SELECT * FROM tempahan WHERE T_NoMatrik='$x'") 
			     or die (mysql_error()); 
				 
	 while($row = mysql_fetch_array($result))
             {
				 $a = $row['T_NoMatrik'];
				 $b = $row['T_NamaAktiviti'];
				 $c = $row['T_TarikhMula'];
				 $d = $row['T_TarikhAkhir'];
				 $e = $row['T_MasaMula'];
				 $f = $row['T_MasaAkhir'];
				 $g = $row['T_Anjuran'];
				 $h = $row['T_Lokasi'];
		
			
				 		 
         echo "<table border='1' cellspacing='0' cellpadding='10' align='center'>";
		 echo "<h3><center> Pembatalan Tempahan </h3></center><br>";
		 echo "<center>No Matrik : $x </center><br>";
         echo "<tr><th>Nama Aktiviti Dan Program </th>
				   <th>Tarikh Mula</th>
				   <th>Tarikh Akhir</th>
				   <th>Masa Mula</th>
				   <th>Masa Akhir</th>
				   <th>Anjuran</th>
				   <th>Lokasi</th>
				   <th>Keputusan</th>
			  </tr>
			  <tr>
				   <td>$b</td>
				   <td>$c</td>
				   <td>$d</td>
				   <td>$e</td>
				   <td>$f</td>
				   <td>$g</td>
				   <td>$h</td>
				   <td>[<a href = batal3.php?id=$a> Batal Tempahan </a>]</td>
			</tr>";	   
			  }						
             
?>


</form>
</body>
</html>