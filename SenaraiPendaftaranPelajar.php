<HTML>
<HEAD></HEAD>
<BODY>
<h3 align="center">Berjaya Daftar Masuk</h3>

<table border=1 bgcolor="yellow"  align="center">

<tr>
<th>Nama</th> <th>No Matrik</th> <th>No Telefon</th> <th>Fakulti</th> <th>Program</th> <th>Sesi</th> <th>E-mel</th> <th>Kata Laluan</th> <th>Pengesahan Kata Laluan</th>
</tr> 

<?php
$con=mysqli_connect("localhost","root","","surau");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // SQL statement
$result = mysqli_query($con,"SELECT * FROM pelajar");

while($row = mysqli_fetch_array($result))
  {
	 echo "<tr><td>";
	echo $row['P_Nama'];
	echo "</td>";
	 
	echo "<td>"; 
    echo $row['P_NoMatrik'];
	echo "</td>";
	
	echo "<td>";
    echo $row['P_NoTelefon'];
	echo "</td>";
	
	echo "<td>";
    echo $row['P_Fakulti'];
	echo "</td>";
	
	echo "<td>";
    echo $row['P_Program'];
	echo "</td>";
	
	echo "<td>";
    echo $row['P_Sesi'];
	echo "</td>";
	
	echo "<td>";
    echo $row['P_Emel'];
	echo "</td>";
	
	echo "<td>";
    echo $row['P_KataLaluan'];
	echo "</td>";
	
	echo "<td>";
    echo $row['P_PengesahanKataLaluan'];
	echo "</td>";
    echo "</tr>";
  }

?>
</table>
<!--<br><a href="pendaftaranpelajar.php">[Borang]</a>-->

</BODY>
</HTML>