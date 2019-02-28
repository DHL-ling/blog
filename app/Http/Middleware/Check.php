<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 2019/2/18
 * Time: 2:03 PM
 */
namespace App\Http\Middleware;

use Closure;
class Check
{

    public function handle($request, Closure $next)
    {
        echo 'before Middleware.....';
        return $next($request);
    }

}