<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

Class LanguageController extends Controller
{
    /**
     * Write Your Code.
     *
     * @return string
    */
    
    
        public function lang()
        {
            return view('lang');
        }
    
        public function lang_change(Request $request)
        {
            App::setLocale($request->lang);
            session()->put('lang_code',$request->lang);
            return redirect()->back();
        }
    
}