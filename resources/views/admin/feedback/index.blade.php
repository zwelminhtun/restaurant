  @extends('layouts.admin')
@section('content')
    
            
            <table class="table table-striped " id="customer">
                <tr>
                    <td>No</td> 
                    <td>Name</td>
                    <td>Email</td>
                    <td>Description</td> 
                    <td>Date</td>
                </tr>
                @php $i=1; @endphp
                @foreach($feedbacks as $feedback)
                    <tr>
                        <td>@php echo $i;$i++; @endphp</td>
                        <td>{{$feedback->name}}</td>
                        <td>{{$feedback->email}}</td>
                        <td>{{$feedback->description}}</td>
                        <td>{{$feedback->created_at}}</td>
                    </tr>
                @endforeach
            </table>
       
@endsection
