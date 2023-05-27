$(document).ready(function(){
    $('a[href^=#]').click(function() {
       var href= $(this).attr("href");
            if (href == "#" || href == ""){
              var target = $('html');
                }else{
              var target = $(href);
          };
       var distance = target.offset().top;
       $('html').animate({scrollTop:distance}, 400, 'swing');
       return false;
    });
 });