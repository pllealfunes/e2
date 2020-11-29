<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title')</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

    <header>
        <h1>Mystery Animal</h1>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>
</html>
