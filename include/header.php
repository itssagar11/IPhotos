
<?php
require_once("config.php");
    session_start();
    if(!isset($_SESSION["login_user"])){
        echo "<b> Access Denied<b>";
        die();
        return;
    }
    $user=$_SESSION["login_user"];

?>
<html>
    <head>
    <title> Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="include/jquery.min.js"></script>
    
<!-- jQuery library -->

<script src="include/bootstrap.min.js"></script>


    <style>
        body{
           
        }
        header{
            background-color:#000000;
            width: 100%;
            height: 50px;
            color:#ffffff;
            padding: 5px;
        }
        .logout{
            float: right;
        }
    </style>
    </head>
    <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
  <span class="navbar-brand"><?php if($user["type"]==1){ echo "Premium";}else {echo "Not Premium. Subscribe Now";}?></span>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
       
       
    




