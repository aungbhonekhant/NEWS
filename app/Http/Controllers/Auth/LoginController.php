<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function credentials(Request $request)
    {
        $user = User::where('email',$request->email)->first();

        if ($user->status == 0) {

            return ['email'=>'inactive', 'password'=>'You are not Active person'];
        }else{

            return ['email'=>$request->email, 'password'=>$request->password, 'status'=>1];
        }   

        
        // return $request->only($this->username(), 'password');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
