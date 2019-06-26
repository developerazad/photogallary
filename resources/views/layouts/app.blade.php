<!DOCTYPE html>
<html>
<head>
    <title>Photo Gallary</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

</head>

<body>
@include('inc.navbar')
<div class="container">
    @include('inc.messages')
    @yield('content')
</div>

<div id="footer">
    <p class="text-center">Copy &copy; 2019, Developerazad</p>
</div>
</body>
</html>