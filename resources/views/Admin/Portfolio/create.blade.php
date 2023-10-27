@extends('Admin.Layout.admin')
@push('title')
    CityFilms | Categories Portfolio
@endpush
@section('page')

@if ($errors->any())
    <div class="alert alert-success" id="alert">
        {{ $errors }}
    </div>
@endif

<div class="card shadow mb-4">
<div class="card-header py-3">Create User</div>
<div class="card-body">
<form id="bookingForm" action="{{route('admin.portfolio.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="inputName">Title</label>
              <input type="text" class="form-control" id="inputName" name="title" placeholder="Title" required />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="inputName">Slug</label>
              <input type="text" class="form-control" id="inputName" name="slug" placeholder="Slug" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputName">Related To</label>
                <input type="text" class="form-control" id="inputName" name="related_to" placeholder="Companies Name" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="inputName">Category</label>
              <select name="portfolio_category_id" class="form-control">
                <option disabled selected>Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="inputName">Description</label>
              <textarea class="form-control" id="editor" placeholder="Enter the Description" rows="5" name="description"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="inputName">Upload Video</label>
              <input type="file" class="form-control" id="videoUrl" name="video_url" placeholder="Video Url" required />
                <video width="400" autoplay class="mt-4">
                    <source src="" id="video_here">
                      Your browser does not support HTML5 video.
                </video>
            </div>
        </div>

    </div>
    <input type="submit" value="Add" class="btn btn-primary px-4">
</form>
</div>
</div>
@endsection
@push('custom-js')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

        $(document).on("change", "#videoUrl", function(evt) {
            var $source = $('#video_here');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        });
</script>
@endpush

@push('custom-css')
    <style>
        .video-preview{
            width: 300px;
            height: 300px;
        }
    </style>
@endpush
