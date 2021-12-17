<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    public function login(Request $req){
    
        $user= User::where(['userEmail'=>$req->userEmail])->first();
        if(!$user || $user->userPassword!=$req->userPassword){
            return 'username or password mismatch';
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/products');
        }
    }
    public function logout(){
        Session::forget('user');
        return view('/login');
    }
}
