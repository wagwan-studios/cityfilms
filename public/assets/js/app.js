let menuIcon = document.querySelector('.mobile-menu-icon');
let menuCloseIcon = document.querySelector('.mobile-menu-close-icon');
let workHead = document.querySelector('.work-header');

let mobileMenu = document.getElementById('mobile');

menuIcon.addEventListener('click', (e) => {
    if(workHead){
        workHead.style.marginTop = 0;
    }
    mobileMenu.style.zIndex = 9;
    mobileMenu.style.width = '100vw';
    mobileMenu.style.visibility = 'visible';
});

menuCloseIcon.addEventListener('click', (e) => {
    if(workHead){
        workHead.style.marginTop = '30vh';
    }
    mobileMenu.style.zIndex = 0;
    mobileMenu.style.width = 0;
    mobileMenu.style.visibility = 'hidden';
})

let allLinks = document.querySelectorAll('a');
allLinks.forEach(element => {
    if(document.documentElement.clientWidth > 660){
        element.addEventListener('mousemove', (e) => {
            if(element.classList.contains('video-wrapper') || element.classList.contains('view-more-cursor-button')){
                return;
            }
            else{
                gsap.set(".link-dynamic-cursor", {xPercent: -50, yPercent: -50, display: 'block'});
                let xTo = gsap.quickTo(".link-dynamic-cursor", "x", {duration: 0.6, ease: "power3"}),
                yTo = gsap.quickTo(".link-dynamic-cursor", "y", {duration: 0.6, ease: "power3"});
                xTo(e.clientX);
                yTo(e.clientY);
            }
        });
        element.addEventListener('mouseleave', (e) => {
            gsap.set(".link-dynamic-cursor", {xPercent: 0, yPercent: 0, display: 'none'});
        });
    }
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
    $(".all-work-link").removeAttr("style");
});
