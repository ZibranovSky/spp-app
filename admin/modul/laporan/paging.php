<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'spp_zibran');

    $batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_tagihan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);


$nomor = $halaman_awal+1;

date_default_timezone_set("Asia/Jakarta");

$bulan = date("m");

// cari

  $siswa = mysqli_query($koneksi, "SELECT * FROM tb_tagihan LIMIT $halaman_awal, $batas");



foreach ($siswa as $pro):
  ?>
    



<tr>
                              <td><?= $no++;  ?></td>
                              <td><?=  $pro['nis'];?></td>
                              <td><?=  $pro['nama'];?></td>
                              <td><?= $pro['kelas'];?></td>
                              <td><?=  $pro['prodi'];?></td>
                              <td>
                                <?php 

                              
                                                     if ($bulan==1) {
                            echo '<p style="color: black;">Januari</p>';
                           }else if ($bulan==2) {
                            echo '<p style="color: black;">Febuari</p>';
                           }elseif ($bulan==3) {
                            echo '<p style="color: black;">Maret</p>';
                           }elseif ($bulan==4) {
                            echo '<p style="color: black;">April</p>';
                           }elseif ($bulan==5) {
                            echo '<p style="color: black;">Mei</p>';
                           }elseif ($bulan==6) {
                            echo '<p style="color: black;">Juni</p>';
                           }elseif ($bulan==7) {
                            echo '<p style="color: black;">Juli</p>';
                           }elseif ($bulan==8) {
                            echo '<p style="color: black;">Agustus</p>';
                           }elseif ($bulan==9) {
                            echo '<p style="color: black;">September</p>';
                           }elseif ($bulan==10) {
                            echo '<p style="color: black;">Oktober</p>';
                           }elseif ($bulan==11) {
                            echo '<p style="color: black;">November</p>';
                           }elseif ($bulan==12) {
                            echo '<p style="color: black;">Desember</p>';
                            }
                                 ?>
                              </td>
                              <td>
                                <?php
                                if ($pro['keterangan']=="lunas") {
                                  echo '<span class="badge badge-pill badge-success">Lunas</span>';
                                }elseif ($pro['keterangan']=="belum lunas") {
                                  echo '<span class="badge badge-pill badge-danger">Belum Lunas</span>';
                                }

                                ?>
                                  
                                </td>

                                                     

                              </tr> 
                              <?php endforeach; ?>
