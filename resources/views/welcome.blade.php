@extends('layouts.app')
@section('title', 'Estore')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-3 mb-2">
            <h3 class="text-center">Categories</h3>
                <div class="list-group">
                @forelse ($categories as $category)
                <a href="{{ route('cart.index', ['category' => $category->name]) }}" class="list-group-item">{{ $category->name }}</a>                    
                @empty
                No categories                    
                @endforelse
        </div>
         </div>

    <div class="col-lg-9">
        @if(Session::has('success'))
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-md-offset-4 col-sm-offset-3">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    @foreach ($products->chunk(3) as $chunkedProduct)
    <div class="row">
        @foreach ($products as $product)
        <div class="col-lg-4 mb-2">
            <div class="thumbnail">
                <img src="{{ $product->imagePath }}" alt="product" class="img-fluid">
            <div class="caption">
                    <h3>{{ $product->title }}</h3>
                    <p class="mt-2">{{ $product->description }}</p>
                    <div class="ratings">
                        <p class="pull-right"><a href="product.html#comments">15 reviews</a></p>
                        <p>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        </p>
            </div>
            <div class="add-to-cart clearfix">
                    <div class="pull-left mt-1" style="font-weight:bold; font-size:16px;">#{{ $product->getPrice() }}</div>
            <a href="{{ route('product.addcart', ['id' => $product->id]) }}" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Add to cart" role="button">Add to Cart</a>
            </div>
        </div>
        </div>
        </div>            
        @endforeach
        </div>
    @endforeach
     </div>
    </div>
</div>
@endsection
@section('footer')
@include('partials.__footer')       
@endsection
