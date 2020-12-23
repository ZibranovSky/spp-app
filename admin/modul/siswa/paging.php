<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'spp_zibran');

    $batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);


$nomor = $halaman_awal+1;


// cari
if (isset($_POST['go'])) {
  $cari = $_POST['cari'];
  $siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nama LIKE '%".$cari."%' OR kelas LIKE '%".$cari."%'");

}else{
   $siswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa LIMIT $halaman_awal, $batas");
}


foreach ($siswa as $pro):
  ?>
    



<tr>
                              <td><?= $no++;  ?></td>
                              <td><?=  $pro['nis'];?></td>
                              <td><?=  $pro['nama'];?></td>
                              <td><?= $pro['kelas'];?></td>
                              <td><?=  $pro['prodi'];?></td>
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
                                    <input type="hidden" name="nis" value="<?=$pro['nis']?>" hidden>

                                     <label>Nis : </label>
                                     <b><?=$pro['nis'];?></b><br>
                                     <label>Nama : </label>
                                     <b><?=$pro['nama'];?></b><br>
                                     <label>Kelas : </label>
                                     <b><?=$pro['kelas'];?></b><br>
                                     <label>Program Studi : </label>
                                     <b><?=$pro['prodi'];?></b><br>
                                    

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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST">
                              <input type="hidden" hidden name="id" value="<?=$pro['id'];?>">
                    <div class="form-group">
                      <label>NIS</label>
                      <input class="form-control" type="text" name="nis" value="<?=$pro['nis'];?>">
                    </div>
                  <div class="form-group">
                      <label>Nama</label>
                      <input class="form-control" type="text" name="nama" value="<?=$pro['nama'];?>">
                    </div>
                    <div class="form-group">
          <label>Kelas</label>
          <select name="kelas" class="form-control">
            <option value="<?=$pro['kelas']?>"><?=$pro['kelas']?></option>
         <?php 

         global $koneksi;
         $select = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
         foreach ($select as $r):


          ?>   
          <option value="<?=$r['kelas']?>"><?=$r['kelas']?></option><?php endforeach; ?>

          </select>         
        </div>
         <div class="form-group">
          <label>Prodi</label>
          <select name="prodi" class="form-control">
            <option class="<?=$pro['prodi'];?>"><?=$pro['prodi'];?></option>
            <?php

            global $koneksi;
            $select = mysqli_query($koneksi, "SELECT * FROM tb_prodi");
            foreach ($select as $r):
              ?>
              <option value="<?=$r['prodi'];?>"><?=$r['prodi'];?></option><?php endforeach; ?>
          </select>
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
