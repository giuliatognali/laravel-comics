<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title')</title>
    @vite('resources/js/app.js')
</head>
@include('partials.header')

<body>
    @yield('page.main')
</body>

@include('partials.footer')

</html>
