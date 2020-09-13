<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\Category;

class CategoryController extends Controller
{
       public function getCategory()
    {
        return view('admin.Category');
    }

    public function postCategory(Request $request){

    	$category = new Category();
    	$category->fill($request->all());
    	$category->save();

    	return redirect()->back()->with('message', 'Thêm thể loại thành công');
    	}
    public function getCategoryList(){

        $category = Category::select('id','name')->get();
  
        return view('admin/CategoryList',compact('category'));
    }
    public function deleteCategory($id)
    {
 		
        Category::find($id)->delete();
        return response()->json([
        'success' => 'Xóa thể loại thành công!'
    ]);
    }
}
