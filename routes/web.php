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


Route::get('/trangchu', 'HomeController@gettrangchu')->name('trangchu');

Route::post('/save-emailpromotion', 'EmailPromotionController@postEmailPromotion');

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

Route::get('/contact', 'ContactController@getcontact')->name('contact');

Route::post('/save-contact','ContactController@postContact');

Route::get('/cookie', 'HomeController@getcookie')->name('cookie');

Route::get('/deliverypolicy', 'HomeController@getdeliverypolicy')->name('deliverypolicy');

Route::get('/cream', 'HomeController@getcream')->name('cream');

Route::get('/feelback', 'FeelbackController@getfeelback')->name('feelback');

Route::post('/save-feel','FeelbackController@postfeelback');

Route::get('/midautumn', 'HomeController@getmidautumn')->name('midautumn');

Route::get('/midautumncake', 'HomeController@getmidautumncake')->name('midautumncake');

Route::get('/newsclient', 'HomeController@getnewsclient')->name('newsclient');

Route::get('/newspromotion', 'HomeController@getnewspromotion')->name('newspromotion');

Route::get('/newssavore', 'HomeController@getnewssavore')->name('newssavore');

Route::get('/ortherbirthday', 'HomeController@getortherbirthday')->name('ortherbirthday');

Route::get('/productspecial', 'HomeController@getproductspecial')->name('productspecial');

Route::get('/specialbirthday', 'HomeController@getspecialbirthday')->name('specialbirthday');

Route::get('/birthdayaccessories', 'HomeController@getbirthdayaccessories')->name('birthdayaccessories');

Route::get('/forgetpass', 'HomeController@getforgetpass')->name('forgetpass');

Route::get('/login', 'HomeController@getlogin')->name('login');

Route::get('/register', 'HomeController@getregister')->name('register');

Route::get('/chitiet', 'HomeController@getchitiet')->name('chitiet');

Route::get('/chitietproduct', 'HomeController@getchitietproduct')->name('chitietproduct');

Route::get('/cart', 'HomeController@getcart')->name('cart');

Route::get('/index', 'AdminController@getindex')->name('index');


Route::post('/post-login','AdminController@login')->name('post.login');

Route::get('/chitiet/{id}', 'HomeController@getchitiet')->name('chitiet');

Route::get('/chitietproduct/{id}', 'HomeController@getchitietproduct')->name('chitietproduct');

Route::post('/postcontactnews','ContactNewsController@postcontactnews');





//thể loại
Route::get('/Category', 'CategoryController@getCategory')->name('Category');

Route::post('/save-category','CategoryController@postCategory');

Route::get('/CategoryList', 'CategoryController@getCategoryList')->name('CategoryList');

Route::DELETE('/category/delete/{id}', 'CategoryController@deleteCategory');

//Sản phẩm
Route::get('/Product', 'ProductController@getProduct')->name('Product');

Route::post('/save-product', 'ProductController@postProduct');

Route::get('/ProductList', 'ProductController@getProductList')->name('ProductList');

Route::DELETE('/product/delete/{id}', 'ProductController@deleteProduct');


//Người dùng
Route::get('/User', 'UserController@getUser')->name('User');

Route::post('/adduser','UserController@postAdduser');

Route::post('/register','UserController@postregister');

Route::get('/UserList','UserController@getUserList')->name('UserList');

Route::DELETE('/user/delete/{id}', 'UserController@deleteUser');


//tin tức

Route::get('/News', 'NewsController@getNews')->name('News');

Route::post('/save-news','NewsController@postNews');

Route::get('/NewsList', 'NewsController@getNewsList')->name('NewsList');

Route::DELETE('/news/delete/{id}', 'NewsController@deleteNews');

//emailpromotion

Route::get('/EmailPromotionList', 'EmailPromotionController@getEmailPromotionList')->name('EmailPromotionList');


Route::get('/ContactList', 'ContactController@getContactList')->name('ContactList');