
$(function(){
  $(".right").click(function(){
    $(".img0").hide(1000,function(){
      $(".img1").show(1000);
      
    });
  });
});    
 
$(function(){
  $(".left").click(function(){
    $(".img1").hide(1000,function(){
      $(".img0").show(1000);
      
    });
  });
});    


