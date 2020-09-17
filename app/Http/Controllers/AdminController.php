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
        return view('admin.index',compact(['category','contact','emailpromotion','feelback','news','product','user']),array('user' => Auth::user()));
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
        $url_redirect = $request->url_previous;
        if (!Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->back()->with('message', 'Đăng nhập không thành công');
        }

        if(Auth::user()->role == 1){
            $url_redirect = route('index');
       }

        return redirect()->to($url_redirect);
    }

    //out tai khoan
      public function logout(){
        Auth::logout();
        return view('login');
    }

    //trang tim kiem
    public function searchadmin(Request $request)
    {
        $adminkey = $request->adminkey;
        $searchproduct = Product::where('name','like',"%$adminkey%")->orWhere('category_id','like',"%$adminkey%")->paginate(6);
        $user = User::where('name','like',"%$adminkey%")->orWhere('email','like',"%$adminkey%")->paginate(6);
        $searchnews = News::where('title','like',"%$adminkey%")->paginate(6);
        return view('admin.searchadmin',['searchproduct'=>$searchproduct,'searchnews'=>$searchnews,'user'=>$user,'adminkey'=>$adminkey]);
    }

    

   
 
}
