
<!-- <div class="container">
	<div class="row">
		<div class="well">
			<center><h3>&copyright:</h3></center>
		</div>	
	</div>
</div> -->

<script src="<?php echo base_url();?>assets/js/classie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/slider.js"></script>
<script src="<?php echo base_url();?>assets/js/chosen.jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/prism.js"></script>

<script type="text/javascript">
	var config = {
		'.chosen-select'           : {},
		'.chosen-select-deselect'  : {allow_single_deselect:true},
		'.chosen-select-no-single' : {disable_search_threshold:10},
		'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		'.chosen-select-width'     : {width:"95%"}
	}
	for (var selector in config) {
		$(selector).chosen(config[selector]);
	}
</script>

</body>
</html>