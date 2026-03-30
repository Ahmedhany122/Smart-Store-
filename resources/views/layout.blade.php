<!DOCTYPE html>
<html>

<head>
    <title>Smart Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: white;
            font-family: 'Segoe UI';
        }

        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 15px;
        }

        .product-card {
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px) scale(1.03);
        }

        .btn-custom {
            background: linear-gradient(45deg, #22c55e, #06b6d4);
            border: none;
            color: white;
            transition: 0.3s;
        }

        .btn-custom:hover {
            transform: scale(1.1);
        }

        button {
            transition: 0.3s;
        }

        .fade-in {
            animation: fade 1s ease-in;
        }

        .btn-success:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }

        @keyframes fade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .hero-img {
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 10px;
        }

        .product-card {
            transition: all 0.3s ease;
            border-radius: 12px;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
    </style>

</head>

<body>

    <nav class="p-3 d-flex justify-content-between">
        <h3>⚡ Smart Store</h3>

        <div>
            <a href="/" class="btn btn-dark">Home</a>
            <a href="/products" class="btn btn-dark">Products</a>
            <a href="/contact" class="btn btn-dark">Contact</a>
            <a href="/about" class="btn btn-dark">About As</a>
            <a href="/cart" class="btn btn-dark">Cart 🛒</a>
        </div>
    </nav>
    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
    @endif
    @yield('content')
    <script>
        setTimeout(() => {
            let alert = document.getElementById('alert');
            if (alert) {
                alert.style.transition = "0.5s";
                alert.style.opacity = '0';

                setTimeout(() => {
                    alert.remove();
                }, 500);
            }
        }, 2000);
    </script>
    <footer class="bg-dark text-white mt-5 p-4">
        <div class="container d-flex justify-content-between flex-wrap">

            <div class="mb-3">
                <h5>Smart Store</h5>
                <p>© 2026 Smart Store. All rights reserved.</p>
            </div>

            <div class="mb-3">
                <h5>Follow Us</h5>
                <a href="#" class="text-white me-2">Facebook</a>
                <a href="#" class="text-white me-2">Twitter</a>
                <a href="#" class="text-white">Instagram</a>
            </div>

        </div>
    </footer>

    <style>
        footer a:hover {
            text-decoration: underline;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>