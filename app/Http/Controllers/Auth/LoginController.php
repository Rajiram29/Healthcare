<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Illuminate\Support\Facades\Input;
use Response;
use App\http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\User; 
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function admin()
    {
        return view('admin.admin-login');
    }
  

    public function adminlogin(Request $request)
    {
    $email = $request->input('email');
    $password = $request->input('password');
   
      if (auth()->attempt(['email' => $email, 'password' => $password])) {
    return 0;
    } 
    else {
     return 1;
    }
}
}
