<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style_adminlogin.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
	<link rel="stylesheet" href="assets/css/form-elements.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="inner-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-box">
					<div class="form-top">	
						<div class="form-top-left">
							<h3>Admin Login</h3>
							<p>Enter username and password to log in: </p>	
						</div>
					</div>
					<div class="form-bottom">
						<?php 
						$attribute = array('class' => 'login-form'); 
						?> 
						<?php 
						echo form_open('index.php/Adminlogin/process', $attribute);
						?>

						<div class="form-group">
							<label class="sr-only" for="form-username">Username</label>
							<?php
							$data = array(
								'class' => 'form-username form-control',
								'name' => 'username',
								'id' => 'form_username',
								'placeholder' => 'Username'
								)
								?>
								<?php echo form_input($data);?>	
							</div>

							<div class="form-group">
								<label class="sr-only" for="form-password">Password</label>
								<?php
								$data2 = array(
									'type' => 'password',
									'name' => 'password',
									'placeholder' => 'Password',
									'class' => 'form-password form-control',
									'id' => 'form-password'
									);
									?>
									<?php echo form_password($data2); ?> 	
								</div>

								<button type="submit" class="btn">Sign in!</button>	
							</div>						
						</div>
					</div>
				</div>
			</div>	

		</div>
	</div>
</body>
</html>