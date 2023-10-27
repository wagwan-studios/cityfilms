@extends('Admin.Layout.admin')

@push('ttitle')
    CityFilms | Categories
@endpush
@section('page')
<div class="card shadow mb-4">
    @if (Session::has('success'))
    <div class="alert alert-success" id="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Categories
        <a href="{{route('admin.categories.create')}}" class="btn btn-primary float-right">Add Categories</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-start">
                                <a href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-edit text-primary">  </i></a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">@method("DELETE")@csrf<button class="btn" type="submit"><i class="fa fa-trash text-danger"></i></button></form>
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
