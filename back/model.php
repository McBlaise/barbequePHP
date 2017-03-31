<?php 
/**
* 
*/
class Model
{
	public $table = "";

	function __construct($tbl)
	{
		$this->table = $tbl;
	}


	function tryy()
	{
		echo $this->table;
	}
}
 ?>