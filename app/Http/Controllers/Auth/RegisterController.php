<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Business;
use App\Mail\NewUserNotification;

class RegisterController extends Controller {
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
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
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
            'lastname' => ['required', 'string', 'max:255'],
            'identification' => ['required', 'integer'],
            'phone' => ['required', 'string', 'max:16'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
   protected function create(array $data) {
        $usercode = $this->genCode();
        $business = Business::create([
            'name' => $data['businessname'],
            'identification' => $data['businessidentification'],
            'phone' => $data['businessphone'],
            'email' => $data['businessemail'],
            'department' => $data['businessdepartment'],
            'municipality' => $data['businessmunicipality'],
            'address' => $data['businessaddress'],
            'backcode' => $usercode,
        ]);

        $user = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'identification' => $data['identification'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'usercode' => $usercode,
            'business' => $business->id,
            'role' => 0,
        ]);
        
        Mail::to('info@cargoseguros.com')->send(new NewUserNotification($user));
        return $user;
    }

    protected function genCode() {
        $characters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

        $code = null;
        foreach ($characters as $letterA) {
            if($code != null) {
                break;
            }
            foreach ($characters as $letterB) {
                if(User::where('usercode', $letterA . $letterB)->count() > 0) {
                    continue;
                }
                $code = $letterA . $letterB;
                break;
            }
        }
        return $code;
    }
}
