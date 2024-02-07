<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Service;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Contact;

use Image;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::get();
        $data['setting'] = Setting::first();
        return view('servicePages.index',compact('services'),$data);
    }

    public function create(){
        $data['setting'] = Setting::first();
        return view('servicePages.create',$data);
    }

    public function store(Request $request){
        $data = new Service;
 
        $data->name = $request->name;
        $data->description = $request->description;

        if($request->hasFile('image')) {
            $file=$request->file('image');
            $imageName=time() . "." . $file->extension();
            $request->file('image')->storeAs('images/services/',$imageName);
            $file->move(public_path('images/services/'),$imageName);
            $data->image = $imageName;
        }

        $data->save();
 
        return redirect('/service-index');
    }

    public function delete($id){
        $data = Service::find($id);

        $destination = 'images/services/'.$data->image;
        if(File::exists($destination)){ File::delete($destination); }
         
        $data->delete();
        return redirect('/service-index');
    }

    public function edit($id){
        $service = Service::find($id);
        $data['setting'] = Setting::first();
        return view('servicePages.edit', compact('service'),$data);
    }

    public function update(Request $request, $id){
 
        $data = Service::find($id);

        $data->name = $request->name;
        $data->description = $request->description;

        if($request->hasFile('image')){

            $destination = 'images/services/'.$data->image;
            if(File::exists($destination)){ File::delete($destination); }

            $file=$request->file('image');
            $imageName=date('YmdHis') . "." . $file->getClientOriginalName();

            $path = public_path('images/services/');
            $img = Image::make($request->file('image')->path());
            $img->resize(300,250)->save($path.'/'.$imageName);

            $data->image = $imageName;
        } 

        $data->update();

        return redirect('/service-index');
    }
}
