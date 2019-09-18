<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
   public function index(){
       return view('posts.Posts', ['posts' => Post::all()]);
   }
   public function store(Request $request){
       $postData = $request->only(["title", "content"]);
       if(count($postData) > 0) {
           $postData['likes'] = 0;
       if( !Post::create($postData) ) {
           return view("createPost")->with("message", "Unesite sva polja!");
       }
   }

       return view("posts.createPost", ["error" => false]);
   }
   public function show($id)
   {
       return Post::find($id);
   }
   public function edit($id){
       $posts = Post::where('id', $id)->first();
       return view('posts.edit', compact('posts'));
   }
   public function update($id, Request $request){
       $postData = $request->only(["title","content", "likes"]);
       $posts = Post::where('id', $id)->first();
       $posts->title = $postData['title'];
       $posts->content = $postData['content'];
       $posts -> save();
       redirect('/posts');
       return redirect('/posts');
   }
   public function delete ($id) {
       $posts = Post::where('id', $id)
       ->first();
       $posts->delete();
       return redirect('/posts')->with('msg', 'User '.$posts->name.' deleted.');
   }
   public function like ($id, Request $request){
    $postData = $request->only(["title","content"]);
    $posts = Post::where('id', $id)->first();
    $posts->likes += 1;
    $posts -> save();
    redirect('/posts');
    return redirect('/posts');
}
}
