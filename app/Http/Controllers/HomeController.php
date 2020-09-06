<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Models\Category;
use App\Models\Product;
use App\Models\Feelback;
use App\Models\News;
use App\Models\Contact;
use App\Models\ContactNews;
use Illuminate\Support\Facades\Redirect;session_start();

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gettrangchu()
    {   
        $producthot = Product::where('producthot',true)->orderBy('id', 'DESC')->get();
        $productnew = Product::where('productnew',true)->orderBy('id', 'DESC')->get();
        $specialnews = News::where('newsspecial',true)->orderBy('id', 'DESC')->limit(1)->get();
        $specialnewssavore = News::where('specialsavorenews',true)->limit(2)->get();
        return view('trangchu',compact(['producthot','productnew','specialnews','specialnewssavore']));
    }

    public function getallproduct()
    {
        $allproduct = Product::orderBy('id', 'DESC')->limit(10)->paginate(9); 
        
        return view('allproduct',compact(['allproduct']));
    
    }

    public function getbirthdaycake()
    {   
        $productother = Category::find(22)->post;
        $product = Category::find(5)->post;
        $productcorn = Category::find(12)->post;
         $productkiosi = Category::find(19)->post;

        return view('birthdaycake',compact(['product','productother','productcorn','productkiosi']));
    }

    

    public function getbirthdaycorn()
    {   
        $product = Category::find(12)->post;

        return view('birthdaycorn',compact(['product']));
    }

    public function getbirthdaymatcha()
    {   
        $product = Category::find(13)->post;

        return view('birthdaymatcha',compact(['product']));
    }

    public function getbirthdaypineapple()
    {   
        $product = Category::find(14)->post;

        return view('birthdaypineapple',compact(['product']));
    }

    public function getbirthdaytaro()
    {   
        $product = Category::find(15)->post;

        return view('birthdaytaro',compact(['product']));
    }

    public function getbirthdayoranges()
    {   
        $product = Category::find(16)->post;

        return view('birthdayoranges',compact(['product']));
    }

    public function getbirthdaystrawberry()
    {   
        $product = Category::find(17)->post;

        return view('birthdaystrawberry',compact(['product']));
    }
    
    public function getbirthdaytiramisu()
    {   
        $product = Category::find(18)->post;

        return view('birthdaytiramisu',compact(['product']));
    }
    public function getbirthdaykiosi()
    {   
        $product = Category::find(19)->post;

        return view('birthdaykiosi',compact(['product']));
    }

    public function getbirthdaycashew()
    {   
        $product = Category::find(20)->post;

        return view('birthdaycashew',compact(['product']));
    }

    public function getbirthdaymoussecake()
    {   
        $product = Category::find(21)->post;

        return view('birthdaymoussecake',compact(['product']));
    }

    public function getortherbirthday()
    {   
         $product = Category::find(22)->post;

        return view('ortherbirthday',compact(['product']));
    }
    public function getspecialbirthday()
    {   
          $product = Category::find(23)->post;

        return view('specialbirthday',compact(['product']));
    }

    //-----------------------------------------------------------------------
    public function getbreakfastcake()
    {   
        $product = Category::find(6)->post;

        return view('breakfastcake',compact(['product']));
    }
    public function getcakedessert()
    {   
        $product = Category::find(9)->post;

        return view('cakedessert',compact(['product']));
    }
   
    public function getforgetpass()
    {
        return view('forgetpass');
    }
    
    public function getcookie()
    {   
         $product = Category::find(7)->post;

        return view('cookie',compact(['product']));
    }
    public function getcream()
    {   
        $product = Category::find(8)->post;

        return view('cream',compact(['product']));
    }
    
    public function getmidautumn()
    {
        return view('midautumn');
    }
    public function getmidautumncake()
    {   
        $product = Category::find(11)->post;

        return view('midautumncake',compact(['product']));

    }
    public function getnewsclient()
    {   
        $news = Category::find(3)->get;
        $newsclient = News::where('newsspecial',true)->orderBy('id', 'DESC')->get();
        return view('newsclient',compact(['newsclient','news']));
    }
    public function getnewspromotion()
    {   
        $news = Category::find(2)->get;
        $newspromotion = News::where('specialpromotionnews',true)->orderBy('id', 'DESC')->limit(1)->get();
        return view('newspromotion',compact(['news','newspromotion']));
    }
    public function getnewssavore()
    {   
        $news = Category::find(1)->get;
        $newssavore = News::where('specialsavorenews',true)->orderBy('id', 'DESC')->limit(1)->get();
        return view('newssavore',compact(['news','newssavore']));

    }

    public function getproductspecial()
    {   
        
        $product = Category::find(4)->post;

        return view('productspecial',compact(['product']));

    }
    

    public function getbirthdayaccessories()
    {      
        $product = Category::find(10)->post;

        return view('birthdayaccessories',compact(['product']));
    }

    public function getlogin()
    {
        return view('login');
    }
    public function getregister()
    {
        return view('register');
    }

    public function getdeliverypolicy()
    {
        return view('deliverypolicy');
    }


    public function getchitietproduct($id)
    {   
        $productnew = Product::where('productnew',true)->orderBy('id', 'DESC')->get();
        $chitietproduct = Product::find($id);
        
        return view('chitietproduct',compact('chitietproduct','productnew'));

    }

    public function getcart()
    {
        return view('cart');
    }

    public function getchitiet($id)
    {   
        $allnews = News::orderBy('id', 'DESC')->limit(10); 
        $chitiet = News::find($id);
        
        return view('chitiet',compact('chitiet','allnews'));
    }
      public function postcontactnews(Request $request){

        $contact = new ContactNews();
        $contact->fill($request->all());
        $contact->save();

        Session::put('message','Gửi ý kiến thành công');
        return Redirect::to('chitiet');
    }


    //trang tim kiem
    public function searchweb(Request $request)
    {
      $productkey = $request->productkey;
      $product = Product::where('name','like',"%$productkey%")->orWhere('cost','like',"%$productkey%")->paginate(12);
      return view('search',['product'=>$product,'productkey'=>$productkey]);
    }

}
