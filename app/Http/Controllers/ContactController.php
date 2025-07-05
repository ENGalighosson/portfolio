<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Ensure you have the About model imported
class ContactController extends Controller
{
    public function read_contact()
{
    $contacts = Contact::all(); // Make sure Contact model exists
    return view('admin.contact', compact('contacts'));
}






public function edit_contact($id)
{
    $contact = Contact::find($id); // Make sure Contact model exists
    return view('admin.form_edit_contact', compact('contact'));
}


public function update_contact(Request $request, $id)
{
    $contact = Contact::find($id);

    
    $contact->address = $request->address;
    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->maps = $request->maps;

    $contact->save();

    return redirect()->route('read_contact')->with('success', 'Contact page updated successfully!');
}

}
