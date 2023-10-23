@extends('Layout.master')
@push('title')
    About Us
@endpush
@push('css')
    <style>
        .web-menu ul li a{
            color: #000;
        }
    </style>
@endpush
@section('content')
    @include('Particles.nav')

    <header id="about-header">
        <div class="banner-image">
        </div>
            <div class="quote-text">
                <figure>
                    <blockquote>
                        ""</br>
                        City Films is</br>complementary</br>pieces of film</br>put together,</br>like notes of</br>music make</br>a melody
                    </blockquote>
                    <figcaption>/hatchock</figcaption>
                </figure>
            </div>
    </header>
    <section class="approach">
        <div class="approach-text">
            <h2>Our Approach</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores minima explicabo repudiandae soluta vel nisi laborum, doloremque deserunt atque illo omnis officiis voluptatibus aperiam deleniti, obcaecati exercitationem itaque ipsam voluptatum?
            Culpa doloribus accusamus sapiente perferendis eveniet harum cum. Odio asperiores blanditiis id aperiam non, expedita hic eveniet adipisci voluptatum qui voluptatibus neque temporibus nihil sapiente quod at architecto! Dignissimos,</p>
        </div>
        <div class="approach-image">
            <img src="{{ asset('assets/images/about-2.webp') }}" alt="Our Approach">
        </div>
    </section>
    <section class="capabilities">
        <div class="capabilities-image">
            <img src="{{ asset('assets/images/about-3.webp') }}" alt="Our capabilities">
        </div>
        <div class="capabilities-text">
            <h2>Our capabilities</h2>
            <div class="title-text-wrapper">
                <h6 class="title">Creative Development & Pre-Production</h6>
            <div class="dots">..............</div>
            <p class="description">Concepting & creative ideation / Producing / Storyboarding / Script Writing / Casting / Location Sourcing
                , Scouting & Permitting / Production Planning & Strategy
            </p>
            </div>
            <div class="title-text-wrapper">
                <h6 class="title">Creative Development & Pre-Production</h6>
            <div class="dots">..............</div>
            <p class="description">Concepting & creative ideation / Producing / Storyboarding / Script Writing / Casting / Location Sourcing
                , Scouting & Permitting / Production Planning & Strategy
            </p>
            </div>
            <div class="title-text-wrapper">
                <h6 class="title">Creative Development & Pre-Production</h6>
            <div class="dots">..............</div>
            <p class="description">Concepting & creative ideation / Producing / Storyboarding / Script Writing / Casting / Location Sourcing
                , Scouting & Permitting / Production Planning & Strategy
            </p>
            </div>
        </div>
    </section>
    <section class="about-cover-last">
        <img src="{{ asset('assets/images/about-4.webp') }}" alt="Cover Image">
    </section>

    @include('Particles.foot')
@endsection
