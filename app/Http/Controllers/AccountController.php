<?php

namespace App\Http\Controllers;

//use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    public function index()
    {
        if (!Sentinel::check()) {
            return view('account.index');
        } else{
            $user = Sentinel::check();
            return view('account.profile', compact('user'));
        }
    }

    public function postLogin()
    {
        $credentials = [
            'email' => $_POST['login_email'],
            'password' => $_POST['login_password'],
        ];

        $user = Sentinel::authenticate($credentials);
        try {
            if ($user) {
                Sentinel::login($user);
                return Redirect::route("home");
            } else
                return Redirect::route("account")->withErrors(['Invalid email/password!']);
        } catch (UserExistsException $e) {
            return Redirect::route("account")->withErrors(['Unknown Error. Please contact administrator!']);
        }
    }

    public function getLogin()
    {
        if (!Sentinel::check()) {
            return view('account.index');
        } else
            return view('account.profile');
    }

    public function getLogout()
    {
        Sentinel::logout();
        return view('account.index');
    }

    public function postRegister()
    {

        $credentials = [
            'first_name' => $_POST['register_name'],
            'email' => $_POST['register_email'],
            'password' => $_POST['register_password'],
        ];

        $user = Sentinel::registerAndActivate($credentials);

        var_dump($user);
    }

    public function getRegister()
    {
        var_dump('delfrinando');
        exit;
    }
}
