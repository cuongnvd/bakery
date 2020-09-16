<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\Feelback;
use Illuminate\Support\Str;

class FeelbackController extends Controller
{
    public function getfeelback()
    {	
    	$feelback = Feelback::orderBy('id', 'DESC')->paginate(8);
    	return view('feelback',compact(['feelback']));
    }
    public function getFeelbackList(){
        $feelbacklist = Feelback::select('id','name','images','content','date',)->orderBy('id','DESC');

        return view('admin/AdminFeelbackList',compact('feelbacklist'));
    }
    
    public function postfeelback(Request $request)
    {   
        $feelback = new Feelback();
        $feelback->fill($request->all()); 
        if($request->hasFile('images')){
            $file = $request->file('images');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jepg'){
                Session::put('message','Bạn chỉ được chọn file css đuôi jpg,png,jepg');
                return Redirect::to('feelback');
            }
                $filename = $file->getClientOriginalName();
                $images = Str::random(4)."_".$filename;
            
                while(file_exists("upload".$images))
                {
                    $images = Str::random(4)."_".$filename;
                }

                $file->move('upload',$images);
                $feelback->images = $images;
            }
            else{
                $feelback->images = "";
            }


        $feelback->save();
        Session::put('message','Thêm cảm nhận thành công');
        return Redirect::to('feelback');
        return view('feelback');
    }
    
}
