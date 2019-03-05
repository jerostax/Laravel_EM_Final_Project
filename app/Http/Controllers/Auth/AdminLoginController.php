<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm() {
        return view('auth.admin-login');
    }
    public function login(Request $request) {
    //Validation des données du formulaire
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);
    //Tentatives de connexion 
    if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //Si authentication réussie
            return redirect('/admin');
            // ->intended(route('admin'));
        }
            //Si authentification échoue
            return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function logout(){
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}