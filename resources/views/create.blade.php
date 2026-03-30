@extends('layout')

@section('content')

<div class="container mt-5">

    <h2>Add Product</h2>

    <form action="/store" method="POST" enctype="multipart/form-data">
  @csrf

  <input type="text" name="name" placeholder="Name" class="form-control mb-2">
  <select name="category" class="form-control mb-2">
  <option value="mobile">Mobile</option>
  <option value="laptop">Laptop</option>
  <option value="watch">Watch</option>
  <option value="tablet">Tablet</option>
</select>
  <textarea name="description" placeholder="Description" class="form-control mb-2"></textarea>
  <input type="number" name="price" placeholder="Price" class="form-control mb-2">
  <input type="file" name="image" class="form-control mb-2">

  <button class="btn btn-success">Save</button>
</form>

</div>

@endsection