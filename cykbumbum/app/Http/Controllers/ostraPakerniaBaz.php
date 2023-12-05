<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\View\View;


class ostraPakerniaBaz extends Controller
{
    public function show(){
        // return DB::select('select*from users');
        return DB::table('users') 
        ->where('name', 'Kopiczko')
        ->get();
    }

    public function index(): View
    {
        $users = DB::select('select * from users where name = ?', ['Kopiczko']);
        return view('showusers' , ['users' => $users]);
    }
}
