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
<form id="bookingForm" action="{{route('admin.categories.store')}}" method="POST" class="needs-validation" autocomplete="off">
    @csrf
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required />
    </div>
    <input type="submit" value="Add" class="btn btn-primary px-4">
</form>
</div>
</div>
@endsection
