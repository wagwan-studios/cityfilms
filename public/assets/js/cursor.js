var cursor = $(".view-more-cursor-button"),
follower = $(".cursor-view-work"),
closeBtn = $('.close-cursor-button');

var posX = 0,
    posY = 0;

var mouseX = '50%',
    mouseY = '50%';

    var tm = TweenMax.to({cursor, follower, closeBtn}, 0.016, {
        repeat: -1,
    onRepeat: function() {
        posX += (parseInt(mouseX) - posX) / 6;
        posY += (parseInt(mouseY) - posY) / 6;
        let mobileWidth = document.documentElement.clientWidth;

        if(mobileWidth > 660){
        TweenMax.set(follower, {
            css: {
            left: posX,
            top: posY,
            }
        });
        if(closeBtn){
            TweenMax.set(closeBtn, {
                css: {
                    left: mouseX,
                    top: mouseY,
                }
            });
        }

        TweenMax.set(cursor, {
            css: {
            left: mouseX,
            top: mouseY,
            }
        });
  }
}
});

$("#header").on("mousemove", function(e){
        mouseX = parseInt(e.screenX);
        mouseY = parseInt(e.screenY);
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

$(".work-video-playing").on("mousemove", function(e){
    mouseX = parseInt(e.screenX);
    mouseY = parseInt(e.screenY);
    $(follower).css({
        'visibility': 'visible',
        'opacity': 1
    })
    tm.resume()
});
$(".work-video-playing").on("mouseleave", function(e){
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
