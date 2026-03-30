@extends('layout')

@section('content')

<div class="container mt-5">

  <h2 class="mb-4">Checkout 💳</h2>

  <div class="row">

    <!-- 🛒 CART -->
    <div class="col-md-6">

      <h4>Your Order</h4>

      @foreach($cart as $item)

      <div class="card mb-2 p-2 d-flex flex-row align-items-center">

        <img src="{{ asset('images/'.$item['image']) }}" width="60">

        <div class="ms-3">
          <h6>{{ $item['name'] }}</h6>
          <small>{{ $item['quantity'] }} × ${{ $item['price'] }}</small>
        </div>

      </div>

      @endforeach

      <h4 class="mt-3">Total: ${{ $total }}</h4>

    </div>

    <!-- 🧾 FORM -->
    <div class="col-md-6">

      <form action="/place-order" method="POST">
        @csrf

        <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>

        <input type="text" name="address" class="form-control mb-3" placeholder="Address" required>

        <input type="text" name="phone" class="form-control mb-3" placeholder="Phone" required>

        <button class="btn btn-dark w-100">
          Place Order 🚀
        </button>

      </form>

    </div>

  </div>

</div>

@endsection