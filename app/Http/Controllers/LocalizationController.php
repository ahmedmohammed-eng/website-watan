<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        return view('home');
    }
}