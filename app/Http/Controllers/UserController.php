<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $req){
    
        $user= User::where(['userEmail'=>$req->userEmail])->first();
        if(!$user || !Hash::check($req->userPassword,$user->userPassword))
        {
            Session::put('message','username or password mismatch!');
            return redirect('/login');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/products');
        }
    }
    public function register()
    {
        return view ('register');
    }
    public function registerUser(Request $req)
    {
        $user=new User();
        $user->userName=$req->userName;
        $user->userEmail=$req->userEmail;
        $user->userPassword=Hash::make($req->userPassword);
        $user->save();
        return view('/login');
    }
    public function logout(){
        Session::forget('user');
        return view('/login');
    }
}
