$(document).ready(function () {
    $("#site-navigation").mouseover(function () {
        $("ul").stop().slideDown("slow");
    });
    $("#wrap").mouseout(function () {
        $("site-navigation").slideUp("slow");
    });
});