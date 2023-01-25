@extends('theme')
@section('title')
    {{ "Edit Collection" }}
@endsection
@section('content')
<div class="container">
<h1>Add collection data</h1>
<form action="{{ route('collection.update', $con->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{ $con->name }}" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
</div>
@endsection