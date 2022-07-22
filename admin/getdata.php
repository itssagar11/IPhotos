<?php
 session_start();
    if(!isset($_SESSION["login_user"])|| $_SESSION["login_user"]["isAdmin"]==0){
        echo "<b> Access Denied<b>";
        die();
        return;
    }
require_once("../include/config.php");
require_once("controller.php");
$controller=new Controller();
echo json_encode($controller->get_data($conn));
?>