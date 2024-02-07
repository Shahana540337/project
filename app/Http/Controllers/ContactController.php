<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Setting;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        $data['setting'] = Setting::first();
        return view('contactPages.index', compact('contacts'),$data);
    }

    public function store(Request $request){
        $data = new Contact;
 
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;

        $data->save();
 
        return redirect('/');
    }

    public function delete($id){
        $data = Contact::find($id);

        $data->delete();
        return redirect('/contact-index');
    }
}
