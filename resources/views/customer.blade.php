<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<style>
    .b{
 border: 1px  solid black;

    }
</style>
<body>
@include('nav')
<div class="container shadow-lg p-3 mb-5 bg-body rounded my-3a">
<h2>data </h2>
<br>


<table class="table" >
    <thead class="b">
    <a href="{{url('/reg')}}"><button class="btn btn-warning m-2">Add</button></a>
    <th >Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Gender</th>
    <th>Status</th>
    <th>Date</th>
    <th>Image</th>
    <th>Action</th>
    </thead>
    <tbody class="b">
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
            <img src="{{url('uploads/1655234242tv.png')}}" alt=""> </td>
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

    <div class=" " style="width: 10px; height: 10px;">
        {{$customers->links() }}
    </div>
</div>
</body>
</html>

