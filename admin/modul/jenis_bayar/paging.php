<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'spp_zibran');

    $batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_jenis_pembayaran");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);


$nomor = $halaman_awal+1;


// cari
if (isset($_POST['go'])) {
  $cari = $_POST['cari'];
  $siswa = mysqli_query($koneksi, "SELECT * FROM tb_jenis_pembayaran WHERE nama LIKE '%".$cari."%'");
}else{
  $siswa = mysqli_query($koneksi, "SELECT * FROM tb_jenis_pembayaran LIMIT $halaman_awal, $batas");
}


foreach ($siswa as $pro):
  ?>
    



<tr>
                              <td><?= $no++;  ?></td>
                              <td><?=  $pro['tapel'];?></td>
                              <td><?=  $pro['kelas'];?></td>

                              <td><?=  $pro['nominal'];?></td>

                             
                                                        <td><button class="btn btn-danger" data-toggle="modal" data-target="#hapus_karyawan<?=$pro['id'];?>"><i class="fa fa-trash"></i></button>
                            <div class="modal fade" id="hapus_karyawan<?=$pro['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                   <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?=$pro['id'];?>" hidden>

                                     <label>Tahun Pelajaran : </label><br>
                                     <b><?=$pro['tapel'];?></b><br>

                                     <label>Kelas : </label><br>
                                     <b><?=$pro['kelas'];?></b><br>

                                     <label>Nominal : </label><br>
                                     <b><?=$pro['nominal'];?></b><br>
                                   
                                    

                                    <div class="modal-footer">
                                    <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                  </div>
                                   </form>
                                  </div>
                                
                                </div>
                              </div>
                            </div>

                            <!-- EDIT------------------------------------------------------------------------------------ -->

                    <!-- Button trigger modal -->
            <button type="button" class="btn btn-success ml-2" data-toggle="modal" data-target="#editadmin<?=$pro['id'];?>">
            <i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i>
            </button>

        <!-- Modal -->
            <div class="modal fade" id="editadmin<?=$pro['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Program Studi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST">
                              <input type="hidden" hidden name="id" value="<?=$pro['id'];?>">
                     <div class="form-group">
          <label>Tahun Pelajaran</label>
          <select name="tapel" class="form-control">
            <option value="<?=$pro['tapel'];?>"><?=$pro['tapel'];?></option>
            <?php 

            global $koneksi;
            $select = mysqli_query($koneksi, "SELECT * FROM tb_tahun_ajaran");
            foreach ($select as $r):


             ?>

             <option class="form-control" value="<?=$r['tapel']?>"><?=$r['tapel']?></option><?php endforeach; ?>

          </select>
        </div>
          <div class="form-group">
          <label>Kelas</label>
         <select name="kelas" class="form-control">
          <option value="<?=$pro['kelas'];?>"><?=$pro['kelas'];?></option>
          <?php 

          global $koneksi;
          $select = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
          foreach ($select as $r):

           ?>
           <option value="<?=$r['kelas']?>"><?=$r['kelas']?></option><?php endforeach; ?>
         </select>
        </div>
          <div class="form-group">
          <label>Nominal</label>
          <input type="text" class="form-control" autocomplete="off" value="<?=$pro['nominal']?>" name="nominal">
        </div>
                

                    <input type="hidden" name="admin" value="<?=$adm['nama'];?>" hidden>


                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
                  </div>
                    </form>
            
                </div>
              </div>
            </div>

      

                          </td>

                              </tr> 
                              <?php endforeach; ?>
