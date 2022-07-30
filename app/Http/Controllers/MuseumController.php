<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuseumController extends Controller
{
    public function index(){
        return view('museum.index');
    }
}
