<!DOCTYPE html>
<html> 
<head>
<title>Borang Tempahan Musolla</title>
<script type="text/javascript">
function validate()
{
var NoMatrik=document.getElementById("NoMatrik").value
submitOK="true" 

if(isNaN(NoMatrik))
{
alert("Matrik mesti dalam nombor")
submitOK="false"
}

if(NoMatrik.length!=6)
{
alert("Panjang matrik mesti 6 angka")
submitOK="false"
}

if(submitOK=="false")
{
return false
}
}
</script>
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
<br><center><form action="tambahtempahan.php" method="POST"  onsubmit="return validate()" enctype="multipart/form-data" >
No Matrik:<input type="text" name="NoMatrik"  id="NoMatrik" size="10" maxlength="20" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')" ><br><br>
Lokasi Musolla:
  <select name="Lokasi" id="Lokasi"  required="required"> 
  <option value="">Pilih Musolla </option> 
  <option value="Habibah">Habibah</option> 
  <option value="Saodah">Saodah</option> 
  <option value="Farabi">Farabi</option> 
  <option value="Thoriq">Thoriq</option> 
  <option value="Khansa">Khansa</option> 
  </select><br><br>
  
Tarikh Mula: <input type="text" id="TarikhMula" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')"  name="TarikhMula" size = "12" maxlength = "20" />
 <i><font color ="blue">contoh: 2014-01-18 </i></font color ="blue"><br><br>

 Tarikh Akhir: 
  <input type="text" name="TarikhAkhir" size = "12" maxlength = "20" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')" > 
  <i><font color ="blue">contoh: 2014-01-18 </i></font color ="blue"><br><br>

Masa Mula: 
  <input type="text" name="MasaMula" size = "10" maxlength = "15" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')" > 
  <i><font color ="blue">contoh:07:30:00</i></font color ="blue">
  
  <select name="formatmasamula" id="formatmasamula"  required="required" > 
  <option value="">format </option> 
  <option value="AM">AM</option> 
  <option value="PM">PM</option>
  </select>
  <br><br>
Masa Akhir: 
  <input type="text" name="MasaAkhir" size = "10" maxlength = "15" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')" > 
  <i><font color ="blue">contoh:09:30:00</i></font color ="blue">
  
  <select name="formatmasaAkhir" id="formatmasaAkhir"  required="required">   
  <option value="">format </option> 
  <option value="AM">AM</option> 
  <option value="PM">PM</option>
  </select>
  
<br><br>
Nama Aktiviti:
<br>
   <textarea name="NamaAktiviti" rows="3" cols="50" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')" > 
</textarea><br><br>

<label for="file">Muat Naik Banner Program:</label><input type="file" name="file" id="file" size="30" required="required" ><br>

<br>Anjuran:
<br>
  <textarea name="Anjuran" rows="3" cols="50" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhi Ruang Ini')" oninput="setCustomValidity('')" > 
</textarea><br><br>

  <center><input type="submit" name="Submit" value="Simpan"> <input type="reset" name="Reset" value="Reset">
  </form>

</body> 
  </html>		