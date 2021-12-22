<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!\Auth::guest() && \Auth::user()->role=='Admin'){
            if(!Storage::exists('files/'.\Auth::user()->id.'/')) {
                $result = Storage::makeDirectory('files/'.\Auth::user()->id.'/'); //creates directory
            }
            return $next($request);
        } else {
            return redirect(route('login'))->with('error', "Erişim yetkisi yok");
        }
        return redirect(route('index.page'));
    }
}
