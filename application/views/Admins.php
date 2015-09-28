<?php include_once('header.php');?>

<body class="cbp-spmenu-push">
	<?php include_once('navbar.php');?>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo base_url()."index.php/students/";?>">Manage Students<span class="sr-only">(current)</span></a></li>
			<li><a href="<?php echo base_url()."index.php/students/addstudents";?>">Add Students</a></li>
			<li><a href="<?php echo base_url()."index.php/students/editstudents";?>">Edit Students</a></li> 
			<li><a href="<?php echo base_url()."index.php/students/DeleteStudents";?>">Delete Students</a></li>
			<li></li> 
		</ul>

		<?php include_once('navbar_right.php');?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo base_url()?>index.php/admin/add_admins">Add admin</a>
					<table class="table table-bordered">
						<tr>
							<th>Admin id</th>
							<th>Name</th> 
							<th>Address</th>
							<th>Email</th>
							<th>Branch</th>
							<th></th>
							<th></th>
						</tr>
						<?php 
						foreach ($result as $key => $value) {
							?>	
							<tr>
								<td><?php echo $value['Admin_id'] ;?></td>
								<td><?php echo $value['Admin_name'] ;?></td>
								<td><?php echo $value['Address'] ;?></td>
								<td><?php echo $value['email'] ;?></td>
								<td><?php echo $value['Branch'] ;?></td>
								<td><a class="btn btn-default" href="<?php echo base_url()?>index.php/admin/update_admins/<?php echo $value['Admin_id']?>">Edit</a></td>
								<td><a class="btn btn-default" href="<?php echo base_url()?>index.php/admin/delete_admins/<?php echo $value['Admin_id']?>">Delete</a></td>
							</tr>
							<?php	
						}
						?>
					</table>
				</div>
				<?php //include_once('sidebar.php');?>
			</div>
		</div>

		<?php include_once('footer.php');?>

