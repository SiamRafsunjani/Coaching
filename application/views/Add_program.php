<?php include_once('header.php');?>

<body class="cbp-spmenu-push">
	<?php include_once('navbar.php');?>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo base_url()."index.php/Results/";?>">Manage Results<span class="sr-only">(current)</span></a></li>
			<li><a href="<?php echo base_url()."index.php/Results/addresults";?>">Add results</a></li>
			<li></li>  
		</ul>

		<?php include_once('navbar_right.php');?>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h3>New Program</h3>
					<form method="post">
						<div class="form-group">
							<label>Program Name</label>
							<input type="text" class="form-control"  placeholder="Enter program name" name="name">
						</div>
						<div class="form-group">
							<label>Start date</label>
							<input type="date" class="form-control"  placeholder="Enter start date" name="start_date">
						</div>
						<div class="form-group">
							<label>End date</label>
							<input type="date" class="form-control"  placeholder="Enter end date" name="end_date">
						</div>

						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					
				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>

		<?php include_once('footer.php');?>