<?php
namespace App\Http\Middleware;
use Closure;
use Session;
class Userlogin
{
   public function handle($request, Closure $next)
    {
    	if(!Session::has('userlogin')){
            return redirect('administrator');
        }
        return $next($request);
    }
}
