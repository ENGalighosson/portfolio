<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormContact; // Ensure you have the FormContact model imported
class FormContactController extends Controller
{
  public function create_formcontact(Request $request){

        $formContact = new FormContact;


        $formContact->name = $request->name;
        $formContact->email = $request->email;

        $formContact->subject = $request->subject;
        $formContact->message = $request->message;


        $formContact->save();

        return redirect()->route('show_home')->with('success', 'Your message has been sent successfully!');



    }

    public function delete_formcontact($id){

        $formContact = FormContact::find($id);

        $formContact->delete();

        return redirect()->back();


    }

    public function read_formcontact(){

        $formcontacts = FormContact::all();

        return view('admin.formcontact',compact('formcontacts'));
    }

    public function detail_formcontact($id){

        $formcontact = FormContact::find($id);

        return view('admin.formcontact_detail',compact('formcontact'));
    }

}


