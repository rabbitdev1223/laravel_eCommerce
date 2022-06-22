<?php
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Closure;

class AuthTimeout extends Middleware
{

    protected $session;
    protected $timeout = 1200;

    public function __construct(Store $session)
    {
        
        
        $this->timeout = Config::get('session.lifetime') * 60;
        $this->session = $session;
    }

    public function handle($request, Closure $next)
    {
//         $isLoggedIn = $request->path() != 'logout';
        
//         if (!session('lastActivityTime')){
//             $this->session->put('lastActivityTime', time());
//         }elseif (time() - $this->session->get('lastActivityTime') > $this->timeout) {
//             $this->session->forget('lastActivityTime');
//             auth()->logout();
//         }
        
//         $isLoggedIn ? $this->session->put('lastActivityTime', time()) : $this->session->forget('lastActivityTime');
        
        $bag = Session::getMetadataBag();
        if ($bag && $this->timeout < (time() - $bag->getLastUsed())) {
            auth()->logout();
        }
        
        return $next($request);
    }
}
