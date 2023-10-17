// gsap.set(".cursor-view-work", {xPercent: -50, yPercent: -50});

// var head = document.getElementsByTagName('header');
var cursor = $(".view-more-cursor-button"),
follower = $(".cursor-view-work");

var posX = 0,
    posY = 0;

var mouseX = '50%',
    mouseY = '50%';

    var tm = TweenMax.to({cursor, follower}, 0.016, {
        repeat: -1,
    onRepeat: function() {
        posX += (parseInt(mouseX) - posX) / 6;
        posY += (parseInt(mouseY) - posY) / 6;

    TweenMax.set(follower, {
        css: {
        left: posX,
        top: posY,
        }
    });

    TweenMax.set(cursor, {
        css: {
        left: mouseX,
        top: mouseY,
        }
    });
  }
});

$("#header").on("mousemove", function(e){
    mouseX = e.clientX;
    mouseY = e.clientY;
    $(follower).css({
        'visibility': 'visible',
        'opacity': 1
    })
    tm.resume()
});
$("#header").on("mouseleave", function(e){
    tm.pause();
    $(cursor).css({
        'top': '50%',
        'left': '50%'
    })
    $(follower).css({
        'visibility': 'hidden',
        'opacity': 0
    })
});

