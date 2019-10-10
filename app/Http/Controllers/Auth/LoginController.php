<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
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
    //protected $redirectTo = '/home';

    protected function authenticated(Request $request, $user)
    {
        
       /* switch ($user->roles[0]->slug) {
            case 'usuario':
            return redirect('/usuario');
            break;
            case 'client':
                return redirect('/admin');
                break;
            case 'driver':
                return redirect('/admin');
                break;
           
            case 'admin':
                return redirect('/admin');
                break;
        }*/
        return redirect('/admin');

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
