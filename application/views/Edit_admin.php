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
					<h3>Edit Admin</h3>
					<form method="post" autocomplete="off">
						<div class="form-group">
							<label>Admin name</label>
							<input type="text" class="form-control" value="<?php echo $admin_detail[0]['Admin_name'];?>" name="adminname"> 
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" value="<?php echo $admin_detail[0]['Address'];?>" name="address">
						</div>
						<div class="form-group">
							<label>Phone number</label>
							<input type="text" class="form-control" value="<?php echo $admin_detail[0]['phone'];?>" name="phone">
						</div>
						<div class="form-group">
							<label>Email address</label>
							<input type="email" class="form-control" value="<?php echo $admin_detail[0]['email'];?>" name="email">
						</div>
						<div class="form-group">
							<label>Branch</label>
							<select class="form-control" name="branch" value="<?php echo $admin_detail[0]['Branch'];?>">
								<?php foreach ($branch as $key => $value) { ?>
								<option value="<?php echo $key;?>"><?php echo $value;?></option>
								<?php
							}
							?>
						</select>
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" value="<?php echo $admin_detail[0]['username'];?>" name="name">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Set new Password" name="password">
					</div>

					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" class="form-control" placeholder="Confirm Password" name="passconf">
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>

			</div>
			<?php include_once('sidebar.php');?>
		</div>
	</div>

	<?php include_once('footer.php');?>

