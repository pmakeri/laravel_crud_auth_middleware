@extends('layouts.master')

@section('content')
    

<h1> Bio Data Form </h1>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
        <strong> {{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
    </div>

    @elseif (session('warning'))
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
                    <h5 class="card-title"> Add New Biodata</h5>
                </div>
   
                <div class="card-body" >
                    <form action="{{url('/create')}}" method="POST">

                        @csrf
                        <div class="form-group"></div>
                        <table>

                            <tr>
                                <th><label for="name" class="form-label">Name:</label></th>
                                <td><input type="text" name="name" class="form form-group" required><br/></td>
                            </tr>
                            <tr>
                                <th><label for="email" class="form-label">Email:</label></th>
                                <td> <input type="text" name="email" class="form form-group" required><br></td>
                            </tr>
                            <tr>
                                <th> <label for="phone" class="form-label">Phone:</label></th>
                                <td>
                                    <input type="text" name="phone" class="form form-group" required><br/>
                                </td>
                            </tr>
                            <tr>
                                <th> <label for="address" class="form-label">Address:</label></th>
                                <td>
                                    <textarea name="address" cols="24" rows="5"></textarea><br/>
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

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" style="text-decoration: none;"  href="">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

@endsection