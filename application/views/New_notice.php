<?php include_once('header.php');?>

<body class="cbp-spmenu-push">
	<?php include_once('navbar.php');?>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url()?>index.php/notices/">Manage Notice</a></li>
			<li class="active"><a href="<?php echo base_url()?>index.php/notices/new_notice/">New notice<span class="sr-only">(current)</span></a></li>
		</ul>

		<?php include_once('navbar_right.php');?>


		<div class="container">
			<h1>New Notice</h1>
			<div class="row">
				<div class="col-md-8">
					<?php echo form_open_multipart('index.php/Notices/new_notice'); ?>

					<label for="subject">Title:</label>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4">
								<?php
								$data2 = array(
									'name' => 'subject',
									'class' => 'form-control'
									);  
								echo form_input($data2); 
								?> 
							</div>
						</div>
					</div>

					<label for="notice">Description:</label>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<?php
								$data = array(
									'name' => 'notice',
									'class' => 'form-control'
									); 
								echo form_textarea($data); 
								?> 
							</div>
						</div>
					</div>
					<?php 
					$attribute = array(
						'name' => 'userfile',
						'method' => 'post',
						);		
					echo form_upload($attribute);
					?>
					<br/><?php echo form_error('subject');?><br/>	
					<input class="btn btn-default" type="submit" value="Submit" >
					<input class="btn btn-default" type="button" value="Cancel" onclick="location.href='<?php echo base_url();?>index.php/notices/'">	
					<?php echo form_close(); ?>		

				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>
		<?php include_once('footer.php');?>