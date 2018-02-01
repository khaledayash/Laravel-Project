<?php

namespace Forum\Http\Controllers;

use Illuminate\Http\Request;

//use Forum\Http\Requests;
use Forum\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $titel = $request->input('titel');
         $content = $request->input('content');
         $categorie = $request->input('categorie');
         $comments=$request->input('comments');
         $clicked=$request->input('clicked');
         $userId=$request->input('userId');
         $checked=$request->input('checked');
         // SQL Injuctions
         DB::insert('insert into posts(titel, content, categorie,comments,clicked,checked,user_id) values(?,?,?,?,?,?,?)',[$titel,$content,$categorie,$comments,$clicked,true,$userId]);


     //   return $request->input('titel');
       // Post::create($request->all());

       //return redirect('/pages.startseite');

//        var_dump($request);


       // return "works";
        return view('pages.successpost');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post= Post::findOrFail($id);
        $post->update($request->all());

      return redirect('/posts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function startseiteView(){
        $meinTeam=['Khaled','Leonid','Momo'];
        return view('pages.startseite',compact('meinTeam'));
    }
    public function testView(){
        return view('pages.footer');
    }
    public function testView1(){
        return view('pages.layouts.header');
    }
    public function passVariables($name, $id){
        return view('pages.startseite',compact('name','id'));
    }
    public function contact(){
        $people=['Khaled','Omar','Momo'];
        return view('contact',compact('people'));
    }
    public function show_post($id,$name){
        return view('post',compact('id','name'));
    }
    public function startseite(){
        $posts=Post::all();
        return view('pages.startseite',compact('posts'));
    }
    public function index()
    {
//        return "Hi"." " .$id." ! ";
//        return dd($posts=Post::all());
        $posts=Post::all();
        return view('posts.index',compact('posts'));
    }
//    public function showPost($id){
//        $post=Post::findOrFail($id);
//        return view('posts.show',compact('post'));
//    }
        public function show($id){
        $post=Post::findOrFail($id);
//        $titel=Post::findOrFail($titel);
       // echo $post->titel;
            $titel=$post->titel;
            $content=$post->content;
            return view('pages.viewPost',compact('post'));
    }
//    public function show($id){
//        $post=Post::findOrFail($id);
//        return view('posts.show',compact('post'));
//    }
    public function newPost(){
            return view('pages.posting');
    }
    public function posting(){
        return  view('pages.posting');
    }
    public function categories(){
        return view('pages.categories');
    }
}
