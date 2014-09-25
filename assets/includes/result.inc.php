<?php
/**
*The Grade Point--GP_Calc. 
*Description: Calculator for ease of usage by a geek for geeks and nerds.
*
*
* @author Akinsola Ademola, A. http://geekerbyte.blogspot.com (07062671144: triplekinsola@gmail.com)
*Powerfully powered in my mummy's kitcken.
*/
?>
<div class="jumbotron">
  <div class="container">
    <div class="page-header">
      <h1><span class="dav">Here the result comes...</span></h1>
	    <div class='btn-group'>
	      <button class='btn btn-default disabled'><span class='glyphicon glyphicon-home'></span></button>
	      <a class='btn btn-default' href="index.php">Home</a>
	    </div>
      <pre>
      <?php 
      require 'form.php';
      if (isset($_POST['result'])) {
      	echo Calc::result($value='');
      	Calc::remark();
      }
      ?>
      </pre>
    </div>
  </div> <!-- /container -->
</div>
