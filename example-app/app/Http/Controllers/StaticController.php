<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    function index() {
        return view('welcome');
    }
    function about() {
        return view('about');
    }
    //  function action() {
    //     return view('action');
    // }
    function contact() {
        return view('contact');
    }
    function categorie() {
        return view('categorie');
    }



}
