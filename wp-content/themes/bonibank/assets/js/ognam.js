// 導覽條
var length;
$(window).on("load resize", function () {
    var width = $(window).width();
    if (width < 992) {
        $(".overlay .nav-tabs").addClass("mobile");
    } else {
        $(".overlay .nav-tabs").removeClass("mobile");
    }
    $(".mobile .dropdown").addClass("active");
    $(".mobile .dropdown .dropbtn").addClass("active");
})
// 導覽條 漢堡開關
var isOpen = false;
function openNav() {
    if (isOpen) {
        $("#myNav").css("right", "-100%");
        $(".JQ_menu").find("i").removeClass("fa-times").addClass("fa-bars");
        isOpen = false;
    } else {
        $("#myNav").css("right", "0");
        $(".JQ_menu").find("i").removeClass("fa-bars").addClass("fa-times");
        isOpen = true;
    }
}

function closeNav() {
    $("#myNav").css("right", "-100%");
}

// 滾動時觸發固定導覽條
$(window).bind("scroll", function () {
    if ($(window).scrollTop() > 0) {
        $("header").addClass("fixed");
        $(".nav-tabs").not(".mobile").addClass("fixed");
        $(".header_padding").show();
    } else {
        $("header").removeClass("fixed");
        $(".nav-tabs").removeClass("fixed");
        $(".header_padding").hide();
    }
});

// 動畫
$(document).ready(function () {
    $("img").addClass("img-fluid");
    var matchHeightOption = {
        byRow: true,
        property: "height",
        target: null,
        remove: false
    };
    $(".posts_mh").matchHeight(matchHeightOption);
    $(".post_mh").matchHeight(matchHeightOption);
    // match Height end

    var controller = new ScrollMagic.Controller();
    var scene;

    // $(".tab-content").show(function() {
    //   var tween = TweenMax.from($(this), 0.2, {
    //     autoAlpha: 0,
    //     scaleX: 0.7,
    //     x: -500
    //   });

    //   scene = new ScrollMagic.Scene({
    //     triggerElement: ".top_content"
    //   })
    //     .setTween(tween)
    //     .addTo(controller);
    // });

    // $("section#form").show(function() {
    //   var tween = TweenMax.from($(this), 0.5, {
    //     autoAlpha: 0,
    //     scaleX: 0.7,
    //     x: 500
    //   });

    //   scene = new ScrollMagic.Scene({
    //     triggerElement: ".center_content"
    //   })
    //     .setTween(tween)
    //     .addTo(controller);
    // });

    $("section#differ").show(function () {
        var tl = new TimelineLite();
        var tween = tl.staggerFrom(
            [
                // ".differ_block:eq(0)",
                ".differ_block:eq(1)",
                ".differ_block:eq(2)",
                ".differ_block:eq(3)"
            ],
            0.3,
            {
                autoAlpha: 0,
                scaleY: 0.7,
                y: -50
            },
            0.2
        );
        scene = new ScrollMagic.Scene({
            triggerElement: ".center_content"
        })
            .setTween(tween)
            .addTo(controller);
    });

    $(".down_content").show(function () {
        var tl = new TimelineLite();
        var tween = tl.staggerFrom(
            [".flow_title", ".flow:eq(0)", ".flow:eq(1)", ".flow:eq(2)"],
            0.2,
            {
                autoAlpha: 0,
                scaleY: 0.7,
                y: -50
            },
            0.2
        );
        scene = new ScrollMagic.Scene({
            triggerElement: ".differ_block.bg4"
        })
            .setTween(tween)
            .addTo(controller);
    });



});
// FB像素區
$(function () {
    $(".nav-tabs > li > a").click(function (e) {
        e.preventDefault();
        fbq('track', "點擊-" + $(this).html());
    });


});

$(document).ready(function () {
    $("body").on("click", function () {
    });
    $(".JQ_drop a").on("click", function () {
        fbq('track', "點擊-" + $(this).html());
    })
});

// fb pixel add depth test
// function getCurrentPosition() {
//     return window.pageYOffset ||
//         (document.documentElement || document.body.parentNode || document.body).scrollTop;
// }

// function getScrollableHeight() {
//     var d = Math.max(
//         document.body.scrollHeight, document.documentElement.scrollHeight,
//         document.body.offsetHeight, document.documentElement.offsetHeight,
//         document.body.clientHeight, document.documentElement.clientHeight
//     )
//     var w = window.innerHeight ||
//         (document.documentElement || document.body).clientHeight;
//     if (d > w) {
//         return d - w;
//     }
//     return 0; // not scrollable
// }

// // var checkPoints = [10, 30, 50, 70, 90];
// var checkPoints = [70];
// var reached = 0;
// var scrollableHeight = getScrollableHeight();

// window.addEventListener('resize', function () {
//     scrollableHeight = getScrollableHeight();
// });
// window.addEventListener('scroll', function () {
//     var current;
//     if (scrollableHeight == 0) {
//         current = 100;
//     } else {
//         var current = getCurrentPosition() / scrollableHeight * 100;
//     }
//     if (current > reached) {
//         reached = current;
//         // checkpoint and send events
//         while (checkPoints.length > 0) {
//             var c = checkPoints[0];
//             if (c <= reached) {
//                 checkPoints.shift();
//                 fbq('trackCustom', '瀏覽頁面70%', {
//                     depth: c,
//                 });
//             } else {
//                 break;
//             }
//         }
//     }
// }, false);

//FB像素-停留網站時間
var seconds = 5;
setTimeout(function () {
    fbq('track', '停留超過5秒');
}, seconds * 1000);

var seconds2 = 30;
setTimeout(function () {
    fbq('track', '停留超過30秒');
}, seconds2 * 1000);

//QA箭頭
$("[id*='accordion']").on("hide.bs.collapse show.bs.collapse", e => {
    $(e.target)
        .prev()
        .find("i:last-child")
        .toggleClass("fa-chevron-down fa-chevron-up");
});

//計算機
function calculate_1() {
    var money = $("#cal_10").val(),
        yRate = $("#cal_11").val(),
        year = $("#cal_12").val();
    bufYear = 0;
    loan_1(money, yRate, year, bufYear);
}

function calculate_2() {
    var money = $("#cal_20").val(),
        yRate = $("#cal_21").val(),
        year = $("#cal_22").val(),
        bufYear = $("#cal_23").val();
    loan_2(money, yRate, year, bufYear);
}

function loan_1(money, yRate, year, bufYear) {
    money = money * 10000;
    var money, yRate, year,
        rate = yRate / 12,
        buf_time = year * 12,
        rate_100 = rate / 100,
        buf_temp = 1;

    for (i = 0; i <= buf_time - 1; i++) {
        buf_temp = buf_temp * (1 + rate_100)
    }

    buf_rate = (rate_100 * buf_temp) / (buf_temp - 1);
    calculate_result = '$ ' + Math.round(money * buf_rate);
    $("#cal_result").html("每月須還本息 "+calculate_result+" 元");

    $("html, body").delay(500).animate({ scrollTop: $(".JQ_cal_submit").offset().top - 200 });
}

function loan_2(money, yRate, year, bufYear) {
    money = money * 10000;
    var rate, buf_temp, buf_time,
        rate = (yRate / 12),
        calculate_result_1 = '$' + Math.round(money * rate / 100),
        buf_time = year * 12 - bufYear * 12,
        rate_100 = rate / 100,
        buf_temp = 1;

    for (i = 0; i <= buf_time - 1; i++) {
        buf_temp = buf_temp * (1 + rate_100)
    }

    buf_rate = (rate_100 * buf_temp) / (buf_temp - 1)
    calculate_result_2 = '$' + Math.round(money * buf_rate);
    $("#cal_result_1").html("寬限內每月利息 " + calculate_result_1 + " 元");
    $("#cal_result_2").html("寬限後月繳本息 " + calculate_result_2 + " 元");
}