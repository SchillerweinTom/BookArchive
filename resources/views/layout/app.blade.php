<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Books')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('book.ico') }}" type="image/x-icon">
</head>
<body class="d-flex flex-column min-vh-100 general-bk">
<header>
    <div class="container">
        @include('partial.navbar')
    </div>
</header>

<main>
    <div class="container mt-4">
        @yield('content')
    </div>
</main>
<div class="mt-4"></div>
<footer class="bg-light text-center py-4 mt-auto">
    <p>&copy; {{ date('Y') }} Book Archive by Tom Schillerwein</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb1vD6R/xm28bZrD6fo8npbD2tD5Jr59iw7W13fB9l7jztnJe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-cuI/mhJ2MpyQ2L9z5jkw0djdDDpmb72kb7QWzFn5tW0Yeg4h4jY79sQJ8tHt8iUq" crossorigin="anonymous"></script>
</body>
</html>


