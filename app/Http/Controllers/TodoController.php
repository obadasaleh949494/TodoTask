<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{


    public function getPage()
    {
        return view('index');
    }



}
