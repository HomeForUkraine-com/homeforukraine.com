<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;
use App;
use Illuminate\Support\Facades\Auth;

class Locale
{
    public function handle($request, Closure $next)
    {
        if (Session::get('language')) {
            App::setLocale(Session::get('language'));
        } else {
            App::setLocale('en');
        }

        /*if(Auth::guard('admin')->check())
            return redirect('admin/dashboard');*/
        
        $response = $next($request);

        if(checked('localeExceptionCatch')){
            // Yes, i'm using locale middleware for catching exceptions...
            if(isset($response->exception) && $response->exception!=null){
                echo "Catched error in Locale middleware!<br>";
                echo $response->exception->getMessage()."<br>";
                echo $response->exception->getTraceAsString();
                exit;
            }
        }

        return $response;
    }
}
