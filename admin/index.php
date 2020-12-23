<?php 
session_start();
include_once'fungsi/sesi.php';
$modul  = (isset($_GET['m']))?$_GET['m']:"awal";
$nama_app = " | SPP";
switch ($modul) {
	case 'awal': default: $judul="Dashboard $nama_app"; include 'awal.php'; break;
	case 'admin': include 'modul/admin/index.php'; break;
	case 'siswa': include 'modul/siswa/index.php'; break;
	case 'prodi': include 'modul/prodi/index.php'; break;
	case 'kelas': include 'modul/kelas/index.php'; break;
	case 'tapel': include 'modul/tapel/index.php'; break;
	case 'jenis_bayar': include 'modul/jenis_bayar/index.php'; break;
	case 'bayar': include 'modul/transaksi/index.php'; break;
	case 'tagihan': include 'modul/laporan/index.php'; break;
	case 'print': include 'fungsi/print/print-transaksi.php'; break;
	case 'printt': include 'fungsi/print/print-tagihan.php'; break;




}



 ?>