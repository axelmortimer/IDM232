$(document).ready(function() {
    $("#hamburger").click(function() {
        $("nav ul").toggleClass("display");
        if ($("#menu-icon").attr("src") === "media/menu.svg") {
            $("#menu-icon").attr("src", "media/exit.png");
        }
        else {
            $("#menu-icon").attr("src", "media/menu.svg");
        }
    })
})