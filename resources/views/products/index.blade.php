@extends('layouts.adminLayout.adminDesign')
@section('title', 'Product Page')
@section('content')
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
        <a href="{{ url('products') }}" class="tip-bottom">products</a> <a href="{{ url('products/create') }}" class="current">Add Product</a> </div>
      <h1>All Products</h1>
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
                        <h5>All products</h5>
                      </div>
                      <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                          <thead>
                            <tr>
                              <th>Product ID</th>
                              <th>Product Name</th>
                              <th>Product Description</th>
                              <th>Product Category</th>
                              <th>Product URL</th>
                              <th>Product status</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($products as $item)
                            <tr class="gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->product_url }}</td>
                                @if ($item->status == 0)
                                    <td> {{ __('Not active')}} </td>
                                @else
                                <td> {{ __('Active')}} </td>
                                @endif
                                <td>
                                    <a href="{{ url('products/' . $item->id ) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('products/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    @if(Auth::user()->hasRole('admin'))
                                    <form method="POST" action="{{ url('products/'. $item->id) }}" role="form" style="display:inline;">
                                     {{ method_field('DELETE') }} 
                                     @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick= "return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"> {{ __('Delete') }} </i>
                                        </button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
      </div>
    </div>
  </div>
@endsection