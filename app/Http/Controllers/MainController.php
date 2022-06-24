<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function index() {
        return view('fball');
    }

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

            mail('admin@mail.ru', 'submit ok', 'Feedback added!');
            return response()->json( 'created', 201);
        }
    }
}
