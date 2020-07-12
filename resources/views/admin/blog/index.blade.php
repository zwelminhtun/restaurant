@extends('layouts.admin')
@section('content')
    
            <a href="{{route('blog.create')}}" class="btn btn-success btn-sm mb-2">Add New Blog</a>
            <table class="table table-striped datatable">
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
       
@endsection
