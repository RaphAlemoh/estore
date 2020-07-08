@extends('layouts.adminLayout.adminDesign')
@section('title')Category Page @endsection
@section('content')
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
        <a href="{{ url('categories') }}" class="tip-bottom">Categories</a> <a href="{{ url('categories/create') }}" class="current">Add Category</a> </div>
      <h1>All Categories</h1>
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
                        <h5>All Categories</h5>
                      </div>
                      <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                          <thead>
                            <tr>
                              <th>Category ID</th>
                              <th>Category Name</th>
                              <th>Category Description</th>
                              <th>Category URL</th>
                              <th>Category status</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($categories as $item)
                            <tr class="gradeX">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->category_url }}</td>
                                @if ($item->status == 0)
                                    <td> {{ __('Not active')}} </td>
                                @else
                                <td> {{ __('Active')}} </td>
                                @endif
                                <td>
                                    <a href="{{ url('categories/' . $item->id ) }}" title="View Category"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('categories/' . $item->id . '/edit') }}" title="Edit Category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    @if(Auth::user()->hasRole('admin'))
                                    <form method="POST" action="{{ url('categories/'. $item->id) }}" role="form" style="display:inline;">
                                     {{ method_field('DELETE') }} 
                                     @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick= "return confirm('Confirm delete?')">
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