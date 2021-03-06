<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
      public function getProduct()
    {
        return view('admin.Product');
    }
    public function postProduct(Request $request){

    	$product = new Product();
        $product->fill($request->all()); 
        if($request->hasFile('images')){
            $file = $request->file('images');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jepg'){
                Session::put('message','Bạn chỉ được chọn file css đuôi jpg,png,jepg');
                return Redirect::to('Product');
            }
                $filename = $file->getClientOriginalName();
                $images = Str::random(4)."_".$filename;
            
                while(file_exists("upload".$images))
                {
                    $images = Str::random(4)."_".$filename;
                }

                $file->move('upload',$images);
                $product->images = $images;
            }
            else{
                $product->images = "";
            }


    	$product->save();
    	return redirect()->back()->with('message', 'Thêm tin tức thành công');
    	}

    public function getProductList(){

        $product = Product::select('id','name','ingredient','images','content','cost','category_id','productspecial','producthot','productnew','note')->orderBy('id','DESC')->paginate(7);
  
        return view('admin/ProductList',compact('product'));
    }


    public function deleteProduct($id)
    {
 		
        Product::find($id)->delete();

        return response()->json([
        'success' => 'Xóa thể loại thành công!'
    ]);
    }



    public function productedit($id)
    {
        $product = Product::findOrFail($id);

        $pageName = 'Change Password';
        return view('/admin/ProductUpdate', compact('product'));
    }
    public function updateproduct(Request $request, $id)
    {
        $this->validate($request,
            [
             
                'cost' => 'required|integer',
              
                
            ],
            [
                'required' => ':attribute không được để trống',
                
                 'integer' => ':attribute phải là số'   
            ],
            [
                'cost' => ' Giá tour',
                    
            ]
        );
       
        $product = Product::find($id);
        $product->name = $request->name;
        $product->ingredient = $request->ingredient;
        $product->images =  $request->images;
        $product->fill($request->all()); 
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
                $product->images = $images;
            }
            else{
                $product->images = "";
            }
        $product->cost = $request->cost;
        $product->category_id = $request->category_id;
        $product->producthot = $request->producthot;
        $product->productnew = $request->productnew;
        $product->note = $request->note;
        $product->save();
        return redirect()->Route('ProductList')->with('message','Cập nhật thành công.');
    }
}
