<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('admin.auth.login');
    }

    public function adminLogin(Request $request)
    {

        $messages = [
            'mailaddress.required' => 'メールアドレスを入力してください！',
            'password.required' => 'パスワードを入力してください！'
        ];
        $validatedData = $request->validate([
            'mailaddress'   => ['required', 'email'],
            'password' => ['required', 'string'],
        ], $messages);
        if (Auth::guard('admin')->attempt(['mailaddress' => $request->mailaddress, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/home');
        } else {
            return redirect()->back()->withInput()->withErrors(['mailaddress' => 'ログインIDもしくはパスワードが不正です']);
        }
        // return back()->withInput($request->only('email', 'remember'));
    }
}
