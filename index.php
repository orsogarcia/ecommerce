<?php 

session_start();

require_once("vendor/autoload.php");
require_once("vendor\hcodebr\php-classes\src\DB\sql.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() 
	{
		$sql = new HCode\DB\sql();
		$results = $sql->select("Select * From tb_users");
		var_dump($results);
	});

$app->run();

 ?>