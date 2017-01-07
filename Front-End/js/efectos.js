$(document).ready(function() {
    $("#btn1").click(function() {
        var div = $("#btn1");
        div.animate({
            left: '50px'
        }, "slow");
        div.animate({
            fontSize: '2em'
        }, "slow");
    });

    $("#btn2").click(function() {
        $("#btn2").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
        });
    });



    $("#logo4")
    .mouseover(function() {
        $(this).fadeOut(1000);
    })
    .mouseover(function() {
        $(this).fadeIn(1000);
    });

    $("#logo3")
    .mouseover(function() {
        $(this).hide("slow");
    })
    .mouseout(function() {
        $(this).show("slow");
    });

    $("#logo")
    .mouseover(function() {
        $(this).animate({
            height: '200px'
        });
    })
    .mouseout(function() {
        $(this).animate({
            height: '150px'
        });
    });

    $("img")
    .hover(function() {
        $(this).css("background-color", "#2DCFDB");
    }, function() {
        $(this).css("background-color", "#08298A");
    });
});
