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
					<h3>Add Branchs</h3>
					<form method="post">
						<div class="form-group">
							<label>Branch name</label>
							<input type="text" class="form-control" placeholder="Enter Name" name="branch">
						</div>
						<div class="form-group">
							<label>Branch Address</label>
							<textarea placeholder="Enter Address" class="form-control" rows="4" cols="50" name="address"></textarea>
						</div>

						<div class="form-group">
							<label>Contact info</label>
							<textarea placeholder="Enter Contact info" class="form-control" rows="4" cols="50" name="contact"></textarea>
						</div>

						<button type="submit" class="btn btn-default">Submit</button>
					</form>

				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>
		<?php include_once('footer.php');?>
