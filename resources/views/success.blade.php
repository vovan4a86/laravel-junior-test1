@extends('layouts.app')

@section('title', 'Feedback added!')

@section('content')
    <div class="mt-5 col-3 mx-auto alert alert-primary" role="alert">
        Отзыв успешно добавлен!
    </div>
    <div class="col-3 mx-auto text-center">
        <a href="/" class="btn btn-info">На главную</a>
    </div>
@endsection
