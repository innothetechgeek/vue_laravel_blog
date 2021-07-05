<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select('posts.id as post_id', '*')
                    ->join('users', 'posts.user_id', '=', 'users.id')->get();

        $posts = $posts->map(function($posts) {

            $posts->created_at_formatted = $posts->created_at->diffForHumans();        

            return $posts;

        });
        return $posts;
    }

    public function recentPosts(){
        
        $posts = Post::select('posts.id as post_id', '*')
                    ->join('users', 'posts.user_id', '=', 'users.id')->take(5)->get();

        $posts = $posts->map(function($posts) {

            $posts->created_at_formatted = $posts->created_at->diffForHumans();        

            return $posts;

        });

        return $posts;

    }

    public function featuredPost(){

        $posts = Post::select('*')
        ->join('users', 'posts.user_id', '=', 'users.id')->take(1)->get();

            $posts = $posts->map(function($posts) {

            $posts->created_at_formatted = $posts->created_at->diffForHumans();        

            return $posts;

        });

        return $posts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post_data = array_merge($request->all(),['user_id'=>Auth::user()->id]);
        return Post::create($post_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::find($id);
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

            $post =  Post::where('id', $id)
                        ->update(
                            $request->all()
                        );
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $post =  Post::where('id', $id)
                    ->delete();
    }
}
