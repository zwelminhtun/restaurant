@extends('layouts.admin')
@section('content')
   
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-3 px-2 ">
                        <div class="py-4 px-2" style="border-top-left-radius:15px; border-bottom-right-radius:15px;box-shadow:10px 10px 15px gray;background-image: linear-gradient(to right,#af0000,rgb(255, 7, 0));height: 100%;">
                            <span class="h5 float-left pt-2">User</span>
                            <span class="h2 float-right pb-3">{{$usercount}}</span>
                        </div>
                       
                    </div>
                    <div class="col-md-3 px-2 ">
                        <div class="py-4 px-2 " style="border-top-left-radius:15px; border-bottom-right-radius:15px;box-shadow:10px 10px 15px gray;background-image: linear-gradient(to right,#ab47bc,rgb(132, 0, 167));height: 100%;">
                            <span class="h5 float-left pt-2">Menu</span>
                            <span class="h2 float-right pb-3">{{$menucount}}</span>
                        </div>
                       
                    </div>
                    <div class="col-md-3 px-2 ">
                        <div class="py-4 px-2 " style="border-top-left-radius:15px; border-bottom-right-radius:15px;box-shadow:10px 10px 15px gray;background-image: linear-gradient(to right, #ff8100, rgb(189, 52, 0));height: 100%;">
                            <span class="h5 float-left pt-2">Blog</span>
                            <span class="h2 float-right pb-3">{{$blogcount}}</span>
                        </div>
                       
                    </div>
                    <div class="col-md-3 px-2 ">
                        <div class="py-4 px-2 " style="border-top-left-radius:15px; border-bottom-right-radius:15px;box-shadow:10px 10px 15px gray;background-image: linear-gradient(to right,#2bc16b,#006129);height: 100%;">
                            <span class="h5 float-left pt-2">Customer</span>
                            <span class="h2 float-right pb-3">{{$customercount}}</span>
                        </div>
                       
                    </div>
                   
                 </div>
            </div>
            <div class="mt-3">
                <table class="table table-striped ">
                <tr>
                    <td>No</td> 
                    <td>Title</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
                @php $i=1; @endphp
                @foreach($blogs as $blog)
                    <tr>
                        <td>@php echo $i;$i++; @endphp</td>
                        <td>{{$blog->title}}</td>
                        <td>{{str_limit($blog->description,50,'........')}}</td>
                        <td><img src="{{asset($blog->image)}}" width="70" height="70"></td>
                        <td class="w-25">
                            <a href="{{route('blog.edit',$blog->id)}}" class="badge badge-warning py-1 px-2 ">Edit</a>
                            <form action="{{route('blog.destroy',$blog->id)}}" method="post" class="form-inline">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" name="delete" value="Delete" class="badgee badge-danger py-1 px-2 ">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            </div>
      
@endsection
