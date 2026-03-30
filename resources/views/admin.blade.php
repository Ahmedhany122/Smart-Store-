@extends('layout')

@section('content')

<div class="container mt-5">

    <h2>Admin Dashboard</h2>

    <a href="/create" class="btn btn-success mb-3">+ Add Product</a>

    @foreach($products as $product)

    <div class="glass p-3 mb-3">

        <img src="{{ asset('images/'.$product->image) }}" width="150" class="mb-2">

        <h4>{{ $product->name }}</h4>

        <p>{{ $product->description }}</p>

        <p>${{ $product->price }}</p>

        <a href="/edit/{{ $product->id }}" class="btn btn-warning">Edit</a>

        <form action="/delete/{{ $product->id }}" method="POST" style="display:inline;">
            @csrf
            <button class="btn btn-danger">Delete</button>
        </form>

    </div>

    @endforeach

</div>

@endsection