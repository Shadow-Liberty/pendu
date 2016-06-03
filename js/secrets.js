$box = jQuery('.mainTitle');
$play = jQuery('.playlabel');

var url = window.location.href;
var lastPart = url.substr(url.lastIndexOf('/') + 1);

if (lastPart === "index.php") {
    $box.addClass('notransition');
    $box.css("top", "-100vh");
    $box.css("opacity", "0");
    $box.removeClass('notransition');
    $play.addClass('notransition');
    $play.css("top", "-40vh");
    $play.css("opacity", "0");
    $play.removeClass('notransition');
}else {
    $box.css("opacity", "1");
    $play.css("opacity", "1");
}

// $(document).ready(function($) {
//     $('.mainTitle').css("opacity","1") ;
// });

 // trueLastPart = function getLastPart(url) {
 //     var parts = url.split("/");
 //     return (url.lastIndexOf('/') !== url.length - 1 ? parts[parts.length - 1] : parts[parts.length - 2]);
 // };
