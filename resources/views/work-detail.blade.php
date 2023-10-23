@extends('Layout.master')
@push('title')
    Our Work
@endpush

@section('content')

    @include('Particles.nav')

    <header class="work-header">
        <div class="work-head-wrapper">
            <a href="#" class="work-head-company-link">Coronado Brewing Company</a>
            <h1 class="work-main-heading">Stay Coastal</h1>
        </div>
    </header>
    <section class="work-video-playing">
        <video loop autoplay muted playsinline id="single-play">
            <source src="https://player.vimeo.com/progressive_redirect/playback/833856232/rendition/1080p/file.mp4?loc=external&signature=efc4eb2cb476bde9c8f7dba90102e57a5f61faffdf60a1465530baafb3783ccd"
            type="video/mp4">
        </video>
        <a href="#" onclick="openFullScreenVideo()" class="view-more-cursor-button">Play</a>
        <a href="#" onclick="closeFullScreenVideo()" class="close-cursor-button"><i class="ri-close-line"></i></a>
    </section>

    <div class="cursor-view-work">
        <div class="cursor-circle"></div>
    </div>

    @include('Particles.foot')

    @endsection
    @push('css')
        <style>
            @media (max-width:660px){
                .mobile-menu-icon{
                    color: #000;
                }
            }
            .web-menu ul li a{
                color: #000;
            }
            .work-video-playing{
                width: 100vw;
                height: 100vh;
                margin-top: 2rem;
                position: relative;
            }
            .work-video-playing video{
                position: relative;
            }
            .close-cursor-button{
                top: 50%;
                left: 50%;
                position: absolute;
                display: none;
                background: hsla(0,0%,100%,.6);
                color: #000;
                width: 12rem;
                height: 12rem;
                border-radius: 50%;
                text-transform: uppercase;
                font: 700 1.2rem Roboto Mono;
                text-align: center;
                padding: 5rem 1rem;
                transform: translate(-50%,-50%);

            }
        </style>
    @endpush
@push('js')
    <script src="{{ asset('assets/js/cursor.js') }}"></script>
    <script type="text/javascript">
        let playable = document.querySelector('.work-video-playing');
        let playIcon = document.querySelector('.view-more-cursor-button');
        let closeICon = document.querySelector('.close-cursor-button');

        function openFullScreenVideo(){
            if (playable.requestFullscreen) {
                playable.requestFullscreen();
                playIcon.style.display = 'none';
                closeICon.style.display = 'block';
            } else if (playable.webkitRequestFullscreen) { /* Safari */
                playable.webkitRequestFullscreen();
                playIcon.style.display = 'none';
                closeICon.style.display = 'block';
            } else if (playable.msRequestFullscreen) { /* IE11 */
                playable.msRequestFullscreen();
                playIcon.style.display = 'none';
                closeICon.style.display = 'block';
            }
        }
        function closeFullScreenVideo() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
                playIcon.style.display = 'block';
                closeICon.style.display = 'none';
            } else if (document.webkitExitFullscreen) { /* Safari */
                document.webkitExitFullscreen();
                playIcon.style.display = 'block';
                closeICon.style.display = 'none';
            } else if (document.msExitFullscreen) { /* IE11 */
                document.msExitFullscreen();
                playIcon.style.display = 'block';
                closeICon.style.display = 'none';
            }
        }

        function is_fullscreen(element=null){
            return element != null? document.fullscreenElement == element:document.fullscreenElement != null;
        }
    </script>
@endpush
