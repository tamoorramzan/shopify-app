@extends('theme')
@section('content')
<div class="container">
<h1>All Products</h1>
<a href="{{ route('product.create') }}">Add Product</a>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($all_products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->title }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>
        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
            <a href="{{ route('product.edit', $product->id) }}">Edit</a>
            @csrf    
            @method('Delete')
        <button type="submit" class="btn">Delete</button>
</form>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection