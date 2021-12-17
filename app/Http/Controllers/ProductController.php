<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    public function index(){
        //return view('index');
        $products=Product::all();
        return view('product',['products'=>$products]);
    }
    public function detail($id){
        $data=Product::find($id);
        return view('detail',['product'=>$data]);
    }
    public function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart();
            $cart->product_id=$req->product_id;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->save();
            return redirect('/products');
        }
        else{
            return redirect('/');
        }
    }
    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    public function search(Request $req)
    {
        $data=Product::where('productName','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
}
