<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['Product' => $data]);
    }
    function search(Request $req)
    {
        $query = $req->input('query');

        $data = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orWhere('category', 'like', '%' . $query . '%')
            ->get();

        return view('search', ['products' => $data]);
    }

    public function AddToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $userId = $req->session()->get('user')['id'];
            $productId = $req->product_id;

            // Find the product (to get its name)
            $product = Product::find($productId);

            if (!$product) {
                return redirect('/')->with('error', 'Product not found');
            }

            // Check if item already exists in the cart
            $existingCartItem = Cart::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();

            if ($existingCartItem) {
                // Increase quantity if exists
                $existingCartItem->quantity += 1;
                $existingCartItem->save();
            } else {
                // Create new cart entry with product name
                $cart = new Cart;
                $cart->user_id = $userId;
                $cart->product_id = $productId;
                $cart->product_name = $product->name; // Store product name
                $cart->quantity = 1;
                $cart->save();
            }

            return redirect('/')->with('success', 'Item added to cart');
        } else {
            return redirect('/login')->with('error', 'Please login first');
        }
    }


    public function cartList()
    {
        if (!Session::has('user')) {
            return redirect('/login')->with('error', 'Please login first.');
        }

        $userId = Session::get('user')['id'];


        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select(
                'products.id',
                'products.name',
                // 'products.description',
                'products.price',
                'products.gallery',
                DB::raw('SUM(cart.quantity) as quantity'),
                DB::raw('MIN(cart.id) as cart_id')
            )
            ->groupBy(
                'products.id',
                'products.name',
                'products.description',
                'products.price',
                'products.gallery',
                'cart.product_id'
            )
            ->get();

        return view('cartlist', ['products' => $products]);
    }

    public function removeCart($id)
    {
        // Cart::destroy($id);
        DB::table('cart')->where('id', $id)->delete();
        return redirect('cartlist')->with('success', 'Item removed from cart');
    }

    public function orderNow()
    {
        $userId = Session::get('user')['id'];
        if (!Session::has('user')) {
            return redirect('/login')->with('error', 'Please login first.');
        }

        $userId = Session::get('user')['id'];

        // Get all cart items with product details
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select(
                'products.id',
                'products.name',
                'products.description',
                'products.price',
                'products.gallery',
                DB::raw('SUM(cart.quantity) as quantity'),
                DB::raw('MIN(cart.id) as cart_id')
            )
            ->groupBy(
                'products.id',
                'products.name',
                'products.description',
                'products.price',
                'products.gallery'
            )
            ->get();

        // Calculate total price
        $total = 0;
        foreach ($products as $item) {
            $total += $item->price * $item->quantity;
        }

        return view('ordernow', ['products' => $products, 'total' => $total]);
    }

    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $AllCart = Cart::where('user_id', $userId)->get();
        foreach ($AllCart as $cart) {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->address = $req->address;
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->status = 'pending';
            $order->save();
        }
        $AllCart = Cart::where('user_id', $userId)->delete();
        return redirect('/');
    }
    function myOrder()
    {
        if (!Session::has('user')) {
            return redirect('/login')->with('error', 'Please login first.');
        }

        $userId = Session::get('user')['id'];

        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorder', ['orders' => $orders]);
    }
}
