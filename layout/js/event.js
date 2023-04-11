$("section").animate(  {width:"100%"} , 1000);
 $("section").animate( { height:"60vh"} , 1000 , function()
 {
 $("h2").fadeIn(1000 , function(){
     $(".item1").slideDown(1000 , function(){
         $(".item2").slideDown(1000 , function(){
             $(".item3").slideDown(1000 )
         })
     })
 })
 })


