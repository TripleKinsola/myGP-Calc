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
<?php require 'assets/includes/header.inc.php'; ?>
<?php 
if (isset($_POST['fetch'])) {
  require 'assets/includes/form_in.inc.php'; 
}elseif (isset($_GET['samp'])) {
  require 'assets/includes/result.inc.php'; 
}else{
  require 'assets/includes/main.inc.php'; 
}
?>
<?php require 'assets/includes/footer.inc.php'; ?>
