


 <div class="row">
 	<form action="" method="POST">
 		 <div class="table-responsive  m-b-30 ml-5 mr-5">
	  	<table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <td>NIS : </td>
                                                <td>
                                                	<?=$r['nis'];?>
                                                	<input type="hidden" hiddem name="nis" value="<?=$r['nis'];?>">
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                            	<td>Nama Siswa :</td>
                                            	<td>
                                            		<?=$r['nama'];?>
                                            		<input type="hidden" hidden name="nama" value="<?=$r['nama'];?>">
                                            	</td>
                                           	</tr>
                                           	<tr>
                                           		<td>Kelas : </td>
                                           		<td>
                                           			<?=$row['kelas'];?>
                                           			<input type="hidden" hidden name="kelas" value="<?=$row['kelas'];?>">
                                           		</td>
                                           	</tr>
                                           	<tr>
                                           		<td>Tahun Pelajaran : </td>
                                           		<td>
                                           			<?=$row['tapel'];?>
                                           			<input type="hidden" hidden name="tapel" value="<?=$row['tapel'];?>">

                                           		</td>
                                           	</tr>
                                           	<tr>
                                           		<td>Nominal : </td>
                                           		<td>
                                           			<?=rupiah($row['nominal']);?>
                                           			<input type="hidden" name="nominal" hidden value="<?=$row['nominal'];?>">
                                           		</td>
                                           	</tr>
                                           	<tr>
                                           		<td><label for="bayar2">Bayar : </label></td>
                                           		<td><!-- <input type="text" class="form-control xs-2" id="bayar2" name="bayar"> -->
                                               <div class="input-group mb-2">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text"><b>Rp</b></div>
                                                  </div>
                                                 <input type="text" class="form-control xs-2" id="bayar2" name="bayar">
                                                </div> 
                                              </td>
                                              <td><p style="color: red;"><i>HARAP MEMBAYAR DENGAN UANG PAS!!</i></p></td>
                                           	</tr>
                                           	  <tr>
                                        	<td><input type="submit" class="btn btn-success" name="byrbtn" value="bayar"></td>
                                        </tr>
                                        </thead>
                                      
                                  
                                    
                                    </table>
</div>
 			
 			<input type="hidden" hidden name="admin" value="<?=$adm['nama'];?>">
 		
 			
 			
 			

 		
 			



	</form>


 	
 
 </div>


<div class="row">
 <div class="table-responsive table--no-card m-b-30 ml-5 mr-5">
	  	<table class="table table-borderless table-striped table-earning">
	  		                                       <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>kelas</th>
                                                <th>Tahun Pelajaran</th>
                                                <th>Bayar</th>
                                                <th>Bulan</th>
                                                <th>Aksi</th>
                                             
                                                
                                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                           <?php 
                           						$no = 1;
                           						error_reporting(0);
                           						$koneksi = mysqli_connect('localhost', 'root', '', 'spp_zibran');

                           						$selectt = mysqli_query($koneksi, "SELECT * FROM tb_bayar WHERE nis='$cari'");
                           					
                           						foreach ($selectt as $key):
                                            ?>

                                            <tr>
                                            	<td><?=$no++;?></td>
                                            	<td><?=$key['nis'];?></td>
                                            	<td><?=$key['nama'];?></td>
                                            	<td><?=$key['kelas'];?></td>
                                            	<td><?=$key['tapel'];?></td>
                                            	<td><?=rupiah($key['bayar']);?></td>
                                            	<td>
                                            	
                                            			<?php

                                            				 if ($key['bulan']==1) {
													 	echo '<p style="color: black;">Januari</p>';
													 }else if ($key['bulan']==2) {
													 	echo '<p style="color: black;">Febuari</p>';
													 }elseif ($key['bulan']==3) {
													 	echo '<p style="color: black;">Maret</p>';
													 }elseif ($key['bulan']==4) {
													 	echo '<p style="color: black;">April</p>';
													 }elseif ($key['bulan']==5) {
													 	echo '<p style="color: black;">Mei</p>';
													 }elseif ($key['bulan']==6) {
													 	echo '<p style="color: black;">Juni</p>';
													 }elseif ($key['bulan']==7) {
													 	echo '<p style="color: black;">Juli</p>';
													 }elseif ($key['bulan']==8) {
													 	echo '<p style="color: black;">Agustus</p>';
													 }elseif ($key['bulan']==9) {
													 	echo '<p style="color: black;">September</p>';
													 }elseif ($key['bulan']==10) {
													 	echo '<p style="color: black;">Oktober</p>';
													 }elseif ($key['bulan']==11) {
													 	echo '<p style="color: black;">November</p>';
													 }elseif ($key['bulan']==12) {
													 	echo '<p style="color: black;">Desember</p>';
													  }

                                            			 ?>
                                            		</td>
                                            		<td>
                                            			<button class="btn btn-danger" data-toggle="modal" data-target="#hapus_karyawan<?=$key['id'];?>"><i class="fa fa-trash"></i></button>
                            <div class="modal fade" id="hapus_karyawan<?=$key['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="hidden" name="id" value="<?=$key['id'];?>" hidden>

                                     <label>NIS : </label>
                                     <b><?=$key['nis'];?></b><br>

                                     <label>Nama : </label>
                                     <b><?=$key['nama'];?></b><br>
                                   	
                                   	<label>Kelas : </label>
                                   	<b><?=$key['kelas'];?></b><br>

                                   	<label>Tahun Pelajaran : </label>
                                   	<b><?=$key['tapel'];?></b><br>

                                   	<label>Bayar : </label>
                                   	<b><?=rupiah($key['bayar']);?></b><br>

                                   	<label>Bulan : </label>
                                   	<b>
                                   		  	
                                            			<?php

                                            				 if ($key['bulan']==1) {
													 	echo '<p style="color: black;">Januari</p>';
													 }else if ($key['bulan']==2) {
													 	echo '<p style="color: black;">Febuari</p>';
													 }elseif ($key['bulan']==3) {
													 	echo '<p style="color: black;">Maret</p>';
													 }elseif ($key['bulan']==4) {
													 	echo '<p style="color: black;">April</p>';
													 }elseif ($key['bulan']==5) {
													 	echo '<p style="color: black;">Mei</p>';
													 }elseif ($key['bulan']==6) {
													 	echo '<p style="color: black;">Juni</p>';
													 }elseif ($key['bulan']==7) {
													 	echo '<p style="color: black;">Juli</p>';
													 }elseif ($key['bulan']==8) {
													 	echo '<p style="color: black;">Agustus</p>';
													 }elseif ($key['bulan']==9) {
													 	echo '<p style="color: black;">September</p>';
													 }elseif ($key['bulan']==10) {
													 	echo '<p style="color: black;">Oktober</p>';
													 }elseif ($key['bulan']==11) {
													 	echo '<p style="color: black;">November</p>';
													 }elseif ($key['bulan']==12) {
													 	echo '<p style="color: black;">Desember</p>';
													  }

                                            			 ?>
                                   	</b>


                                    

                                    <div class="modal-footer">
                                    <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                  </div>
                                   </form>
                                  </div>
                                
                                </div>
                              </div>
                            </div>
                                            		</td>



                                            
                                            </tr><?php endforeach; ?>
                                          
                                        </tbody>
	  		</table>
	  	</div>
	  </div>
	


