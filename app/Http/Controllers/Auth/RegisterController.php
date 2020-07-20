<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\BienvenidoMail;
use App\RoleUser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/usuario';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        $user = new User();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        $user->save();

        $role = new RoleUser();
        $role->role_id = 3;
        $role->user_id = $user->id;
        $role->save();


        $data = ([
            'name' =>  $data['name'],
            'email' =>  $data['email'],
            ]);

        Mail::to($data['email'])->send(new BienvenidoMail($data));

/*
        //envio de mensaje de registro
        try {
			$mandrill = new Mandrill('qwDXkgo5JLRrl85uKQzojA');
			$template_name = 'cuenta-tienda-eden';
			$template_content = array();
			$message = array(

				'subject' => 'Confirmación de registro',
				'from_email' => 'contacto@eledenmx.com',
				'from_name' => 'El Edén',
				'to' => array(
					array(
						'email' => $data['email'],
						'name' => $data['name'],
						'type' => 'to'
						)

					),
				'headers' => array('Reply-To' => 'contacto@eledenmx.com'),

				);
			$result = $mandrill->messages->sendTemplate($template_name, $template_content, $message);




		} catch(Mandrill_Error $e) {

			echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();

			throw $e;
		}*/


        return $user;

    }
}
