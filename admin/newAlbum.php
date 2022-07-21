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
                flex-wrap: nowrap;
                flex-direction: row-reverse;
                border: 1px solid red; 
                height: auto;
                margin: 20px;

            }
            .more-img-child{
                width: 100px;
                height: auto;
                border: 1px solid blue;

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
      
        <div class="form-container  ">
                <div class="form-container-child1">
                
                    <label >
                        <input accept="image/*" type='file' id="thumbnail-select"  onchange="thumbnail(this)" /><br>
                        <img src="images/no-img.png" id="thumbnail" >
                    </label>
                    
                </div>
                <div class="form-container-child2">
                    
                   <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control">
                   </div>
                   <div class="form-group">
                    <label for="description"> Description</label>
                    <textarea class="form-control" rows="6">

                    </textarea>
                   </div>
                   <div class="form-group">
                        <input type="checkbox" > <label> Premium Member</label>
                    </div>

                    <div class="form-group">
                        <input type="file" > <label>    </label>
                    </div>
                </div>
                
            </div>
            </div>
            <label  class="">
                        <input accept="image/*" type='file' id="thumbnail-select"  onchange="thumbnail(this)" /><br>
                        <p  class="btn btn-success btn-sm""> Choose Images </p>
                    </label>
            <div class="more-img">
                
                <div class="more-img-child " >
               
                </div>
                <div class="more-img-child">
                <img src="images/no-img.png" class="more-img-img" >
                <!-- <button class="btn btn-warning btn-xs">Delete</button> -->
                </div>
                <div class="more-img-child">
                <img src="images/no-img.png" class="more-img-img" >
                </div>
                
            </div>
            <button class="btn btn-success btn-lg" style="margin-left:50%; "> Publish</button>
        </main>
           
       
    </body>
</html>