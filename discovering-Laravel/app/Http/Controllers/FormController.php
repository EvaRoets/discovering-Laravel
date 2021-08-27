<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function validateForm(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        // laravel saves errors automatically in error array that you can call in html

        return view('form');


    }


}
