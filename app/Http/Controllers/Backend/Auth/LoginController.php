<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/backend/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:backend')->except('logout');
    }
    
    /**
     * Show the backend application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
    	return view('backend.auth.login');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('backend.login');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        $return = [
            'message' => '登录成功',
            'errors' => []
        ];

        return $this->authenticated($request, $this->guard()->user())
                ? : (
                    $request->ajax() ? $return : redirect()->intended($this->redirectPath())
                );
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = array_merge($this->credentials($request), ['is_active' => 1]);

        return $this->guard()->attempt(
            $credentials, $request->filled('remember')
        );
    }

    /**
     * 重写
     * @author Eagle
     */
    protected function guard() {
        return Auth::guard('backend');
    }
}
