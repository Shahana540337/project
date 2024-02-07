<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Service;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\BlogCategory;
use App\Models\Skillabout;
use App\Models\Banner;

class WelcomeController extends Controller
{
    public function welcome(){
        $data['blogs'] = Blog::latest()->limit('3')->get();
        $data['setting'] = Setting::first();
        $data['services'] = Service::get();
        $data['about'] = About::first();
        $data['portfolios'] = Portfolio::get();
        $data['blogCategorys'] = BlogCategory::all();
        $data['skillabout'] = Skillabout::get();
        $data['banner'] = Banner::first();
        return view('welcome',$data);
    }
    public function show($id){
        $data = Blog::find($id);
        $setting = Setting::first();
        $data['blogCategorys'] = BlogCategory::all();
        return view('pages.blog-single', $data , compact('data','setting'));
    }
    public function allBlog(){
        $data['blogs'] = Blog::get();
        $data['setting'] = Setting::first();
        $data['blogCategorys'] = BlogCategory::all();
        return view('pages.allBlog',$data);
    }
    public function categoryBlogs($id){
        $data['blogs'] = Blog::where('category',$id)->get();
        $data['setting'] = Setting::first();
        $data['blogCategorys'] = BlogCategory::all();
        return view('pages.categoryBlogs',$data);
    }
}
