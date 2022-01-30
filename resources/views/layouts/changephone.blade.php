
@extends('layouts.admin')
@section('content')
<div class="card" style="padding-top:50px">
    <div class="card-body">
        <div class="container-fluid page-body-wrapper">
            
            <h1>Add Phone number,Email and Address</h1>
            <div class="container" align="center" atyle="padding-top:200px">
                @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}


                </div>
                @endif

                <form action="{{ url('uploadphone') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div style="padding:15px">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="email">

                    
                    </div>
                    <div style="padding:15px">
                        <label>Phone</label>
                        <input type="phone" name="phone" placeholder="phone">

                    
                    </div>
                    <div style="padding:15px">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="address">

                    
                    </div>
                    
                    <div style="padding:15px">
                        
                        <input type="submit" style="background-color: dodgerblue" class="btn btn-success">

                    
                    </div>
      

                </form>



            </div>
        </div>
        
    </div>
</div>

@endsection