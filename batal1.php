<html>
<head>
<title>Pembatalan</title>
<style type="text/css">
body{
	font-family:Arial;
	font-size:12px;
	margin:10;
	background-color:#B1E4E1;
	background-repeat:repeat-y;
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
<body>
<body background="1.jpg">
<form method="GET" action="batal2.php">
<h3><center>Pembatalan Tempahan</center></h3>

<br><p><center>

<form>
No Matrik : <input type = "text" id = "matrik" name =  "matrik"  required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')">

<br><br>

<center><input type = "submit" value = "Hantar">

</form>
</body>
</html>