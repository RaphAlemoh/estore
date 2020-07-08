<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Product;
use App\Category;
use App\Order;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' =>  $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products/create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request, [
        'product_url' => 'required',
        'title' => 'required|string|max:255|unique:products,title',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048|required',
        'description' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'category_id' => 'required|string|max:255',
    ]);
    
    if ($request->hasFile('image')) {

        $picture = $request->file('image');
        $pictureName = $request->name .'-'.time().'.'.$picture->getClientOriginalExtension();
        $picture->move(public_path('images/products'), $pictureName);
        $data = $request->all();
        $data['image'] = $pictureName;
        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['product_url'] = $request->category_url;
        $product = Product::create($data);
        if($product){
            Session::flash('notice','Product was successfully created');
            return redirect('products.index');
        }
        Session::flash('alert','Product was not successfully created');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products/show')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
 