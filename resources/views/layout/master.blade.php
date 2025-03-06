<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','work')</title>
</head>
<body>
    @include('layout.nav')


    @yield('content',"no content")

    @section('header')
        <p>header</p>
    @show

    @section('footer')
        <p>footer</p>
    @show

  {{--  @show is important to display the content of the - section - comment --}} 


</body>
</html>