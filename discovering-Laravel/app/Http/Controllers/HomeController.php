<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');

    }

    public function show()
    {
        // query
        // object-relational mapper "Eloquent" (ORM): instead of select * from Travel => Travel::get();
        $list = Travel::get();


        // dump and die: just see tha database
        // dd($list);

        return view('home', ['list' => $list]);
    }

}
