<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  href="{{ asset('images/1.png')   }}" rel="shortcut icon">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<style>
    .b{
 border: 10px solid crimson ;

    }
</style>
<body>
@include('nav')
<div class="container shadow-lg p-3 mb-5 bg-body rounded my-3a ">

<h2>data </h2>
<br>


    <table class="table " >
    <thead class="b bg-dark text-light">
    <a href="{{url('/reg')}}"><button class="btn btn-warning m-2 px-4 "data-bs-toggle="tooltip" data-bs-placement="top" title="Add Customer">Add</button></a>
    <th >Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Gender</th>
    <th>Status</th>
    <th>Department</th>
    <th>Image</th>
    <th>Date</th>

    <th>Action</th>
    </thead>
    <tbody class=" spinnr-border text-dark b  text-info">
    @foreach( $customers as $customer)
    <tr class="b">
        <td>  {{$customer->name}}  </td>
        <td>  {{$customer->email}} </td>

        <td> {{$customer->phone_number}}   </td>
        <td>  @if($customer->gender=='M')Male
            @else Female
            @endif
        </td>


        <td>  @if($customer->status==1)Active
            @else Inactive
            @endif
        </td>
        <td>

            @if($customer->dept_id==1)CSE
            @else BBA
            @endif

        </td>



        <td><img src="{{asset('images/'.$customer->image)}}" class=""style="width: 150px; height: 100px;" alt="">  </td>
        <td>  {{$customer->updated_at}} </td>
        <td>
            <a href="{{url('/customer/delete')}}/{{$customer->id}}">
            <button class="btn btn-danger m-1">Delete</button>
            </a>
            <a href="{{url('/update')}}/{{$customer->id}}">
            <button class="btn btn-primary m-1">Edit</button>
            </a>
        </td>

    </tr>
    @endforeach



    </tbody>


</table>

    <div class="pagination pagination-sm justify-content-center " >

    </div>
{{--    <img class="h-10 w-20" src="{{url('storage/uploads/1655234242tv.png')}}" alt="">--}}
    <img src="{{asset('images/1655917570tv.png')}}" alt="">
</div>{{$customers->links() }}
</body>
</html>

