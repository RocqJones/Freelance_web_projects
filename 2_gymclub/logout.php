<?php
ob_start();
session_start();
if(isset($_SESSION['user_id'])) {
	session_destroy();
	unset($_SESSION['user_login_id']);
	unset($_SESSION['user_fname']);
	unset($_SESSION['user_lname']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_name']);
	header("Location: home.php");
}
?>