<html>
<head>
<script type="text/javascript">

function validation()
{
var Nama=document.getElementById("Nama").value
var NoMATRIK=document.getElementById("NoMATRIK").value
var NoTelefon = document.getElementById("NoTelefon").value
 var at=document.getElementById("Emel").value.indexOf("@")
 var putra=document.getElementById("Emel").value.indexOf("putra")
 var unisza=document.getElementById("Emel").value.indexOf(".unisza.")
 var edu=document.getElementById("Emel").value.indexOf(".edu.")
 var my=document.getElementById("Emel").value.indexOf(".my")
 var dot=document.getElementById("Emel").value.indexOf(".")
var KataLaluan=document.getElementById("KataLaluan").value
var confPass = document.getElementById("PengesahanKataLaluan").value
 


submitOK="true" //assume xde error

if(!isNaN(Nama))    //nk pastikan tiada nombor
{
alert("Nama mesti dalam huruf")
submitOK="false"
}

if(isNaN(NoMATRIK))    //nk pastikan tiada huruf
{
alert("Matrik mesti dalam nombor")
submitOK="false"
}
if(NoMATRIK.length!=6)    //nk pastikan panjang 6 
{
alert("Panjang matrik mesti 6")
submitOK="false"
}


if (isNaN(NoTelefon))
{
alert("Masukkan no telefon dalam digit")
submitOK="false"
}


if((NoTelefon.length < 10) || (NoTelefon.length >11))
{
alert(" Masukkan no telefon anda 10 atau 11 digit sahaja!");
submitOK="false"
}
if(KataLaluan.length!=8)
{
alert("Your Password must be 8 Character");
submitOK="false"
}
if(KataLaluan!= confPass) {
alert('Katalaluan tidak sama,\n Sila Isi Semula !');
submitOK="false"
}


if (submitOK=="false")
{
return false    
}


}
</script>
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
  <body>
<body background="1.jpg">
<center>
<table width="854" border="0"> 
 <tr align="center">
 <td width="360"><img src="logounisza.png" width="360" height="100" style="float:right; align="right">
 <td width="522" align="center"><h1>SISTEM TEMPAHAN MUSOLLA SECARA ATAS TALIAN</h1></td>
 </tr>
</table>
</head>
<body>
<h3 align="center">Pendaftaran</h3>
<p  align="center">Sila Masukkan Maklumat Anda</p><br><br>

<form action="SimpanPendaftaranPelajar.php"   method="POST" onsubmit="return validation()">
<div align="center"></align>
<table width="800" border="0" cellpadding="0" cellspacing="0">
                    <table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">Nama:</td>
							<td width="600">
                            <input type="text" name="Nama" id="Nama" size="50" maxlength="50" required placeholder="" oninvalid="this.setCustomValidity('Sila Penuhkan Ruang Ini')" oninput="setCustomValidity('')" >
								
						    </td>
								
						</tr>		  
					    <tr>
							<td width="100"></td>
							<td width="600">
						    </td>
						</tr>
					</table><br>
					
                     
					<table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">No Matrik:</td>
							<td width="600">
                            <input type="text" name="NoMATRIK" id="NoMATRIK" size="6" maxlength="6" required placeholder="" oninvalid="this.setCustomValidity('Sila Penuhkan Ruang Ini')" oninput="setCustomValidity('')" >
							<font color="blue"><i>*contoh : 029614</i></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="600"></td>
						</tr>
					</table><br>
					
					
                    <table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">No Telefon:</td>
							<td width="600">
                            <input type="text" name="NoTelefon"   size="15" maxlength="15" required="required"  id="NoTelefon">
							<font color="blue"><i>*contoh : 0123456789</i></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="600"></td>
						</tr>
					</table><br>				
					
                    <table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">Fakulti:</td>
							<td width="600">
                            <select name="Fakulti"  required="required" oninvalid="this.setCustomValidity ('Sila Pilih') id="Fakulti">
                            <option value="">Sila Pilih Fakulti</option>
                            <option value="Fakulti Pengajian Kontemporari Islam">Fakulti Pengajian Kontemporari Islam</option>
                            <option value="Fakulti Bahasa Dan Komunikasi">Fakulti Bahasa Dan Komunikasi</option>
                            <option value="Fakulti Informatik Dan  Komputeraan">Fakulti Informatik Dan  Komputeraan</option>
                            <option value="Fakulti Pengurusan Perniagaan Dan Perakaunan">Fakulti Pengurusan Perniagaan Dan Perakaunan</option>
                            <option value="Fakulti Undang-Undang Dan Hubungan Antarabangsa">Fakulti Undang-Undang Dan Hubungan Antarabangsa</option>
                            <option value="Fakulti Reka Bentuk Inovatif Dan Teknologi">Fakulti Reka Bentuk Inovatif Dan Teknologi</option>
                            <option value="Fakulti Pertanian, Bioteknologi Dan Sains Makanan">Fakulti Pertanian, Bioteknologi Dan Sains Makanan</option>
                            <option value="Fakulti Perubatan Dan Sains Kesihatan">Fakulti Perubatan Dan Sains Kesihatan</option>
                            </select></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="600"></td>
						</tr>
					</table><br>
					
					
                    <table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">Program:</td>
							<td width="600">
                            <select name="Program" required="required" oninvalid="this.setCustomValidity ('Sila Pilih') id="Program" >
                            <option value="">Sila Pilih Program</option>
                            <option value="Ijazah Sarjana Muda Bahasa Inggeris dengan kepujian">Ijazah Sarjana Muda Bahasa Inggeris dengan kepujian</option>
                            <option value="Diploma Pengajaran Bahasa Inggeris Sebagai Bahasa Kedua (TESL)">Diploma Pengajaran Bahasa Inggeris Sebagai Bahasa Kedua (TESL)</option>
                            <option value="Ijazah Sarjana Muda Pengajian Bahasa Arab dengan kepujian">Ijazah Sarjana Muda Pengajian Bahasa Arab dengan kepujian</option>
                            <option value="Ijazah Sarjana Muda Pengajian Islam (Usuluddin) dengan kepujian">Ijazah Sarjana Muda Pengajian Islam (Usuluddin) dengan kepujian</option>
                            <option value="Diploma Pengajian Islam (Syariah)">Diploma Pengajian Islam (Syariah)</option>
                            <option value="Ijazah Sarjana Muda Pengajian Islam (Syariah) dengan kepujian">Ijazah Sarjana Muda Pengajian Islam (Syariah) dengan kepujian</option>
                            <option value="Diploma Pengajian Islam (Usuluddin)">Diploma Pengajian Islam (Usuluddin)</option>
                            <option value="Ijazah Sarjana Muda Pengajian Islam (Dakwah) dengan kepujian">Ijazah Sarjana Muda Pengajian Islam (Dakwah) dengan kepujian</option>
                            <option value="Diploma Pengajian Islam (Bahasa Dan Kesusasteraan Arab)">Diploma Pengajian Islam (Bahasa Dan Kesusasteraan Arab)</option>
                            <option value="Ijazah Sarjana Muda Usuluddin Dengan Kaunseling dengan kepujian">Ijazah Sarjana Muda Usuluddin Dengan Kaunseling dengan kepujian</option>
                            <option value="Diploma Pengajian Islam (Dakwah)">Diploma Pengajian Islam (Dakwah)</option>
                            <option value="Ijazah Sarjana Muda Al-Quran Dan Al-Sunnah (Qiraat) dengan kepujian">Ijazah Sarjana Muda Al-Quran Dan Al-Sunnah (Qiraat) dengan kepujian</option>
                            <option value="Diploma Pengajian Islam Dengan Teknologi Maklumat">Diploma Pengajian Islam Dengan Teknologi Maklumat</option>
                            <option value="Ijazah Sarjana Muda Sains Sosial (Antropologi dan Dakwah) dengan kepujian">Ijazah Sarjana Muda Sains Sosial (Antropologi dan Dakwah) dengan kepujian</option>
                            <option value="Diploma Pengajian Islam (Al-Quran Dan Al-Sunnah)">Diploma Pengajian Islam (Al-Quran Dan Al-Sunnah)</option>
                            <option value="Diploma Pengajian Islam (Pentadbiran Islam)">Diploma Pengajian Islam (Pentadbiran Islam)</option>
                            <option value="Diploma Pengajian Islam (Sejarah Dan Tamadun Islam)">Diploma Pengajian Islam (Sejarah Dan Tamadun Islam)</option>
                            <option value="Ijazah Sarjana Muda Perakaunan dengan kepujian">Ijazah Sarjana Muda Perakaunan dengan kepujian</option>
                            <option value="Diploma Pengajian Bank">Diploma Pengajian Bank</option>
                            <option value="Ijazah Sarjana Muda Pentadbiran Perniagaan (Kewangan Islam) dengan kepujian">Ijazah Sarjana Muda Pentadbiran Perniagaan (Kewangan Islam) dengan kepujian</option>
                            <option value="Diploma Pengajian Insurans ">Diploma Pengajian Insurans </option>
                            <option value="Ijazah Sarjana Muda Pentadbiran Perniagaan (Pengurusan Risiko Dan Takaful) dengan kepujian">Ijazah Sarjana Muda Pentadbiran Perniagaan (Pengurusan Risiko Dan Takaful) dengan kepujian</option>
                            <option value="Diploma Kewangan">Diploma Kewangan</option>
                            <option value="Diploma Pemasaran">Diploma Pemasaran</option>
                            <option value="Diploma Perdagangan Antarabangsa">Diploma Perdagangan Antarabangsa</option>
                            <option value="Diploma Perakaunan">Diploma Perakaunan</option>
                            <option value="Diploma Pengurusan Sumber Manusia">Diploma Pengurusan Sumber Manusia</option>
                            <option value="Ijazah Sarjana Muda Undang-Undang dengan kepujian">Ijazah Sarjana Muda Undang-Undang dengan kepujian</option>
                            <option value="Diploma Undang-undang">Diploma Undang-undang </option>
                            <option value="Ijazah Sarjana Muda Sains Komputer (Pembangunan Perisian) dengan kepujian">Ijazah Sarjana Muda Sains Komputer (Pembangunan Perisian) dengan kepujian</option>
                            <option value="Diploma Teknologi Maklumat">Diploma Teknologi Maklumat </option>
                            <option value="Ijazah Sarjana Muda Sains Komputer (Keselamatan Rangkaian Komputer) dengan kepujian">Ijazah Sarjana Muda Sains Komputer (Keselamatan Rangkaian Komputer) dengan kepujian</option>
                            <option value="Diploma Teknologi Multimedia">Diploma Teknologi Multimedia	</option>
                            <option value="Ijazah Sarjana Muda Reka Bentuk Perindustrian dengan Kepujian">Ijazah Sarjana Muda Reka Bentuk Perindustrian dengan Kepujian</option>
                            <option value="Diploma Teknologi Pembuatan">Diploma Teknologi Pembuatan</option>
                            <option value="Diploma Reka Bentuk Perindustrian">Diploma Reka Bentuk Perindustrian</option>
                            <option value="Ijazah Sarjana Muda Bioteknologi Pertanian dengan kepujian">Ijazah Sarjana Muda Bioteknologi Pertanian dengan kepujian</option>
                            <option value="Ijazah Sarjana Muda Produksi dan Kesihatan Haiwan dengan kepujian">Ijazah Sarjana Muda Produksi dan Kesihatan Haiwan dengan kepujian</option>
                            <option value="Ijazah Sarjana Muda Teknologi Makanan dengan Kepujian">Wilayah Persekutuan Labuan</option>
                            <option value="Ijazah Sarjana Muda Perubatan dan Pembedahan">Ijazah Sarjana Muda Perubatan dan Pembedahan</option>
                            <option value="Diploma Sains Kejururawatan">Diploma Sains Kejururawatan</option>
                            <option value="Ijazah Sarjana Muda Dietetik dengan Kepujian">Ijazah Sarjana Muda Dietetik dengan Kepujian</option>
                            <option value="Diploma Radiografi">Diploma Radiografi</option>
                            <option value="Diploma Teknologi Makmal Perubatan">Diploma Teknologi Makmal Perubatan</option>
                            <option value="Diploma Fisioterapi">Diploma Fisioterapi</option>
                            </select></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="600"></td>
						</tr>
					</table><br>
					
					
                    <table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">Sesi:</td>
							<td width="600">
                            <select name="Sesi" required="required" oninvalid="this.setCustomValidity ('Sila Pilih') id="Sesi">
                            <option value="">Sila Pilih Sesi</option>
                            <option value="2013/2014">2013/2014</option>
                            <option value="2014/2015">2014/2015</option>
                            <option value="2015/2016">2015/2016</option>
                            </select></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="600"></td>
						</tr>
					</table><br>
					
					
                    <table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">E-mel:</td>
							<td width="600">
                            <input type="text" name="Emel"  id="Emel" size="26" maxlength="26" required placeholder="" oninvalid="this.setCustomValidity('Sila Penuhkan Ruang Ini')" oninput="setCustomValidity('')">
							<font color="blue"><i>*contoh:021111@putra.unisza.edu.my</i></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="600"></td>
						</tr>
					</table><br>
					
					
                    <table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">Kata Laluan:</td>
							<td width="600">
                            <input type="password" id="KataLaluan" class="text" name="KataLaluan" size="10" maxlength="10" required placeholder="" oninvalid="this.setCustomValidity('Sila Penuhkan Ruang Ini')" oninput="setCustomValidity('')">
							<font color="blue"><i>*contoh : abcde12345</i></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="600"></td>
						</tr>
					</table><br>
					
					
                    <table cellpadding="0" width="770" border="0">
						<tr>
							<td class="fontblack" width="100">Pengesahan Kata Laluan:</td>
							<td width="600">
                            <input type="password" id="PengesahanKataLaluan" class="text" name="PengesahanKataLaluan" size="10" maxlength="10"  required placeholder="" oninvalid="this.setCustomValidity('Sila Penuhkan Ruang Ini')" oninput="setCustomValidity('')" onblur="confirmPass()">
						</tr>
						 
 
						<tr>
							<td width="100"></td>
							<td width="600">
							 
							 </td>
						</tr>
					</table><br>
</table>
 <input type="submit" name="sub" value="Simpan"> <input type="reset" value="Kembali">
 <input type="button" id="Hantar" value="Daftar Masuk" onclick="newDoc()">
 <script>
 function newDoc()
  {
  window.location.assign("frameutamastudent.php")
  }
  </script>
 </form>
</body>
</html>

		