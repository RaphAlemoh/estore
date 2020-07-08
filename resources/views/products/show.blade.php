@extends('layouts.backend')
@section('title', 'Show Fruit')
@section('content')
<div class="container">
        <h1 class="mt-2">Dashboard</h1>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item active">Show Fruit</li>
        </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"> <b> {{ $fruit->name }} </b>Fruit</div>
                <div class="card-body">
                    <a href="{{ url('fruits/') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('fruits/' . $fruit->id . '/edit') }}" title="Edit Fruit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    @if(Auth::user()->hasRole('admin'))
                    <form method="DELETE" action="{{ url('fruits/'. $fruit->id) }}" role="form" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Fruit" onclick= "return confirm('Confirm delete?')">
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
                                    <th>ID</th><td>{{ $fruit->id }}</td>
                                </tr>
                                <tr><th> Name </th><td> {{ $fruit->name }} </td></tr>
                                <tr><th> Description </th><td> {{ $fruit->description }} </td></tr>
                                <tr><th> Status </th><td> {{ $fruit->status }} </td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
