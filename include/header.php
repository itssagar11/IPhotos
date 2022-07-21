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

<!doctype>
<html>
    <head>
    <title> Home</title>

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

    <header>
        <span><?php if($user["role"]==1){ echo "Premium";}else {echo "Not Premium. Subscribe Now";}?></span>
        <span class="logout"><a href="./logout.php"> Logout</a></span>
    </header>
    




