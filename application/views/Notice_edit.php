<?php include_once('header.php');?>

<body class="cbp-spmenu-push">
	<?php include_once('navbar.php');?>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url()?>index.php/notices/">Manage Notice</a></li>
			<li><a href="<?php echo base_url()?>index.php/notices/new_notice/">New notice</a></li>
		</ul>

		<?php include_once('navbar_right.php');?>

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-body"  style="max-height: 10">
							<h1>Edit Notice</h1>
							<?php 
							if($success == 1){
								?>
								<p>The notice has been updated!</p>
								<?php		
							}
							?>
							<form method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">Title:</label>
									<div class="row">
										<div class="col-lg-6">
											<input class="form-control" width="60%" name="subject" type="text" value="<?php echo $notice['subject'];?>"/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Description: </label>
									<textarea class="form-control" rows="10" name="notice"><?php echo $notice['notice'];?></textarea>  
								</div>
								<input class="btn btn-default" type="submit" value="Edit Notice">
								<input class="btn btn-default" type="button" value="Cancel" onclick="location.href='<?php echo base_url();?>index.php/notices/'">
							</form>	
						</div>
					</div>
				</div>

				<?php include_once('sidebar.php');?>
			</div>

		</div>
	</div>

	<?php include_once('footer.php');?>
