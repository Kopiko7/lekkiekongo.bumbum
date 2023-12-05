<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validate extends Controller
{
    public function show(Request $req)
    {

        $req->validate([
            'email' => 'required | email',
            'imie' => 'required | min: 10 | max: 20',
            'pass' => 'required |  min: 3',
        ],
        [
            'email.required' => 'Pole :attribute jest wymagane',

            'imie.required' => 'Pole :attribute jest wymagane',
            'imie.min' => 'Pole :attribute musi mieć co najmniej :min znaków',
            'imie.max' => 'Pole :attribute musi mieć co najwyżej :max znaków',

            'pass.required' => 'Pole :attribute jest wymagane',
            'pass.min' => 'Pole :attribute musi mieć :min znaków'
        ]);
        return $req->input();
    }
}
