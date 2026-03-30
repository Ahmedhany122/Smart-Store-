@extends('layout')

@section('content')

<div class="container mt-4">

    <!-- 🔥 HERO SECTION -->
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/slide1.jpg.png" class="d-block w-100 hero-img">
    </div>
    <div class="carousel-item">
      <img src="/images/slide2.jpg.png" class="d-block w-100 hero-img">
    </div>
    <div class="carousel-item">
      <img src="/images/slide3.png" class="d-block w-100 hero-img">
    </div>
  </div>

  <!-- أزرار التحكم -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<br><br>
    <!-- 📱 MOBILES -->
    <div class="d-flex justify-content-between align-items-center">
        <h3>📱 Mobiles</h3>
        <a href="/products" class="btn btn-outline-dark btn-sm">View All →</a>
    </div>

    <div class="row mt-3">
        @foreach($mobiles as $product)

        <div class="col-md-3">
            <div class="card shadow p-2 mb-4 h-100">

                <img src="{{ asset('images/'.$product->image) }}" height="150" style="object-fit:cover">

                <h6 class="mt-2">{{ $product->name }}</h6>

                <p class="text-muted small">
                    {{ Str::limit($product->description, 50) }}
                </p>

                <h5 class="text-success">${{ $product->price }}</h5>

                <div class="d-flex justify-content-between">

                    <a href="/product/{{ $product->id }}" class="btn btn-sm btn-dark">View</a>

                    <form action="/cart/{{ $product->id }}" method="POST">
                        @csrf
                        <button class="btn btn-success btn-sm">🛒</button>
                    </form>

                </div>

            </div>
        </div>

        @endforeach
    </div>

    <!-- 💻 LAPTOPS -->
    <div class="d-flex justify-content-between align-items-center">
        <h3>💻 Laptops</h3>
        <a href="/products" class="btn btn-outline-dark btn-sm">View All →</a>
    </div>

    <div class="row mt-3">
        @foreach($laptops as $product)

        <div class="col-md-3">
            <div class="card shadow p-2 mb-4 h-100">

                <img src="{{ asset('images/'.$product->image) }}" height="150" style="object-fit:cover">

                <h6 class="mt-2">{{ $product->name }}</h6>

                <p class="text-muted small">
                    {{ Str::limit($product->description, 50) }}
                </p>

                <h5 class="text-success">${{ $product->price }}</h5>

                <div class="d-flex justify-content-between">

                    <a href="/product/{{ $product->id }}" class="btn btn-sm btn-dark">View</a>

                    <form action="/cart/{{ $product->id }}" method="POST">
                        @csrf
                        <button class="btn btn-success btn-sm">🛒</button>
                    </form>

                </div>

            </div>
        </div>

        @endforeach
    </div>

    <!-- ⌚ WATCHES -->
    <div class="d-flex justify-content-between align-items-center">
        <h3>⌚ Watches</h3>
        <a href="/products" class="btn btn-outline-dark btn-sm">View All →</a>
    </div>

    <div class="row mt-3">
        @foreach($watches as $product)

        <div class="col-md-3">
            <div class="card shadow p-2 mb-4 h-100">

                <img src="{{ asset('images/'.$product->image) }}" height="150" style="object-fit:cover">

                <h6 class="mt-2">{{ $product->name }}</h6>

                <p class="text-muted small">
                    {{ Str::limit($product->description, 50) }}
                </p>

                <h5 class="text-success">${{ $product->price }}</h5>

                <div class="d-flex justify-content-between">

                    <a href="/product/{{ $product->id }}" class="btn btn-sm btn-dark">View</a>

                    <form action="/cart/{{ $product->id }}" method="POST">
                        @csrf
                        <button class="btn btn-success btn-sm">🛒</button>
                    </form>

                </div>

            </div>
        </div>

        @endforeach
    </div>

    <!-- 📱 TABLETS -->
    <div class="d-flex justify-content-between align-items-center">
        <h3>📱 Tablets</h3>
        <a href="/products" class="btn btn-outline-dark btn-sm">View All →</a>
    </div>

    <div class="row mt-3">
        @foreach($tablets as $product)

        <div class="col-md-3">
            <div class="card shadow p-2 mb-4 h-100">

                <img src="{{ asset('images/'.$product->image) }}" height="150" style="object-fit:cover">

                <h6 class="mt-2">{{ $product->name }}</h6>

                <p class="text-muted small">
                    {{ Str::limit($product->description, 50) }}
                </p>

                <h5 class="text-success">${{ $product->price }}</h5>

                <div class="d-flex justify-content-between">

                    <a href="/product/{{ $product->id }}" class="btn btn-sm btn-dark">View</a>

                    <form action="/cart/{{ $product->id }}" method="POST">
                        @csrf
                        <button class="btn btn-success btn-sm">🛒</button>
                    </form>

                </div>

            </div>
        </div>

        @endforeach
    </div>

</div>

@endsection