<?php
require_once("include/config.php");
require_once("admin/controller.php");
    session_start();
    if(!isset($_SESSION["login_user"])){
        echo "<b> Access Denied<b>";
        die();
        return;
    }
  
    $type= $_GET['isPremium'];
    
    $conntroller= new Controller();
    echo json_encode($conntroller->fetch($conn,$type));











?>