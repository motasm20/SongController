<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Layout</title>
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <style>
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

    </style>
</head>
<body style="background-color: #000000; color: #ffffff; place-items: center;">
    <div style=" display: grid; place-items: center;">
       @yield('content') <!-- om de content van de andere pagina's te kunnen injecten -->
    </div>
</body>
</html>
