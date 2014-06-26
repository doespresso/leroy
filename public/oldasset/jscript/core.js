var wh = 0;
var ww = 0;

jQuery(document).ready(function ($) {

    var one = new Date("March 30 2014 00:00:00"); // дата, до которой считаем.
    var two = Date.now(); // текущее время
    var rem = one - two;
    rem /= 1000; // секунды до даты
    rem /= 60;    // минуты до даты
    rem /= 60;    // часы до даты
    rem /= 24;    // дни до даты
    $("#open .digit").html(Math.round(rem));

    var k = 60,
        n = Math.round(rem);
    var timeout;
    var delay = 0;

    var count = function() {
        k--;

        if (timeout) {
            clearTimeout(timeout);
        }
        if (k > n) {
            $("#open .digit").html(k);
            delay = delay + 2;
            timeout = setTimeout(count,12);
        }
        else
        {
            $("#open").fadeTo(1000,0.5).fadeTo(500,1);
        }
    };

    count();

    $(window).resize();
    $("article").animate({'padding-top' : '+=60px'},1000);
});


$(window).resize(function() {

    wh = $(window).innerHeight();
    ww = $(window).innerWidth();

    var lh = $("#open").innerHeight();
    var lw = $("#open").innerWidth();


    $("#open").css("top",(wh-lh)/2);
    $("#open").css("left",(ww-lw)/2);

});