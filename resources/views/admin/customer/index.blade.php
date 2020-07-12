  @extends('layouts.admin')
@section('content')
    
            <a href="{{route('customer.create')}}" class="btn btn-success btn-sm mb-2">Add New Customer</a>
            <table class="table table-striped " id="customer">
                <tr>
                    <td>No</td> 
                    <td>Name</td>
                    <td>Member ID</td>
                    <td>Email</td>
                    <td>Phone No.</td> 
                    <td>Action</td>
                </tr>
                @php $i=1; @endphp
                @foreach($customers as $customer)
                    <tr>
                        <td>@php echo $i;$i++; @endphp</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->memberid}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone}}</td>
                        <td class="w-25">
                            <a href="{{route('customer.edit',$customer->id)}}" class="badge badge-warning py-1 px-2 ">Edit</a>
                            <form action="{{route('customer.destroy',$customer->id)}}" method="post" class="form-inline">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" name="delete" value="Delete" class="badgee badge-danger py-1 px-2 ">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
       
@endsection
