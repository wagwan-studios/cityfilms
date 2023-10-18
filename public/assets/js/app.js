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
        left: posX,
        top: posY,
        }
    });
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

const video = document.querySelectorAll('.hover-video');
video.forEach(element => {
    element.addEventListener('mouseover', (e) =>{
        element.play();
    });
    element.addEventListener('mouseleave', () => {
        element.pause();
    })
});

var lastScroll = 0;

function onScrollNavStick () {
    let menu = document.getElementById('web');
    var doc = window.pageYOffset || document.documentElement.scrollTop;
    if(doc === 0){
        menu.classList.remove('web-fixed');
    }
        else if(doc > lastScroll){
            if(menu.classList.contains('web-fixed')){
                menu.classList.remove('web-fixed');
            }
        }
        else if(doc < lastScroll){
            if(!menu.classList.contains('web-fixed')){
                menu.classList.add('web-fixed');
            }
        }
        lastScroll = doc <= 0 ? 0 : doc;
}
window.addEventListener('scroll', onScrollNavStick, false);

$(".all-work-link").mousemove(function(event){
    var xPos = (event.clientX/$(window).width())-0.5,
    yPos = (event.clientY/$(window).height())-0.5,
    box = $('.all-work-link');

    TweenLite.to(box, 1, {
        left: xPos * 100,
        top: yPos * 100,
        ease: Power1.easeOut,
    });
});
$(".all-work-link").mouseleave(function(e){
    console.log('here');
    $(".all-work-link").removeAttr("style");
});
