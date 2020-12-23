<?php 

include_once'fungsi/sesi.php';
$modul  = (isset($_GET['s']))?$_GET['s']:"awal";
$nama_app = " | SPP";
switch ($modul) {
	case 'awal': default: $judul="Tagihan SPP $nama_app"; include 'tagihan.php'; break;
	case 'print': include 'print-tagihan.php'; break;
	
}



 ?>