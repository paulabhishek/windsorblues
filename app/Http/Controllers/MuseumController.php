<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    public function index(){
        $museum = Museum::get();
        return view('museum.index', compact("museum"));
    }
    public function show($museum){

        $museum = Museum::find($museum);
        return view('museum.show', compact("museum"));
    }
}
