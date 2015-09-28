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
					<h3>Delete Results</h3>
					
				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>

		<?php include_once('footer.php');?>
