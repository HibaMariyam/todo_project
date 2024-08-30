<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tod;

class TodsController extends Controller
{
    public function index()
    {
        $tods=Tod::where('isCompleted',false)->get();
        return view('welcome',compact('tods'));
    }
}
