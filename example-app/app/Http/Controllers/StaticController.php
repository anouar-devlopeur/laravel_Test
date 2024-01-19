<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    function index() {
        return view('welcome');
    }
    function about() {
        return '<h1>About</h1>';
    }
    function contact() {
        return '<h1>Contact</h1>';
    }

   
}