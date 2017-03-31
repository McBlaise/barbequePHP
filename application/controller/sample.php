<?php 

class Sample extends Controller
{
	function index()
	{
		echo "saaaaaaaaaaaa";
	}


	function tryy()
	{
		echo "dsadas";
	}
	function bla()
	{
		$this->view('login');
	}

	function signup()
	{
		$this->model->tryy();
		$this->model('users')->insert($data);
	}
}
 ?>