 @extends('layouts.admin')
@section('content')
    
            <a href="{{route('user.create')}}" class="btn btn-success btn-sm mb-2">Add New User</a>
            <table class="table table-striped datatable">
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td> 
                    <td>Action</td>
                </tr>
                @php $i=1; @endphp
                @foreach($users as $user)
                    <tr>
                        <td>@php echo $i;$i++; @endphp</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="w-25">
                            <a href="{{route('user.edit',$user->id)}}" class="badge badge-warning py-1 px-2 ">Edit</a>
                            <form action="{{route('user.destroy',$user->id)}}" method="post" class="form-inline">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" name="delete" value="Delete" class="badgee badge-danger py-1 px-2 ">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
       
@endsection
