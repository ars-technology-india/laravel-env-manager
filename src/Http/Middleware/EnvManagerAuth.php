<?php
namespace AshokDevatwal\EnvManager\Http\Middleware;

use Closure;

class EnvManagerAuth
{
    public function handle($request, Closure $next)
    {
        if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] !== config('envmanager.username') || $_SERVER['PHP_AUTH_PW'] !== config('envmanager.password')) {
            header('WWW-Authenticate: Basic realm="Env Manager"');
            header('HTTP/1.0 401 Unauthorized');
            exit('Unauthorized');
        }

        return $next($request);
    }
}