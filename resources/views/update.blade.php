@include('nav')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>

<form action="{{url('/update_action')}}/{{$customers->id}}" method="post">
    @csrf
    <input type="text"name="name" placeholder="Name" value="{{$customers->name}}"><br>
    @error('name')
    {{$message}}

    @enderror
    <br>
    <input type="email"name="email" placeholder="Email" value="{{$customers->email}}"><br>
    @error('email') {{$message}} @enderror
    <br>
    <input type="number"name="number" placeholder="Phone Number" value="{{$customers->phone_number}}"><br>
    @error('number') {{$message}} @enderror
{{--    <br>--}}
{{--    <input type="password"name="password" placeholder="Password"><br>--}}
{{--    @error('password') {{$message}} @enderror--}}
    <br>
    {{--    <label >Male</label>--}}
    {{--<input type="checkbox"name="gender" placeholder="Gender"><br>--}}
    {{--    <label >Female</label>--}}
    <input type="Text"name="gender" placeholder="Gender M or F" value="{{$customers->gender}}"><br>
    @error('gender') {{$message}} @enderror
    <br>
    <input type="submit"name="" placeholder="">
</form>




</body>
</html>
