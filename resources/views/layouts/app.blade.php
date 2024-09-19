<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Layout</title>
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            color: #ffffff;
            display: grid;
            place-items: center;
            height: 100vh;
        }
        
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #ffffff;
            border-radius: 5px;
            margin: 10px;
            display: inline-block;
        }
        a:hover {
            background-color: #ffffff;
            color: #000000;
        }
        
        .navbar li {
            display: inline;
            margin-right: 20px;
        }
        
        
        
        

    </style>
</head>
<body style="background-color: #000000; color: #ffffff; place-items: center;">
<div class="navbar">
        <ul>
            <li><a href="{{ route('songs.index') }}">Songs</a></li>
            <li><a href="{{ route('songs.create') }}">Nieuwe Song</a></li>
            
        </ul>
    </div>
    <div style=" display: grid; place-items: center;">
       @yield('content')
    </div>
</body>
</html>
