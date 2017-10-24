<?php
echo "<center>";

	require_once 'keterangan.php';

	$identitas1 = new identitas("smk assalaam", "Bandung", "XI RPL 1", "Membaca");
		echo "sekolah = ".$identitas1->get_sekolah().'<br>';
		echo "alamat = ".$identitas1->get_alamat().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "hoby = ".$identitas1->get_hoby().'<br>';
		echo "=============================================".'<br>';

	$identitas1 = new identitas("smk buah batu", "cibaduyut", "XI tsm 2", "belajar");
		echo "sekolah = ".$identitas1->get_sekolah().'<br>';
		echo "alamat = ".$identitas1->get_alamat().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "hoby = ".$identitas1->get_hoby().'<br>';
		echo "=============================================".'<br>';

	$identitas1 = new identitas("sma muhammadiyah", "rancamanyar", "XI tkr 5", "olahraga");
		echo "sekolah = ".$identitas1->get_sekolah().'<br>';
		echo "alamat = ".$identitas1->get_alamat().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "hoby = ".$identitas1->get_hoby().'<br>';
		echo "=============================================".'<br>';

	
	$identitas1 = new identitas("smp cililitan", "Bandung", "VII RPL 1", "berenang");
		echo "sekolah = ".$identitas1->get_sekolah().'<br>';
		echo "alamat = ".$identitas1->get_alamat().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "hoby = ".$identitas1->get_hoby().'<br>';
		echo "=============================================".'<br>';

	
	$identitas1 = new identitas("sd sukarame", "Bandung", "III", "bermain");
		echo "sekolah = ".$identitas1->get_sekolah().'<br>';
		echo "alamat = ".$identitas1->get_alamat().'<br>';
		echo "Kelas = ".$identitas1->get_kelas().'<br>';
		echo "hoby = ".$identitas1->get_hoby().'<br>';
		echo "=============================================".'<br>';

?>