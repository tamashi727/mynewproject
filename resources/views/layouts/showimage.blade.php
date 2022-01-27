@extends('layouts.admin')
@section('content')
<div class="card" style="padding-top:50px">
    <div class="card-body">
        <div class="container-fluid page-body-wrapper">
            <h1>Show Image</h1>
            <div class="container" align="center" style="padding-top:200px">
                <table>
                    <tr style="background-color: rgb(222, 230, 182)">
                        <td style="padding:20px;border-color:darkslategrey">Image</td>
                        <td style="padding:20px;border-color: darkslategrey">Action</td>

                    </tr>
                    @foreach($bannerimage as $bannerimages)
                    <tr style="background-color:gray;align:center;">
                        <td>
                            <img src="/bannerimages/{{ $bannerimages->image }}" height="200px" width="200px">

                        </td>
                        <td>
                            <a class="btn btn-danger" style="padding:3px;margin:10px" href="{{ url('deleteimage',$bannerimages->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
        
    </div>
</div>

@endsection