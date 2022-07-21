<?php

require_once("include/config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_SESSION["login_user"])){
        session_unset();
    }
    $email= mysqli_real_escape_string($conn,$_POST["email"]);
    $pass= mysqli_real_escape_string($conn,$_POST["pass"]);
   
    $sql="SELECT * FROM user WHERE user.email='$email' And user.password='$pass'";
   if(!$result=$conn->query($sql)){
        echo mysqli_errno($conn)."rtttt";
        return;
   }
   if (mysqli_num_rows($result)>0){
        session_start();
        $row=mysqli_fetch_assoc($result);
        
        $_SESSION["login_user"]=$row;
        if($row["isAdmin"]==1){
            echo 2;
        }else{
            echo 1;
        }
        
    }else{
        echo 0;
    }
}


mysqli_close($conn);




?>