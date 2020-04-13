<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Todo</title>
    <link rel="stylesheet" href="/css/app.css"></link>
</head>
<body>
    <div class="container">
    @include('includes.navbar')
    </div>
    <div class="container">
        @include('includes.msg')      
        @yield('content')
    </div>
    </body>
</html>