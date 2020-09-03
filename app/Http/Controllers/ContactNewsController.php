<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\ContactNews;

class ContactNewsController extends Controller
{
     public function postcontactnews(Request $request){

	    $contact = new ContactNews();
	    $contact->fill($request->all());
	    $contact->save();

	    Session::put('message','Gửi ý kiến thành công');
	    return Redirect::to('chitiet');
    }
}
