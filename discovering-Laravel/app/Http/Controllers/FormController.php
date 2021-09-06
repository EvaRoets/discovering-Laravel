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

        // create new model = insert new row in database
        $formResponse = new Travel;

        // get info from input field to be stored in database columns (zoals email maar form nog aanpassen)
        $formResponse->activity = $request->email;
        $formResponse->country = 'test';
        $formResponse->checked = 'test2';
        $formResponse->save();

        //update line
        //TODO check syntax
        //TODO create a new form and create new function in show
       $formUpdate = Travel::where('activity', 'Visit an active volcano')->first();


        return view('form');

    }


}
