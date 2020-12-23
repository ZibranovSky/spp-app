<?php 

include_once 'fungsi/sesi.php';
$modul  = (isset($_GET['s']))?$_GET['s']:"awal";
$nama_app = " | SPP";
switch ($modul) {
	case 'awal': default: $judul="Pembayaran $nama_app"; include 'page.php'; break;
	
}



 ?>