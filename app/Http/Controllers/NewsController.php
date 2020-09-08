<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;session_start();
use App\Models\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
      public function getNews()
    {
        return view('admin.News');
    }
    public function postNews(Request $request){
    	$news = new News();
        $news->fill($request->all()); 
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
                $news->images = $images;
            }
            else{
                $news->images = "";
            }


    	$news->save();
    	Session::put('message','Thêm tin tức thành công');
    	return redirect()->route('news.add');
    	}

    public function getNewsList(){

        $news = News::select('id','title','summary','images','sent_date','category_id','newsspecial','specialsavorenews','specialpromotionnews')->orderBy('id','DESC')->paginate(7);
  
        return view('admin/NewsList',compact('news'));
    }

    public function deleteNews($id)
    {
 		
        News::find($id)->delete();

        return response()->json([
        'success' => 'Xóa tin tức thành công!'
    ]);
    }

    public function newsedit($id)
    {
        $news = News::findOrFail($id);

        $pageName = 'Change Password';
        return view('admin/NewsUpdate', compact('news'));
    }
    public function updatenews(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->summary = $request->summary;
        $news->images =  $request->images;
        $news->fill($request->all()); 
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
                $news->images = $images;
            }
            else{
                $news->images = "";
            }

        $news->sent_date = $request->sent_date;
        $news->category_id = $request->category_id;
        $news->newsspecial = $request->newsspecial;
        $news->specialsavorenews = $request->specialsavorenews;
        $news->specialpromotionnews = $request->specialpromotionnews;
        $news->save();
        return redirect()->Route('NewsList')->with('message','Cập nhật thành công.');
    }
}
