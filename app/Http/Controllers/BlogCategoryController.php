<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Setting;

class BlogCategoryController extends Controller
{
    public function index(){
        $blogCategorys = BlogCategory::get();
        $data['setting'] = Setting::first();
        return view('blogCategoryPages.index', compact('blogCategorys'), $data);
    }

    public function create(){
        $data['setting'] = Setting::first();
        return view('blogCategoryPages.create',$data);
    }

    public function store(Request $request){
        $data = new BlogCategory;
 
        $data->title = $request->title;
        
        $data->save();
 
        return redirect('/blogCategory-index');
    }

    public function delete($id){
        $data = BlogCategory::find($id);
         
        $data->delete();
        return redirect('/blogCategory-index');
    }

    public function edit($id){
        $blogCategory = BlogCategory::find($id);
        $data['setting'] = Setting::first();
        return view('blogCategoryPages.edit', compact('blogCategory'),$data);
    }

    public function update(Request $request, $id){
        $data = BlogCategory::find($id);

        $data->title = $request->title;

        $data->update();

        return redirect('/blogCategory-index');
    }
}
