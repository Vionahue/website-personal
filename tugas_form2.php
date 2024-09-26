<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form 2 Pendaftaran</title>
</head>
<body>
<h1>Form2 Pendaftaran</h1>
<?php
error_reporting(0);
$nik = $_POST['nik'];
$nodaf = $_POST['nodaftar'];
$nisn = $_POST['nisn'];
$namap = $_POST['nama'];
$tgl = $_POST['tgl'];
$sex = $_POST['kelamin'];
$almt = $_POST['kab/kota'];
$nohp = $_POST['nohp'];
$asal = $_POST['asal'];
$akte = $_POST['akte'];
$fckk = $_POST['fckk'];
$fcktp = $_POST['fcktp'];
$rapor = $_POST['fcrapor'];
$cek1=$_POST['cek1'];
$cek2=$_POST['cek2'];
$cek3=$_POST['cek3'];
$cek4=$_POST['cek4'];
$ppkn = $_POST['ppkn'];
$bindo = $_POST['bindo'];
$mtk = $_POST['mtk'];
$ipa = $_POST['ipa'];
$ips = $_POST['ips'];
$jum = $_POST['jumlah'];
$piagam1 = $_POST['piagam1'];
$piagam2 = $_POST['piagam2'];
$piagam3 = $_POST['piagam3'];
$piagam4 = $_POST['piagam4'];
$piagam5 = $_POST['piagam5'];
$piagam6 = $_POST['piagam6'];
$tingkat1 = $_POST['tingkat1'];
$tingkat2 = $_POST['tingkat2'];
$tingkat3 = $_POST['tingkat3'];
$tingkat4 = $_POST['tingkat4'];
$tingkat5 = $_POST['tingkat5'];
$tingkat6 = $_POST['tingkat6'];
$tahun1 = $_POST['tahun1'];
$tahun2 = $_POST['tahun2'];
$tahun3 = $_POST['tahun3'];
$tahun4 = $_POST['tahun4'];
$tahun5 = $_POST['tahun5'];
$tahun6 = $_POST['tahun6'];
echo "NIK :" .$nik;
echo "<br>NoDaftar : " .$nodaf;
echo "<br>NISN : " .$nisn;
echo "<br>Nama Peserta Didik : " .$namap;
echo "<br>Tanggal Lahir : " .$tgl;
echo "<br>Jenis Kelamin : " .$sex;
echo "<br>Alamat Rumah : " .$almt;
echo "<br>No Telepon/HP : " .$nohp;
echo "<br>Asal Sekolah : " .$asal;
echo "<br>Berkas Pendaftaran (Akte) : " .$cek1." - ".$cek2." - ".$cek3." - ".$cek4;
echo "<br>PPKN : " .$ppkn;
echo "<br>Bahasa Indonesia : " .$bindo;
echo "<br>Matematika : " .$mtk;
echo "<br>IPA : " .$ipa;
echo "<br>IPS : " .$ips;
echo "<br>Jumlah Nilai : " .$jum;
echo "<br>Piagam 1 : " .$piagam1." - " .$tingkat1. " - ".$tahun1;
echo "<br>Piagam 2 : " .$piagam2." - " .$tingkat2. " - ".$tahun2;
echo "<br>Piagam 3 : " .$piagam3." - " .$tingkat3. " - ".$tahun3;
echo "<br>Piagam 4 : " .$piagam4." - " .$tingkat4. " - ".$tahun4;
echo "<br>Piagam 5 : " .$piagam5." - " .$tingkat5. " - ".$tahun5;
echo "<br>Piagam 6 : " .$piagam6." - " .$tingkat6. " - ".$tahun6;
?>
</body>
</html>
