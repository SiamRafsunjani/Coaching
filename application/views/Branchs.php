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
				<div class="col-md-8">
					<h3>Branchs</h3>
					<table class="table table-bordered">
						<tr>
							<th>Branch ID</th>
							<th>Name</th>
							<th>Address</th>
							<th>Contact info</th>
							<th></th>
							<th></th>
						</tr>
						<?php foreach ($branches as $key => $value) { ?>
						<tr>	
							<td><?php echo $value['branch_id'];?></td>
							<td><?php echo $value['branch_name'];?></td>
							<td><?php echo $value['branch_address'];?></td>
							<td><?php echo $value['contact_info'];?></td>
							<td><a class="btn btn-default" href="<?php echo base_url();?>index.php/branch/edit_branch/<?php echo $value['branch_id']?>">Edit</a></td>
							<td><a class="btn btn-default" href="<?php echo base_url();?>index.php/branch/delete_branch/<?php echo $value['branch_id']?>">Delete</a></td>
						</tr>
						<?php } ?>
					</table>

					<a href="<?php echo base_url();?>index.php/branch/add_branch">Add branch</a>
				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>
		<?php include_once('footer.php');?>
