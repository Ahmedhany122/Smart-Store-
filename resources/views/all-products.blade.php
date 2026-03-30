@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="row">

        @foreach($products as $product)

        <div class="col-md-3 mb-4">
            <div class="card product-card h-100 border-0 shadow-sm">

                <img src="{{ asset('images/'.$product->image) }}" 
                     class="card-img-top"
                     style="height:180px; object-fit:cover;">

                <div class="card-body d-flex flex-column">
                    
                    <h6 class="card-title fw-bold">
                        {{ $product->name }}
                    </h6>

                    <p class="text-muted small">
                        {{ Str::limit($product->description, 50) }}
                    </p>

                    <h5 class="text-success mb-3">
                        ${{ $product->price }}
                    </h5>

                    <a href="/product/{{ $product->id }}" 
                       class="btn btn-dark btn-sm mb-2">
                        View
                    </a>

                    <form action="/cart/{{ $product->id }}" method="POST">
                        @csrf
                        <button class="btn btn-success btn-sm w-100">
                            Add to Cart 🛒
                        </button>
                    </form>

                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>

@endsection