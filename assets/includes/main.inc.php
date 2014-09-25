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
          <h1><span class="dav">Welcome, geek, to CGPA-Calc!</span></h1>
          <p class="lead">We hope it will be amazing at the end of this calculation.</p>
        </div>
        <?php 
        if (isset($_GET['msg'])) {
          echo "<span class=\"btn btn-danger\">".urldecode($_GET['msg'])."</span>";
        }
        ?>
        <h3>To continue....</h3>
        <form action="index.php" method="post">
          <div class="input-group input-group-lg">
              <span class="input-group-addon">Enter</span>
              <input name="var" type="text" class="form-control" placeholder="number of courses">
              <span class="input-group-btn">
              <button class="btn btn-success" type="submit" name="fetch"><img src="assets/img/favicon.ico"> Fetch!</button>
              </span>
          </div>
       </form>

        <p class="alert alert-success">Please, type in the number of courses to be calculated, and make good sure that it is an integer value(eg; 1, 4, 7) with the minimum of 1.</p>
      </div> <!-- /container -->
    </div>
