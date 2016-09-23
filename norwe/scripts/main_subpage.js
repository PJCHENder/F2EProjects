$(document).ready(function () {
    var a = 1;
    var screenWidth = screen.width;
    $(".logo").on('click', function () {
            console.log(this);
            // 點下後收合
            if (a === 0) {
                if (screenWidth > 1680) {
                    $("nav").animate({
                        "height": "160px"
                        , "top": "200px"
                    })
                    $(".logo").css("margin", "20px auto 0");
                }
                else {
                    $("nav").animate({
                        "width": "100px"
                        , "height": "128px"
                        , "top": "200px"
                    })
                    $(".logo").css({
                        "margin": "0 auto"
                        , "background-size": "50%"
                    });
                }
                $(".nav hr").css("display", "none");
                $(".menu").css("display", "none");
                a = 1;
                // 點下後展開
            }
            else if (a === 1) {
                $("nav").animate({
                    "height": "100vh"
                    , "top": "0"
                    , "width": "250px"
                })
                if (screenWidth > 1680) {
                    $(".logo").css("margin", "90px auto");
                }
                else {
                    $(".logo").css("margin", "30px auto");
                }
                $(".nav hr").css("display", "block");
                $(".menu").css("display", "block");
                a = 0;
            }
        })
});