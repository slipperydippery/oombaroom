<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $lock = \App\Lock::create([
            'user_id' => $user->id,
        ]);;

        $funeral = \App\Funeral::create([
            'title' => "My Funeral",
            'quote' => 'No one is actually dead until the ripples they cause in the world die away...',
            'active' => true,
            'user_id' => $user->id,
            'lock_id' => $lock->id
        ]);

        \App\Act::create([
            'title' => 'Introduction',
            'commentary' => 'This is where we introduce',
            'user_id' => $user->id,
            'lock_id' => $lock->id
        ]);

        \App\Act::create([
            'title' => 'Burial',
            'commentary' => 'The burial ceremony itself',
            'user_id' => $user->id,
            'lock_id' => $lock->id
        ]);

        \App\Act::create([
            'title' => 'Rememberance',
            'commentary' => 'Time to talk',
            'user_id' => $user->id,
            'lock_id' => $lock->id
        ]);


        $group = \App\Group::create([
            'name' => 'Guest List',
            'user_id' => $user->id
        ]);

        return $user;
    }

    protected $redirectPath = '/userprofile';
}
