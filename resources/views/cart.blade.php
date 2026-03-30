@extends('layout')

@section('content')

<div class="container mt-5">

    <h2>Your Cart 🛒</h2>

    @if(session('cart'))

    @php $total = 0; @endphp

    @foreach(session('cart') as $id => $item)

    <div class="card p-3 mb-3 d-flex flex-row align-items-center">

        <img src="{{ asset('images/'.$item['image']) }}" width="100">

        <div class="ms-3">
            <h5>{{ $item['name'] }}</h5>
            <p>Price: ${{ $item['price'] }}</p>
            <p>Quantity: {{ $item['quantity'] }}</p>
        </div>

        <div class="ms-auto">
            <form action="/cart/remove/{{ $id }}" method="POST">
                @csrf
                <button class="btn btn-danger">Remove</button>
            </form>
        </div>

    </div>

    @php $total += $item['price'] * $item['quantity']; @endphp

    @endforeach

    <h3>Total: ${{ $total }}</h3>
    <a href="/checkout" class="btn btn-dark">Checkout</a>


    @else

    <p>Your cart is empty</p>

    @endif

</div>

@endsection