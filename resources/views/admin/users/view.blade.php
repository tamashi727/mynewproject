@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
<div class="card">

    <div class="card-header">
        <h4>User Details</h4>
        <hr>


    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <label for="name">name</label>
                <div class="p-2 border">
                    {{ $users->name }}
                </div>
                
            </div>
            <div class="col-md-4">
                <label for="email">email</label>
                <div class="p-2 border">
                    {{ $users->email }}
                </div>
                
            </div>
            <div class="col-md-4">
                <label for="phone">phone</label>
                <div class="p-2 border">
                    {{ $users->phone }}
                </div>
                
            </div>
            <div class="col-md-4">
                <label for="address">address</label>
                <div class="p-2 border">
                    {{ $users->address}}
                </div>
                
            </div>
        </div>   
    </div>
</div>
</div>
</div>
</div>
@endsection