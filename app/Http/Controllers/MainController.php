<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function create() {
        return view('feedback');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        if($validated) {
            Feedback::create($request->all());
            $name = $request->get('name');
            mail('vovan4a86@mail.ru', 'У вас новый отзыв', "Пользователь $name оставил(а) новый отзыв.");
            return response()->json( 'feedback created', 201);
        } else {
            return response()->json( 'error', 400);
        }
    }
}
