@extends('layouts.adminLayout.adminDesign')
@section('title')Edit Category @endsection
@section('content')
<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{ url('/') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
    <a href="#" class="current">Edit Categories</a> </div>
    <h1>Edit Category</h1>
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
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                <h5>Edit Category</h5>
              </div>
              <div class="widget-content nopadding">
                @forelse ($category as $item)
              <form method="POST" action="{{ url('categories/'.$item->id )}}" class="form-horizontal" role="form" name="Edit_category" id="Edit_category" novalidate="novalidate">  
                {{method_field('PATCH') }}
                @csrf
                  <div class="control-group">
                        <label class="control-label">Category Name</label>
                        <div class="controls">
                          <input type="text" name="category_name" id="category_name" value="{{ $item->category_name }}" required />
                          <span id="category__name_error"></span>
                        </div>
                    </div>

                  <div class="control-group">
                    <label class="control-label" for="description">Description</label>
                    <div class="controls">
                      <input id="description" type="text" value="{{ $item->description }}" class="form-control @error('description') is-invalid @enderror" name="description" required/>
                      <span id="category_descript_error"></span>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="category_url">URL</label>
                    <div class="controls">
                      <input id="category_url" type="text" value="{{ $item->category_url }}" class="form-control" name="category_url" required />
                      <span id="category_url_error"></span>
                    </div>
                  </div>

                  {{-- <div class="control-group">
                    <label class="control-label" for="category_url">Category Image</label>
                    <div class="controls">
                      <input type="file" class="form-control" name="category_image" id="category_image">
                    </div> 
                  </div> --}}

                  <div class="form-actions">
                    <input type="submit" value="Update Category" class="btn btn-success">
                  </div>

                </form>
                @empty
                      <div class="text text-center">No data available to edit!</div>
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection