<?php
/**
*The Grade Point--GP_Calc. 
*Description: Calculator for ease of usage by a geek for geeks and nerds.
*
*
* @author Akinsola Ademola, A. http://geekerbyte.blogspot.com (07062671144: triplekinsola@gmail.com)
*Powerfully powered in my mummy's kitcken.
*/
ini_set('display_errors', false);

session_start();

if (isset($_GET['name'])) {
	$_SESSION['name'] = ucfirst($_GET['name']);
	header("Location: index.php");
	exit;
}else{
	if (!isset($_SESSION['name'])) {
		$_SESSION['name'] = ucfirst("geek");
		header("Location: index.php");
		exit;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/img/favicon.ico">
    <title>Welcome | CGPA-Calc</title>
    <link href="./dist/css/sticky-footer.css" media="all" rel="stylesheet">
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="./dist/css/dataTables.bootstrap.css" rel="stylesheet"> -->

    <script src="./dist/js/respond.min.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span style="color:#fff;">
            <span class="glyphicon glyphicon-user"></span>
            Who Created This?</span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="assets/img/favicon.ico"> myCGPA-Calc</a>
        </div>
        <!-- <div class="collapse navbar-collapse pull-right" style="color:#abcedf; font-size: 27px; padding-top:10px;">
          <span class="dropdown-toggle" data-toggle="dropdown" style="font-size: 24px;">
            <i class="glyphicon glyphicon-user"></i> Created by: <a href="http://geekerbyte.blogspot.com" target="_blank">Akinsola Ademola </a>
          </span>
        </div> -->

            <div class="navbar-collapse collapse pull-right">
              <ul class="nav navbar-nav">
                <li style="font-size:25px;"><a href="http://geekerbyte.blogspot.com" target="_blank"><span class="text-info"><i class="glyphicon glyphicon-user"></i>Created by: </span>Akinsola Ademola </a></li>
              </ul>
            </div>

      </div>
    </div>
