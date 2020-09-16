<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\Product;
use Illuminate\Support\Str;
use Cart;
use Response;
class CartController extends Controller
{

	public function muahang($id){
		$product_cart = DB::table('product')->where('id',$id)->first();
		Cart::add(array('id'=>$id,'name'=>$product_cart->name,'qty'=>1,'price'=>$product_cart->cost,'weight'=>0,'option'=> array('img'=>$product_cart->images)));
		$content = Cart::content();
		return redirect()->route('cart');
	}
	public function giohang(){
		$content = Cart::content();
		$total = Cart::total();
		return view('cart',compact('content','total'));
	}

	public function remoteproduct($id){
		Cart::remove($id);
		return back();
	}
}


