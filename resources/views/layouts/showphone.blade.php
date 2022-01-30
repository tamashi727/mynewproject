@extends('layouts.admin')
@section('content')
<div class="card" style="padding-top:50px">
    <div class="card-body">
        <div class="container-fluid page-body-wrapper">
            <h1>Show Image</h1>
            <div class="container" align="center" style="padding-top:200px">

                @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}


                </div>
                @endif
                
                <table>
                    <tr style="background-color: rgb(222, 230, 182)">
                        <td style="padding:20px;border-color:darkslategrey">Email</td>
                        <td style="padding:20px;border-color:darkslategrey">Phone</td>
                        <td style="padding:20px;border-color:darkslategrey">Address</td>
                        <td style="padding:20px;border-color: darkslategrey">Action</td>

                    </tr>
                    @foreach($data as $product)
                    <tr style="background-color:floralwhite;align:center;">
                        <td style="padding:20px">{{ $product->email }}</td>
                        <td style="padding:20px">{{ $product->phone }}</td>
                        <td style="padding:20px">{{ $product->address }}</td>
                        
                        
                        <td>
                            <a class="btn btn-danger" style="padding:3px;margin:10px" href="{{ url('deletephone',$product->id) }}">Delete</a>
                            
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
        
    </div>
</div>

@endsection