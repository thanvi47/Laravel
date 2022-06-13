<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
@include('nav')
<form action="/customer" enctype="multipart/form-data " method="post">
    @csrf
<input type="text"name="name" placeholder="Name" ><br>
    @error('name')
    {{$message}}

    @enderror
    <br>
<input type="email"name="email" placeholder="Email" ><br>
    @error('email') {{$message}} @enderror
    <br>
<input type="number"name="number" placeholder="Phone Number"><br>
    @error('number') {{$message}} @enderror
    <br>
<input type="password"name="password" placeholder="Password"><br>
    @error('password') {{$message}} @enderror
    <br>
{{--    <label >Male</label>--}}
{{--<input type="checkbox"name="gender" placeholder="Gender"><br>--}}
{{--    <label >Female</label>--}}
<input type="Text"name="gender" placeholder="Gender M or F" ><br>
    @error('gender') {{$message}} @enderror
    <br>


<lavel>file</lavel>
    <input type="file" name="image" >


<input type="submit"name="" placeholder="">
</form>



</body>
</html>
