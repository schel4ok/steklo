<?php

namespace App\Http\Middleware;

use Closure;
use URL;
use Event;
use App\Events\SendMail;

class PostMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->formname) {
            $result = $request->all();
            Event::fire(new SendMail($result));
            }

        return $next($request);
    }

}
