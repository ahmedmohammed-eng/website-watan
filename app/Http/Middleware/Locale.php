<?php

namespace App\Http\Middleware;
use App;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
    if (Config('locale.status')){

        if (session()->has('locale') && array_key_exists(Session()->get('locale'),Config('locale.languages'))) {
            App::setLocale(Session::get('locale'));
        }else {

$userLanguages=preg_split('/[,;]/',$request->server('HTTP_ACCEPT_LANGUAGE'));
foreach ($userLanguages as $language ){
    if (array_key_exists($languages,Config('locale.languages'))){
        App::setLocale('$language');

        setLocale(LC_TINE,config('locale.languages')[$language][1]);
        carbon::setlocale(config('locale.languages')[$language][0]);
        if (config('locale.languages')[$language][2]){
            session(['lang-rtl'=>true]);
        }else {
            sesstion()->forget('lang-rtl');
          
        }
        break ;

        }

    }

  
        
        }
    }

    
        return $next($request);
    }
}
