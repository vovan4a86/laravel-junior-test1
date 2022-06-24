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
    <div class="mt-3 col-5 mx-auto">
        <form method="post" class="form-control p-3">
            <h4 class="mb-3">Форма обратной связи</h4>
            @csrf
            <div class="my-2">
                <label class="d-block">Имя*</label>
                <input type="text" required name="name" class="form-control" placeholder="Иван">
            </div>
            <div class="my-2">
                <label class="d-block">Телефон*</label>
                <input type="tel" required name="phone" class="form-control" placeholder="+79995552233">
            </div>
            <div class="my-2">
                <label class="d-block">Email</label>
                <input type="email" name="email" class="form-control" placeholder="ivan@mail.ru">
            </div>
            <button class="btn btn-success mt-3" id="send-btn">Отправить</button>
            <label class="error"></label>
        </form>
    </div>
</div>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
<script>
    const form = document.querySelector('form')
    const sendBtn = document.querySelector('.btn.btn-success')
    const error = document.querySelector('.error')

    sendBtn.addEventListener('click', e => {
        e.preventDefault();
        fetch('http://127.0.0.1:8000/feedbacks', {
            method: "POST",
            body: new FormData(form)
        })
            .then(res => {
                if(!res.ok) {
                    error.innerHTML = 'Ошибка!';
                } else {
                    window.location.href = '/'
                }
            })

    })
</script>
</body>
</html>
