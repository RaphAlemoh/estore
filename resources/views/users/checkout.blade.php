@extends('layouts.app')
@section('title', 'Checkout Page')
@section('content')   
<div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-4 col-sm-offset-3">
        <h3 class="text-center">Checkout</h3>
        <hr>
        <h4> Your Cart Total: <span class="badge badge-success" >#{{  $total }}</span></h4>
        <form action="{{ route('checkout') }}" method="post">
            @csrf
            @guest    
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Name</label>
                        <input class="form-control py-4" id="inputFirstName" name="name" type="text" placeholder="Enter full name" required></div>
                </div>
                <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1" for="inputLastName">Phone</label>
                        <input class="form-control py-4" id="phone" name="phone" type="text" placeholder="Enter phone" required></div>
                </div>
            </div>
            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label>
                <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
            </div>
        @else
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="inputFirstName">Name</label>
                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter full name" disabled value="{{ Auth::user()->name }}"/></div>
            </div>
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="inputLastName">Phone</label>
                    <input class="form-control py-4" id="phone" type="text" placeholder="Enter phone" disabled value="{{ __('090875975') }}" /></div>
            </div>
        </div>
        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label>
            <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp"  disabled value="{{ Auth::user()->email }}" />
        </div>
        @endguest
        <div class="form-group"><label class="small mb-1" for="Address">Address</label>
            <input class="form-control py-4" id="Address" name="address" type="text" placeholder="Enter address" required></div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="City">City</label>
                    <input class="form-control py-4" id="city" name="city" type="text" placeholder="Enter city" required></div>
            </div>
            <div class="col-md-6">
                <div class="form-group"><label class="small mb-1" for="state">State</label>
                    <input class="form-control py-4" id="state" name="state" type="text" placeholder="Enter state" required></div>
            </div>
        </div>
    <div class="form-group mt-4 mb-0 text-center"><button class="btn btn-success shadow-lg border-0 rounded" type="submit" >Pay Now</a></button>
    </div>
    </form>
    </div>
</div>
</div>
@endsection
@section('footer')
@include('partials.__footer')       
@endsection