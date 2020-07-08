@extends('layouts.adminLayout.adminDesign')
@section('title')Show Category @endsection
@section('content')
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
        <a href="#" class="current">Show Category</a> </div>
    <h1>Category</h1>
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                <h5>{{ $category->category_name }} Category View</h5>
              </div>
              <div class="widget-content nopadding">
                <div class="card">
                    <div class="card-header text-center"></div>
                    <div class="card-body mt-2">
                        <a href="{{ url('categories/') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('categories/' . $category->id . '/edit') }}" title="Edit category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        @if(Auth::user()->hasRole('admin'))
                        <form method="DELETE" action="{{ url('categories/'. $category->id) }}" role="form" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete category" onclick= "return confirm('Confirm delete?')">
                                    <i class="fa fa-trash-o" aria-hidden="true"> {{ __('Delete') }} </i>
                            </button>
                        </form>
                        @endif
                        <br/>
                        <br/>
    
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $category->id }}</td>
                                    </tr>
                                    <tr><th> Category Name </th><td> {{ $category->category_name }} </td></tr>
                                    <tr><th> Description </th><td> {{ $category->description }} </td></tr>
                                    <tr><th> Category URL </th><td> {{ $category->category_url }} </td></tr>
                                    <tr>
                                        <th> Status </th>
                                        @if ($category->status == 0)
                                            <td> {{ __('Not active')}} </td>
                                        @else
                                        <td> {{ __('Active')}} </td>
                                        @endif
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
    
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection