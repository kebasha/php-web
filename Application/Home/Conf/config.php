<?php
$config = array(
	//'配置项'=>'配置值'
	"CONTROLLER_LEVEL"=>2,
	
);

$dbConfig = include 'db.php';

return array_merge($config, $dbConfig);