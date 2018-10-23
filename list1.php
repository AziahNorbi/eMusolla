<html>
<head>
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
<body background="4.jpg">
<br><br><h4><center> Program Dan Aktiviti Ini Telah Mendapat Pengesahan </h4></center>

<?php
	
	$db=mysql_connect("localhost", "root") or die (mysql_error());
	mysql_select_db("surau",$db) or die (mysql_error());
		
	if(isset($_GET['id'])){
		$kod=$_GET['id']; // Kena letak id bagi surau tu.. supaya pegang nilai 
	$q = "SELECT * FROM tempahan WHERE T_id_Aktiviti LIKE \"$kod\"";	
		$result=mysql_query($q,$db)
				or die(mysql_error());
		
	
		echo "<table border='1' bgcolor='cyan' cellspacing='0' cellpadding='10' align='center'>";
		echo "<tr><th>Nama Surau</th>
		           <th>Nama Aktiviti Dan Program </th>
				   <th>Tarikh Mula</th>
				   <th>Tarikh Akhir</th>
				   <th>Masa Mula</th>
				   <th>Masa Akhir</th>
				   <th>Anjuran</th>
				   <th>Banner Program</th>
			  </tr>";
	}
		else
		    {//show list the program that we approve 
				       echo "SOrry ,no record were found!";
					   }	
					   
		         while($row = mysql_fetch_array($result)){
				echo "<tr><td>";
				echo $row['T_Lokasi']; //*
				echo "</td><td>";
				echo $row['T_NamaAktiviti']; //*
				echo "</td><td>";
				echo $row['T_TarikhMula']; //*
				echo "</td><td>";
				echo $row['T_TarikhAkhir']; //*
				echo "</td><td>";
				echo $row['T_MasaMula']; //*
				echo "</td><td>";
				echo $row['T_MasaAkhir']; //*
				echo "</td><td>";
				echo $row['T_Anjuran']; //*
				echo "</td>";
				echo "<td>";
    echo "<img src=upload/" . $row['T_Namafile'] ." width=400 height=250>";
	             echo "</td></tr>";
			 }
	echo "</table>";
	
?>

</form>
</body>
</html>