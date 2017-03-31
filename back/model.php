<?php 
/**
* 
*/
class Model
{
	public $table;
	private $db;

	function __construct()
	{
		$this->db = new PDO("mysql:host=localhost;dbname=barbeque", "root","");
	}

	function insert($data)
	{ 	

		$var = $this->table;
		// $q = " INSERT INTO `$var` SET username = ?, email = ?, password = ?";
		$q = " INSERT INTO `$var` SET ";

		$limit = count($data);
		$counter = 1;
		foreach ($data as $key => $value) {
			$val[$counter-1] = $value; 
			if($counter!=$limit)
			{
				$q .= $key."= ?, ";
			}
			else
			{
				$q .= $key."= ? ";
			}
			$counter++;
		}
		echo $q;
		$query = $this->db->prepare($q);
		$i = 0;
		foreach($data as $key => $value)
		{
			$query->bindParam($i+1, $val[$i]);
			$i++;
		}

		if($query->execute())
		{
			echo "success";
		}
	}
}
 ?>