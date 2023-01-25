@extends('theme')
@section('title')
    {{ "All Collections" }}
@endsection
@section('content')
<div class="container">
<h1>All Collections</h1>
<a class="btn btn-primary" href="{{ route('collection.create') }}">Add Collection</a>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($all_collections as $collection)
      <tr>
        <td>{{ $collection->id }}</td>
        <td>{{ $collection->name }}</td>
        <td>
        <form action="{{ route('collection.destroy', $collection->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('collection.edit', $collection->id) }}">Edit</a>
            @csrf    
            @method('Delete')
        <button type="submit" class="btn btn-danger">Delete</button>
</form>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection