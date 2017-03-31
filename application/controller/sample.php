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
		$this->view('signup', null);
	}

	function signup()
	{
		$data = array(
			'firstname' => $_POST['firstname'],
			'lastname'	=> $_POST['lastname'],
			'email' => $_POST['email'],
			'password' => $_POST['password']
			);
		$this->model('users')->insert($data); 
	}
}
 ?>