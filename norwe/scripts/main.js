$(document).ready(function(){
    var a = 0;
    $(".logo").on('click', function(){
        
        if(a === 0){
            $("nav").animate({
                "height":"160px",
                "top":"200px"
            })
            $(".logo").css("margin","20px auto 0");
            $("hr").css("display","none");
            $(".menu").css("display","none");
            a = 1;
        }else if(a === 1){
            $("nav").animate({
                "height":"100vh",
                "top":"0"
            })
            $(".logo").css("margin","90px auto");
            $("hr").css("display","block");
            $(".menu").css("display","block");
            a = 0;
        }
    })
});