<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Posting App Laravel</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href="" class="p-3">Home</a></li>
            <li><a href="" class="p-3">Dashboard</a></li>
            <li><a href="" class="p-3">Posts</a></li>
        </ul>

        <ul class="flex items-center">
            <li><a href="" class="p-3">Mulindwa Denis</a></li>
            <li><a href="" class="p-3">Login</a></li>
            <li><a href="{{route('register')}}" class="p-3">Register</a></li>
            <li><a href="" class="p-3">Logout</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>