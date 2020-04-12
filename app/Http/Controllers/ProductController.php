<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Product;
use App\Order;
use Auth;

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

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        count($cart->items) > 0 ? Session::put('cart', $cart) : Session::forget('cart');
        return redirect()->route('products.shoppingCart');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        count($cart->items) > 0 ? Session::put('cart', $cart) : Session::forget('cart');
        return redirect()->route('products.shoppingCart');
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
        if(!Session::has('cart')){
            return redirect()->route('users.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->address;
        $order->state = $request->state;
        $order->city = $request->city;
        $order->payment_id = '3f7g8h7h3ee';
        if(Auth::user() != NULL){
            Auth::user()->orders()->save($order);
        }else{
        $order->order_id = 'hh6478hh7yd';
        $order->save();
        }
        $request->session()->forget('cart');
        return redirect()->route('products.index')->with('success', 'Your order payment was successfull');

    }

    public function getProfile(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('users.profile', ['orders' => $orders]);
    }

}
 