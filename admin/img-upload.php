<?php
 session_start();
 if(!isset($_SESSION["login_user"])|| $_SESSION["login_user"]["isAdmin"]==0){
     echo "<b> Access Denied<b>";
     die();
     return;
 }
if(isset($_FILES['img'])){
    $filename= $_FILES['img']['name'];
   
    $tmp_name=$_FILES["img"]["tmp_name"];
    $uploadPath="images/".basename($filename);
    $allowExtension=array('jpg','jpeg','gif','png');
    $extension=pathinfo($filename,PATHINFO_EXTENSION);
    
    if(!in_array($extension,$allowExtension)){
        echo "0";
        return;
    }else{
        if(move_uploaded_file($tmp_name,$uploadPath))
            echo $uploadPath;
        else
            echo "-1";
        return;
    }
        echo "error";
    
}



?>