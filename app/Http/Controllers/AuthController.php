<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    
    public function showLogin(){
        return view("auth.login");
    }

    public function login(Request $request){
        $credentials = $request->validate(
            ['email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('app.main');
        }

        return redirect()->route('auth.login.show')->withErrors(['email' => 'Неверный логин или пароль.']);
    }

    public function showRegistration(){
        return view("auth.registration");
    }

    public function registration(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'repeat-password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->route('auth.registration.show')->withErrors($validator);
        }

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $repeatPassword = $request->repeatPassword;

        if(!strcmp($password, $repeatPassword)){
            return redirect()->route('auth.registration.show')->withErrors(['password' => 'Пароли не совпадают']);
        }

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);

        $user->save();

        // Mail::to($user->email)->send(new WelcomeMail($user));

        Auth::login($user);

        return redirect()->route('app.main');

    }

    public function showRestore(){
        return view("auth.restore");
    }

    public function restore(){
        return view("auth.restore");
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
    
}
