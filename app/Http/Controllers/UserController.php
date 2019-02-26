<?php
/**
 * Created by PhpStorm.
 * User: Jolina
 * Date: 2/22/2019
 * Time: 1:48 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request)
    {
        if(Auth::attempt([
            'email'    => $request['email'],
            'password' => $request['password']
        ])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }

    public function getDashboard(){
        return view('dashboard');
    }
}
