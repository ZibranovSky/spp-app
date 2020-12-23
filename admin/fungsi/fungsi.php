<?php 

// koneksi
$koneksi = mysqli_connect('localhost','root','','spp_zibran');


// ADMIN SECTION
function summon_admin()
{
	global $koneksi;
	$id = $_SESSION['idsppapp'];
	return mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$id'");
}

function select_admin()
{
	global $koneksi;
	return mysqli_query($koneksi, "SELECT * FROM admin");
}

function insert_admin()
{
	global $koneksi;
	$username  = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$kontak =  $_POST['kontak'];
	// tstamps
	 date_default_timezone_set("Asia/Jakarta");
	 $tstamp = date("d-m-Y h:i a");

	 return mysqli_query($koneksi, "INSERT INTO admin SET username='$username',password='$password',nama='$nama', kontak='$kontak', tstamp='$tstamp'");
}

function hapus_Admin()
{
	global $koneksi;
	$id  = $_POST['id'];
	$nama = $_POST['nama'];

	// date

	date_default_timezone_set("Asia/Jakarta");

	$tstamp = date("d-m-Y h:i a");

 	$select = mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$id'");
 	$r = mysqli_fetch_array($select);

	$hapus = mysqli_query($koneksi, "DELETE FROM admin WHERE id='$id'");

	if ($hapus) {
		$keterangan = "Delete Admin ".$r['nama'];
		return mysqli_query($koneksi, "INSERT INTO resp_hps_adm SET nama='$nama', keterangan='$keterangan', tstamp='$tstamp'");
	}
}

function edit_admin()
{
	global $koneksi;
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$kontak = $_POST['kontak'];

	date_default_timezone_set("Asia/Jakarta");

	$tstamp = date("d-m-Y h:i a");

	return mysqli_query($koneksi, "UPDATE admin SET username='$username', password='$password', nama='$nama', kontak='$kontak', tstamp='tstamp'");

}

// ---------------------------------------------------SISWA SECTION----------------------------------------------------------
function insert_siswa()
{
	global $koneksi;
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$prodi = $_POST['prodi'];
	

	date_default_timezone_set("Asia/Jakarta");

	$tstamp = date("d-m-Y h:i a");

	$admin = $_POST['admin'];

	$selectsiswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis='$nis'");
	$cek = mysqli_num_rows($selectsiswa);

	if ($cek) {
		echo '<script>alert("nis sudah ada")</script>';
	}else{

	$save = mysqli_query($koneksi, "INSERT INTO tb_siswa SET nis='$nis', nama='$nama', kelas='$kelas', prodi='$prodi', tstamp='$tstamp', admin='$admin'");

	$save2 = mysqli_query($koneksi, "INSERT INTO tb_tagihan SET nis='$nis', nama='$nama', kelas='$kelas', prodi='$prodi', bulan='-',keterangan='belum lunas', tstamp='$tstamp'");
	}


}

function hapus_siswa()
{
	global $koneksi;
	$id = $_POST['id'];
	$nis = $_POST['nis'];

	$hapus = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id='$id'");

	$hapus2 = mysqli_query($koneksi, "DELETE FROM tb_tagihan WHERE nis = '$nis'");



}

function edit_siswa()
{
	global $koneksi;
	$id = $_POST['id'];
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$prodi = $_POST['prodi'];


	date_default_timezone_set("Asia/Jakarta");

	$tstamp = date("d-m-Y h:i:s a");

	$admin = $_POST['admin'];

	$save1 =  mysqli_query($koneksi, "UPDATE tb_siswa SET nis='$nis', nama='$nama', kelas='$kelas', prodi='$prodi', tstamp='$tstamp', admin='$admin' WHERE id='$id'");

	$save2 = mysqli_query($koneksi, "UPDATE tb_tagihan SET nis='$nis', nama='$nama', kelas='$kelas', prodi='$prodi' WHERE nis='$nis'");

}

// -----------------------------------------------------------------------KELAS SECTION------------------------------------------------

function insert_kelas()
{
	global $koneksi;
	$kelas = $_POST['kelas'];


	date_default_timezone_set("Asia/Jakarta");

	$tstamp = date("d-m-Y h:i:s a");

	$admin = $_POST['admin'];

	return mysqli_query($koneksi, "INSERT INTO tb_kelas SET kelas='$kelas', tstamp='$tstamp', admin='$admin'");

}

function hapus_kelas()
{
	global $koneksi;
	$id = $_POST['id'];

	return mysqli_query($koneksi, "DELETE FROM tb_kelas WHERE id='$id'");
}

function edit_kelas()
{
	global $koneksi;
	$id = $_POST['id'];
	$kelas = $_POST['kelas'];

	date_default_timezone_set("Asia/Jakarta");
	$tstamp = date("d-m-Y h:i:s a");

	$admin = $_POST['admin'];

	return mysqli_query($koneksi, "UPDATE tb_kelas SET kelas='$kelas', tstamp='$tstamp', admin='$admin' WHERE id='$id'");

}

// ----------------------------------------PRODI SECTION----------------------------------------------------------------------

function insert_prodi()
{
	global $koneksi;
	$prodi = $_POST['prodi'];

	date_default_timezone_set("Asia/Jakarta");
	$tstamp = date("d-m-Y h:i:s a");



	$admin = $_POST['admin'];

	return mysqli_query($koneksi, "INSERT INTO tb_prodi SET prodi='$prodi', tstamp='$tstamp', admin='$admin'");

}

function delete_prodi()
{
	global $koneksi;
	$id = $_POST['id'];

	return mysqli_query($koneksi, "DELETE FROM tb_prodi WHERE id='$id'");
}

function edit_prodi()
{
	global $koneksi;
	$id = $_POST['id'];
	$prodi = $_POST['prodi'];

	date_default_timezone_set("Asia/Jakarta");
	$tstamp = date("d-m-Y h:i:s a");



	$admin = $_POST['admin'];

	return mysqli_query($koneksi, " UPDATE tb_prodi SET prodi='$prodi', tstamp='$tstamp', admin='$admin' WHERE id='$id'");




}

// -----------------------------SECTION TAHUN PELAJARAN-----------------------------------------------------

function insert_tapel()
{
	global $koneksi;
	$tapel = $_POST['tapel'];

	date_default_timezone_set("Asia/Jakarta");
	$tstamp = date("d-m-Y h:i:s a");
	
	$admin = $_POST['admin'];

	return mysqli_query($koneksi, "INSERT INTO tb_tahun_ajaran SET tapel='$tapel', tstamp='$tstamp', admin='$admin'");




}

function hapus_tapel()
{
	global $koneksi;
	$id = $_POST['id'];

	return mysqli_query($koneksi, "DELETE FROM tb_tahun_ajaran WHERE id='$id'");
}


function edit_tapel()
{
	global $koneksi;
	$id = $_POST['id'];
	$tapel = $_POST['tapel'];

	date_default_timezone_set("Asia/Jakarta");
	$tstamp = date("d-m-Y h:i:s a");
	
	$admin = $_POST['admin'];

	return mysqli_query($koneksi, "UPDATE tb_tahun_ajaran SET tapel='$tapel', tstamp='$tstamp', admin='$admin'");
}




// ---------------------------------Jenis bayar section--------------------------------------------------

function jenis_bayar()
{
	global $koneksi;
	$tapel = $_POST['tapel'];
	$kelas = $_POST['kelas'];
	$nominal = $_POST['nominal'];
	
	date_default_timezone_set("Asia/Jakarta");
	$tstamp = date("d-m-Y h:i:s a");
	
	$admin = $_POST['admin'];

	return mysqli_query($koneksi, "INSERT INTO tb_jenis_pembayaran SET tapel='$tapel', kelas='$kelas', nominal='$nominal', tstamp='$tstamp', admin='$admin'");	
}

function hapus_jenis_bayar()
{
	global $koneksi;
	$id = $_POST['id'];

	return mysqli_query($koneksi, "DELETE FROM tb_jenis_pembayaran WHERE id='$id'");
}

function edit_jenis_bayar()
{
	global $koneksi;
	$id = $_POST['id'];
	$tapel = $_POST['tapel'];
	$kelas = $_POST['tapel'];
	$nominal = $_POST['nominal'];

	date_default_timezone_set("Asia/Jakarta");
	$tstamp = date("d-m-Y h:i:s a");
	
	$admin = $_POST['admin'];

	return mysqli_query($koneksi, "UPDATE tb_jenis_pembayaran SET tapel='$tapel', kelas='$kelas', nominal='$nominal', tstamp='$tstamp', admin='$admin' WHERE id='$id'");



}
// -----------------------------------------------TRANSACTION SECTION--------------------------------------------------------------------

function bayar_spp()
{
		global $koneksi;
	$nis = $_POST['nis'];

	$nama = $_POST['nama'];

	$kelas = $_POST['kelas'];
	$tapel = $_POST['tapel'];
	$nominal = $_POST['nominal'];
	$bayar = $_POST['bayar'];

	// waktu
	date_default_timezone_set("Asia/Jakarta");
	$bulan = date("m");
	$tstamp = date("d-m-Y h:i:s a");
	// admin

	
	$kembalian = $bayar - $nominal;	
	$admin = $_POST['admin'];
	$selectbayar = mysqli_query($koneksi, "SELECT * FROM tb_bayar WHERE bulan='$bulan' AND nis='$nis'");
	$cek = mysqli_num_rows($selectbayar);
	if ($cek) {
		echo '<script>alert("SPP bulan ini sudah dibayar")</script>';
	}else{
			$save = mysqli_query($koneksi, "INSERT INTO tb_bayar SET nis='$nis', nama='$nama', kelas='$kelas', tapel='$tapel', bayar='$bayar', bulan='$bulan', tstamp='$tstamp', admin='$admin'");
	$save2 = mysqli_query($koneksi, "UPDATE tb_tagihan SET keterangan ='lunas', bulan='$bulan' WHERE nis='$nis'");
	if ($save) {
		header("location: ?m=print&nis=$nis&nominal=$nominal&kembalian=$kembalian");

	}else{
		echo '<script>alert(">:(")</script>';
	}
	}

}

function delele_spp()
{
	global $koneksi;
	$id = $_POST['id'];

	return mysqli_query($koneksi, "DELETE FROM tb_bayar WHERE id='$id'");
}


// +++++++++++++++++++++++++++++++++[PRINT SECTION]+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function select_print_siswa()
{
	global $koneksi;
	$nis = $_GET['nis'];

	return mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis = '$nis'");

}

function select_print_bayar()
{
	global $koneksi;

	$nis = $_GET['nis'];

	date_default_timezone_set("Asia/Jakarta");
	$bulan = date("m");

	return mysqli_query($koneksi, "SELECT * FROM tb_bayar WHERE nis='$nis' AND bulan = '$bulan' ");
}

function print_tagihan()
{
	global $koneksi;
	return mysqli_query($koneksi, "SELECT * FROM tb_tagihan");
}


// ==========================================================Statistic Section============================================================
function stat_siswa()
{
	global $koneksi;
	$select = mysqli_query($koneksi, "SELECT count(id) AS jsiswa FROM tb_siswa");
	$row = mysqli_fetch_array($select);
	echo $row['jsiswa'];
}

function stat_kelas()
{
	global $koneksi;
	$select = mysqli_query($koneksi, "SELECT count(id) AS jkelas FROM tb_kelas");
	$row = mysqli_fetch_array($select);
	echo $row['jkelas'];
}

function stat_prodi()
{
	global $koneksi;
	$select = mysqli_query($koneksi, "SELECT count(id) AS jprodi FROM tb_prodi");
	$row = mysqli_fetch_array($select);
	echo $row['jprodi'];
}

function stat_transaksi_bulan_ini()
{
	global $koneksi;

	// waktu
	date_default_timezone_set("Asia/Jakarta");
	$bulan = date("m");

	$select = mysqli_query($koneksi, "SELECT count(nis) AS jbayar FROM tb_bayar WHERE bulan='$bulan'");
	$row = mysqli_fetch_array($select);
	echo $row['jbayar'];

}

function stat_belum_lunas()
{
	global $koneksi;

	$select = mysqli_query($koneksi, "SELECT count(nis) AS jbelum FROM tb_tagihan WHERE keterangan='belum lunas'");
	$row = mysqli_fetch_array($select);
	echo $row['jbelum'];

}

function stat_jumlah_saldo()
{
	global $koneksi;

	$select = mysqli_query($koneksi, "SELECT sum(bayar) AS jsaldo FROM tb_bayar");
	$row = mysqli_fetch_array($select);
	echo rupiah($row['jsaldo']);

}

// ----------------------------------------FORGOT PASSWORD--------------------------------------------------------------------

function forgot_password()
{
	global $koneksi;
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$password2 = md5($_POST['password2']);

	if ($password != $password2) {
		echo '<script>alert("password tidak sama")</script>';
	}else{
		// SELECT
		$select = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
		$cek = mysqli_num_rows($select);

		if ($cek>0) {
			$update =  mysqli_query($koneksi, "UPDATE admin SET password='$password' WHERE username='$username'");
			echo '<script>alert("password sukses diubah")</script>';
		}else{
			echo '<script>alert("Username tidak ditemukan")</script>';
		}
	}
	
}

// KEEP IT BELOW

function bulan_sekarang($colorc)
{
	date_default_timezone_set("Asia/Jakarta");
	 $bulan = date("m");

	 if ($bulan==1) {
	 	echo '<h4 style="color: '.$colorc.';">Januari</h4>';
	 }else if ($bulan==2) {
	 	echo '<h4 style="color: '.$colorc.';">Febuari</h4>';
	 }elseif ($bulan==3) {
	 	echo '<h4 style="color: '.$colorc.';">Maret</h4>';
	 }elseif ($bulan==4) {
	 	echo '<h4 style="color: '.$colorc.';">April</h4>';
	 }elseif ($bulan==5) {
	 	echo '<h4 style="color: '.$colorc.';">Mei</h4>';
	 }elseif ($bulan==6) {
	 	echo '<h4 style="color: '.$colorc.';">Juni</h4>';
	 }elseif ($bulan==7) {
	 	echo '<h4 style="color: '.$colorc.';">Juli</h4>';
	 }elseif ($bulan==8) {
	 	echo '<h4 style="color: '.$colorc.';">Agustus</h4>';
	 }elseif ($bulan==9) {
	 	echo '<h4 style="color: '.$colorc.';">September</h4>';
	 }elseif ($bulan==10) {
	 	echo '<h4 style="color: '.$colorc.';">Oktober</h4>';
	 }elseif ($bulan==11) {
	 	echo '<h4 style="color: '.$colorc.';">November</h4>';
	 }elseif ($bulan==12) {
	 	echo '<h4 style="color: '.$colorc.';">Desember</h4>';
	 }

}

function gambar($img, $size)
{
	echo '<img src="//localhost/spp-app/assets/images/'.$img.'" width="'.$size.'">';
}

function url()
{
	return $url = "//localhost/spp-app-master/assets/";
}

function rupiah($angka){
	$hasil = "Rp. ". number_format($angka,2,',','.');
	return $hasil;
}

 ?>