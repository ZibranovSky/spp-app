<?php 
require 'fungsi/fungsi.php';

 ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Icon -->
    <link rel="icon" type="image/png" href="<?=url()?>images/logo_spp_64x64.png">
    <!-- Title Page-->
    <title>Print</title>

    <!-- Fontfaces CSS-->
    <link href="<?=url()?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=url()?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- <?=url()?>Vendor CSS-->
    <link href="<?=url()?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=url()?>css/theme.css" rel="stylesheet" media="all">
</head>
<body>
	<div class="row">
		<div class="container">
			<div class="jumbotron">
				<center>
					<?=gambar("logo_spp.png","120")?>
				</center>
			</div>
		</div>
	</div>
	<?php foreach (select_print_siswa() as $key): ?>
		<table class="table">
				<tr>
					<td style="width:10%;">
						Nama 
					</td>
					<td>
						: <?php echo $key['nama']; ?>
					</td>
				</tr>
				<tr>					
					<td>
						Kelas
					</td>
					<td>
						: <?php echo $key['kelas'] ; ?>
					</td>
				</tr>
				<tr>
					<td>Prodi  </td>
					<td>: <?=$key['prodi'];?></td>
				</tr>
				<?php endforeach; ?>
			</table>
			<br>
			<?php foreach (select_print_bayar() as $tab): ?>
				
			
			<table class="table table-striped">
					<tr>
						<th>
							No
						</th>
						<th>
							Bulan
						</th>
						<th>
							Waktu Bayar
						</th>
						<th>
							Nominal
						</th>
						<th>
							Bayar
						</th>
						<th>
							Kembalian
						</th>
					</tr>
					<?php $no = 1; ?>
					<tr>
						<td>
							<?php echo $no++ ; ?>
						</td>
						<td>

						<?php

                                            				 if ($tab['bulan']==1) {
													 	echo '<p style="color: black;">Januari</p>';
													 }else if ($tab['bulan']==2) {
													 	echo '<p style="color: black;">Febuari</p>';
													 }elseif ($tab['bulan']==3) {
													 	echo '<p style="color: black;">Maret</p>';
													 }elseif ($tab['bulan']==4) {
													 	echo '<p style="color: black;">April</p>';
													 }elseif ($tab['bulan']==5) {
													 	echo '<p style="color: black;">Mei</p>';
													 }elseif ($tab['bulan']==6) {
													 	echo '<p style="color: black;">Juni</p>';
													 }elseif ($tab['bulan']==7) {
													 	echo '<p style="color: black;">Juli</p>';
													 }elseif ($tab['bulan']==8) {
													 	echo '<p style="color: black;">Agustus</p>';
													 }elseif ($tab['bulan']==9) {
													 	echo '<p style="color: black;">September</p>';
													 }elseif ($tab['bulan']==10) {
													 	echo '<p style="color: black;">Oktober</p>';
													 }elseif ($tab['bulan']==11) {
													 	echo '<p style="color: black;">November</p>';
													 }elseif ($tab['bulan']==12) {
													 	echo '<p style="color: black;">Desember</p>';
													  }

                                            			 ?>
						</td>
						<td>
							<?=$tab['tstamp'];?>
						</td>
						<td>
							<?=  rupiah($_GET['nominal']);?>
						</td>
						<td>
							<?= rupiah($tab['bayar']); ?>
						</td>
						<td>
							<?= rupiah($_GET['kembalian']); ?>
						</td>
					</tr>
			
					
				</table>
			<br><br>
			<div class="pull-right">
				<h5>Tanda Tangan</h5>
				<h5>Yang Bersangkutan</h5>
				<br><br><br>
				<h5><?php echo $tab['nama']; ?></h5>
			</div>
				<?php endforeach ?>
	<script>
					window.print();
				</script>
  <script src="<?= url() ?>vendors/jquery/jquery.min.js"></script>
  <script src="<?= url() ?>vendors/js/bootstrap.min.js"></script> </body>
</body>
</html>
