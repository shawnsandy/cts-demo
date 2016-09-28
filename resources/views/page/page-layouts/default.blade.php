<!DOCTYPE html>
<html>
<head>

    <title>Laravel</title>

    @stack('styles')
    <link href="/css/pagekit/fonts/material-icons/style.css" rel="stylesheet">
    <link href="/css/pagekit/fonts/social/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/page/app.css">

</head>

<body>

@yield('page')

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

@stack('scripts')
</html>
