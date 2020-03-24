@extends('layouts.app')
@section('title', 'Estore')
@section('content')
<!-- Page Content -->
<div id="content" class="container">
    <div class="row carousel-holder">
    <div class="col-md-12">
    <div id="carousel-example-generic" class="carousel slide"
    data-ride="carousel">
    <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slideto="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slideto="1"></li>
            <li data-target="#carousel-example-generic" data-slideto="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="item active">
            <img class="slide-image" src="image/placeholder.jpg" alt="" />
            </div>
            <div class="item">
            <img class="slide-image" src="image/placeholder2.jpg" alt="" />
            </div>
            <div class="item">
            <img class="slide-image" src="image/placeholder3.jpg" alt="" />
            </div>
            </div>
            <a class="left carousel-control" href="#carousel-examplegeneric" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-examplegeneric" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            </div>
            </div>
            </div>
            <hr />
<div class="row">
<div class="col-sm-4 col-md-3">
<h3>Categories</h3>
<div class="list-group">
<a href="category.html" class="list-group-item">Apparel & Accessories</a>
<a href="category.html" class="list-group-item">Baby Products</a>
<a href="category.html" class="list-group-item">Beauty & Health</a>
<a href="category.html" class="list-group-item"> Electronics</a>
<a href="category.html" class="list-group-item">Furniture</a>
<a href="category.html" class="list-group-item">Home & Garden</a>
<a href="category.html" class="list-group-item">Luggage & Bags</a>
<a href="category.html" class="list-group-item">Shoes</a>
<a href="category.html" class="list-group-item">Sports & Entertainment</a>
<a href="category.html" class="list-group-item">Watches</a>
</div>
</div>

<div class="col-sm-8 col-md-9">
<div class="row">
    <div class="col-sm-6 col-md-4">
<div class="thumbnail">
<img src="image/product1.jpg" alt="product">
<div class="add-to-cart">
<a href="#" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart" ></a>
</div>
<div class="caption">
<h4 class="pull-right">$24.99</h4>
<h4><a href="product.html">1<sup>st</sup> Product</a>
</h4>
<p>This is a short description.</p>
<div class="ratings">
<p class="pull-right"><a href="product.html#comments">15 reviews</a></p>
<p>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
</p>
</div>
</div>
</div>
</div><!-- closing tag for col sm-6-->
<!--next product code here-->
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<img src="image/product1.jpg" alt="product">
<div class="add-to-cart">
<a href="#" class="glyphicon glyphicon-plus-sign"
data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
</div>
<div class="caption">
<h4 class="pull-right">$24.99</h4>
<h4><a href="product.html">1<sup>st</sup> Product</a>
</h4>
<p>This is a short description.</p>
<div class="ratings">
<p class="pull-right"><a href="product.html#comments">15 reviews</a></p>
<p>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
</p>
</div>
</div>
</div>
</div>
<!--next product code here-->
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<img src="image/product1.jpg" alt="product">
<div class="add-to-cart">
<a href="#" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
</div>
<div class="caption">
<h4 class="pull-right">$24.99</h4>
<h4><a href="product.html">1<sup>st</sup> Product</a>
</h4>
<p>This is a short description.</p>
<div class="ratings">
<p class="pull-right"><a href="product.html#comments">15 reviews</a></p>
<p>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
</p>
</div>
</div>
</div>
</div>
<!--next product code here-->
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<img src="image/product1.jpg" alt="product">
<div class="add-to-cart">
<a href="#" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
</div>
<div class="caption">
<h4 class="pull-right">$24.99</h4>
<h4><a href="product.html">1<sup>st</sup> Product</a>
</h4>
<p>This is a short description.</p>
<div class="ratings">
<p class="pull-right"><a href="product.html#comments">15 reviews</a></p>
<p>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
</p>
</div>
</div>
</div>
</div>
<!--next product code here-->
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<img src="image/product1.jpg" alt="product">
<div class="add-to-cart">
<a href="#" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
</div>
<div class="caption">
<h4 class="pull-right">$24.99</h4>
<h4><a href="product.html">1<sup>st</sup> Product</a>
</h4>
<p>This is a short description.</p>
<div class="ratings">
<p class="pull-right"><a href="product.html#comments">15 reviews</a></p>
<p>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
</p>
</div>
</div>
</div>
</div>
<!--next product code here-->
<div class="col-sm-6 col-md-4">
<div class="thumbnail">
<img src="image/product1.jpg" alt="product">
<div class="add-to-cart">
<a href="#" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
</div>
<div class="caption">
<h4 class="pull-right">$24.99</h4>
<h4><a href="product.html">1<sup>st</sup> Product</a>
</h4>
<p>This is a short description.</p>
<div class="ratings">
<p class="pull-right"><a href="product.html#comments">15 reviews</a></p>
<p>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
</p>
</div>
</div>
</div>
</div><!--last product end -->
</div><!-- closing tag for row internal-->
</div><!-- closing tag for col sm-8-->
</div><!-- closing tag for row one-->
            </div><!-- /.container class with content as the id-->
@endsection
@section('footer')
@include('partials.__footer')       
@endsection
