<?php

$set = array(
	'site_name' => 'UHC web stats',
	'mob_kill' => '0' /* 1 = Mob kill [ON] || 0 = Mob kill [OFF] */,
	'table_limit' => '1000' /* Table line limit */,
	'head' => '1', /* 1 = Player Head [ON] || 0 = Player Head [OFF] */
    'table' => 'uhc_stats'
    'sort' => 'win'
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'uhcrun',
	)
);

#######################
## Database Settings ##
#######################

//Error Reporting
error_reporting(0);

$host = $set["mysql"]["host"];
$username = $set["mysql"]["username"];
$password = $set["mysql"]["password"];
$database = $set["mysql"]["database"];

try {
     $db = new PDO("mysql:host=$host;dbname=$database", "$username", "$password");
     $db->query("SET CHARACTER SET utf8");
} catch ( PDOException $e ){
     print $e->getMessage();
     die();
}

?>
