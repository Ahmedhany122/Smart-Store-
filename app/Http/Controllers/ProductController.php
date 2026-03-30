<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // 🏠 Home Page (Hero + Categories Preview)
    public function home()
    {
        $mobiles = Product::where('category', 'mobile')->take(4)->get();
        $laptops = Product::where('category', 'laptop')->take(4)->get();
        $watches = Product::where('category', 'watch')->take(4)->get();
        $tablets = Product::where('category', 'tablet')->take(4)->get();

        return view('products', compact('mobiles', 'laptops', 'watches', 'tablets'));
    }


    // 🛍️ All Products Page
    public function allProducts()
    {
        $products = Product::all();
        return view('all-products', compact('products'));
    }


    // 👁️ Product Details
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('show', compact('product'));
    }


    // 🛒 Add To Cart
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "image" => $product->image,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Added to cart!');
    }


    // 🛒 View Cart
    public function cart()
    {
        return view('cart');
    }


    // ❌ Remove From Cart
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back();
    }


    // 🧑‍💻 Admin Dashboard
    public function admin()
    {
        $products = Product::all();
        return view('admin', compact('products'));
    }


    // ➕ Create Page
    public function create()
    {
        return view('create');
    }


    // 💾 Store Product
    public function store(Request $request)
    {
        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imageName
        ]);

        return redirect('/admin')->with('success', 'Product added!');
    }


    // ✏️ Edit Page
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }


    // 🔄 Update Product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            $imageName = $product->image;
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imageName
        ]);

        return redirect('/admin')->with('success', 'Product updated!');
    }


    // 🗑️ Delete Product
    public function delete($id)
    {
        Product::destroy($id);
        return back()->with('success', 'Product deleted!');
    }
    public function checkout()
    {
        $cart = session()->get('cart', []);

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('checkout', compact('cart', 'total'));
    }
    public function placeOrder(Request $request)
    {
        $cart = session()->get('cart', []);

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        Order::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'products' => json_encode($cart),
            'total' => $total
        ]);

        session()->forget('cart');

        return redirect('/success');
    }
    public function success()
    {
        return view('success');
    }
}
