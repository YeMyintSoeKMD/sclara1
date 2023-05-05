<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = "About Page";
        $nums = [1, 2, 3, 4, 5];
        return view('about', compact('title', 'nums'));
    }
}
