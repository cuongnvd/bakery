<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

//danh sách danh mục thể loại-------------
Route::get('/', 'HomeController@gettrangchu')->name('trangchu');

Route::get('/allproduct', 'HomeController@getallproduct')->name('allproduct');

Route::get('/birthdaycake', 'HomeController@getbirthdaycake')->name('birthdaycake');

Route::get('/birthdaycashew', 'HomeController@getbirthdaycashew')->name('birthdaycashew');

Route::get('/birthdaycorn', 'HomeController@getbirthdaycorn')->name('birthdaycorn');

Route::get('/birthdaykiosi', 'HomeController@getbirthdaykiosi')->name('birthdaykiosi');

Route::get('/birthdaymatcha', 'HomeController@getbirthdaymatcha')->name('birthdaymatcha');

Route::get('/birthdaymoussecake', 'HomeController@getbirthdaymoussecake')->name('birthdaymoussecake');

Route::get('/birthdayoranges', 'HomeController@getbirthdayoranges')->name('birthdayoranges');

Route::get('/birthdaypineapple', 'HomeController@getbirthdaypineapple')->name('birthdaypineapple');

Route::get('/birthdaystrawberry', 'HomeController@getbirthdaystrawberry')->name('birthdaystrawberry');

Route::get('/birthdaytaro', 'HomeController@getbirthdaytaro')->name('birthdaytaro');

Route::get('/birthdaytiramisu', 'HomeController@getbirthdaytiramisu')->name('birthdaytiramisu');

Route::get('/breakfastcake', 'HomeController@getbreakfastcake')->name('breakfastcake');

Route::get('/cakedessert', 'HomeController@getcakedessert')->name('cakedessert');

Route::get('/cookie', 'HomeController@getcookie')->name('cookie');

Route::get('/deliverypolicy', 'HomeController@getdeliverypolicy')->name('deliverypolicy');

Route::get('/cream', 'HomeController@getcream')->name('cream');

Route::get('/midautumn', 'HomeController@getmidautumn')->name('midautumn');

Route::get('/midautumncake', 'HomeController@getmidautumncake')->name('midautumncake');

Route::get('/newsclient', 'HomeController@getnewsclient')->name('newsclient');

Route::get('/newspromotion', 'HomeController@getnewspromotion')->name('newspromotion');

Route::get('/newssavore', 'HomeController@getnewssavore')->name('newssavore');

Route::get('/ortherbirthday', 'HomeController@getortherbirthday')->name('ortherbirthday');

Route::get('/productspecial', 'HomeController@getproductspecial')->name('productspecial');

Route::get('/specialbirthday', 'HomeController@getspecialbirthday')->name('specialbirthday');

Route::get('/birthdayaccessories', 'HomeController@getbirthdayaccessories')->name('birthdayaccessories');
//------------------


//cái này ko biết :V vì chưa check---------
Route::get('/chitiet', 'HomeController@getchitiet')->name('chitiet');

Route::get('/chitietproduct', 'HomeController@getchitietproduct')->name('chitietproduct');

Route::post('/postcontactnews','ContactNewsController@postcontactnews');
//--------------



//gửi email nhận tin khuyến mãi--------------
Route::post('/save-emailpromotion', 'EmailPromotionController@postEmailPromotion');
//---------------


//trang cảm nhận khách hàng-------
Route::get('/feelback', 'FeelbackController@getfeelback')->name('feelback');

Route::post('/save-feel','FeelbackController@postfeelback');
//----------


//trang liên hệ khách hàng--------
Route::get('/contact', 'ContactController@getcontact')->name('contact');

Route::post('/save-contact','ContactController@postContact');
//-----------


//thông tin khách hàng khi đăng nhập----------
Route::get('/info', 'HomeController@getinfo')->name('info');

Route::get('/changeavatar', 'HomeController@getchangeavatar')->name('changeavatar');

Route::get('/mypassword', 'HomeController@getmypassword')->name('mypassword');

Route::get('/mycart', 'HomeController@getmycart')->name('mycart');

Route::post('changeavatar', 'HomeController@postchangeavatar');
//---------------


//trang login và đăng ký, quên mật khẩu-----------
Route::get('/login', 'HomeController@getlogin')->name('login');

Route::get('/register', 'HomeController@getregister')->name('register');

Route::post('/register','UserController@postregister')->name('register_add');

Route::post('/post-login','AdminController@login')->name('post.login');

Route::get('/forgetpass', 'HomeController@getforgetpass')->name('forgetpass');
//------------------


//chi tiet tin tuc va san pham--------
Route::get('/chitiet/{id}', 'HomeController@getchitiet')->name('chitiet');

Route::get('/chitietproduct/{id}', 'HomeController@getchitietproduct')->name('chitietproduct');
// -------------


//dang xuat
Route::get('/logout','AdminController@logout');
//--------


//tim kiem
Route::get('/search','HomeController@searchweb')->name('search');
//--------

//gio hang--------------
Route::get('/cart', 'CartController@giohang')->name('cart');

Route::get('/add-to-cart/{id}','CartController@muahang');

Route::get('/delete/{id}','CartController@remoteproduct');
//--------------





Route::group(['prefix' => 'admin','middleware' => 'adminlogin'], function () {
	Route::group(['prefix' => 'category'], function () {

		//thể loại
		Route::get('/Category', 'CategoryController@getCategory')->name('Category');

		Route::post('/save-category','CategoryController@postCategory')->name('Category.add');

		Route::get('/CategoryList', 'CategoryController@getCategoryList')->name('CategoryList');

		Route::DELETE('/delete/{id}', 'CategoryController@deleteCategory')->name('Category.delete');
	});

	Route::group(['prefix' => 'product'], function () {
		//Sản phẩm
		Route::get('/Product', 'ProductController@getProduct')->name('Product');

		Route::post('/save-product', 'ProductController@postProduct')->name('Product.add');

		Route::get('/ProductList', 'ProductController@getProductList')->name('ProductList');

		Route::DELETE('/delete/{id}', 'ProductController@deleteProduct');

		Route::get('/productedit/{id}', 'ProductController@productedit')->name('product.edit');
        //cap nhat nguoi dung
        Route::PATCH('/ProductUpdate/{id}', 'ProductController@updateproduct')->name('product_update');

	});

	Route::group(['prefix' => 'users'], function () {
		//Người dùng
		Route::get('/User', 'UserController@getUser')->name('User');

		Route::post('/adduser','UserController@postAdduser')->name('User_add');

		Route::get('/UserList','UserController@getUserList')->name('UserList');

		Route::DELETE('/delete/{id}', 'UserController@deleteUser');

		Route::get('/passwordedit/{id}', 'UserController@passwordedit')->name('password.edit');
        //cap nhat nguoi dung
        Route::PATCH('/UserUpdate/{id}', 'UserController@updatepassword')->name('password_update');

        Route::get('/roleedit/{id}', 'UserController@roleedit')->name('role.edit');
        //cap nhat nguoi dung
        Route::PATCH('/UserRole/{id}', 'UserController@updaterole')->name('role_update');

	});

	Route::group(['prefix' => 'news'], function () {
		//tin tức
		Route::get('/News', 'NewsController@getNews')->name('News');

		Route::post('/save-news','NewsController@postNews')->name('News.add');

		Route::get('/NewsList', 'NewsController@getNewsList')->name('NewsList');

		Route::DELETE('/delete/{id}', 'NewsController@deleteNews');

		Route::get('/newsedit/{id}', 'NewsController@newsedit')->name('news.edit');
        //cap nhat nguoi dung
        Route::PATCH('/NewsUpdate/{id}', 'NewsController@updatenews')->name('news_update');

	});
//emailpromotion

	Route::get('/EmailPromotionList', 'EmailPromotionController@getEmailPromotionList')->name('EmailPromotionList');

	Route::get('/AdminFeelbackList', 'FeelbackController@getFeelbackList')->name('AdminFeelbackList');

	Route::DELETE('/delete/{id}', 'FeelbackController@deleteFeelback');

	Route::get('/ContactList', 'ContactController@getContactList')->name('ContactList');

	Route::get('/optionedit/{id}', 'ContactController@optionedit')->name('option.edit');

	Route::PATCH('/ContactUpdate/{id}', 'ContactController@updatecontact')->name('option_update');

	Route::get('/searchadmin','AdminController@searchadmin')->name('searchadmin');

	Route::get('/index', 'AdminController@getindex')->name('index');

});


