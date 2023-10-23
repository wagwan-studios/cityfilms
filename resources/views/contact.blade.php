@extends('Layout.master')
@push('title')
    Contact Us
@endpush
@section('content')
@include('Particles.nav')


<header id="contact-header">
    <div id="overlay-header" class="contact-header-overlay">
        <a href="#" class="video-wrapper">
            <video autoplay="" class="home__header__video loaded" loop="" muted="" playsinline="" data-src="https://player.vimeo.com/progressive_redirect/playback/846730952/rendition/1080p/file.mp4?loc=external&amp;signature=c1daa1762ac54411f33e0202a274c08c1e5b12d88d84f317f303ac4c481a1ba3" src="https://player.vimeo.com/progressive_redirect/playback/846730952/rendition/1080p/file.mp4?loc=external&amp;signature=c1daa1762ac54411f33e0202a274c08c1e5b12d88d84f317f303ac4c481a1ba3">
            </video>
        </a>
    </div>
</header>
<section class="contact">
    <div class="contact-without-video">
            <h1>We'd Love To<br>Here From You</h1>
            <div class="contact-description">
                <pre class="contact-text">
A full-service cideo production company based in San Diego, CA.
Our work is built around the passion of telling stories through visuals. By putting
collaboration at the center of our process.
                </pre>
                <div class="contact-link">
                    <h6>Say Hello</h6>
                    <a href="mailto:sayhello@cityfilms.com.pk">sayhello@cityfilms.com.pk</a></br>
                    <a href="tel:03336121121">03336121121</a>
                    {{-- <a href="#" class="about-link">About Us</a> --}}
                </div>
            </div>
        </div>
</section>
<section class="contact-cover-last">
    <img src="{{ asset('assets/images/contact-cover.webp') }}" alt="Cover Image">
</section>


@include('Particles.foot')
@endsection
