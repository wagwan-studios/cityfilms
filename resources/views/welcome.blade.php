<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>City Films</title>
</head>
<body>
    <nav id="web">
        <div class="nav-wrapper">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="CityFilms Logo">
                </a>
            </div>
            <div class="web-menu">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="mobile-menu-icon"><i class="ri-menu-3-fill"></i></div>
        </div>
    </nav>
    <header id="header">
        <div id="overlay-header" class="header-overlay">
            <h1 class="header-title"><i class="ri-arrow-left-line"></i>&nbsp;&nbsp; San Diego Video Production</h1>
            <a href="#" class="video-wrapper">
                <video autoplay="" class="home__header__video loaded" loop="" muted="" playsinline="" data-src="https://player.vimeo.com/progressive_redirect/playback/846730952/rendition/1080p/file.mp4?loc=external&amp;signature=c1daa1762ac54411f33e0202a274c08c1e5b12d88d84f317f303ac4c481a1ba3" src="https://player.vimeo.com/progressive_redirect/playback/846730952/rendition/1080p/file.mp4?loc=external&amp;signature=c1daa1762ac54411f33e0202a274c08c1e5b12d88d84f317f303ac4c481a1ba3">
                </video>
                <a href="#" class="view-more-cursor-button"> View Work </a>
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
                            <a href="#" class="about-link">About Us</a>
                        </div>
                    </div>
                </div>
        </section>
    </main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>
