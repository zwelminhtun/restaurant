@extends('layouts.admin')
@section('content')
    
            <a href="{{route('menu.create')}}" class="btn btn-success btn-sm mb-2">Add New Menu</a>
            <table class="table table-striped " id="menu">
                <tr>
                    <td>No</td> 
                    <td>Name</td>
                    <td>Category</td>
                    <td>Price</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
                @php $i=1; @endphp
                @foreach($menus as $menu)
                    <tr>
                        <td>@php echo $i;$i++; @endphp</td>
                        <td>{{$menu->name}}</td>
                        <td>{{$menu->category_name}}</td>
                        <td>{{$menu->price}}</td>
                        <td><img src="{{asset($menu->image)}}" width="70" height="50"></td>
                        <td class="w-25">
                            <a href="{{route('menu.edit',$menu->id)}}" class="badge badge-warning py-1 px-2 ">Edit</a>
                            <form action="{{route('menu.destroy',$menu->id)}}" method="post" class="form-inline">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" name="delete" value="Delete" class="badgee badge-danger py-1 px-2 ">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
       
@endsection
