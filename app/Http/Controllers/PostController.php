<?php

namespace App\Http\Controllers;

use App\Post;
Use Alert;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(50);
        return view('admin.posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');

        $this->validate($request,[
            'title'         => 'required',
            'category_id'   => 'required',
            'content'       => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg|max:10000',
        ]);
        
        
       $image = $request->image;
       if($image)
       {
           $filename = $image->getClientOriginalName();
           $image->move('images/post', $filename);
           $formInput['image'] = $filename;
           
       }
       Post::create($formInput);
        
       Alert::success('Post Published!', 'Success');
       return redirect()->route('post.index');    
        
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    

    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        
        $posts = Post::find($post);

        return view('admin.posts.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $formInput = $request->except('image');
        
        $this->validate($request,[
            'title'         => 'required',
            'category_id'   => 'required',
            'content'       => 'required',
            'image'         => 'image|mimes:png,jpg,jpeg|max:10000',
        ]);


        $image = $request->image;
        
        if($image)
        {
            $filename = $image->getClientOriginalName();
            $image->move('images/post', $filename);
            $formInput['image'] = $filename;
            
        }
        $post->update($formInput,[
            'title'         => request('title'),
            'category_id'   => request('category_id'),
            'content'       => request('content'),
            
        ]);
        Alert::success('Post Edited!', 'Success');
        return redirect()->route('post.index');    
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Alert::success('Post Deleted!', 'Success');
        return redirect()->route('post.index');
    }
}
