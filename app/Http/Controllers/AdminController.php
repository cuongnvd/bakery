<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Requests;
use App\User;
use App\Models\Category;
use App\Models\Contact;
use App\Models\EmailPromotion;
use App\Models\Feelback;
use App\Models\News;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function getindex()
    {	
    	$category = Category::all()->count();
    	$contact = Contact::all()->count();
    	$emailpromotion = EmailPromotion::all()->count();
    	$feelback = Feelback::all()->count();
    	$news = News::all()->count();
    	$product = Product::all()->count();
    	$user = User::all()->count();
        return view('admin.index',compact(['category','contact','emailpromotion','feelback','news','product','user']));
    }

   

    public function save_theme(Request $request){
    	$categories = new Categories_News();
    	$categories->fill($request->all());
    	$categories->save();
    	Session::put('message','Thêm chủ đề thành công');
    	return Redirect::to('Categoriesnewsadd');
    }

   //dang nhap
    public function login(Request $request){

     
       $credentials = $request->only('email', 'password');
        // print_r($credentials);die;
        if (!Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->back()->with('message', 'Đăng nhập không thành công');
        }

        return redirect()->route('index');
    }


 
}
