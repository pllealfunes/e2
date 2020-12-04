<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title')</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/mysteryanimal.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    @yield('head')

</head>
<body>

    <header>
        <h1>Mystery Animal <i class="fas fa-paw"> </i></h1>
    </header>

    @yield('body')
    <script src="https://kit.fontawesome.com/1707487087.js" crossorigin="anonymous"></script>
</body>
</html>
