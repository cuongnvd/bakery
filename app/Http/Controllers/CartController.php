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



   public function add_cart_ajax(Request $request){
   	$data = $request->all();
   	print_r($data);
   	$session_id = substr(md5(microtime()), rand(0,26),5);
   	$cart = Session::get('cart');
   	if($cart==true){
   		$is_avaiable = 0;
   		foreach ($cart as $key => $val) {
   			if($val['id']==$data['cart_product_id']){
   				$is_avaiable++;
   			}
   		}
   		if($is_avaiable = 0){
   			$cart[] = array(
   			'session_id' =>$session_id,
   			'id' => $data['cart_product_id'],
   			'name' => $data['cart_product_name_'],
   			'images' => $data['cart_product_images'],
   			'qty' => $data['cart_product_qty'],
   			'cost' => $data['cart_product_cost'],
   		);
   			Session::put('cart',$cart);
   		}
   	}else{
   		$cart[] = array(
   			'session_id' =>$session_id,
   			'id' => $data['cart_product_id'],
   			'name' => $data['cart_product_name_'],
   			'images' => $data['cart_product_images'],
   			'qty' => $data['cart_product_qty'],
   			'cost' => $data['cart_product_cost'],
   		);
   	}
   	Session::put('cart',$cart);
   	Session::save();



   }
}


