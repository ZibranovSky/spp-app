<?php 


class login_app
{
	public $koneksi;
	public function login($data1, $data2, $submit)
	{
		if (isset($_POST[$submit])) {
		$this->koneksi;
		$username = $_POST[$data1];
		$password = md5($_POST[$data2]);
		// proses login
		$login = mysqli_query($this->koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
		$row = mysqli_num_rows($login);
		$r = mysqli_fetch_array($login);

		if ($row > 0) {
			session_start();
			$_SESSION['idsppapp'] = $r['id'];
			header("location: admin/index.php?m=awal");
		}else{
			echo '<script>alert("gagal login")</script>';
		}
		}
	

	}
}

$pro = new login_app();
$pro->koneksi = mysqli_connect('localhost', 'root', '', 'spp_zibran');



 ?>