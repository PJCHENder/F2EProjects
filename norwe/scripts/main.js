$(document).ready(function(){
    
    var a = 1;
    var screenWidth = screen.width;
    $(".logo").on('click', function(){
        console.log(this);
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
            if(screenWidth > 1680){
                $(".logo").css("margin","90px auto");
            }else{
                $(".logo").css("margin","30px auto");
            }
            $("hr").css("display","block");
            $(".menu").css("display","block");
            a = 0;
        }
    })
});