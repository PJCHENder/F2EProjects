$(document).ready(function () {
    var a = 1;
    var screenWidth = screen.width;
    $(".logo").on('click', function () {
        console.log(this);
        // 點下後收合
        if (a === 0) {
            $("nav").animate({
                "width": "100px"
                , "height": "128px"
                , "top": "10px"
            })
            $(".logo").css({
                "margin": "0 auto"
                , "background-size": "50%"
            });
            $(".nav hr").css("display", "none");
            $(".menu").css("display", "none");
            $(".social_icon").css("display", "none");
            $(".qrcode").css("display", "none");
            a = 1;
            // 點下後展開
        }
        else if (a === 1) {
            $("nav").animate({
                "height": "100vh"
                , "top": "0"
                , "width": "250px"
            })
            if(screenWidth > 1200) {
                $(".logo").css("margin", "30px auto");
            }else{
                $(".logo").css("margin", "0px auto");
            }
            $(".nav hr").css("display", "block");
            $(".menu").css("display", "block");
            $(".social_icon").css("display", "block");
            $(".qrcode").css("display", "block");
            a = 0;
        }
    })
});