<?php
$vardas = "";
$old_user = "";
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
session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {
	# yra ivesti prisijungimo duomenys
	if ($_POST['username'] == "Ignas" && $_POST['password'] == "slaptas") {
		# vartotojo vardas ir slaptazodis tinka

		$_SESSION['user']['username'] = $_POST['username'];
		$_SESSION['user']['level'] = "admin";
	} else {
		# vartotojo vardas ir slaptazodis netinkamas
		$error = "Wrong username or password";
	}
} else if (isset($_POST['submit'])){
	# prisijungimo duomenys nebuvo ivesti
	$error =  "No login data";
}


if (isset($_GET['logout'])) {
	session_destroy();
}





//Login check 

if (isset($_SESSION['user'])) {
	
	$vardas = $_SESSION['user']['username'];
	include "view/main.php";
} else {
	include "view/login.php";
}


//include "view/main.php";