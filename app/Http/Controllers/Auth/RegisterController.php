<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\AdminNotification;

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
    protected $redirectTo = '/my-admin/user/list';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        

        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
         $user->roles()->sync($data['roleid']);
         Profile::create([
            'user_id' =>$user->id,
            'post'  =>'0',
        ]);

        $info =  Auth::user()->name. " create new user " .$user->name; 
        $users=User::all();
        foreach ($users as $us) {
            if($user->roles[0]->id=="1" && $us->roles[0]->role_name=="admin"){
               $us->notify(new AdminNotification($info)); 
            }
            if($user->roles[0]->id=="2"){
                $us->notify(new AdminNotification($info));
            }
         
        }

         return Auth::user();

    }
}
