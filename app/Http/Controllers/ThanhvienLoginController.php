<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class ThanhvienLoginController extends Controller
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
    protected $redirectTo = '/thanhvien';
    protected $redirectAfterLogout = '/login';
    protected $guard = 'web';

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
        return view('transfer');
    }

    protected function getGuard()
    {
        return 'web';
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

    public function login(Request $request){
        $this->validateLogin($request);
        $user = User::where('username',$request->username)->first();
        if( $user && $user->check == 0){
            return \redirect()->back()->withErrors([$this->loginUsername()=>'Thành viên này chưa được kích hoạt.']);
        }
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);

        if (Auth::guard($this->getGuard())->attempt($credentials, $request->has('remember'))) {

            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles && ! $lockedOut) {
            $this->incrementLoginAttempts($request);
        }

        return $this->sendFailedLoginResponse($request);
    }
}
