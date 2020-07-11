<?php 
	$file = "Data_SIM.txt";
		$fp = fopen($file, "r+");

		// Tampilan
		$fp = fopen($file, "w+");
		$data = null;

		// Simpan
		fwrite($fp, $data, strlen($data));

		// Tutup
		fclose($fp);

	header("Location: Data.php");
 ?>