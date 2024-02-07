<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\setting;

class BannerController extends Controller
{
    public function index(){
        $data['banner'] = Banner::first();
        $data['setting'] = Setting::first();
        return view('bannerPages.banner',$data);
    }
    public function edit($id){
        $data['banner'] = Banner::find($id);
        $data['setting'] = Setting::first();
        return view('bannerPages.banner-edit',$data);
    }
    public function update(Request $request, $id){
        $data = Banner::find($id);

        $data->title = $request->title;

        $data->Update();
        return redirect('/banner');
    }
}
