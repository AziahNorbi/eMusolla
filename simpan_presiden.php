<?php
$n = $_POST['Nama'];
$m = $_POST['NoMatrik'];
$t = $_POST['NoTelefon'];
$g = $_POST['Pengajian'];
$f = $_POST['Fakulti'];
$p = $_POST['Program'];
$s = $_POST['Sesi'];
$j = $_POST['Jawatan'];
$e = $_POST['Emel'];
$k = $_POST['KataLaluan'];
$v = $_POST['PengesahanKataLaluan'];


// Create connection
$con=mysqli_connect("localhost","root","","surau"); 

//SQL Statement
mysqli_query ($con,"INSERT INTO musolla_presiden (M_Nama, M_NoMatrik, M_NoTelefon, M_Pengajian, M_Fakulti, M_Program, M_Sesi, M_Jawatan, M_Email, M_KataLaluan, M_PengesahanKataLaluan) 
VALUES ('$n', '$m', '$t','$g','$f','$p','$s','$j','$e','$k','$v')");

//echo "<center><h2>Maklumat Anda Berjaya Disimpan!!</h2>";

// Close connection
mysqli_close($con);
?>
<center><a href="frameutamapresident.php">[Laman Utama]</a>
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

