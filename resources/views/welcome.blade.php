<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    </head>
    <body >
    <form action="{{url('/')}}/demo"method="post">
@csrf
        @php
  //       print_r($errors ->all());
        @endphp
        <x-input type="text" name="name" label="Name"/>

        @error('name')
        {{$message}}

        @enderror <br>
        <x-input type="email" name="email" label="Email"/>

        @error('email')
        {{$message}}

        @enderror <br>
        <x-input type="password" name="password" label="Password"/>

        @error('password')
        {{$message}}

        @enderror  <br>



 <br>
        <input type="submit">
    </form>
    </body>
</html>

