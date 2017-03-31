<?php 
include 'model.php';

function getController($ctrl)
{
	include 'application/controller/'.$ctrl.'.php';
}

/**
* 
*/
class Controller extends Model
{
	function view($url, $data)
	{
		foreach ($data as $key => $value) {
			$$key = $value;	
		}
		include 'application/view/'.$url.'.php';
	}

}
 ?>
