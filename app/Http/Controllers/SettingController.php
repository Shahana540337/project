<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $data['setting'] = Setting::first();
        return view('settingPages.setting',$data);
    }
    public function edit($id){
        $data['setting'] = Setting::find($id);
        return view('settingPages.setting-edit',$data);
    }
    public function update(Request $request,$id){
        $data = Setting::find($id);

        $data->title = $request->title;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->location = $request->location;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->twitter = $request->twitter;
        $data->linkedin = $request->linkedin;

        if($request->hasFile('logo')){

            $destination = 'images/settings'.$data->image;
            if(File::exists($destination)){ File::delete($destination); }

            $file=$request->file('logo');
            $imageName=date('YmdHis') . "." . $file->getClientOriginalName();

            $request->file('logo')->storeAs('images/settings/',$imageName);
            $file->move(public_path('images/settings/'),$imageName);
            
            $data->logo = $imageName;
        }

        $data->update();
        return redirect()->to('/setting');
    }
}
