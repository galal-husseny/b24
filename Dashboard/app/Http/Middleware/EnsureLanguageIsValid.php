<?php

namespace App\Http\Middleware;

use App\Traits\ApiResponses;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EnsureLanguageIsValid
{
    use ApiResponses;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(! $request->hasHeader('accept-language')){
            return $this->error([
                'accept-language'=>'is missed'
            ]);
        }
        if(! in_array($request->header('accept-language'),config('app.available_locale'))){
            return $this->error([
                'accept-language'=>'must be ' . implode(', ',config('app.available_locale'))
            ]);
        }
        App::setLocale($request->header('accept-language'));
        return $next($request);
    }
}
