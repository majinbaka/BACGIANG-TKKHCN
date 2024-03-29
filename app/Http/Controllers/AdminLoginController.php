<?php

namespace App\Http\Controllers;

use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    protected $redirectAfterLogout = '/admin/login';
    protected $guard = 'admin';

    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function loginUsername()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        return view('login');
    }

    protected function getGuard()
    {
        return 'admin';
    }
    protected function getFailedLoginMessage()
    {
        return 'Sai tên đăng nhập hoặc mật khẩu .Vui lòng nhập lại';
    }

    protected function getLockoutErrorMessage($seconds)
    {
        return 'Bạn đã nhập sai quá nhiều lần. Vui lòng thử lại sau '.$seconds.' giây.';
    }

    protected function validateLogin(Request $request)
    {
        $messages = [
            'password.required' => 'Chưa nhập mật khẩu!',
            'username.required' => 'Chưa nhập tên đăng nhập!',
        ];
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ], $messages);
    }
}
