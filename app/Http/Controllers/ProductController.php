<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('products.index', ['products' =>  $products]);
    }

    public function addToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('products.index');
    }


    public function getCart(){
        if(!Session::has('cart')){
            return view('users.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('users.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('users.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('users.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        return 'Dear,'. $request->name . 'with Email:' . $request->email . 'Your order is been processed!';
        // return $request->all();
        // Log::info($request->all());
    }

}
