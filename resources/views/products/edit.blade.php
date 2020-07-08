@extends('layouts.backend')
@section('title', 'Edit Fruit')
@section('content')
<div class="container">
        <h1 class="mt-2">Dashboard</h1>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item active">Edit Fruit</li>
        </ol>
  <div class="row justify-content-center">
        @if (session('alert'))
            <h3 class="alert alert-success text-center" role="alert">
                {{ session('alert') }}
            </h3>
        @endif 
    <div class="col-md-12">
          <div class="card">
              <div class="card-header text-center"><b> {{ __('Edit Fruit') }} </b></div>
              <div class="card-body">
                      <a href="{{ url('/fruits') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                      <br />
                      <br />
                      @if ($errors->any())
                          <ul class="alert alert-danger">
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      @endif
                  <form method="POST" action="{{ url('fruits/'.$fruit->id) }}" role="form" enctype="multipart/form-data">
                    {{method_field('PATCH') }}
                      @csrf
                      <div class="form-row">
                          <div class="form-group col-md-4">
                              <label for="name">{{ __('Fruit Name') }}</label>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $fruit->name }}" required>
                              @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="form-group col-md-4">
                              <label for="family">{{ __('Family') }}</label>
                              <input id="family" type="text" class="form-control{{ $errors->has('family') ? ' is-invalid' : '' }}" name="family" value="{{ $fruit->family }}" required>
                              @if ($errors->has('family'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('family') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="form-group col-md-4">
                            <label for="carbonhydrates">{{ __('Carbonhydrates') }}</label>
                            <input id="carbonhydrates" type="text" class="form-control{{ $errors->has('carbonhydrates') ? ' is-invalid' : '' }}" name="carbonhydrates" value="{{ $fruit->carbonhydrates }}" required>
                            @if ($errors->has('carbonhydrates'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('carbonhydrates') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>


                      <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="fats">{{ __('Fats') }}</label>
                            <input id="fats" type="text" class="form-control{{ $errors->has('fats') ? ' is-invalid' : '' }}" name="fats" value="{{ $fruit->fats }}">
                            @if ($errors->has('fats'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fats') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                          <label for="protein">{{ __('Protein') }}</label>
                          <input id="protein" type="text" class="form-control{{ $errors->has('protein') ? ' is-invalid' : '' }}" name="protein" value="{{ $fruit->protein }}">
                          @if ($errors->has('protein'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('protein') }}</strong>
                              </span>
                          @endif
                      </div>

                      <div class="form-group col-md-4">
                        <label for="calories">{{ __('Calories') }}</label>
                        <input id="calories" type="text" class="form-control{{ $errors->has('calories') ? ' is-invalid' : '' }}" name="calories" value="{{ $fruit->calories }}" required>
                        @if ($errors->has('calories'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('calories') }}</strong>
                            </span>
                        @endif
                    </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="sugar">{{ __('Sugar') }}</label>
                            <input id="sugar" type="text" class="form-control{{ $errors->has('sugar') ? ' is-invalid' : '' }}" name="sugar" value="{{ $fruit->sugar }}" required>
                            @if ($errors->has('sugar'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('sugar') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                            <label for="image">{{ __('Image') }}</label>
                            <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" id="image" name="image" value="{{ old('image') }}">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-4">
                          <label for="description">{{ __('Description') }}</label>
                          <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $fruit->description }}">
                          @if ($errors->has('description'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('description') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Update') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
