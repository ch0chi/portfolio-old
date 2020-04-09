<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Blog;
use App\UserPost as UserPost;
use Auth;
use File;
use App\User as User;
use App\Libraries\Upload;
use App\Libraries\Sanitize as Sanitize;

class PostController extends Controller
{
    private $blog;

    public function __construct(){

        $this->middleware('auth')->except(['index','show']);
        $this->blog = new Blog();
    }

    //will display all blog posts
    public function index(){
        $posts = Blog::fetchAll('mquattrochi@gmail.com')->orderBy('blogs.created_at','desc')->get();
        return view('/blog/all',compact('posts'));
    }

    /**
     * Returns add_post page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    //will show a single blog post
    public function show($postKey){
        $count = 0;
        $blogPost = Blog::fetchPost($postKey)->get();
        foreach($blogPost as $post){
            $count++;
        }
        if($count===0){
            abort(404);
        }

        return view('/blog/single-post',compact('blogPost'));
    }

    /**
     * @param Request $request
     * @return mixed
     *
     * Stores new post into database. Post key is the post-title w/ rand string added to end of it.
     *
     */
    public function store(Request $request){
        //need to implement validation check to make sure post title doesn't contain malicious code
        $this->validate($request,[
            'post_image'    =>      'image|mimes:jpeg,jpg,bmp,png,gif|max:9999999',
            'post_title'    =>      'required|max:200',
            'post_body'     =>      'required'
        ]);

        $upload = new Upload();
        $userPost = new UserPost;
        $key = Sanitize::clean($request->input('post_title'))."-".$upload->randomString(10);

        $newPost = Blog::create([
            'post_image'    =>      $upload->uploadImage($request->file('post_image')),
            'post_title'    =>      $request->input('post_title'),
            'post_body'     =>      $request->input('post_body'),
            'author_id'     =>      \Auth::user()->id,
            'blog_key'      =>      $key
        ]);

        $userPost->create([
            'user_id'   =>  \Auth::user()->id,
            'post_id'   =>  $newPost->id
        ]);

        return \Redirect::to('/blog');
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'post_image'    =>      'image|mimes:jpeg,jpg,bmp,png,gif|max:10000',
            'post_title'    =>      'required|max:200',
            'post_body'     =>      'required'
        ]);
        $key = Sanitize::clean($request->input('post_title'));
        $post = Blog::where('blog_key',$id);


        $post->update([
            'post_title'    =>  $request->input('post_title'),
            'post_body'     =>  $request->input('post_body')
        ]);

        if($request->hasFile('post_image')){
            $upload = new Upload();
            $postContents = $post->get();

            foreach($postContents as $p){
                unlink('uploads/'.$p->post_image);
                unlink('uploads/banner_'.$p->post_image);
            }
            $post->update([
                'post_image'    =>  $upload->uploadImage($request->file('post_image')),
            ]);


        }

        return redirect('/blog/'.$id);
    }

    public function destroy(Request $request, $id){

    }

    public function edit($postKey){
        $postContent = Blog::fetchPost($postKey)->get();
        return view('/blog/update',compact('postContent'));
    }
}