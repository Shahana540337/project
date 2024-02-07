<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skillabout;
use App\Models\About;
use App\Models\Setting;

class SkillaboutController extends Controller
{
    public function skill_index(){
        $data['skillabout'] = Skillabout::get();
        $data['about'] = About::first();
        $data['setting'] = Setting::first();
        return view('aboutPages.aboutSkill',$data);
    }
    
    public function skill_create(){
        $data['setting'] = Setting::first();
        return view('aboutPages.aboutSkill-create',$data);
    }

    public function skill_store(Request $request){
        $data = new Skillabout;

        $data->skill_title = $request->skill_title;
        $data->skill_percentage = $request->skill_percentage;

        $data->save();
        return redirect('/aboutSkill');
    }

    public function skill_delete($id){
        $data = Skillabout::find($id);

        $data->delete();
        return redirect('/aboutSkill');
    }

    public function skill_edit($id){
        $data['skillabout'] = Skillabout::find($id);
        $data['setting'] = Setting::first();
        return view('aboutPages.aboutSkill-edit',$data);
    }

    public function skill_update(Request $request,$id){
        $data = Skillabout::find($id);

        $data->skill_title = $request->skill_title;
        $data->skill_percentage = $request->skill_percentage;

        $data->Update();
        return redirect('/aboutSkill');
    }
}

