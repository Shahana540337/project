<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\BlogCategory;

use Image;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::get();
        $data['setting'] = Setting::first();
        $data['blogCategorys'] = BlogCategory::all();
        return view('blogPages.index', compact('blogs'), $data);
    }

    public function create(){
        $data['setting'] = Setting::first();
        $data['blogCategorys'] = BlogCategory::all();
        return view('blogPages.create',$data);
    }

    public function store(Request $request){
        $data = new Blog;
 
        $data->title = $request->title;
        $data->category = $request->category;
        $data->description = $request->description;

        if($request->hasFile('image')) {

            $file=$request->file('image');
            $imageName=time() . "." . $file->extension();
            
            $path = public_path('images/blogs/');
            $img = Image::make($request->file('image')->path());
            $img->resize(420,250)->save($path.'/'.$imageName);

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
        $data['setting'] = Setting::first();
        $data['blogCategorys'] = BlogCategory::all();
        return view('blogPages.edit', compact('blog'),$data);
    }

    public function update(Request $request, $id){
        $data = Blog::find($id);

        $data->title = $request->title;
        $data->category = $request->category;
        $data->description = $request->description;

        if($request->hasFile('image')){
            $destination = 'images/blogs/'.$data->image;
            if(File::exists($destination)){ File::delete($destination); }

            $file=$request->file('image');
            $imageName=date('YmdHis') . "." . $file->getClientOriginalName();

            $path = public_path('images/blogs/');
            $img = Image::make($request->file('image')->path());
            $img->resize(800,600)->save($path.'/'.$imageName);
            
            $data->image = $imageName;
        } 

        $data->update();

        return redirect('/blog-index');
    }
}


// echo $request->image;