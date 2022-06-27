<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class MainController extends Controller {

    /**
     * Показать форму для создания новой записи.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create() {
        return view('feedback');
    }

    /**
     * Добавление новой записи в БД.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        if($validated) {
            Feedback::create($request->all());
            $name = $request->get('name');
            mail('vovan4a86@mail.ru', 'У вас новый отзыв', "Пользователь $name оставил(а) новый отзыв.");
            return response()->json( 'Created', 201);
        }
    }
}
