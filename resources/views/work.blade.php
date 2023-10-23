@extends('Layout.master')
@push('title')
    Our Work
@endpush

@section('content')

    @include('Particles.nav')

    <header class="work-header">
        <div class="work-head-wrapper">
            <h1 class="work-main-heading">Check Out Our</br>Work — In Action</h1>
            <p class="tabs-head">
                <button class="tabs-category active">View All</button>
                <button class="tabs-category">Commercial</button>
                <button class="tabs-category">Documentary</button>
                <button class="tabs-category">Corporate</button>
            </p>
        </div>
    </header>
    <section class="work">
        <div class="work-wrapper">
            <article>
                <figure>
                    <img src="{{asset('assets/images/about-2.webp')}}" style="width:100%">
                    <figcaption>Fig.1 - Trulli, Puglia, Italy</figcaption>
                  </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('assets/images/about-2.webp')}}" style="width:100%">
                    <figcaption>Fig.1 - Trulli, Puglia, Italy</figcaption>
                  </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('assets/images/about-2.webp')}}" style="width:100%">
                    <figcaption>Fig.1 - Trulli, Puglia, Italy</figcaption>
                  </figure>
            </article>
            <article>
                <figure>
                    <img src="{{asset('assets/images/about-2.webp')}}" style="width:100%">
                    <figcaption>Fig.1 - Trulli, Puglia, Italy</figcaption>
                  </figure>
            </article>
        </div>
    </section>

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
    </style>
@endpush
