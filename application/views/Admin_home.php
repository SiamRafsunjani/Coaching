<?php include_once('header.php');?>

<body class="cbp-spmenu-push">
	<?php include_once('navbar.php');?>
	

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url()."index.php/students/";?>">Manage Students</a></li>
			<li class="active"><a href="<?php echo base_url()."/index.php/notices/";?>">Notices<span class="sr-only">(current)</span></a></li>
			<li><a href="<?php echo base_url()."/index.php/batch/";?>">Batch management</a></li> 
			<li><a href="<?php echo base_url()."index.php/form";?>">Programe mangement</a></li>
			<li><a href="<?php echo base_url()."index.php/AddAdmin";?>">Admin management</a></li>
		</ul>
		
		<?php include_once('navbar_right.php');?>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					Admin stuff
				</div>
				<?php include_once('sidebar.php');?>
				
			</div>
		</div>

		<?php include_once('footer.php');?>
