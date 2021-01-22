<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function postlogin(Request $request){
        if (Auth::guard('pengguna')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/beranda');
        }elseif (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/beranda');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');

    }
}
