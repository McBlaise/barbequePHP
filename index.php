<?php 

$url = explode('/', $_SERVER['REQUEST_URI']);
// include 'application/controller/'.$url[3].'.php';
include 'back/controller.php';

getController($url[3]);
$controller = new $url[3];

if($url[4]=="")
{
	$controller->index();
}
else
{
	$controller->$url[4]();
}



 ?>