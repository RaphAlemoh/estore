@extends('layouts.app')
@section('title', 'Estore')
@section('content')
<!-- Page Content -->
    <div id="content" class="container">
            <div class="row justify-content-center carousel-holder">
                    <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide my-3" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="{{ URL::to('images/placeholder.jpg' ) }}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                <h3>Mr. Mike</h3>
                                <p>Estore delivery service</p>
                                </div>
                            </div>
    
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ URL::to('images/placeholder2.jpg' ) }}" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                <h3>Mrs. Jumoke</h3>
                                <p>Online shopping made simple</p>
                                </div>
                            </div>
    
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ URL::to('images/placeholder3.jpg' ) }}" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                <h3>Jim Nikieal</h3>
                                <p>Service beyond borders</p>
                                </div>
                            </div>
                        </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
            </div>     
    </div>
            
    <hr class="light">

    <div class="container">
    <div class="row">
        <div class="col-lg-3 mb-2">
            <h3 class="text-center">Categories</h3>
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

    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="{{ URL::to('images/product1.jpg' ) }}" alt="product" class="img-fluid">
                <div class="caption">
                        <p class="mt-2">This is a short description.</p>
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
                                <div class="pull-left mt-1" style="font-weight:bold; font-size:16px;">$24.99</div>
                                <a href="#" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Add to cart" role="button">Add to Cart</a>
                        </div>
                </div>
                </div>
                </div>

                <div class="col-lg-3">
                        <div class="thumbnail">
                            <img src="{{ URL::to('images/product1.jpg' ) }}" alt="product" class="img-fluid">
                    <div class="caption">
                            <p class="mt-2">This is a short description.</p>
                            <div class="ratings">
                                <p class="pull-right"><a href="product.html#comments">15 reviews</a></p>
                                <p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                </p>
                            </div>
                            <div class="add-to-cart clearfix">
                                    <div class="pull-left mt-1" style="font-weight:bold; font-size:16px;">$24.99</div>
                                    <a href="#" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Add to cart" role="button">Add to Cart</a>
                            </div>
                    </div>
                </div>
                </div>

            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="{{ URL::to('images/product1.jpg' ) }}" alt="product" class="img-fluid">
                <div class="caption">
                        <p class="mt-2">This is a short description.</p>
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
                                <div class="pull-left mt-1" style="font-weight:bold; font-size:16px;">$24.99</div>
                                <a href="#" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Add to cart" role="button">Add to Cart</a>
                        </div>
                </div>
            </div>
            </div>

            <div class="col-lg-3">
                <div class="thumbnail">
                        <img src="{{ URL::to('images/product1.jpg' ) }}" alt="product" class="img-fluid">
                <div class="caption">
                        <p class="mt-2">This is a short description.</p>
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
                                <div class="pull-left mt-1" style="font-weight:bold; font-size:16px;">$24.99</div>
                                <a href="#" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="top" title="Add to cart" role="button">Add to Cart</a>
                        </div>
                </div>
            </div>
            </div>            

            </div>
        </div>

    </div>
</div>
@endsection
@section('footer')
@include('partials.__footer')       
@endsection
