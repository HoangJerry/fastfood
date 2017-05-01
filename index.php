<?php
include_once('config/main.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_GET["act"]=="register"){
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$email = $_POST["email"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_GET["act"]=="login"){
	$user = $_POST["user"];
	$pass = $_POST["pass"];
}
if(isset($_GET["ctl"])) {
	$cn = $_GET["ctl"];
} else {
	$cn = "home";
}
$c = $cn."_controller";
$controller = new $c();
?>