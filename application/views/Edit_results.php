

<body class="cbp-spmenu-push">
	<?php include_once('navbar.php');?>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url()."index.php/Results/";?>">Manage Results</a></li>
			<li class="active"><a href="<?php echo base_url()."index.php/Results/addresults";?>">Add results<span class="sr-only">(current)</span></a></li>
			<li></li> 
		</ul>

		<?php include_once('navbar_right.php');?>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h3>Add Results</h3>
					test: <input type="text" id="hey">
				</div>
				<?php include_once('sidebar.php');?>
			</div>
		</div>

		<script type="text/javascript">
			$('#hey').on('keypress', function(){    
				console.log($(this).val())
				/*$.ajax({
					type : 'POST',
      url : '<?php echo base_url()?>index.php/Results/addresults/', // --> server side code to insert data into db
      data : {
      	val : $(this).val()
      }
  });*/
		});
		</script>
		<?php include_once('footer.php');?>
