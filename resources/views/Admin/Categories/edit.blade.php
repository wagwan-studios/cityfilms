@extends('Admin.Layout.admin')

@section('page')

@if ($errors->any())
    <div class="alert alert-success" id="alert">
        {{ $errors }}
    </div>
@endif
<div class="card shadow mb-4">
<div class="card-header py-3">Edit User</div>
<div class="card-body">
<form id="bookingForm" action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="needs-validation" autocomplete="off">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="name" value="{{ $category->name }}" required />
    </div>
    <input type="submit" value="Update" class="btn btn-primary px-4">
</form>
</div>
</div>
@endsection
