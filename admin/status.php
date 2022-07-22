<?php
require_once("../include/config.php");
require_once("controller.php");

    $id=$_GET['id'];
    $in=$_GET['value'];
   
    $con= new Controller();
    $res= $con->status($conn,$in,$id);
    header("location:deshboard.php");





?>