@extends('layouts.app')

@section('title', 'Welcome page')

@section('content')
    <div class="mt-5 col-5 mx-auto">
        <h5 class="text-info">Задание</h5>
        <ul class="">
            <li>
                Стек - laravel, mysql
            </li>
            <li>
                Создать контроллер для вывода страницы с формой обратной связи. (Имя, телефон, Email)
            </li>
            <li>
                Данные формы отправляются через Ajax в отдельный контроллер где обрабатываются и сохраняются. (Валидация на
                обязательность полей Имя и телефон)
            </li>
            <li>
                Данные сохраняются в таблицу feedbacks и отправляются на почту
            </li>
            <li>
                Таблица создается через миграции. Поля таблицы
                id, name, phone, email, created_at, updated_at
            </li>
            <li>
                Данные сохраняются в таблицу feedbacks и отправляются на почту
            </li>
            <li>
                Для разметки страницы можно использовать bootstrap, для отправки данных и обработки ответа сервера - js
                библиотеку Jquery
            </li>
        </ul>
        <hr>
        <h6>Свой отзыв уже оставили:</h6>
        @if( count($feedbacks) > 0 )
            <ul>
            @foreach($feedbacks as $fb)
                <li class="list-unstyled">
                    <span>{{$loop->iteration}}) </span><span class="fst-italic">{{ $fb->name }}</span>
                </li>
            @endforeach
            </ul>
        @else
            <p class="fst-italic"> ...пока никто </p>
        @endif
    </div>
@endsection
