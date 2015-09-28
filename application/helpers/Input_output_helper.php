<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Function Name
 *
 * Function description
 *
 * @access	public
 * @param	type	name
 * @return	type	
 */

if (! function_exists('vd'))
{
	function vd($data)
	{
		echo "<pre>";
		var_dump($data);
		echo "</pre>";
	}
}

/* End of file Input_output_helper.php */
/* Location: ./application/helpers/Input_output_helper.php */