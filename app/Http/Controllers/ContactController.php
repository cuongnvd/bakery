<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\Contact;
use Illuminate\Support\Str;

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

        $contactlist = Contact::select('id','email','name','title','content','status')->orderBy('id','DESC')->paginate(7);
  
        return view('admin/ContactList',compact('contactlist'));
    }
       public function optionedit($id)
    {
        $contact = Contact::findOrFail($id);

        $pageName = 'Change Password';
        return view('/admin/ContactUpdate', compact('contact'));
    }
    public function updatecontact(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->status = $request->status;
        $contact->save();
        return redirect()->Route('ContactList')->with('message','Cập nhật thành công.');
    }
}

