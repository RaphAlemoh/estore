@extends('layouts.app')
@section('title', 'Estore')
@section('customstyle')
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection
@section('content')
<div class="container">
    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3 mb-2">
        <h3 class="text-center">Categories</h3>
            <div class="list-group">           
            @forelse ($categories as $category)
        <a href="{{ route('store.index', ['category' => $category->name]) }}" class="list-group-item {{ setActiveCategory($category->name) }}">{{ $category->name }}</a>               
            @empty
            No categories                    
            @endforelse
        </div>
    </div>

    <div class="col-9">
        <div class="row">
        <div class="col-12">
        <div class="clearfix">
                <h1 class="pull-left">{{ $categoryName }}</h1>
                <div class="pull-right mt-3">
                    <strong>Price: </strong>
                    <a href="{{ route('store.index', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    <a href="{{ route('store.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>
        
                </div>
        </div>                 
            </div>
           
        </div>

        
        <div class="products text-center">
            <div class="row">
                @forelse ($products as $product)
                <div class="col-lg-4 mb-2">
                        <div class="thumbnail">
                                <a href="{{ route('store.show', $product->title) }}">
                                    <img src="{{ $product->imagePath }}" alt="product" class="img-fluid"></a>
                        <div class="caption">
                                <h3><a href="{{ route('store.show', $product->title) }}">{{ $product->title }}</a></h3>
                                <p class="mt-2 text-justify">{{ $product->description }}</p>
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
                        <div class="clearfix">
                                <div class="pull-left mt-1" style="font-weight:bold; font-size:16px;">#{{ $product->getPrice() }}</div>
                        <a href="{{ route('product.addcart', ['id' => $product->id]) }}" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Add to cart" role="button">Add to Cart</a>
                        </div>
                    </div>
                    </div>
                    </div>  
                @empty
                    <div style="text-align: left">No items found</div>
                @endforelse
        </div> 
        </div><!-- end products -->
        <div class="spacer"></div>
        {{-- <div class="pagination justify-content-center">  {{$products->links()}} </div> --}}
        <div class="pagination justify-content-center">  {{ $products->appends(request()->input())->links() }} </div>
    
</div>
</div>

</div>
@endsection
@section('footer')
@include('partials.__footer')       
@endsection
