<?php
require_once("../include/config.php");
    session_start();
    if(!isset($_SESSION["login_user"])|| $_SESSION["login_user"]["isAdmin"]==0){
        echo "<b> Access Denied<b>";
        die();
        return;
    }
    $user=$_SESSION["login_user"];

?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="../include/jquery.min.js"></script>
<script src="../include/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    
    <ul class="nav navbar-nav navbar-right">
      <
      <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
        
    </body>
</html>