<?php 
echo '<center>';
	require_once 'tugas.php';

	$identitas1 = new identitas ('Indra', 'Bandung', 'XI RPL 1', 'Pelajar');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('Alif', 'Jakarta', 'XI RPL 2', 'Pelajar');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('Irfan', 'Surabaya', 'XI TKR 1', 'Pelajar');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('Ulul', 'Medan', 'XI TSM 1', 'Pelajar');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('Rudi', 'Kalimantan', 'XI TKR 2', 'Pelajar');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Tempat Lahir = ".$identitas1->get_tempat().'<br>';
	echo "Kelas = ".$identitas1->get_kelas().'<br>';
	echo "Status = ".$identitas1->get_status().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

?>