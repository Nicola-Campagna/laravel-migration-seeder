<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class PageController extends Controller
{
    public function homepage(){
        $train=Trains::all();

    return view('welcome',compact('train'));
    }

}