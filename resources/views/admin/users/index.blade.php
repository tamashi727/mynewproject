@extends('layouts.admin')
@section('content')
<div class="card">

    <div class="card-header">
        <h4>Registered Users</h4>
        <hr>


    </div>
    <div class="card-body">
        @if(session()->has('message'))
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}


        </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>view </th>
                    <th>Delete</th>
                </tr>


            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td>{{ $item->id  }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>
                        <a href="{{ url('view-users/'.$item->id) }}" class="btn btn-primary btn-sm">View</a>
                    </td>
                    <td>
                        <a href="{{ url('deleteusers/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>         
    </div>
</div>
@endsection