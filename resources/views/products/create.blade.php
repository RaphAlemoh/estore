@extends('layouts.adminLayout.adminDesign')
@section('title', 'Add Product')
@section('content')
<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{ url('/') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
    <a href="{{ url('products') }}" class="tip-bottom">products</a> <a href="{{ url('products/create') }}" class="current">Add Product</a> </div>
    <h1>Add Products</h1>
    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
@if (session('flash_message_success'))
    <div class="alert alert-error alert-block text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ session('flash_message_success') }}</strong>
    </div>
@endif   
</div>
<div class="container-fluid">
<hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
<h5>Add Products</h5>
</div>
<div class="widget-content justify-content-center">
<div class="card mt-4">
    <div class="card-body">
        <a href="{{ url('/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <br />
        <br />
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    <form method="POST" action="{{ route('products.store') }}" role="form" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="name">{{ __('Product Name') }}</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
    
            <div class="form-group col-md-4">
            <label for="description">{{ __('Description') }}</label>
            <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}">
            @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
    
        <div class="form-group col-md-4">
            <label for="price">{{ __('Product Price') }}</label>
            <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}">
            @if ($errors->has('price'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }} col-md-4">
        <label for="category_id">{{ __('Product Category') }}</label>
        <select id="category_id" class="form-control" name="category_id" required>
            <option disabled>Choose...</option>
            @if(count($categories) > 0)
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            @endif
        </select>
        @if ($errors->has('category_id'))
            <span class="help-block">
                <strong>{{ $errors->first('category_id') }}</strong>
            </span>
        @endif
    </div>   
    
    <div class="form-group col-md-4 mt-4" style="margin-top:20px;">
        <label for="image">{{ __('Product Image') }}</label>
        <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required>
        @if ($errors->has('image'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
    
    <div class="form-group col-md-4 mt-2" style="margin-top:10px;">
            <label for="discount">{{ __('Discount') }}</label>
            <input id="discount" type="text" class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" name="discount" value="{{ old('discount') }}">
            @if ($errors->has('discount'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('discount') }}</strong>
                </span>
            @endif
        </div>
    </div>

        <div class="form-group row mb-2 justify-content-center" style="margin-left:20px;">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Create') }}
            </button>
        </div>
        </div>
    </form>
    </div>
    </div>
    {{-- create products --}}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection