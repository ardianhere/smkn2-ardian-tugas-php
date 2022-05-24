<?php 
include('inc/header.php');
$skills = '';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('../login/location:login_form.php');
}

?>
<title>AR'Ingedriant</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/ajax.js"></script>	
<?php include('inc/container.php');?>
<div class="container contact" style="margin-top:1rem; margin-bottom:2rem;>	
	<h2>DATA BAHAN</h2>	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="addRecord" class="btn btn-primary">Buat Data Baru</button>
				</div>
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped" style="width: 100%;">
			<thead>
				<tr>
					<th>Number</th>
					<th>Name</th>					
					<th>Isi</th>					
					<th>Satuan</th>
					<th>Deskripsi</th>
					<th>Harga</th>					
					<th>Edit</th>
					<th>Hapus</th>					
				</tr>
			</thead>
		</table>
	</div>
	<div id="recordModal" class="modal fade">
    	<div class="modal-dialog">
    		<form method="post" id="recordForm">
    			<div class="modal-content">
    				<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Bahan</h4>
    				</div>
    				<div class="modal-body">
						<div class="form-group"
							<label for="name" class="control-label">Nama</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>			
						</div>
						<div class="form-group">
							<label for="age" class="control-label">Isi</label>							
							<input type="number" class="form-control" id="age" name="age" placeholder="Isi">							
						</div>	   	
						<div>
					<label>Satuan</label>
					<div>
					<select class="form-control" name="skills">
						<option value="">- Pilih Satuan -</option>
						<option value="kilogram" <?php if ($skills == "kilogram") echo "selected" ?>>Kilogram</option>
						<option value="gram" <?php if ($skills == "gram") echo "selected" ?>>Gram</option>
						<option value="lusin" <?php if ($skills == "lusin") echo "selected" ?>>Lusin</option>
						<option value="liter" <?php if ($skills == "liter") echo "selected" ?>>Liter</option>
						<option value="buah" <?php if ($skills == "buah") echo "selected" ?>>Buah</option>
					</select>
					</div>
				</div> 
						<div class="form-group">
							<label for="address" class="control-label">Deskripsi</label>							
							<input type="text" class="form-control" id="address" name="address" placeholder="Deskripsi">							
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Harga</label>							
							<input type="number" class="form-control" id="designation" name="designation" placeholder="Harga">			
						</div>						
    				</div>
    				<div class="modal-footer">
    					<input type="hidden" name="id" id="id" />
    					<input type="hidden" name="action" id="action" value="" />
    					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</div>	
<?php include('inc/footer.php');?>