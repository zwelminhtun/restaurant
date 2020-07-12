@extends('layouts.admin')
@section('content')
    
            <a href="{{route('category.create')}}" class="btn btn-success btn-sm mb-2">Add New Category</a>
            <table class="table table-striped datatable">
                <tr>
                    <td>No</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
                @php $i=1; @endphp
                @foreach($categories as $c)
                    <tr>
                        <td>@php echo $i;$i++; @endphp</td>
                        <td>{{$c->category}}</td>
                        <td class="w-25">
                            <a href="{{route('category.edit',$c->id)}}" class="badge badge-warning py-1 px-2 ">Edit</a>
                            <form action="{{route('category.destroy',$c->id)}}" method="post" class="form-inline">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" name="delete" value="Delete" class="badgee badge-danger py-1 px-2 ">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
       
@endsection
