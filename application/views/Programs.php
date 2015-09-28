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
					<h3>Programs</h3>
					<a href="<?php echo base_url()."index.php/program/add/";?>">Add New program</a>

					<table class="table table-bordered">
						<tr>
							<th>Program ID</th>
							<th>Program name</th>
							<th>Start date</th>
							<th>End date</th>
							<th></th>
							<th></th>
						</tr>

						<?php
						foreach ($program_detail as $key => $value) {
							?>
							<tr>
								<td><?php echo $value['program_id'];?></td>
								<td><?php echo $value['program_name'];?></td>
								<td><?php echo date('d M Y', strtotime($value['start_date']));?></td>
								<td><?php echo date('d M Y', strtotime($value['end_date']))?></td>
								<td><a class="btn btn-default" href="<?php echo base_url()?>index.php/program/edit/<?php echo $value['program_id'];?>">Edit</a></td>
								<td><a class="btn btn-default" href="<?php echo base_url()?>index.php/program/delete/<?php echo $value['program_id'];?>">Delete</a></td>
							</tr>
							<?php
						}  ?>
					</table>	
				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>

		<?php include_once('footer.php');?>

