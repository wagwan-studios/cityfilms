@extends('Admin.Layout.admin')

@push('title')
    CityFilms | Portfolio
@endpush
@section('page')
<div class="card shadow mb-4">
    @if (Session::has('success'))
    <div class="alert alert-success" id="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Portfolio
        <a href="{{route('admin.portfolio.create')}}" class="btn btn-primary float-right">Add Portfolio</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Related</th>
                        <th>Video Url</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Related</th>
                        <th>Video Url</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($portfolio as $portfolio)
                    <tr>
                        <td>{{$portfolio->title}}</td>
                        <td>{{$portfolio->slug}}</td>
                        <td>{!! $portfolio->description!!}</td>
                        <td>{{Str::limit($portfolio->related_to, 20, '...')}}</td>
                        <td><video width="100px" height="100px" src="{{ asset($portfolio->video_url) }}"></video></td>
                        <td>{{$portfolio->category->name}}</td>
                        <td>{{$portfolio->created_at->diffForHumans()}}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-start">
                                <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}"><i class="fas fa-edit text-primary">  </i></a>
                                <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="POST">@method("DELETE")@csrf<button class="btn" type="submit"><i class="fa fa-trash text-danger"></i></button></form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('custom-js')
    <script>
        setTimeout(function(){ $("#alert").hide(); }, 3000);
    </script>
@endpush
