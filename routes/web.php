<?php

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
use Illuminate\Support\Facades\DB;
use Forum\Post;
use Forum\User;


Route::get('/', function () {
    return view('welcome');
});
//Route::get('/hallo',function () {                    another way to show a view
//    return view('pages.startseite');
//});
Route::resource('posts', 'PostController');
Route::get('/post/{id}', 'PostController@index');  // here if we write localhost/public/post .. it will rturn to us  what the index function in Postcontroller return.




//Route::get('/diskutier-mit-mir','PostController@startseiteView');       //show a view
//Route::get('/diskutier-mit-mir/footer','PostController@testView');
//Route::get('/diskutier-mit-mir/header','PostController@testView1');
//Route::get('/diskutier-mit-mir/{name}/{id}','PostController@passVariables');

// learning sql with laravel
// insert data to the DB
Route::get('/insert',function (){
    DB::insert('insert into posts(titel, content, categorie,comments,clicked,checked,user_id) values(?,?,?,?,?,?,?)',['PHP with Laravel','hallo hier ist meiene erste post','IT','i really like it!',100,true,1]);
});
Route::get('/insert1',function (){
    DB::insert('insert into posts(titel, content, categorie,comments,clicked,checked,user_id) values(?,?,?,?,?,?,?)',['PHP with Laravel part 3','hallo hier ist meiene zweite post','IT','i really like it!',100,true,1]);
});
Route::get('/read',function(){
    $posts= DB::select('select * from posts where id=?', [1]);
//    foreach ($posts as $post){
//        return $post -> titel;
//    }
    return $posts;
});
//
//Route::get('/about', function () {
//    return "Hallo! wir sind Khaled, Leonid und Hanan";
//});
//Route::get('/post/{id}/{name}', function ($id, $name) {
//    return "Hallo!"." ".$name." "."your id:".$id;
//});
//Route::get('admin/posts/home',array('as' => 'admin.home',function(){
//    $url = route('admin.home');
//    return "this url is".$url ;
//}));
//


//|--------------------------------------------------------------------------
//|              ElQUENT
//|--------------------------------------------------------------------------
//|
//
//Route::get('/find',function(){
//
//    $posts = Post::all();
//
//    foreach ($posts as $post){
//
//        return $post -> categorie;
//    }
//});
//
//
//// inserting in the DB
//Route::get('/basicInsert',function (){
//
//    $post = new Post;
//
//    $post->titel='Projekt';
//    $post->content='Hello Jungs hier ist ...';
//    $post->categorie='IT';
//    $post->comments='thats really cool';
//    $post->clicked=0;
//    $post->checked=false;
//    $post->user_id=15;
//
//    $post->save();
//
//});
//
////                          Elquent Relationships
//
//// one to one relashionship
//
//Route::get('/user/{id}/post',function($id){
//
//        return User::find($id)->Post->content;
//});
//// inverse relationship
//Route::get('/post/{id}/user',function($id){
//
//    return Post::find($id)->User->name;
//});
////Many to Many relashionships
//Route::get('/posts',function(){
//
//    $user = User::find(1);
//    foreach ($user -> posts as $post){
//
//        echo $post->categorie ."<br>";
//    }
//});

Route::get('/contact','PostController@contact');
Route::get('/postView/{id}/{name}','PostController@show_post');
Route::get('/index1','PostController@index');
Route::get('/startseite','Postcontroller@startseite');

Route::get('/posts/{id}','Postcontroller@show');
//Route::get('/posts/{id}/edit','PostController@edit');


Route::get('/newpost','Postcontroller@newPost');
Route::get('/categories','Postcontroller@categories');
Route::post('/posting','PostController@store');
Route::get('/posting','PostController@posting');