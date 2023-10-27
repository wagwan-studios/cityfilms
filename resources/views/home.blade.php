@extends('Layout.master')
@push('title')
    Home
@endpush
{{-- @dd($left_col, $right_col) --}}
@section('content')
@include('Particles.nav')
<header id="header">
    <div id="overlay-header" class="header-overlay">
        <h1 class="header-title"><i class="ri-arrow-left-line"></i>&nbsp;&nbsp; San Diego Video Production</h1>
        <a href="{{ url('/work') }}" class="video-wrapper">
            <video autoplay="" class="home__header__video loaded" loop="" muted="" playsinline="" data-src="https://player.vimeo.com/progressive_redirect/playback/846730952/rendition/1080p/file.mp4?loc=external&amp;signature=c1daa1762ac54411f33e0202a274c08c1e5b12d88d84f317f303ac4c481a1ba3" src="https://player.vimeo.com/progressive_redirect/playback/846730952/rendition/1080p/file.mp4?loc=external&amp;signature=c1daa1762ac54411f33e0202a274c08c1e5b12d88d84f317f303ac4c481a1ba3">
            </video>
            <a href="{{ url('/work') }}" class="view-more-cursor-button"> View Work </a>
        </a>
    </div>
    <div class="cursor-view-work">
        <div class="cursor-circle"></div>
    </div>
</header>
<main>
    <section class="about">
        <div class="about-with-video">
            <video loop autoplay muted playsinline>
                <source src="https://player.vimeo.com/progressive_redirect/playback/846730952/rendition/1080p/file.mp4?loc=external&amp;signature=c1daa1762ac54411f33e0202a274c08c1e5b12d88d84f317f303ac4c481a1ba3" src="https://player.vimeo.com/progressive_redirect/playback/846730952/rendition/1080p/file.mp4?loc=external&amp;signature=c1daa1762ac54411f33e0202a274c08c1e5b12d88d84f317f303ac4c481a1ba3" type="video/mp4">
                </video>
                <h1>We Are<br>Pure Cinema</h1>
                <div class="about-description">
                    <pre class="about-text">
A full-service cideo production company based in San Diego, CA.
Our work is built around the passion of telling stories through visuals. By putting
collaboration at the center of our process, and emphasizing emotion in all of our
projects, we are able to do what we love most: create content you can feel.
                    </pre>
                    <div class="about-link">
                        <a href="{{ url('/about') }}" class="about-link">About Us</a>
                    </div>
                </div>
            </div>
    </section>
    @foreach ($portfolio as $index => $work)
        @if($index >= 0 && $index % 2 !== 0)
        <section class="details">
            <div class="details-wrapper">
                <div class="detail-image-right">
                    <video class="right-image-1 hover-video" src="{{ asset($work->video_url) }}"
                    loop muted paused playsinline ></video>
                    <div class="video-caption"><h4>{{ $work->title }}</h4></div>
                </div>
                <marquee behavior="smooth" direction="left">{{ $work->title }}</marquee>
                <marquee behavior="smooth" direction="right">{{ $work->title }}</marquee>
            </div>
        </section>
        @else
        <section class="details">
            <div class="details-wrapper-left">
                <div class="detail-image-left">
                    <video class="left-image-1 hover-video" src="{{ asset($work->video_url) }}"
                    loop muted paused playsinline ></video>
                    <div class="video-caption"><h4>{{ $work->title }}</h4></div>
                </div>
                <marquee behavior="smooth" direction="right">{{ $work->title }}</marquee>
                <marquee behavior="smooth" direction="left">{{ $work->title }}</marquee>
            </div>
        </section>
        @endif
    @endforeach
    {{-- <section class="details">
        <div class="details-wrapper">
            <div class="detail-image-right">
                <video class="right-image-1 hover-video" src="https://player.vimeo.com/external/651691026.hd.mp4?s=26abb0304370cf98b37ed4e8d2074aa933061208&profile_id=175"
                loop muted paused playsinline ></video>
                <div class="video-caption"><h4>AMBASSADOR: FRANCIS DONALD</h4></div>
            </div>
            <marquee behavior="smooth" direction="left">AMBASSADOR: FRANCIS DONALD</marquee>
            <marquee behavior="smooth" direction="right">AMBASSADOR: FRANCIS DONALD</marquee>
        </div>
    </section>
    <section class="details">
        <div class="details-wrapper-left">
            <div class="detail-image-left">
                <video class="left-image-1 hover-video" src="https://player.vimeo.com/external/651691026.hd.mp4?s=26abb0304370cf98b37ed4e8d2074aa933061208&profile_id=175"
                loop muted paused playsinline ></video>
                <div class="video-caption"><h4>AMBASSADOR: FRANCIS DONALD</h4></div>
            </div>
            <marquee behavior="smooth" direction="right">AMBASSADOR: FRANCIS DONALD</marquee>
            <marquee behavior="smooth" direction="left">AMBASSADOR: FRANCIS DONALD</marquee>
        </div>
    </section>
    <section class="details">
        <div class="details-wrapper">
            <div class="detail-image-right">
                <video class="right-image-1 hover-video" src="https://player.vimeo.com/external/651691026.hd.mp4?s=26abb0304370cf98b37ed4e8d2074aa933061208&profile_id=175"
                loop muted paused playsinline ></video>
                <div class="video-caption"><h4>AMBASSADOR: FRANCIS DONALD</h4></div>
            </div>
            <marquee behavior="smooth" direction="left">AMBASSADOR: FRANCIS DONALD</marquee>
            <marquee behavior="smooth" direction="right">AMBASSADOR: FRANCIS DONALD</marquee>
        </div>
    </section>
    <section class="details">
        <div class="details-wrapper-left">
            <div class="detail-image-left">
                <video class="left-image-1 hover-video" src="https://player.vimeo.com/external/651691026.hd.mp4?s=26abb0304370cf98b37ed4e8d2074aa933061208&profile_id=175"
                loop muted paused playsinline ></video>
                <div class="video-caption"><h4>AMBASSADOR: FRANCIS DONALD</h4></div>
            </div>
            <marquee behavior="smooth" direction="right">AMBASSADOR: FRANCIS DONALD</marquee>
            <marquee behavior="smooth" direction="left">AMBASSADOR: FRANCIS DONALD</marquee>
        </div>
    </section>
    <section class="details">
        <div class="details-wrapper">
            <div class="detail-image-right">
                <video class="right-image-1 hover-video" src="https://player.vimeo.com/external/651691026.hd.mp4?s=26abb0304370cf98b37ed4e8d2074aa933061208&profile_id=175"
                loop muted paused playsinline ></video>
                <div class="video-caption"><h4>AMBASSADOR: FRANCIS DONALD</h4></div>
            </div>
            <marquee behavior="smooth" direction="left">AMBASSADOR: FRANCIS DONALD</marquee>
            <marquee behavior="smooth" direction="right">AMBASSADOR: FRANCIS DONALD</marquee>
        </div>
    </section>
    <section class="details">
        <div class="details-wrapper-left">
            <div class="detail-image-left">
                <video class="left-image-1 hover-video" src="https://player.vimeo.com/external/651691026.hd.mp4?s=26abb0304370cf98b37ed4e8d2074aa933061208&profile_id=175"
                loop muted paused playsinline ></video>
                <div class="video-caption"><h4>AMBASSADOR: FRANCIS DONALD</h4></div>
            </div>
            <marquee behavior="smooth" direction="right">AMBASSADOR: FRANCIS DONALD</marquee>
            <marquee behavior="smooth" direction="left">AMBASSADOR: FRANCIS DONALD</marquee>
        </div>
    </section> --}}
    <section class="all-work">
        <a href="{{ url('/work') }}" class="all-work-link">
            <span class="all-work-link-wrapper">View All Work</span>
        </a>
    </section>
    <section class="clients">
        <div class="client-wrapper">
            <h2>Trusted By</h2>
            <div class="client-logo-wrapper">
                <img src="{{ asset('assets/images/clients/chevrolet.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/gmc.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/google.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/hilton.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/mc-donalds.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/microsoft.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/netflix.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/nfl.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/puma.svg') }}" alt="chevrolet logo">
                <img src="{{ asset('assets/images/clients/ballast-point.svg') }}" alt="chevrolet logo">
            </div>
        </div>
    </section>
</main>
@include('Particles.foot')
@endsection
@push('js')
    <script src="{{ asset('assets/js/cursor.js') }}"></script>
@endpush
