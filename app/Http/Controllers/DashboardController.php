<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $todolist = todolist::all();
        return view('dashboard')->with('todolist', $todolist);


    }

}
