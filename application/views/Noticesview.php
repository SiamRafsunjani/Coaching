<?php include_once('header.php');?>

<body class="cbp-spmenu-push">
	<?php include_once('navbar.php');?>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo base_url()?>index.php/notices/">Manage Notice<span class="sr-only">(current)</span></a></li>
			<li><a href="<?php echo base_url()?>index.php/notices/new_notice/">New notice</a></li>
		</ul>


		<?php include_once('navbar_right.php');?>

	</div>

	<div class="container">
		<h1>Notices</h1>
		<div class="row">
			<div class="col-md-8">
				<?php	
				foreach ($notices as $key => $value) {
					?>		
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="media">
								<div class="media-body">
									<h3 class="media-heading">
										<a href="<?php echo base_url()?>index.php/notices/notice/<?php echo $value['notice_id']?>" ><?php echo $value['subject']?></a>
									</h3>
									<?php echo substr(strip_tags($value['notice']),0,400).".." ?>
									<a href="<?php echo base_url()?>index.php/notices/notice/<?php echo $value['notice_id']?>">Read more</a>
									<br/><br/>

									<div class="row">
										<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
										<button class="btn btn-default">
											<a href="<?php echo base_url();?>index.php/notices/editnotice/<?php echo $value['notice_id']?>">Edit</a>	
										</button>

										<button class="btn btn-default">
											<a href="<?php echo base_url();?>index.php/notices/deletenotice/<?php echo $value['notice_id']?>">Delete</a>	
										</button> 
									</div>
									<br/>
									<span class="glyphicon" >
										<span class="glyphicon-tags" aria-hidden="true"></span>
									</span>
									<?php echo "Published on(YYYY/DD/MM):";?> 
									<?php echo $value['date']?>	

									<?php echo "       ||      "; ?>
								</div>
								<?php
								if($value['picture_name'] != ''){
									?>
									<div class="media-right">
										<img src="<?php echo base_url()?>uploads/<?php echo $value['picture_name']?>" class="media-object">	
									</div>
									<?php	
								} 
								?>
							</div>
						</div>
					</div>

					<?php } ?>
				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>

		<?php include_once('footer.php');?>