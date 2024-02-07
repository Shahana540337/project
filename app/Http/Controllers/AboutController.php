<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\About;
use App\Models\Setting;

use Image;

class AboutController extends Controller
{
    public function index(){
        $data['about'] = About::first();
        $data['setting'] = Setting::first();
        return view('aboutPages.about',$data);
    }
    
    public function edit($id){
        $data['about'] = About::find($id);
        $data['setting'] = Setting::first();
        return view('aboutPages.about-edit',$data);
    }

    public function update(Request $request,$id){
        $data = About::find($id);

        $data->name = $request->name;
        $data->profile = $request->profile;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->description = $request->description;

        if($request->hasFile('image')){

            $destination = 'images/abouts'.$data->image;
            if(File::exists($destination)){ File::delete($destination); }

            $file=$request->file('image');
            $imageName=date('YmdHis') . "." . $file->getClientOriginalName();

            $path = public_path('images/abouts/');
            $img = Image::make($request->file('image')->path());
            $img->resize(1000,850)->save($path.'/'.$imageName);
            
            $data->image = $imageName;
        }

        $data->update();
        return redirect()->to('/about');
    }
}
