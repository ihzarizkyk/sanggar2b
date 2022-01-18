<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        return $this->middleware(["guest"])->except("logout");
    }

    public function index()
    {
        return view("auth.index");
    }

    public function postlogin(Request $req)
    {
        $user = $req->name;
        $password = $req->password;

        if(Auth::attempt(["name" => $user,"password" => $password]))
        {
            return redirect("/dashboard");
        }else{
            return redirect()->back();
        }
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/auth/login');
    }
}
