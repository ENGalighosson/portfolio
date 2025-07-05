<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home ;
use App\Models\About; // Assuming you have an About model for the about page
class HomeController extends Controller
{
    public function read_home()
    {
      $homes = Home::all(); // Fetch all home records from the database
        return view('admin.home', compact('homes'));
    }

    public function show_home()
    {
        $homes = Home::get()->first(); // Fetch a specific home record by ID
        return view('frontend.index', compact('homes'));
    }
    public function edit_home($id)
    {
        $homes = Home::find($id); // Fetch a specific home record by ID
        return view('admin.form_edit_home', compact('homes'));
    }
    public function update_home (Request $request, $id)
    {
        $homes = Home::find($id);
        $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            
           
        ],

            [
                'title.required' => 'You must type a title please',
                'short_desc.required' => ' You must type a short description',
            ]
        );  
        $homes->title = $request->title;
        $homes->short_desc = $request->short_desc;
        $homes->save(); // Save the updated home record to the database

        return redirect()->route('read_home')->with('success', 'Home page updated successfully!');
    }



   
public function read_about()
{
    $abouts = \App\Models\About::all(); // Make sure About model exists
    return view('admin.about', compact('abouts'));
}




public function edit_about($id)
{
    $about = \App\Models\About::findOrFail($id); // Make sure About model exists
    return view('admin.form_edit_about', compact('about'));
}


public function update_about(Request $request, $id)
{
    $about = About::findOrFail($id);
    $request->validate([
        'short_desc' => 'required',
        'title1' => 'required',
        'title2' => 'required',
        'title3' => 'required',
        'description'=> 'required',
        'photo'=> 'sometimes|image',
        'title_skills'=> 'required',
        'short_desc_skills'=> 'required',
        'skill1'=> 'required',
        'skill1_percentage'=> 'required',
        'skill2'=> 'required',
        'skill2_percentage'=> 'required',
        'skill3'=> 'required',
        'skill3_percentage'=> 'required',   
        'skill4'=> 'required',
        'skill4_percentage'=> 'required',
    ],
    [
        // ...your custom messages...
    ]);

    $about->short_desc = $request->short_desc;
    $about->title1 = $request->title1;
    $about->title2 = $request->title2;
    $about->title3 = $request->title3;
    $about->description = $request->description;

    $image = $request->file('photo');
    if ($image) {
        if ($about->photo && file_exists('photo_about/' . $about->photo)) {
            unlink('photo_about/' . $about->photo);
        }
        $photoname = time() . '.' . $image->getClientOriginalExtension();
        $image->move('photo_about', $photoname);
        $about->photo = $photoname;
    }

    $about->title_skills = $request->title_skills;
    $about->short_desc_skills = $request->short_desc_skills;
    $about->skill1 = $request->skill1;
    $about->skill1_percentage = $request->skill1_percentage;
    $about->skill2 = $request->skill2;      
    $about->skill2_percentage = $request->skill2_percentage;
    $about->skill3 = $request->skill3;
    $about->skill3_percentage = $request->skill3_percentage;
    $about->skill4 = $request->skill4;
    $about->skill4_percentage = $request->skill4_percentage;

    $about->save();

    return redirect()->route('read_about')->with('success', 'About page updated successfully!');
}

    
public function show_about()
{
    $about = \App\Models\About::get()->first();
    return view('frontend.about', compact('about'));
}
    
}   