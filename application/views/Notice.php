<?php include_once('header.php');?>

<body class="cbp-spmenu-push">
	<?php include_once('navbar.php');?>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo base_url()?>index.php/notices/">Manage Notice<span class="sr-only">(current)</span></a></li>
			<li><a href="<?php echo base_url()?>index.php/notices/new_notice/">New notice</a></li>
		</ul>
		<?php include_once('navbar_right.php');?>


		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1>
						<?php
						echo $notice['subject'];
						?>
					</h1>
					<p>
						<?php
						echo $notice['notice'];
						?>
					</p>
					<?php 
					if ($notice['picture_name'] != '') {
						?>
						<img src="<?php echo base_url()?>uploads/<?php echo $notice['picture_name']?>" class="img-rounded" style="width: 50%; height:25%;" />	
						<?php
					}
					?>
					<br/><br/>
					<button class="btn btn-default">
						<a href="<?php echo base_url();?>index.php/notices/editnotice/<?php echo $notice['notice_id']?>">Edit</a>	
					</button>

					<button class="btn btn-default">
						<a href="<?php echo base_url();?>index.php/notices/deletenotice/<?php echo $notice['notice_id']?>">Delete</a>	
					</button> 

				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>

		<?php include_once('footer.php');?>
