<?php

class Controller{
    
     public function __construct()
    {
       
    }
    public function insert($conn,$input){
        $title= $input['title'];
        $description= $input['description'];
        $thumbnail=$input['thumbnail'];
        $premium=$input['premium'];
   
       if($premium==='true'){
        $premium=1;
       }else{
        $premium=0;
       }
        $images=$input['images'];
        $sql= "INSERT into iphotos.album(thumbnail,title,description,status,premium,images) VALUES('$thumbnail','$title','$description','1','$premium','$images')";
        if(mysqli_query($conn,$sql)){
         return true;
        }else{
         return false;
        }     
    }
    public function update($conn,$input){
        $id= $input['id'];
        $title= $input['title'];
        $description= $input['description'];
        $thumbnail=$input['thumbnail'];
        $premium=$input['premium'];
        $images=$input['images'];
        $sql= "UPDATE  iphotos.album SET thumbnail='$thumbnail',title='$title',description='$description',premium='$premium',images='$images' where id='$id' ";
        if(mysqli_query($conn,$sql)){
            return true;
           }else{
            return false;
           }    
    }

    public function status($conn,$input,$id){
        
        $sql= "UPDATE  iphotos.album SET status='$input' where id='$id'";
        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return mysqli_errno($conn);
        }     
    }
    
    public function get_data($conn){
        
        $sql= "SELECT * FROM iphotos.album ";
        if($res=mysqli_query($conn,$sql)){
            $asso= mysqli_fetch_all($res,MYSQLI_ASSOC);
            return $asso;
        }else{
            return false;
        }     
    }

    public function fetch($conn,$type){
        if($type==1)
        $sql= "SELECT * FROM iphotos.album  where status='1'";
        else{
            $sql= "SELECT * FROM iphotos.album  where  status='1' AND premium='$type'";
        }
        if($res=mysqli_query($conn,$sql)){
            $asso= mysqli_fetch_all($res,MYSQLI_ASSOC);
            return $asso;
        }else{
            return false;
        }     
    }
}
?>