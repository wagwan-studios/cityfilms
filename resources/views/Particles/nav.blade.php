<nav id="web">
    <div class="nav-wrapper">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('assets/images/logo.png') }}" alt="CityFilms Logo">
            </a>
        </div>
        <div class="web-menu">
            <ul>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/work') }}">Work</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
        <div class="mobile-menu-icon"><i class="ri-menu-3-fill"></i></div>
    </div>
</nav>
<nav id="mobile">
    <div class="mobile-wrapper">
        <div class="logo-section">
            <a href="/">
                <img src="{{ asset('assets/images/logo.png') }}" alt="CityFilms Logo">
            </a>
            <div class="mobile-menu-close-icon"><i class="ri-close-fill"></i></div>
        </div>
        <div class="mobile-menu">
            <ul>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/work') }}">Work</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
        <div class="contact-menu">
            <div class="footer-columns">
                <span class="bold-text largespan order-1"> <a href="mailto:Sayhello@cityfilms.com">Sayhello@cityfilms.com.pk</a> </span>
                <span class="bold-text normalspan text-center order-2"> <a href="tel:03336121121">03336121121</a> </span>
                <span class="bold-text largespan order-3"> <a href="#">House # Dummy , Karachi Pakistan</a> </span>
                <span class="smallspan text-center order-4"> <a href="#"><i class="ri-instagram-line"></i></a> </span>
                <span class="smallspan text-center order-5"><a href="#"><i class="ri-vimeo-line"></i></a></span>
            </div>
        </div>
    </div>
</nav>
