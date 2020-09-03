<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\Contact;

class ContactController extends Controller
{
    public function getcontact()
    {
        return view('contact');
    }


    public function postContact(Request $request){

	    $contact = new Contact();
	    $contact->fill($request->all());
	    $contact->save();

	    Session::put('message','Gửi ý kiến thành công');
	    return Redirect::to('contact');
    }
    public function getContactList(){

        $contactlist = Contact::select('id','email','name','title','content')->orderBy('id','DESC')->paginate(7);
  
        return view('admin/ContactList',compact('contactlist'));
    }
}

