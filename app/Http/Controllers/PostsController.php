<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);

        return view('allposts.posts')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allposts.createnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'post-title' => 'required',
            'post-content' => 'required'
            ]);
            $post = new Post;
            $post->title = $request->input('post-title');
            $post->body = $request->input('post-content');
            $post->save();
            return redirect('/posts')->with('success','Post is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $current = Post::find($id);
        return view('allposts.post')->with('current',$current);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $current = Post::find($id);
        
        return view('allposts.edit',compact('current'));
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
        $post = Post::find($id);

        $post->title = $request->input('post-title');
        $post->body = $request->input('post-content');
        $post->update();

        return redirect('/posts')->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $current = Post::find($id);
        $current->delete();
        return redirect('/posts')->with('success','Post '.$current->title.' is deleted');
    }
}
