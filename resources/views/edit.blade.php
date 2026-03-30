@extends('layout')

@section('content')

<div class="container mt-5">

<h2>Edit Product</h2>

<form action="/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
  @csrf

  <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-2">
  <textarea name="description" class="form-control mb-2">
    {{ $product->description }}
  </textarea>
  <input type="number" name="price" value="{{ $product->price }}" class="form-control mb-2">
  <input type="file" name="image" class="form-control mb-2">
  <button class="btn btn-warning">Update</button>
</form>

</div>

@endsection