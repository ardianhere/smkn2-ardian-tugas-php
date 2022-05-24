<?php 
include('inc/header.php');
$skills = '';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login/login_form.php');
}

?>
<title>Data Pengguna</title>
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
				<!-- <div class="col-md-2" align="right">
					<button type="button" name="add" id="addRecord" class="btn btn-primary">Buat Data Baru</button>
				</div> -->
			</div>
		</div>
		<table id="recordListing" class="table table-bordered table-striped" style="width: 100%;">
			<thead>
				<tr>
					<th>Number</th>
					<th>noCustomer</th>
					<th>Name</th>					
					<th>email</th>					
					<th>password</th>			
					<th>role</th>
					<th></th>
					<th></th>					
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
					<div class="form-group">
							<label for="noCustomer" class="control-label">noCustomer</label>
							<input type="number" class="form-control" id="noCustomer" name="noCustomer" >			
						</div>
						<div class="form-group">
							<label for="name" class="control-label">Nama</label>
							<input type="text" class="form-control" id="name" name="name" >			
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">email</label>							
							<input type="text" class="form-control" id="email" name="email" >							
						</div>	   
						<div class="form-group">
							<label for="lastname" class="control-label">Password</label>							
							<input type="text" class="form-control" id="password" name="password" >							
						</div>
						<div class="form-group">
							<label for="role" class="control-label">Role</label>							
							<select name="role" class="form-control" id="role">
								<option value="user">User</option>
								<option value="admin">Admin</option>
							</select>				
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