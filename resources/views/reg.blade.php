<!doctype html>
<html lang="en">
<head>
    <link  href="{{ asset('images/1.png')   }}" rel="shortcut icon">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
@include('nav')
<div class="container shadow-lg p-3 mb-5 bg-body rounded d-flex justify-content-center  mt-5 ">
    <form action="{{url("/customer")}}" enctype="multipart/form-data" method="post" class="">
        @csrf
        <input type="text"name="name" placeholder="Name" ><br>
        <div class="text-danger">  @error('name')
            {{$message}}

            @enderror</div>
        <br>
        <input type="email"name="email" placeholder="Email" ><br>
        <div class="text-danger">  @error('email')
            {{$message}}

            @enderror</div>
        <br>
        <br>
        <input type="text"name="number" placeholder="Phone Number"><br>
        <div class="text-danger">  @error('number')
            {{$message}}

            @enderror</div>
        <br>
        <br>
        <input type="password"name="password" placeholder="Password"><br>
        <div class="text-danger">  @error('password')
            {{$message}}

            @enderror</div>
        <br>
        <label >Dept</label>
            <select name="dept_id" id="" >
                @foreach( $dept    as  $d)


                <option value="{{$d->id}}">{{$d->id}}</option>
                @endforeach
            </select>

        <div class="text-danger">  @error('dept_id')
            {{$message}}

            @enderror</div>



      <br>
{{--     --}}{{--       <br>--}}
{{--            <label >Male</label>--}}
{{--        <input type="checkbox"name="gender" placeholder="Gender"><br>--}}
{{--            <label >Female</label>--}}
        <input type="Text"name="gender" placeholder="Gender M or F" ><br>
        <div class="bg-danger">  @error('gender')
            {{$message}}

            @enderror</div>
        <br>
        <br>


        <lavel>file</lavel>
        <input type="file" name="image" >
        <div class="text-danger">
            @error('image') {{$message}} @enderror
        </div>

        <button  class="btn btn-success ms-5 mt-2 px-5 "> <span class="spinner-border text-primary ">Submit</span></button>
    </form>
</div>




</body>
</html>
