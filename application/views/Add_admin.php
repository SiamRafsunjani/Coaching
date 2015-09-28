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
					<h3>Add Admin</h3>
					<form method="post" autocomplete="off">
						<div class="form-group">
							<label>Admin name</label>
							<input type="text" class="form-control" placeholder="Name" name="adminname"> 
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" placeholder="Address" name="address">
						</div>
						<div class="form-group">
							<label>Phone number</label>
							<input type="text" class="form-control" placeholder="Phone no" name="phone">
						</div>
						<div class="form-group">
							<label>Email address</label>
							<input type="email" class="form-control" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<label>Branch</label>
							<select class="form-control" name="branch">
								<?php foreach ($branch as $key => $value) { ?>
								<option value="<?php echo $key;?>"><?php echo $value;?></option>
								<?php
							}
							?>
						</select>
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Username" name="name">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>

					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" class="form-control" placeholder="Password" name="passconf">
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<?php include_once('sidebar.php');?>
		</div>
	</div>

	<?php include_once('footer.php');?>

