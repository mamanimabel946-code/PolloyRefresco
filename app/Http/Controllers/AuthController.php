<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        $titulo="login de ususarios";
        return view("modules.auth.login",compact("titulo"));
    }
    public function logear(Request $request){
        $credenciales =$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user=User::where('email',$request->email)->first();

        if(!$user||!Hash::check($request->password,$user->password)){
            return back ()->whitErrors(['email'=>'credencial incorrecta!'])->whithInput();
        }
        if (!$user->activo){
            return back()->withErrors(['email'=>'tu cuenta esta inactiva!']);
        }
        Auth::login($user);
        $request->session()->regenerate();
        return to_route('home');
    }
    public function crearAdmin(){
        user::create([
            'name'=>'ITSPZW',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('admin'),
            'activo'=>true,
            'rol'=>'admin'
        ]);
    }
    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}
