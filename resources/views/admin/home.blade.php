<x-app-layout>
    <h1>this is admin dashboard</h1>
</x-app-layout>
@extends('layouts.admin')
@section('content')
<div class="card" style="padding-top:50px">
    <div class="card-body">
        <a href="{{ url('users') }}" >Click Here To See Users List
    
        </a>
        
    </div>
</div>

@endsection