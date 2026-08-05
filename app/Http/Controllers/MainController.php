<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    Public function index($value)
    {
        return view('main', ['value' => $value]);
    }
    Public function page2($value)
    {
        return view('page2', ['value' => $value]);
    }
    Public function page3($value)
    {
        return view('page3', ['value' => $value]);
    }
}