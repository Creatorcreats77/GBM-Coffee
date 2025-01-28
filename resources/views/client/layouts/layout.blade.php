<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://gujurly.edu.tm/img/favicon.ico">
    <title>GBM Coffee</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body >
@include('client.app.navbar')
<main class="h-100 pt-5">
    @yield('showItem')
    @yield('show')
    @yield('create')
    @yield('qrGenerate')
</main>
@include('client.app.footer')
</body>
</html>
