<?php
require_once("header.php");

?>
<html>
    <head>
    <script>
        let obj={"d":'d'};
    </script>
        <title> Deshboard</title>
        <link rel="stylesheet" href="../style/home.css">
    </head>
    <body>
        <main>
        <a href="newAlbum.php" style=" float:right;" class="btn btn-primary btn-sm"> Add new Album +</a>
          
        <div class="img-container" id='img-container'>
        <!-- <div class="img-box">
            <div class="img-sub-box">
                <img src="images/demo.png" class="img" >
            </div>
            <div class="title">
               
            <h3>The UI design</h3>
            </div>
            <div class="description" style="height:46px;overflow:hidden;">
                this is assignmnet for idea foudfvgfdfbgfvdcg fdndation candidate name sagar
            </div>
            <div class="btn btn-warning btn-xs"> UnPublish</div>
        </div> -->

   
    </div>

            
        </main>
    </body>

    

    <script>
        $(document).ready(function(){
            $.ajax({
                url:"getdata.php",
                type:"get",
                success:function(res){
                    
                    obj=JSON.parse(res);
                     console.log(typeof(obj));
                    for(const item of obj){
                        
                    // console.log(item);
                    let text=`<div class="img-box"><div class="img-sub-box"><img src="${item['thumbnail']}" class="img" >`;
                    if(item['premium']==1){
                        text+='<span class="premium"><img src="images/premium.jpg" width="40px" height="40px"></span>';
                     }
                     text+=`</div><div class="title"><h3>${item['title']}</h3></div><div class="description" style="height:40px;overflow:hidden;"> ${item['description']}</div>`;
                     if(item['status']==1){
                        text+=`<a href="status.php?id=${item['id']}&value=0" class="btn btn-success btn-xs status-btn" id=${item['status']}  value='0' onclick="state(this)"> Published</div></div>`;
                     }else{
                        text+=`<a href="status.php?id=${item['id']}&value=1" class="btn btn-danger btn-xs status-btn" value=${item['status']}> UnPublish</div></div>`
                     }
                     
                     
                    $('#img-container').append(text);
                
                
                
                
                    }





                }


            });
            



        });
        
    </script>
</html>