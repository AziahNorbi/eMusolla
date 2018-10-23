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
<center><h1>MAKLUMAT TEMPAHAN </h1>

<table border=1 bgcolor="yellow" align="center">

<tr>
<th>Lokasi</th> <th>Tarikh Mula</th> <th>Tarikh Akhir</td> <th>Masa Mula</th> <th>Waktu</th> <th>Masa Akhir</th> <th>Waktu</th> <th>Nama Aktiviti</th>  <th>Anjuran</th> <th>Banner Program</th>
</tr>

<?php
$con=mysqli_connect("localhost","root","","surau"); //tgk balik
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // SQL statement
$result = mysqli_query($con,"SELECT * FROM tempahan");

while($row = mysqli_fetch_array($result))
  {
   echo "<tr><td>";
	 echo $row['T_Lokasi'];
	echo "</td>";
	 
	echo "<td>"; 
    echo $row['T_TarikhMula'];
	echo "</td>";
	
	echo "<td>";
    echo $row['T_TarikhAkhir'];
	echo "</td>";
	
	echo "<td>";
    echo $row['T_MasaMula'];
	echo "</td>";
	
	echo "<td>";
    echo $row['T_Formatmasamula'];
	echo "</td>";
	
	echo "<td>";
    echo $row['T_MasaAkhir'];
	echo "</td>";
	
	echo "<td>";
    echo $row['T_FormatmasaAkhir'];
	echo "</td>";
	
	echo "<td>";
    echo $row['T_NamaAktiviti'];
	echo "</td>";
	
	echo "<td>";
    echo $row['T_Anjuran'];
	echo "</td>";
	
	echo "<td>";
    echo "<img src=upload/" . $row['T_Namafile'] ." width=400 height=250>";
	echo "</td>";
    echo "</tr>";
	}
	
mysqli_close($con);
?>
</table>
<br><center><a href="batal1.php">[Pembatalan]</a>
<a href="borangtempahanpresident.php">[Borang]</a>
</BODY>
</HTML>