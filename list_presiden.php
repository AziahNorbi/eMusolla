<HTML>
<HEAD></HEAD>
<BODY>
<h1 align="center">Anda Berjaya Daftar Masuk</h1>

<table border=1 bgcolor="beige">

<tr><th>Nama</th> <th>No Matrik</th> <th>No Telefon</th> <th>Pengajian</th> <th>Fakulti</th> <th>Program</th> <th>Sesi</th>
<th>Jawatan</th> <th>E-mel</th> <th>Kata Laluan</th> <th>Pengesahan Kata Laluan</th> </tr>

<?php
$con=mysqli_connect("localhost","root","","surau");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// SQL statement
$result = mysqli_query($con,"SELECT * FROM musolla_presiden");


while($row = mysqli_fetch_array($result))
  {
    echo"<tr>";
	
	echo "<td>";
	echo $row['M_Nama'];
	echo "</td>";
	
	echo "<td>"; 
    echo $row['M_NoMatrik'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_NoTelefon'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_Pengajian'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_Fakulti'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_Program'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_Sesi'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_Jawatan'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_Email'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_KataLaluan'];
	echo "</td>";
	
	echo "<td>";
    echo $row['M_PengesahanKataLaluan'];
	echo "</td>";
	
    echo "</tr>";
  }

?>
</tr>
</table>
<br><a href="daftar_presiden.php">[Borang YDP]</a>

</BODY>
</HTML>
