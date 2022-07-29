@extends('layouts.master')

@section('content')
    

<h1> UPDATE FORM </h1>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
        <strong> {{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
    </div>

    @elseif (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
        <strong> {{session('error')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
    @endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" >
                <div class="card-header">
                    <h5 class="card-title"> Update Biodata</h5>
                </div>



               
                <div class="card-body" >
                    <form action="{{url('update/'.$edit->id)}}" method="POST">
                        @csrf
                        <div class="form-group"></div>
                        <table>

                            <tr>
                                <th><label for="name" class="form-label">Name:</label></th>
                                <input type="hidden" name="id" value="{{$edit->id}}">
                                <td><input type="text" name="name" value="{{$edit->name}}" class="form form-group"><br/></td>
                            </tr>
                            <tr>
                                <th><label for="email" class="form-label">Email:</label></th>
                                <td> <input type="text" name="email" value="{{$edit->email}}" class="form form-group"><br></td>
                            </tr>
                            <tr>
                                <th> <label for="phone" class="form-label">Phone:</label></th>
                                <td>
                                    <input type="text" name="phone" value="{{$edit->phone}}" class="form form-group"><br/>
                                </td>
                            </tr>
                            <tr>
                                <th> <label for="address" class="form-label">Address:</label></th>
                                <td>
                                    <textarea name="address"  cols="24" rows="5">{{$edit->address}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <th><input type="submit" value="Submit" class="btn btn-primary"></th>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--footer Section-->
@include('layouts.footer')

@endsection