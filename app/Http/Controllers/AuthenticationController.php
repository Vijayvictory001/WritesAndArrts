<?php

namespace App\Http\Controllers;


use App\Models\Users;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthenticationController extends Controller
{
    public function RegisterView()
    {
        return view('authentication.register');
    }

    public function LoginView()
    {
        return view('authentication.login');
    }

    public function Register(Request $request)
    {
        $auth = new Users();
 
        $auth -> Name = $request -> name;
        $auth -> Email = $request -> email;
        // $auth -> Password = Hash::make($request -> password); HACK: Problems in Hasing
        $auth -> Password = $request -> password;
        $auth -> IsAdminUser = 0;
 
        $auth -> save();
 
        return view('authentication.login', ["success" => "User registered successfully. Please login to continue..."]);
    }

    public function Login(Request $request)
    {        
        $user = Users::where("Email", '=', $request -> email) -> first();

        if ($user && $user -> Password == $request -> password) 
        {
            
            $request -> session() -> put('UserName', $user -> Name);
            $request -> session() -> put('UserEmail', $user -> Email);
            $request -> session() -> put('UserType', $user -> IsAdminUser);
            Log::info("User Logged in Successfully!");
            
            return redirect('/');
        }

        return view('authentication.login', ["error" => "Login failed. Please try again..."]);
    }

    public function Logout(Request $request)
    {
        $request -> session() -> forget("UserName");
        $request -> session() -> forget("UserEmail");
        $request -> session() -> forget("UserType");
        Log::info("User Logout Successfully!");

        return redirect("/");
    }
}
