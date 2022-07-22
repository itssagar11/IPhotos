<?php
 session_start();
 if(!isset($_SESSION["login_user"])|| $_SESSION["login_user"]["isAdmin"]==0){
     echo "<b> Access Denied<b>";
     die();
     return;
 }
require_once("../include/config.php");
require_once("controller.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $images=$_POST['images'];
    $images=json_encode($images);
    $input=["title"=>mysqli_real_escape_string($conn,$_POST['title']),
            "description"=>mysqli_real_escape_string($conn,$_POST['description']),
            "thumbnail"=>$_POST['thumbnail'],
            "premium"=>$_POST['premium'],
            "images"=>$images
            ];
            
    $controller=new Controller();
    $res= $controller->insert($conn,$input);
    echo $res;

   
}


?>