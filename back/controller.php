<?php 
include 'model.php';

function getController($ctrl)
{
	include 'application/controller/'.$ctrl.'.php';
}



class Controller extends Model
{
	function model($tbl)
	{
		$mod = new Model();
		$mod->table = $tbl;
		return $mod;
	}

	

	function view($url, $data)
	{
		if($data!=null)
		{
			foreach ($data as $key => $value) {
			$$key = $value;	
			}
		}
		include 'application/view/'.$url.'.php';
	}



}
 ?>
