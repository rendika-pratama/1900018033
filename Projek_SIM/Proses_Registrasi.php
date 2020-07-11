<?php 
	$fp = fopen("Data_SIM.txt", "a+");
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis = $_POST['jenis'];
	$tinggi = $_POST['tinggi'];
	$kerja = $_POST['kerja'];
	$Gol_SIM = $_POST['Gol_SIM'];

	fputs($fp, "$nama|$alamat|$tempat_lahir|$tanggal_lahir|$jenis|$tinggi|$kerja|$Gol_SIM\n");
	fclose($fp);

	header("Location: Home3.html");
 ?>