<?php require_once("header.php")?>
<html>
    <head>
        <style>
            main{
                width: 90%;
                margin: auto;
               
            }
            .form-container{
                padding: 70px 0;
               display:flex;
               justify-content: center;
             box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
               width: 100%;
               flex-wrap: wrap;
            }
            .form-container-child1{
                width:400px;
                height:auto;

            }
            img{
                width:400px;
                height:300px;
            }

            .form-container-child2{
                width:600px;
                height: auto;
                padding: 10px;
            }
            .more-img{
                display: flex;
                flex-wrap: wrap;
                flex-direction: row-reverse;
                border: 1px solid red; 
                height: auto;
                margin: auto;
                width: 80%;
            

            }
            .more-img-child{
                width: 100px;
                height: auto;
                display: inline-block;
               

            }
            .more-img-img{
                width: 100px;
                height:100px ;
                box-sizing: border-box;
                padding: 4px;
            }
            input[type="file"] {
                 display: none;
            }
           
        </style>
    </head>
    <body>
        <main>
            <div class="container">
            <div class="alert " style="visibility:hidden;" id="alert">
                    <strong>Warning!</strong> Indicates a warning that might need attention.
</div>
            <button class="btn btn-success btn-md"  id="publish"style="margin-left:50%; margin-bottom:10px;  float:right"> Publish</button>
        <div class="form-container  ">
                <div class="form-container-child1">
                
                    <label > Thumbnail<span style="color:red;">*</span>  
                        <input accept="image/*" type='file' id="thumbnail-select" /><br>
                        <img src="images/no-img.png" id="thumbnail" >
                    </label>
                    <span id="msg"></span>
                    
                </div>
                <div class="form-container-child2">
                    
                   <div class="form-group"> 
                    <label for="title">Title <span style="color:red;">*</span></label>
                    <input type="text"required class="form-control" id="title">
                   </div>
                   <div class="form-group">
                    <label for="description"> Description <span style="color:red;">*</span></label>
                    <textarea class="form-control" rows="6" required id="description"></textarea>
                   </div>
                   <div class="form-group">
                        <input type="checkbox" value="1" id="premium" > <label> Premium Member</label>
                    </div>

                    <label  >
                        <input accept="image/*" type='file' id="more-img" /><br>
                        <p  class="btn btn-success btn-sm" id="add-more" style="display:none; margin:10px;"> Add more Images </p><span style="color:red;">*</span>
                    </label>
                </div>
                
            </div>
            </div>
            
            
        </main>
           
       
    </body>


    <script>
        $(document).ready(function(){
            let thumbnail;
            let images=new Array();
            //thumbnail upload
            $('#thumbnail-select').change(function(){
                $("#msg").html('<span style="color:green;">Uploading...</span>');
                let fd=new FormData();
                let img= $("#thumbnail-select")[0].files;
                fd.append('img',img[0]);
                $.ajax({
                    url:"img-upload.php",
                    type:"post",
                    data:fd,
                    contentType: false,
                     processData: false,
                    success:function(res){
                        console.log(res);
                        if(res=='0'){
                            $("#msg").html('<span style="color:red;">Invalid Extension</span>');
                        }else if(res=='error'|| res=='-1'){
                            $("#msg").html('<span style="color:blue;">Something went wrong</span>');
                        }else{
                            thumbnail=res;
                            $('#thumbnail').attr('src',res);
                            $("#msg").html('<span style="color:green;">Uploaded</span>');
                            $('#add-more').attr('style','display:inline-block;')
                        }
                    }

                });
    

            });
            // more img upload
            $("#more-img").change(function(){
                $("#add-more").text("Uploading..");
                let fd=new FormData();
                let img= $("#more-img")[0].files;
                fd.append('img',img[0]);
                $.ajax({
                    url:"img-upload.php",
                    type:"post",
                    data:fd,
                    contentType: false,
                     processData: false,
                    success:function(res){
                        console.log(res);
                        if(res=='0'){
                            $("#add-more").html('<span style="color:red;">Invalid Extension</span>');
                        }else if(res=='error'|| res=='-1'){
                            $("#add-more").html('<span style="color:blue;">Something went wrong</span>');
                        }else{
                            images.push(res);
                            console.log(images);
                            var ele=` <div class="more-img-child"><img src="${res}" class="more-img-img" ></div>`;
                            console.log(ele);
                            $("#more-img").after(ele);
                            $("#add-more").text("Add More Images");
                            
                        }
                    }

                });



            });


            //publish
            $('#publish').click(function(){
                let title= $('#title').val();
                let description=$('#description').val();
                let premium=document.getElementById("premium").checked;
                console.log(title.length,description.length,premium);
                if(title.length==0 || description.length==0 || thumbnail.length==0 || images.length==0){
                        $('#alert').text("Please fill all mendatory Credentials.");
                        $('#alert').attr({'style':'visibility:visible;','class':'alert alert-warning'});
                       
                    
                }else{
                    $.ajax({
                        url:"publish.php",
                        type:"post",
                        data: {title:title,description:description,thumbnail:thumbnail,premium:premium,images:images},
                        success: function(res){
                            console.log(res);
                            if(res=='1'){
                                $('#alert').text("Album Publish Success. Redirecting...");
                                 $('#alert').attr({'style':'visibility:visible;','class':'alert alert-success'});
                                 setInterval(()=>{
                                    window.location="deshboard.php"; 
                                 },1500);
                            }
                        }
                    })
                }
            })

        });


    </script>
</html>