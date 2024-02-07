<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Contact;

use Image;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::get();
        $data['setting'] = Setting::first();
        return view('portfolioPages.index',compact('portfolios'),$data);
    }

    public function create(){
        $data['setting'] = Setting::first();
        return view('portfolioPages.create',$data);
    }

    public function store(Request $request){
        $data = new Portfolio;

        $data->title = $request->title;
        $data->category = $request->category;

        if($request->hasFile('image')) {
            $file=$request->file('image');
            $imageName=time() . "." . $file->extension();
            $request->file('image')->storeAs('images/portfolios/',$imageName);
            $file->move(public_path('images/portfolios/'),$imageName);
            $data->image = $imageName;
        }

        $data->save();
 
        return redirect('/portfolio-index');
    }

    public function delete($id){
        $data = Portfolio::find($id);

        $destination = 'images/portfolios/'.$data->image;
        if(File::exists($destination)){ File::delete($destination); }
         
        $data->delete();
        return redirect('/portfolio-index');
    }

    public function edit($id){
        $portfolio = Portfolio::find($id);
        $data['setting'] = Setting::first();
        return view('portfolioPages.edit', compact('portfolio'),$data);
    }

    public function update(Request $request, $id){
 
        $data = Portfolio::find($id);

        $data->title = $request->title;
        $data->category = $request->category;

        if($request->hasFile('image')){

            $destination = 'images/portfolios/'.$data->image;
            if(File::exists($destination)){ File::delete($destination); }

            $file=$request->file('image');
            $imageName=date('YmdHis') . "." . $file->getClientOriginalName();

            $path = public_path('images/portfolios/');
            $img = Image::make($request->file('image')->path());
            $img->resize(1000,950)->save($path.'/'.$imageName);

            $data->image = $imageName;
        } 

        $data->update();

        return redirect('/portfolio-index');
    }
}
