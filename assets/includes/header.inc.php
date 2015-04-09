<?php
/**
*The Grade Point--GP_Calc. 
*Description: Calculator for ease of usage by a geek for geeks and nerds.
*
*
* @author Akinsola Ademola, A. http://geekerbyte.blogspot.com (07062671144: triplekinsola@gmail.com)
*Powerfully powered in my mummy's kitcken.
*/
session_start();
if (isset($_GET['name'])) {
	$_SESSION['name'] = $_GET['name'];
}else{
	$_SESSION['name'] = "geek";
}
ini_set('display_errors', false);
?>

