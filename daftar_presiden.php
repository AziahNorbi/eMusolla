<HTML>
<head>
<title> Pendaftaran YDP Musolla </title>
<script type="text/javascript">
function validate()
{
var Nama=document.getElementById("Nama").value
var NoMatrik=document.getElementById("NoMatrik").value
var NoTelefon=document.getElementById("NoTelefon").value
var at=document.getElementById("Emel").value.indexOf("@")
var putra=document.getElementById("Emel").value.indexOf("putra")
var unisza=document.getElementById("Emel").value.indexOf(".unisza.")
var edu=document.getElementById("Emel").value.indexOf(".edu.")
var my=document.getElementById("Emel").value.indexOf(".my")
var dot=document.getElementById("Emel").value.indexOf(".")
var KataLaluan=document.getElementById("KataLaluan").value
var PengesahanKataLaluan=document.getElementById("PengesahanKataLaluan").value

submitOK="true" //assume xde error

if(!isNaN(Nama))    //nk pastikan tiada nombor
{
alert("Nama mesti dalam huruf")
submitOK="false"
}

if(isNaN(NoMatrik))    //nk pastikan tiada huruf
{
alert("Matrik mesti dalam nombor")
submitOK="false"
}
if(NoMatrik.length!=6)    //nk pastikan panjang 6 
{
alert("Panjang matrik mesti 6 angka")
submitOK="false"
}
if (isNaN(NoTelefon)) //nak pastikan tiada huruf
{
alert("No Telefon mesti dalam angka")
submitOK="false"
}
if((NoTelefon.length < 10) || (NoTelefon.length >11))
{
alert("No Telefon 10 atau 11 angka sahaja");
submitOK="false"
}
if(KataLaluan.length!=8)    //nk pastikan panjang 8
{
alert("Panjang kata laluan mesti 8 angka")
submitOK="false"
}
if(KataLaluan != PengesahanKataLaluan) 
{
alert('Pengesahan Kata Laluan tidak sama dengan Kata Laluan,\n Sila Isi Semula !');
submitOK="false"
}
if (at==-1)
{
alert("Tidak valid,tiada @")
submitOK="false"                      
}
else
if (putra==-1)
{
alert("Tidak valid,tiada putra")
submitOK="false"  
}
else
 if (unisza==-1)
 {
alert("Tidak valid,tiada unisza")
submitOK="false"
}
else
if (edu==-1)
{
alert("Tidak valid,tiada (edu)")
submitOK="false"
}
else
 if (dot==-1)
{
alert("Tidak valid,tiada titik (.)")
submitOK="false" 
}
else
if (my==-1)
{
alert("Tidak valid,tiada (my)")
submitOK="false"
}
if (submitOK=="false") //akan stay jk ad error
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

<BODY>
<div align="center"><h3><u>Borang Pendaftaran Yang Di Pertua Musolla</u></h3></align>

<form action="simpan_presiden.php" method="POST" onsubmit="return validate()">
 
<div align="center"></align> 
<table width="1000" border="0" cellpadding="0" cellspacing="0">
                    <table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="180">Nama: </td>
							<td width="500">
							<input type="text" name="Nama" id="Nama" size="50" maxlength="50" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhkan Ruang')" oninput="setCustomValidity('')">
							</td>
							<td width="350"></td> 
						</tr>		  
					    <tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>
					
					<table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">No Matrik: </td>
							<td width="500">
                            <input type="text" name="NoMatrik" id="NoMatrik" size="6" maxlength="6" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhkan Ruang')" oninput="setCustomValidity('')">
								<font color="blue"><i>Contoh: 029000</i>
							</td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>
					
                    <table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">No Telefon: </td>
							<td width="500">
                            <input type="text" name="NoTelefon" id="NoTelefon" size="11" maxlength="11" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhkan Ruang')" oninput="setCustomValidity('')">
								<font color="blue"><i>Contoh : 0001112222</i></td>
							</td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>				
					
					<table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">Pengajian: </td>
							<td width="500">
                            <select name="Pengajian" id="Pengajian" required="required">
                            <option value="">Sila Pilih Pengajian</option>
                            <option value="Diploma"
							     <?php
                                    if (isset($_POST['Pengajian']))								
							        if($_POST['Pengajian']=="Diploma")
								    echo "selected";
						         ?>>Diploma
							</option>
                            <option value="Ijazah"
							     <?php
                                    if (isset($_POST['Pengajian']))								
							        if($_POST['Pengajian']=="Ijazah")
								    echo "selected";
						         ?>>Ijazah
						    </option>
							</select>
							</td> 
						</tr>
						<tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>
							
                    <table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">Fakulti: </td>
							<td width="500">
                            <select name="Fakulti" id="Fakulti" required="required">
                            <option value="">Sila Pilih Fakulti</option>
                            <option value="Fakulti Pengajian Kontemporari Islam" 
							    <?php
									if (isset($_POST['Fakulti']))	
							        if($_POST['Fakulti']=="Fakulti Pengajian Kontemporari Islam")
									echo "selected";
								?>>Fakulti Pengajian Kontemporari Islam</option>
                            <option value="Fakulti Bahasa Dan Komunikasi"
							    <?php
									if (isset($_POST['Fakulti']))	
							        if($_POST['Fakulti']=="Fakulti Bahasa Dan Komunikasi")
									echo "selected";
								?>>Fakulti Bahasa Dan Komunikasi</option>
                            <option value="Fakulti Informatik Dan  Komputeraan"
							    <?php
									if (isset($_POST['Fakulti']))	
							        if($_POST['Fakulti']=="Fakulti Informatik Dan  Komputeraan")
									echo "selected";
								?>>Fakulti Informatik Dan Komputeraan</option>
                            <option value="Fakulti Pengurusan Perniagaan Dan Perakaunan"
							     <?php
									if (isset($_POST['Fakulti']))	
							        if($_POST['Fakulti']=="Fakulti Pengurusan Perniagaan Dan Perakaunan")
									echo "selected";
								?>>Fakulti Pengurusan Perniagaan Dan Perakaunan</option>
                            <option value="Fakulti Undang-Undang Dan Hubungan Antarabangsa"
							     <?php
									if (isset($_POST['Fakulti']))	
							        if($_POST['Fakulti']=="Fakulti Undang-Undang Dan Hubungan Antarabangsa")
									echo "selected";
								 ?>>Fakulti Undang-Undang Dan Hubungan Antarabangsa</option>
                            <option value="Fakulti Reka Bentuk Inovatif Dan Teknologi"
							     <?php
									if (isset($_POST['Fakulti']))	
							        if($_POST['Fakulti']=="Fakulti Reka Bentuk Inovatif Dan Teknologi")
									echo "selected";
								 ?>>Fakulti Reka Bentuk Inovatif Dan Teknologi</option>
                            <option value="Fakulti Pertanian, Bioteknologi Dan Sains Makanan"
							     <?php
									if (isset($_POST['Fakulti']))	
							        if($_POST['Fakulti']=="Fakulti Pertanian, Bioteknologi Dan Sains Makanan")
									echo "selected";
								 ?>>Fakulti Pertanian, Bioteknologi Dan Sains Makanan</option>
                            <option value="Fakulti Perubatan Dan Sains Kesihatan"
							     <?php
									if (isset($_POST['Fakulti']))	
							        if($_POST['Fakulti']=="Fakulti Perubatan Dan Sains Kesihatan")
									echo "selected";
								 ?>>Fakulti Perubatan Dan Sains Kesihatan</option>
                            </select>
							</td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>
					
                    <table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="120">Program:</td>
							<td width="500">
                            <select name="Program" id="Program" required="required">
							 <option value="">Sila Pilih Program</option>
                            <option value="Ijazah Sarjana Muda Bahasa Inggeris dengan kepujian"
							     <?php 
									if (isset($_POST['Program']))	
							        if($_POST['Program']=="Ijazah Sarjana Muda Bahasa Inggeris dengan kepujian")
						            echo "selected";
							     ?>>Ijazah Sarjana Muda Bahasa Inggeris dengan kepujian
							</option>
															   
                            <option value="Diploma Pengajaran Bahasa Inggeris Sebagai Bahasa Kedua (TESL)" 
							     <?php 
									if (isset($_POST['Program']))
							        if($_POST['Program']=="Diploma Pengajaran Bahasa Inggeris Sebagai Bahasa Kedua (TESL)")
									echo "selected";
								?>>Diploma Pengajaran Bahasa Inggeris Sebagai Bahasa Kedua (TESL)
							</option>
															   
                            <option value="Ijazah Sarjana Muda Pengajian Bahasa Arab dengan kepujian" 
							     <?php 
									if (isset($_POST['Program']))
							        if($_POST['Program']=="Ijazah Sarjana Muda Pengajian Bahasa Arab dengan kepujian")
					                echo "selected";
					             ?>>Ijazah Sarjana Muda Pengajian Bahasa Arab dengan kepujian</option>
															   
                            <option value="Ijazah Sarjana Muda Pengajian Islam (Usuluddin) dengan kepujian" 
							     <?php
									if (isset($_POST['Program']))							
							        if($_POST['Program']=="Ijazah Sarjana Muda Pengajian Bahasa Arab dengan kepujian")
				                    echo "selected";
						         ?>>Ijazah Sarjana Muda Pengajian Islam (Usuluddin) dengan kepujian</option>
															   
                            <option value="Diploma Pengajian Islam (Syariah)" 
							     <?php 
									if (isset($_POST['Program']))
							        if($_POST['Program']=="Diploma Pengajian Islam (Syariah)")
								    echo "selected";
								 ?>>Diploma Pengajian Islam (Syariah)</option>
															   
                            <option value="Ijazah Sarjana Muda Pengajian Islam (Syariah) dengan kepujian" 
							     <?php
								     if (isset($_POST['Program']))							
							         if($_POST['Program']=="Ijazah Sarjana Muda Pengajian Islam (Syariah) dengan kepujian")
									 echo "selected";
						         ?>>Ijazah Sarjana Muda Pengajian Islam (Syariah) dengan kepujian</option>
															   
                            <option value="Diploma Pengajian Islam (Usuluddin)" 
							     <?php 
							         if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengajian Islam (Usuluddin)")
									 echo "selected";
								 ?>>Diploma Pengajian Islam (Usuluddin)</option>
															   
                            <option value="Ijazah Sarjana Muda Pengajian Islam (Dakwah) dengan kepujian" 
							     <?php 
							         if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Pengajian Islam (Dakwah) dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Pengajian Islam (Dakwah) dengan kepujian</option>
															   
                            <option value="Diploma Pengajian Islam (Bahasa Dan Kesusasteraan Arab)" 
							     <?php 
							         if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengajian Islam (Bahasa Dan Kesusasteraan Arab)")
									 echo "selected";
							     ?>>Diploma Pengajian Islam (Bahasa Dan Kesusasteraan Arab)</option>
															   
                            <option value="Ijazah Sarjana Muda Usuluddin Dengan Kaunseling dengan kepujian" 
							     <?php
								     if (isset($_POST['Program']))							
							         if($_POST['Program']=="Ijazah Sarjana Muda Usuluddin Dengan Kaunseling dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Usuluddin Dengan Kaunseling dengan kepujian</option>
															   
                            <option value="Diploma Pengajian Islam (Dakwah)" 
							     <?php
								     if (isset($_POST['Program']))							
							         if($_POST['Program']=="Diploma Pengajian Islam (Dakwah)")
									 echo "selected";
							     ?>>Diploma Pengajian Islam (Dakwah)</option>
															   
                            <option value="Ijazah Sarjana Muda Al-Quran Dan Al-Sunnah (Qiraat) dengan kepujian" 
							     <?php
							         if (isset($_POST['Program']))							
							         if($_POST['Program']=="Ijazah Sarjana Muda Al-Quran Dan Al-Sunnah (Qiraat) dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Al-Quran Dan Al-Sunnah (Qiraat) dengan kepujian</option>
															   
                            <option value="Diploma Pengajian Islam Dengan Teknologi Maklumat" 
							     <?php 
							         if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengajian Islam Dengan Teknologi Maklumat")
									 echo "selected";
								 ?>>Diploma Pengajian Islam Dengan Teknologi Maklumat</option>
															   
                            <option value="Ijazah Sarjana Muda Sains Sosial (Antropologi dan Dakwah) dengan kepujian" 
							     <?php
                                     if (isset($_POST['Program']))							
							         if($_POST['Program']=="Ijazah Sarjana Muda Sains Sosial (Antropologi dan Dakwah) dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Sains Sosial (Antropologi dan Dakwah) dengan kepujian</option>
															   
                            <option value="Diploma Pengajian Islam (Al-Quran Dan Al-Sunnah)" 
							     <?php 
							         if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengajian Islam (Al-Quran Dan Al-Sunnah)")
									 echo "selected";
								 ?>>Diploma Pengajian Islam (Al-Quran Dan Al-Sunnah)</option>
															   
                            <option value="Diploma Pengajian Islam (Pentadbiran Islam)" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengajian Islam (Pentadbiran Islam)")
									 echo "selected";
								 ?>>Diploma Pengajian Islam (Pentadbiran Islam)</option>
															   
                            <option value="Diploma Pengajian Islam (Sejarah Dan Tamadun Islam)" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengajian Islam (Sejarah Dan Tamadun Islam)")
									 echo "selected";
								 ?>>Diploma Pengajian Islam (Sejarah Dan Tamadun Islam)</option>
															   
                            <option value="Ijazah Sarjana Muda Perakaunan dengan kepujian" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Perakaunan dengan kepujian")
									 echo "selected";
							     ?>>Ijazah Sarjana Muda Perakaunan dengan kepujian</option>
															   
                            <option value="Diploma Pengajian Bank" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengajian Bank")
									 echo "selected";
								 ?>>Diploma Pengajian Bank</option>
															   
                            <option value="Ijazah Sarjana Muda Pentadbiran Perniagaan (Kewangan Islam) dengan kepujian" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Pentadbiran Perniagaan (Kewangan Islam) dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Pentadbiran Perniagaan (Kewangan Islam) dengan kepujian</option>
															   
                            <option value="Diploma Pengajian Insurans " 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengajian Insurans")
									 echo "selected";
							     ?>>Diploma Pengajian Insurans </option>
															   
                            <option value="Ijazah Sarjana Muda Pentadbiran Perniagaan (Pengurusan Risiko Dan Takaful) dengan kepujian" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Pentadbiran Perniagaan (Pengurusan Risiko Dan Takaful) dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Pentadbiran Perniagaan (Pengurusan Risiko Dan Takaful) dengan kepujian</option>
															   
                            <option value="Diploma Kewangan" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Kewangan")
									 echo "selected";
								 ?>>Diploma Kewangan</option>
															   
                            <option value="Diploma Pemasaran" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pemasaran")
									 echo "selected";
								 ?>>Diploma Pemasaran</option>
															   
                            <option value="Diploma Perdagangan Antarabangsa" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Perdagangan Antarabangsa")
									 echo "selected";
								 ?>>Diploma Perdagangan Antarabangsa</option>
															   
                            <option value="Diploma Perakaunan" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Perakaunan")
									 echo "selected";
								 ?>>Diploma Perakaunan</option>
															   
                            <option value="Diploma Pengurusan Sumber Manusia" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Pengurusan Sumber Manusia")
									 echo "selected";
								 ?>>Diploma Pengurusan Sumber Manusia</option>
															   
                            <option value="Ijazah Sarjana Muda Undang-Undang dengan kepujian" 
								 <?php
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Undang-Undang dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Undang-Undang dengan kepujian</option>
															   
                            <option value="Diploma Undang-undang" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Undang-undang")
									 echo "selected";
								?>>Diploma Undang-undang </option>
															   
                            <option value="Ijazah Sarjana Muda Sains Komputer (Pembangunan Perisian) dengan kepujian" 
								 <?php 
									 if (isset($_POST['Program']))
                                     if($_POST['Program']=="Ijazah Sarjana Muda Sains Komputer (Pembangunan Perisian) dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Sains Komputer (Pembangunan Perisian) dengan kepujian</option>
															   
                            <option value="Diploma Teknologi Maklumat" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Teknologi Maklumat")
									 echo "selected";
								 ?>>Diploma Teknologi Maklumat </option>
															   
                            <option value="Ijazah Sarjana Muda Sains Komputer (Keselamatan Rangkaian Komputer) dengan kepujian" 
								 <?php 
								     if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Sains Komputer (Keselamatan Rangkaian Komputer) dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Sains Komputer (Keselamatan Rangkaian Komputer) dengan kepujian</option>
															   
                            <option value="Diploma Teknologi Multimedia" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Teknologi Multimedia")
									 echo "selected";
								 ?>>Diploma Teknologi Multimedia</option>
															   
                            <option value="Ijazah Sarjana Muda Reka Bentuk Perindustrian dengan Kepujian" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Reka Bentuk Perindustrian dengan Kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Reka Bentuk Perindustrian dengan Kepujian</option>
															   
                            <option value="Diploma Teknologi Pembuatan" 
								 <?php
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Teknologi Pembuatan")
									 echo "selected";
								 ?>>Diploma Teknologi Pembuatan</option>
															   
                            <option value="Diploma Reka Bentuk Perindustrian" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Reka Bentuk Perindustrian")
									 echo "selected";
								 ?>>Diploma Reka Bentuk Perindustrian</option>
															   
                            <option value="Ijazah Sarjana Muda Bioteknologi Pertanian dengan kepujian" 
								 <?php 
									 if (isset($_POST['Program'])) 
							         if($_POST['Program']=="Ijazah Sarjana Muda Bioteknologi Pertanian dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Bioteknologi Pertanian dengan kepujian</option>
															   
                            <option value="Ijazah Sarjana Muda Produksi dan Kesihatan Haiwan dengan kepujian"
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Produksi dan Kesihatan Haiwan dengan kepujian")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Produksi dan Kesihatan Haiwan dengan kepujian</option>
															   
                            <option value="Ijazah Sarjana Muda Teknologi Makanan dengan Kepujian"
								 <?php
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Teknologi Makanan dengan Kepujian")
									 echo "selected";
							     ?>>Ijazah Sarjana Muda Teknologi Makanan dengan Kepujian</option>
															   
                            <option value="Ijazah Sarjana Muda Perubatan dan Pembedahan" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Perubatan dan Pembedahan")
									 echo "selected";
								 ?>>Ijazah Sarjana Muda Perubatan dan Pembedahan</option>
															   
                            <option value="Diploma Sains Kejururawatan"
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Sains Kejururawatan")
									 echo "selected";
								 ?>>Diploma Sains Kejururawatan</option>
															   
                            <option value="Ijazah Sarjana Muda Dietetik dengan Kepujian" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Ijazah Sarjana Muda Dietetik dengan Kepujian")
									 echo "selected";
							     ?>>Ijazah Sarjana Muda Dietetik dengan Kepujian</option>
															   
                            <option value="Diploma Radiografi" 
								 <?php 
									 if (isset($_POST['Program']))
									 if($_POST['Program']=="Diploma Radiografi")
									 echo "selected";
								 ?>>Diploma Radiografi</option>
															   
                            <option value="Diploma Teknologi Makmal Perubatan" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Teknologi Makmal Perubatan")
									 echo "selected";
							     ?>>Diploma Teknologi Makmal Perubatan</option>
															   
                            <option value="Diploma Fisioterapi" 
								 <?php 
									 if (isset($_POST['Program']))
							         if($_POST['Program']=="Diploma Fisioterapi")
									 echo "selected";
								 ?>>Diploma Fisioterapi</option>
                            </select>
							</td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>
					
                    <table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">Sesi: </td>
							<td width="500">
                            <select name="Sesi" id="Sesi" required="required">
                            <option value="">Sila Pilih Sesi</option>
                            <option value="2013/2014"
							     <?php 
									 if (isset($_POST['Sesi']))
							         if($_POST['Sesi']=="2013/2014")
									 echo "selected";
								 ?>>2013/2014</option>
                            <option value="2014/2015"
							     <?php 
									 if (isset($_POST['Sesi']))
							         if($_POST['Sesi']=="2014/2015")
									 echo "selected";
								 ?>>2014/2015</option>
                            <option value="2015/2016"
							     <?php 
									 if (isset($_POST['Sesi']))
							         if($_POST['Sesi']=="2015/2016")
									 echo "selected";
								 ?>>2015/2016</option>
                            </select>
							</td>	
						</tr>
						<tr>
						   <td width="100"></td>
						   <td width="500"></td>
						</tr>
					</table>
					<br>
					
					<table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">Jawatan: </td>
							<td width="500">
                            <select name="Jawatan" id="Jawatan">
                            <option value="">Sila Pilih Jawatan</option>
                            <option value="YDP Musolla Farabi"
							     <?php 
									 if (isset($_POST['Jawatan']))
							         if($_POST['Jawatan']=="YDP Musolla Farabi")
									 echo "selected";
								 ?>>YDP Musolla Farabi</option>
                            <option value="YDP Musolla Khansa"
							     <?php 
									 if (isset($_POST['Jawatan']))
							         if($_POST['Jawatan']=="YDP Musolla Khansa")
									 echo "selected";
								 ?>>YDP Musolla Khansa</option>
                            <option value="YDP Musolla Thoriq"
							     <?php 
									 if (isset($_POST['Jawatan']))
							         if($_POST['Jawatan']=="YDP Musolla Thoriq")
									 echo "selected";
								 ?>>YDP Musolla Thoriq</option>
							<option value="YDP Musolla Saodah"
							     <?php 
									 if (isset($_POST['Jawatan']))
							         if($_POST['Jawatan']=="YDP Musolla Saodah")
									 echo "selected";
								 ?>>YDP Musolla Saodah</option>
                            <option value="YDP Musolla Habibah"
							     <?php 
									 if (isset($_POST['Jawatan']))
							         if($_POST['Jawatan']=="YDP Musolla Habibah")
									 echo "selected";
								 ?>>YDP Musolla Habibah</option>
                            </select>
							</td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>
					
                    <table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">E-mel:</td>
							<td width="500">
                            <input type="text" name="Emel" id="Emel" size="30" maxlength="40" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhkan Ruang')" oninput="setCustomValidity('')">
							<font color="blue"><i>Contoh:029000@putra.unisza.edu.my</i>
							</td>
						</tr>
					</table>
					<br>
					
                    <table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">Kata Laluan: </td>
							<td width="300">
                            <input type="password" name="KataLaluan" id="KataLaluan" size="10" maxlength="10" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhkan Ruang')" oninput="setCustomValidity('')">
							<font color="blue"><i>Contoh: abcdef12</i>
							</td>	
						</tr>
						<tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>

                    <table cellpadding="0" width="850" border="0">
						<tr>
							<td class="fontblack" width="100">Pengesahan Kata Laluan: </td>
							<td width="300">
                            <input type="password" name="PengesahanKataLaluan" id="PengesahanKataLaluan" size="10" maxlength="10" required placeholder="" oninvalid="this.setCustomValidity ('Sila Penuhkan Ruang')" oninput="setCustomValidity('')">
							<font color="blue"><i>Contoh: abcdef12</i>
							</td>
						</tr>
						<tr>
							<td width="100"></td>
							<td width="500"></td>
						</tr>
					</table>
					<br>
</table>
<input type="submit" name="submit" value="Simpan">
<input type="reset" value="Reset">
<input type="button" id="Hantar" value="Daftar Masuk" onclick="newDoc()">
 <script>
 function newDoc()
  {
  window.location.assign("frameutamapresident.php")
  }
  </script>
</form>
 
</BODY>
</HTML>