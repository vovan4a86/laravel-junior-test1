<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="py-5 d-flex justify-content-around align-items-center">
            <div class="logo">
                Feedbacks
            </div>
            <div class="menu">
                <a href="/">Главная</a>
                <a href="/feedbacks/create">Оставить отзыв</a>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <h1 class="text-info">Feedbacks all</h1>

</div>

</body>
</html>
