<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use DB;
use Mail;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\User;

class UserController extends Controller
{
    public function getUser(){
        
    	 return view('admin.User');
    }
    public function postAdduser(Request $request){

        $this->validate($request,
        [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:30',
            'passwordAgain' => 'required|same:password',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên nguơi dùng phải có ít nhất 2 kí tự',
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'mật khẩu chỉ được tối đa 30 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
             'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng',
             
        ],
       
        );
       
        $users = new User();
        $users->name = $request->name;
        $users->images =  $request->images;
        $users->fill($request->all()); 
        if($request->hasFile('images')){
            $file = $request->file('images');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jepg'){
                Session::put('message','Bạn chỉ được chọn file css đuôi jpg,png,jepg');
                return Redirect::to('News');
            }
                $filename = $file->getClientOriginalName();
                $images = Str::random(4)."_".$filename;
            
                while(file_exists("upload".$images))
                {
                    $images = Str::random(4)."_".$filename;
                }

                $file->move('upload',$images);
                $users->images = $images;
            }
            else{
                $users->images = "";
            }
        $users->email = $request->email;
        $users->role = $request->role;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect()->back()->with('message', 'Đăng ký người dùng thành công');
        }

    public function getUserList(){
       $user = User::select('id','name','email','password','role','images')->orderBy('id','DESC')->paginate(5);
        // print_r($theme);
        return view('admin/UserList',compact('user'));
    	}

    public function deleteUser($id)
    {
 		
        User::find($id)->delete();

        return response()->json([
        'success' => 'Xóa thể loại thành công!'
    ]);
    }


    public function postregister(Request $request){

        $this->validate($request,
        [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:30',
            'passwordAgain' => 'required|same:password',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên nguơi dùng phải có ít nhất 2 kí tự',
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'mật khẩu chỉ được tối đa 30 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
             'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng',
             
        ],
       
        );
      
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();
          // dd($users);
        return view('login');
        }


       public function passwordedit($id)
    {
        $users = User::findOrFail($id);

        $pageName = 'Change Password';
        return view('/admin/UserUpdate', compact('users'));
    }
    public function updatepassword(Request $request, $id)
    {

        $this->validate($request,
        [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|min:3|max:30',
            'passwordAgain' => 'required|same:password',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên nguơi dùng phải có ít nhất 2 kí tự',
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'mật khẩu chỉ được tối đa 30 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
             'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng',
        ],
        );
        $users = User::find($id);
        $users->images =  $request->images;
        $users->fill($request->all()); 
        if($request->hasFile('images')){
            $file = $request->file('images');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jepg'){
                Session::put('message','Bạn chỉ được chọn file css đuôi jpg,png,jepg');
                return Redirect::to('News');
            }
                $filename = $file->getClientOriginalName();
                $images = Str::random(4)."_".$filename;
            
                while(file_exists("upload".$images))
                {
                    $images = Str::random(4)."_".$filename;
                }

                $file->move('upload',$images);
                $users->images = $images;
            }
            else{
                $users->images = "";
            }
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->role = $request->role;
        $users->save();
        return redirect()->Route('UserList')->with('message','Cập nhật thành công.');
    }

    public function roleedit($id)
    {
        $users = User::findOrFail($id);

        $pageName = 'Change Password';
        return view('/admin/UserRole', compact('users'));
    }
    public function updaterole(Request $request, $id)
    {

  
        $users = User::find($id);
       
        $users->role = $request->role;
        $users->save();
        return redirect()->Route('UserList')->with('message','Cập nhật thành công.');
    }

}
