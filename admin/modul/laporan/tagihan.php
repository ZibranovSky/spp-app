<?php include 'comp/header.php'; ?>

<div class="main-content mb-1">
	<div class="section__content section__content--p30">
		
	</div>
	<div class="content-wrapper">
		<div class="content-header mr-2">
		 <div class="row mb-2">
          <div class="col-sm-6">
           <h3 class="col-sm-6 ml-5">Data Tagihan</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?m=awal">Home</a></li>
              <li class="breadcrumb-item active">Tagihan</li>
            </ol>
          </div>
          <div class="col-sm-4 ml-5">
          	<a href="?m=printt"><button class="btn btn-success"><i class="fa fa-print"></i> Print</button></a>
          	
          </div>
          <!-- /.col -->
        </div>
	</div>


	<!-- Main Content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12"><br>
				

					<!-- Tabel -->
						<div class="row">
						 <div class="table-responsive table--no-card m-b-30 ml-5 mr-5">
							  	<table class="table table-borderless table-striped table-earning">
						                                        <thead>
						                                            <tr>
						                                                <th>No</th>
						                                                <th>NIS</th>
						                                                <th>Nama</th>
						                                                <th>Kelas</th>
						                                                <th>Program Studi</th>
						                                                <th>Bulan</th>
						                                                <th>Keterangan</th>

						                                                
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
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?m=tagihan&halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?m=tagihan&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?m=tagihan&halaman=$next'"; } ?>>Next</a>
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