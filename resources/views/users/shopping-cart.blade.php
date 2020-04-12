@extends('layouts.app')
@section('title', 'Estore')
@section('content')   
<div class="container">
@if(Session::has('cart'))
<div class="row">
<div class="col-lg-9">
    <ul class="list-group">
            @foreach ($products as $product)
                <li class="list-group-item">
                    Product Title <strong>{{ $product['item']['title'] }}</strong>
                    Product Price: <strong> {{ $product['item']['price'] }}</strong>
                    Product Sum: <span class="label label-success"> {{ $product['price'] }}</span>
                    <div class="btn-group dropdown">
                        <button class="btn btn-primary btn-xs dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href=" {{ route('users.reduceByOne', ['id' => $product['item']['id']]) }} ">Reduce by 1</a></li>
                            <li class="dropdown-item"><a href=" {{ route('users.removeItem', ['id' => $product['item']['id']]) }} ">Reduce Item </a></li>
                        </ul>
                    </div>
                    <span class="badge badge-primary">{{ $product['qty'] }}</span>
                </li>
            @endforeach
    </ul>
</div>
</div>


<div class="row">
<div class="col-9">
        <strong>Total: {{ $totalPrice }}</strong>
</div>
</div>
<hr>
<div class="row">
<div class="col-9">
<a href="{{ route('checkout') }}" type="button" class="btn btn-success btn-xs">
                Checkout
        </a>
</div>
</div>
@else
<div class="row">
    <div class="col-9">
        <button class="btn btn-danger btn-xs">
                No Items in Cart!
        </button>
    </div>
</div>
@endif
</div>
@endsection
@section('footer')
@include('partials.__footer')       
@endsection