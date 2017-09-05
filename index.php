<?php
$vardas = "";

//Cokies
//setcookie("username", "Pranas", time() + (60 * 60 * 24 * 7), "/");
/*
if(isset($_COOKIE["username"])) {
    $vardas = $_COOKIE["username"];
} else {
	$vardas = "nezinomas";
}
*/

//Sessions
/*
session_start();

//$_SESSION['username'] = "Antanas";
$vardas = $_SESSION['username'];

if (isset($_SESSION["username"])) {
	$vardas = $_SESSION['username'];
} else {
	$vardas = "nezinomas";
}
*/

include "view/login.php";
include "view/main.php";