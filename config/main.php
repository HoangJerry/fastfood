<?php
include_once("config/autoload.php");

// Config global constant variable
define('RootURL', 'http://'.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/');
define('RootURI', dirname($_SERVER['SCRIPT_FILENAME']));

// Config for database
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','fastfood');

// Global variables
$app = array();
?>
