<?php include 'comp/header.php'; ?>
<?php 

if (isset($_POST['edit'])) {
	echo "<meta http-equiv='refresh' content='0'>";

	edit_admin();
}

 ?>
<section class="section ml-4 mt-5">
	<div class="container">
		<div class="row">
			<H1>Profil</H1><h1 class="ml-2" style="color: green;"><?=$adm['nama'];?></h1>
			
		</div>
		<div class="row">
			<div class="mt-5">
				<table>
					<td><h4>Nama admin : </h4></td>
					<td><h4 class="ml-2" style="color: green;"><?=$adm['nama'];?></h4></td>
					<td>
										<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#editadmin<?=$adm['id'];?>">
						<i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"> edit</i>
						</button>

				<!-- Modal -->
						<div class="modal fade" id="editadmin<?=$adm['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<form action="" method="POST">
						      		      	<input type="hidden" hidden name="id" value="<?=$adm['id'];?>">
						        <div class="form-group">
						        	<label>Username</label>
						        	<input class="form-control" type="text" name="username" value="<?=$adm['username'];?>">
						        </div>
						     	<div class="form-group">
						        	<label>Password</label>
						        	<input class="form-control" type="text" name="password">
						        </div>
						     	<div class="form-group">
						        	<label>Nama</label>
						        	<input class="form-control" type="text" name="nama" value="<?=$adm['nama'];?>">
						        </div>
						        	<div class="form-group">
						        	<label>Kontak</label>
						        	<input class="form-control" type="text" name="kontak" value="<?=$adm['kontak'];?>">
						        </div>
						    	
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
			<tr>
				<td><h4>Kontak admin : </h4></td>
					<td><h4 class="ml-2" style="color: green;"><?=$adm['kontak'];?></h4></td>
			</tr>
			<tr>
				<td></td>
			</tr>
				</table>
			</div> 
		</div>
	</div>
</section>

<?php include 'comp/footer.php'; ?>