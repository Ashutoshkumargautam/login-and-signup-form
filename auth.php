<!--PHP login System by WEBDEVTRICK (https://webdevtrick.com) -->
<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
	
?>