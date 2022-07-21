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

<!-- Latest compiled JavaScript -->
<script src="../include/bootstrap.min.js"></script>
<script src="script/script.js"></script>
    </head>
    <body>
        <header >

            <a href="../logout.php">Logout</a>
        </header>
    </body>
</html>