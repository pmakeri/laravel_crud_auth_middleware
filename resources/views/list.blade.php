@extends('layouts.master')


@section('content')
<div class="bigwarapper" tyle="background-image:url(public/images/ppp.ng)">
    <div>
         <h1 style="padding: 5px; float: left" align="center">Bio Data Record</h1>

         {{-- @if(Route::has('login'))

         @auth
         <h4  class="auth" style="float: right; margin-right:15px; color:green;"><span><b><i>Welcome:</i></b></span>&nbsp;&nbsp;&nbsp;{{auth()->user()->name}}</h4>
         @endauth
         @endif --}}
    </div>
   


    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="clear: both;"> 
        <strong> {{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
    </div>
    @elseif (session('warning'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="clear: both;"> 
        <strong> {{session('warning')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
    </div>

    @endif



   <div style="text-align: right; margin-right:100px; padding:5px; clear: both; "> 
        <a href="{{url('form')}}" class="btn" id="btn" style="background-color: white; border-color:green; color:green; margin-right:4%;"><span > Add Record</span> </a>
   </div>

    <table class="table table-hover" align="center" style="width: 100%;  width: 1%;
    white-space: nowrap; ">
        <thead>
            <tr style="border-bottom: 1px solid black;">
                <th scope="col">S/NO</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">PHONE</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">UPDATE</th>
                <th scope="col">DELETE</th>
            </tr>
        </thead>
    
                <tbody>
                    @foreach ($show as $item)
                        
                    <tr>
                        <td>                          
                            </td>

                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->address}}</td>
                            <td>
                                <a href="{{url('edit/'.$item->id .'/biodata')}}" class="btn btn-success" id="btn" style="background-color: white; border-color:green; color:green; " > Edit</a>
                            </td>
                            <td>
                                <a href="{{url('delete/'.$item->id .'/biodata')}}" class="btn btn-danger" id="btn" style="background-color: white; border-color:red; color:red; "  > Delete </a>
                            </td>
                    </tr>
                    
                    @endforeach
                </tbody>
      
        
    </table>
</div>
<!--footer Section-->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(15, 15, 15, 0.13);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" style="text-decoration: none;"  href="#">CodePlateau</a>
  </div>
  <!-- Copyright -->

@endsection
    

