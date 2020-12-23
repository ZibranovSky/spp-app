<?php include 'comp/header.php'; ?>
<?php 

if (isset($_POST['simpan'])) {
	jenis_bayar();
}

if (isset($_POST['hapus'])) {
	hapus_jenis_bayar();
}

if (isset($_POST['edit'])) {
	edit_jenis_bayar();
}

 ?>
<div class="main-content mb-1">
	<div class="section__content section__content--p30">
		
	</div>
	<div class="content-wrapper">
	<div class="content-header mr-2">
		 <div class="row mb-2">
          <div class="col-sm-6">
           <h3 class="col-sm-6 ml-5">Data Program Studi</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?m=awal">Home</a></li>
              <li class="breadcrumb-item active">Program Studi</li>
            </ol>
          </div><!-- /.col -->
        </div>
	</div>


	<!-- Main Content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12"><br>
					<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-5 ml-5" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Program Studi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Program Studi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label>Tahun Pelajaran</label>
       		<select name="tapel" class="form-control">
       			<option>--Pilih--</option>
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
         	<option>--Pilih--</option>
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
          <input type="text" class="form-control" autocomplete="off" name="nominal">
        </div>
        

        <input type="hidden" name="admin" value="<?=$adm['nama'];?>" hidden>
       
        <div class="modal-footer">
        <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
     
    </div>
      
    </div>
  </div>
</div>

<!-- Tabel -->
<div class="row">
 <div class="table-responsive table--no-card m-b-30 ml-5 mr-5">
	  	<table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun Pelajaran</th>
                                             	<th>Kelas</th>
                                             	<th>Nominal</th>
                                                <th>aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                           

                                            $no = 1;
                                            
                                               

                                            
                                         ?>
                                        <tbody>
                                           <?php 
                           						$no = 1;
                           						include 'paging.php';
                                            ?>
                                          
                                        </tbody>
                                    </table>
</div>
	</div>

    <center><ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?m=jenis_bayar&halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?m=jenis_bayar&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?m=jenis_bayar&halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
              </center> 
	 
<!-- end table -->
  
				</div>	
			</div>
		</div>
	</section>

</div>

</div>
<?php include 'comp/footer.php'; ?>