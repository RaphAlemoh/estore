@extends('layouts.adminLayout.adminDesign')
@section('title')Settings Page @endsection
@section('content')
<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
        <a href="{{ route('admin.settings') }}" class="current">Settings</a> </div>
      <h1>Admin Settings</h1>
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
                <h5>Update Password</h5>
              </div>
              <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="{{ url('/admin/update-pwd')}}" name="password_validate" id="password_validate" novalidate="novalidate">  
                  @csrf
                  <div class="control-group">
                        <label class="control-label">Current Password</label>
                        <div class="controls">
                          <input type="password" name="current_pwd" id="current_pwd" />
                          <span id="chkPwd"></span>
                        </div>
                    </div>

                  <div class="control-group">
                    <label class="control-label" for="password">New Password</label>
                    <div class="controls">
                      <input type="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="password_confirm">Confirm Password</label>
                    <div class="controls">
                      <input id="password_confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                  </div>

                  <div class="form-actions">
                    <input type="submit" value="Update Password" class="btn btn-success">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection