<?php
namespace Anisa\Report\Middlewares;

use Closure;

class AccessReport
{
    public function handle($request,Closure $next){
        return $next($request);
    }
}
