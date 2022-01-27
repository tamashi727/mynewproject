
@extends('layouts.admin')
@section('content')
<div class="card" style="padding-top:50px">
    <div class="card-body">
        <div class="container-fluid page-body-wrapper">
            
            <h1>Add image</h1>
            <div class="container" align="center" atyle="padding-top:200px">
                @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}


                </div>
                @endif

                <form action="{{ url('uploadimage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div style="padding:15px">
                        <label>image</label>
                        <input type="file" name="file">

                    
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