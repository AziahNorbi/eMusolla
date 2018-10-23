<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Thu, 23 Jan 2014 14:57:01 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>E-MUSOLLA SISTEM TEMPAHAN ATAS TALIAN </title>
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
  </head>
<!--  <body>
<body background="1.jpg">
<center>
<table width="854" border="0"> 
 <tr align="center">
 <td width="360"><img src="logounisza.png" width="360" height="100" style="float:right; align="right">
 <td width="522" align="center"><h1>SISTEM TEMPAHAN MUSOLLA SECARA ATAS TALIAN</h1></td>
 </tr>
</table>-->

<center><h3>Log Masuk Pelajar</h3><br>
<form action="login1.php" onsubmit="return validate()" method="POST">
<table border="0" bgcolor="white">  
    <tr>
	<td><b>No Matrik:</b></td> <td><input type="text" id="NoMatrik" name="mat" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')"></td>
	<td><font color="blue"><p><i>Contoh No. Matrik:XXXXXX</font color="blue"></i></p></td>
  </tr>
  
	<tr>
	<td><b>Kata Laluan:</b></td>
	<td><input type="password" id="password" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')"></td>
	</tr>
	
	<tr>
	<td></td>
    <td><input type="submit" value="Log Masuk"></td>
    <td><input type="button" id="daftarmasuk" value="Daftar Masuk" onclick="newDoc()"></td>
    </tr>
</form>
 </table> 
 <script type="text/javascript">
function validate()   //check validate
{
var NoMatrik=document.getElementById("NoMatrik").value
var password=document.getElementById("password").value
submitOK="true" //kenal pasti xde error

if (NoMatrik.length !=6)
{
alert("Sila Masuk No. Matrik Anda")    
submitOK="false"
    }


if (password.length !=8){
    alert("Tidak mencukupi ruang yang disediakan!")
    submiOK="false"
}

if (submitOK=="false") //state pada form klu de error
{
return false
    }
	
}  //tutup function

function newDoc()
  {
  window.location.assign("pendaftaranpelajar.php")
  }
</script>
</body>
</html>

		