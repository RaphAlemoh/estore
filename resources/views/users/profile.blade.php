@extends('layouts.app')
@section('title', 'My Orders')
@section('content')   
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
        <h3>My Orders</h3>
        <hr>
        @foreach ($orders as $order)    
        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                @foreach ($order->cart->items as $item)                        
                <li class="list-group-item">
                <span class="badge badge-primary pull-right"># {{ $item['price'] }}</span>
                <span class="card-title">{{ $item['item']['title'] }} | {{ $item['qty'] }} units </span>
                </li>
                @endforeach
            </ul>
            <p class="card-text mt-2">Order status: <span class="text-danger"> Pending </span> | <span class="text-success">Delivered</span></p>
            </div>
            <div class="card-footer text-muted">
                    <strong>Total Price: # {{ $order->cart->totalPrice }}</strong>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
@section('footer')
@include('partials.__footer')       
@endsection