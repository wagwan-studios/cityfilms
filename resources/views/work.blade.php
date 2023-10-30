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
                <a href="#all" class="tabs-category active" onclick="showCategoryWork(this,'all')">View All</a>
                @foreach ($categories as $category)
                    <a href="#{{strtolower($category->name)}}" class="tabs-category" onclick="showCategoryWork(this,'{{$category->name}}')">{{ $category->name }}</a>
                @endforeach
            </p>
        </div>
    </header>
    <section class="work">
        <div class="work-wrapper">
            @foreach ($portfolio_work as $portfolio)
                <article>
                    <a href="{{ url('/work/'.$portfolio->slug) }}">
                        <figure>
                            <video src="{{asset($portfolio->video_url)}}" style="width:100%">
                                <figcaption>{{ $portfolio->title }}</figcaption>
                        </figure>
                    </a>
                </article>
            @endforeach
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
        .category-work-wrapper{
            display: none;
        }
        .all-work{

        }
    </style>
@endpush
@push('js')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
        function showCategoryWork(item,category) {
            if(category == 'all'){
                location.reload();

            }
            else{
                $.ajax({
                    url: "{{route('getWork')}}",
                    // dataType: 'json',
                    data: {category: category},
                    type: 'GET',
                    success: function(res) {
                        $('.work-wrapper').empty();
                        $('.tabs-head a').each(function(index, item){
                            $(item).removeClass('active');
                        });
                        $(item).addClass('active');
                        res.data.forEach(element => {
                            $('.work-wrapper').append("<article><a href='{{ url('/work/') }}/"+element.slug+"'><figure><video src='{{asset('')}}"+element.video_url+"' style='width:100%'><figcaption>"+element.title+"</figcaption></figure></a></article>");
                        });
                    }
                });
            }
        }
    </script>
@endpush
