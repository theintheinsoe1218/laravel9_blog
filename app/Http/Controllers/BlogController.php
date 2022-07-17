<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        return view('blogs.index',['blogs'=>$blogs]);
    }

    public function show($id)
    {
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3|max:255',
            'body'=>'required|min:3|max:1000',
            'image'=>'required'
        ]);

        $blog=new Blog();
        $blog->title=$request->title;
        $blog->body=$request->body;
        $image=$request->file('image');
        $imgName=$image->hashName();
        $image->storeAs('images',$imgName);
        $blog->image_url=$imgName;
        $blog->save();

        return back()->with('success','Blog Created Successfully');
    }

    public function edit($id)
    {
    }

    public function update(Request $request)
    {
    }



    public function destroy($id)
    {
    }
}
