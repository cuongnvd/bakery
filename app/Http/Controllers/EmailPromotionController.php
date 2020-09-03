<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\EmailPromotion;

class EmailPromotionController extends Controller
{
    public function postEmailPromotion(Request $request){

    	$emailpromotion = new EmailPromotion();
    	$emailpromotion->fill($request->all());
    	$emailpromotion->save();

    	 return redirect()->back()->with('message', 'Đăng ký thành công');
    }

    public function getEmailPromotionList(){

        $emailpromotion = EmailPromotion::select('id','email')->orderBy('id','DESC')->paginate(7);
  
        return view('admin/EmailPromotionList',compact('emailpromotion'));
    }
}
