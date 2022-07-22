<?php
require_once("include/header.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/home.css"> 
   
</head>
<main>
    <div class="img-container" id="img-container">
    </div>
    <div class="slider-container" id="slider-container">
   
        <div class="slider " >
        <span class="glyphicon glyphicon-remove" id="close"></span>
        <div class="" id="slider">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>


</main>
<script>
    let obj;
        $(document).ready(function(){
            let premium=<?php echo $user["type"];?>
          
            $.ajax({
                url:"fetch.php",
                type:"get",
               data:{isPremium:premium},
                success:function(res){
                    console.log(res)
                    obj=JSON.parse(res);
                    for(const item of obj){
                        console.log(JSON.parse(item['images']))
                        let text=`<div class="img-box" onClick="slidebox(this)" value=${item['id']}> <div class="img-sub-box"><img src="admin/${item['thumbnail']}" class="img" ></div><div class="title">`
                        if(item['premium']==1){
                        text+='<span class="premium"><img src="admin/images/premium.jpg" width="40px" height="40px"></span>';
                     }
                      
                      
                       text+=`<h3>${item['title']}</h3></div><div class="description"> ${item['description']}</div> </div>`;
                                $('#img-container').append(text);

                    }
                }

            });
        });

        $('#close').click(function(){
        // console.log("dfg")
            $('#slider-container').hide();
        });
        function slidebox(input){
            $('#slider-container').show();
            let id= input.getAttribute('value');

            let imgObj=[];
            for(const item of obj){
                if(item['id']==id){
                    imgObj=JSON.parse(item['images']);
                    break;
                }
            }
            $('#slider').empty();
            console.log(imgObj)
            for(img of imgObj){
               console.log("iii");
                let text=`<div class="item"><img src="admin/${img}" class="item-img"></div>`
              
                $('#slider').append(text);
            }
       let slide = document.getElementsByClassName("item");
        slide[0].style.display = "block";
        }
        let Index = 1;

        function plusSlides(n) {
            slideShow(Index += n);
}
        function slideShow(n){
            let slides = document.getElementsByClassName("item");
            if (n > slides.length) {Index = 1}
             if (n < 1) {Index = slides.length}
             for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                }
                slides[Index-1].style.display = "block";
        }
       
</script>



</body>
</html>