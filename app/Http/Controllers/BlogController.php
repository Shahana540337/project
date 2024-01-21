<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::get();
        return view('blogPages.index', compact('blogs'));
    }

    public function create(){
        return view('blogPages.create');
    }

    public function store(Request $request){
        $data = new Blog;
 
        $data->title = $request->title;
        $data->category = $request->category;
        $data->description = $request->description;

        if($request->hasFile('image')) {
            $file=$request->file('image');
            $imageName=time() . "." . $file->extension();
            $request->file('image')->storeAs('images/blogs/',$imageName);
            $file->move(public_path('images/blogs/'),$imageName);
            $data->image = $imageName;
        }
        

        $data->save();
 
        return redirect('/blog-index');
    }

    public function delete($id){
        $data = Blog::find($id);
        $destination = 'images/blogs/'.$data->image;
        if(File::exists($destination)){ File::delete($destination); } 
        $data->delete();
        return redirect('/blog-index');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('blogPages.edit', compact('blog'));
    }

    public function update(Request $request, $id){
 
        // $data = Blog::find($id);

        // $data->title = $request->title;
        // $data->category = $request->category;
        // $data->description = $request->description;
                                  
        if($request->hasFile('image')){       
            echo $request->image;
        //     $destination = 'images/blogs/'.$data->image;
        //     if(File::exists($destination)){ File::delete($destination); }
        //     $file=$request->file('image');
        //     $imageName=date('YmdHis') . "." . $file->getClientOriginalName();
        //     $request->file('image')->storeAs('images/blogs/',$imageName);
        //     $file->move(public_path('images/blogs/'),$imageName);
        //     $data->image = $imageName;
        } 

        // $data->update();

        // return redirect('/blog-index');
    }
}
