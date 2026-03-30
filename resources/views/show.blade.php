@extends('layout')

@section('content')

<div class="container mt-5">

<div class="row">

  <!-- Image -->
  <div class="col-md-6">
    <img src="{{ asset('images/'.$product->image) }}" 
         class="w-100 rounded shadow">
  </div>

  <!-- Details -->
  <div class="col-md-6">

    <h2>{{ $product->name }}</h2>

    <h3 class="text-success my-3">
      ${{ $product->price }}
    </h3>

    <p class="text-muted">
      {{ $product->description }}
    </p>

    <!-- Buttons -->
    <div class="mt-4">

      <form action="/cart/{{ $product->id }}" method="POST">
        @csrf
        <button class="btn btn-success btn-lg w-100 mb-2">
          🛒 Add to Cart
        </button>
      </form>

      <a href="/" class="btn btn-dark w-100">
        ⬅ Back
      </a>

    </div>

  </div>

</div>

</div>

@endsection