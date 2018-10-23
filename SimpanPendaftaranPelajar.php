<?php
$n = $_POST['Nama'];
$m = $_POST['NoMATRIK'];
$t = $_POST['NoTelefon'];
$f = $_POST['Fakulti'];
$p = $_POST['Program'];
$s = $_POST['Sesi'];
$e = $_POST['Emel'];
$k = $_POST['KataLaluan'];
$v = $_POST['PengesahanKataLaluan'];

// Create connection
$con=mysqli_connect("localhost","root","","surau");

//SQL Statement
mysqli_query ($con,"INSERT INTO pelajar (P_Nama,P_NoMatrik, P_NoTelefon, P_Fakulti, P_Program, P_Sesi, P_Emel, P_KataLaluan, P_PengesahanKataLaluan) 
VALUES ('$n', '$m', '$t','$f','$p','$s','$e','$k','$v')");

//echo "<center><h2>Maklumat Anda Berjaya Disimpan !!</h2>";

// Close connection
mysqli_close($con);
?>
<center><a href="frameutamastudent.php">[Laman Utama]</a>
<script>
{
var x;
var r=confirm("Maklumat Anda Berjaya Disimpan..");
if (r==true)
  {
  x="Maklumat Berjaya Disimpan";
  }
document.getElementById("demo").innerHTML=x;
}
</script>