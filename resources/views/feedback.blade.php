@extends('layouts.app')

@section('title', 'Create feedback')

@section('content')
    <div class="mt-5 col-5 mx-auto">
        <form method="post" class="form-control p-3">
            <h4 class="mb-3">Форма обратной связи</h4>
            @csrf
            <div class="my-2">
                <label class="d-block">Имя<sup class="text-danger">*</sup></label>
                <input type="text" required name="name" id="name" class="name form-control" placeholder="Иван">
            </div>
            <div class="my-2">
                <label class="d-block">Телефон<sup class="text-danger">*</sup></label>
                <input type="tel" required name="phone" id="phone" class="phone form-control" placeholder="+79995552233">
            </div>
            <div class="my-2">
                <label class="d-block">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="ivan@mail.ru">
            </div>
            <button class="btn btn-success mt-3" id="send-btn">Отправить</button>
            <label class="error d-block mt-2 text-danger small"></label>
        </form>
    </div>
@endsection


