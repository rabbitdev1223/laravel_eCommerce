<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Log;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        
        $user = auth()->user();
        $user->last_login = Carbon::now();
        $user->save();
                
        
        $log = new Log();
        $log->user_id = $user->id;
        $log->device = $request->userAgent();
        $log->type = 'login';
        $log->ip = $request->ip();
        $log->save();
        
        if ($user->hasRole('super')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('admin')) {
            return redirect()->route('admin.orders.index');
        } elseif ($user->hasRole('user')) {
            return redirect()->intended('home');
        } elseif ($user->hasRole('manager')) {
            return redirect()->route('dashboard');
        }


        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        
        $log = new Log();
        $log->user_id = auth()->user()->id;
        $log->device = $request->userAgent();
        $log->type = 'logout';
        $log->ip = $request->ip();
        $log->save();
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
