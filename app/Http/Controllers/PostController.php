<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{ 
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->simplepaginate(6),
        ]);
    }

    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('img')){
            $formFields['img'] = $request->file('img')->store('img', 'public');
        }

        $formFields['user_id']= auth()->id();

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully!');
    }

    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post){

        //make sure logged in user is owner
        if($post->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('img')){
            $formFields['img'] = $request->file('img')->store('img', 'public');
        }

        $post->update($formFields);

        return redirect('/')->with('message', 'Post updated successfully!');
    }

    public function destroy(Post $post){

        //make sure logged in user is owner
        if($post->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $post->delete();
        return redirect('/')->with('message', 'post deleted successfuly');
    }

    public function manage(){
        return view('posts.manage', ['posts' => auth()->user()->posts()->get()]);
    }
}
