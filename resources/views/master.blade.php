<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/')}}scss/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}scss/all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}scss/style.scss">
    <style>
        img{
            width: 100%;
            height: 300px;
        }
    </style>
    <title>@yield("title")</title>
</head>
<body>
    <ul>
        <li>
            <a href="{{route('about')}}">about</a>
        </li>
        <li>
            <a href="{{route('details')}}">details</a>
        </li>
        <li>
            <a href="{{route('contacts')}}">contact</a>
        </li>
        <li>
            <a href="{{route('mycontact')}}">contact</a>
        </li>
    </ul>
    @yield("body")

    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/')}}js/bootstrap.min.js"></script>
    <script src="{{asset('/js/bootstrap.bundle.js')}}"></script>
</body>
</html>