$(document).ready(function() {
    var a = 1;
    var screenWidth = $(document).width();
    $(".logo").on('click', function() {
        // 點下後收合
        console.log(a)
        if (a === 0) {
            close();
            a = 1;
        } // 點下後展開
        else if (a === 1) {
            $("nav").animate({
                "height": "100vh",
                "top": "0px"
            })
            if (screenWidth > 1200) {
                $(".logo").css("margin", "30px auto");
                $(".social_icon").css("display", "block");
                $(".qrcode").css("display", "block");
            } else {
                $(".logo").css("margin", "0px auto");
                $(".social_icon").css("display", "none");
                $(".qrcode").css("display", "none");
            }

            $(".nav hr").css("display", "block");
            $(".menu").css("display", "block");
            a = 0;
        }
    })

    $("nav").mouseleave(function() {
        close();
        a = 1;
    })
});

function close() {
    var screenWidth = $(document).width();
    //  給大螢幕
    if (screenWidth > 1200) {
        $(".nav").animate({
            "height": "160px",
            "top": "10px",
            "padding-top": "0px"
        })
        $(".logo").css("margin", "20px auto 0");
    }
    //  給一般螢幕和平板
    else if (screenWidth > 480 && screenWidth <= 1200) {
        $(".nav").animate({
            "width": "100px",
            "height": "128px",
            "top": "200px"
        })
        $(".logo").css({
            "margin": "0 auto",
            "background-size": "50%"
        });
    }
    //  給手機
    else {
        $(".nav").animate({
            "width": "100px",
            "height": "128px",
            "top": "0"
        })
        $(".logo").css({
            "margin": "0 auto",
            "background-size": "50%"
        });
    }
    $(".nav hr").css("display", "none");
    $(".menu").css("display", "none");
    $(".social_icon").css("display", "none");
    $(".qrcode").css("display", "none");
    // let a = 1;
}
