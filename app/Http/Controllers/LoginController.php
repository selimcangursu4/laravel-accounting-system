<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return response()->json(['success'=>true, 'message'=>"Giriş başarılı. Anasayfaya yönlendiriliyorsunuz."]);
        }
        else{
            return response()->json(['success'=>false, 'message'=>"E-posta ve şifre yanlış."]);
        }
    }
}
