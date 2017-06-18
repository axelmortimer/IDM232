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

    $("#gvb-redesign-popup").click(function() {
    	$("#gvb-redesign-popup-target").css("opacity", "1");
    	$("#gvb-redesign-popup-target").css("z-index", "100");
    	$("#gvb-redesign-popup-target").css("transition", "opacity 1s ease-in-out");
    })

    $("#gplaymusic-popup").click(function() {
    	$("#gplaymusic-popup-target").css("opacity", "1");
    	$("#gplaymusic-popup-target").css("z-index", "100");
    	$("#gplaymusic-popup-target").css("transition", "opacity 1s ease-in-out");
    })

    $("#jimmysapp-popup").click(function() {
    	$("#jimmysapp-popup-target").css("opacity", "1");
    	$("#jimmysapp-popup-target").css("z-index", "100");
    	$("#jimmysapp-popup-target").css("transition", "opacity 1s ease-in-out");
    })

    $(".project-popup-back").click(function() {

    	$("#gvb-redesign-popup-target").css("opacity", "0");
    	$("#gvb-redesign-popup-target").css("z-index", "-100");
    	$("#gvb-redesign-popup-target").css("transition", "opacity 0s ease-in-out");

    	$("#gplaymusic-popup-target").css("opacity", "0");
    	$("#gplaymusic-popup-target").css("z-index", "-100");
    	$("#gplaymusic-popup-target").css("transition", "opacity 0s ease-in-out");

    	$("#jimmysapp-popup-target").css("opacity", "0");
    	$("#jimmysapp-popup-target").css("z-index", "-100");
    	$("#jimmysapp-popup-target").css("transition", "opacity 0s ease-in-out");

    })
})