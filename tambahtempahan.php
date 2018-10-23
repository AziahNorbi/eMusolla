<?php
$lk = $_POST['Lokasi'];
$tm =  $_POST['TarikhMula'];
$ta = $_POST['TarikhAkhir'];
$ta = $_POST['TarikhAkhir'];
$mm = $_POST['MasaMula'];
$fmm = $_POST['formatmasamula'];
$ma = $_POST['MasaAkhir'];
$fma = $_POST['formatmasaAkhir'];
$na = $_POST['NamaAktiviti'];
$aj = $_POST['Anjuran'];
$nm = $_POST ['NoMatrik'];

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
//&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  /*else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";*/

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
		move_uploaded_file($_FILES["file"]["tmp_name"],
		"upload/" . $_FILES["file"]["name"]);
		//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		$con=mysqli_connect("localhost","root","","surau")or die (mysql_error()); 
		if(mysqli_connect_errno()) {
			die("MySQL connection failed: ". mysqli_connect_error());
		}
		//SQL Statement
		$sql = "INSERT INTO tempahan (T_Lokasi, T_TarikhMula, T_TarikhAkhir, T_MasaMula, T_Formatmasamula, T_MasaAkhir, T_FormatmasaAkhir, T_NamaAktiviti, T_Anjuran, T_NoMatrik, T_Namafile, T_type, T_Size) 
		VALUES ('$lk', '$tm','$ta', '$mm', '$fmm', '$ma', '$fma', '$na', '$aj', '$nm', '{$_FILES["file"]["name"]}', '{$_FILES["file"]["type"]}', '{$_FILES["file"]["size"]}')";

		mysqli_query($con,$sql) or die (mysql_error());
			
 
        // Check if it was successfull
        if($sql) {
            echo "<center><h3>Tahniah! Maklumat Anda Berjaya Disimpan</h3>";
			echo "<center><a href='senaraitempahan.php'>Laporan</a>";
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$con->error}</pre>";
        }
		
      }
    }
  //}
else
  {
  echo "Maklumat File tidak Dijumpai..!!";
  }
?>
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