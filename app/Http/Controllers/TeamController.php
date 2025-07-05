<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{
   
    public function show_team(){

        $teams = Team::all();

        return view('admin.team', compact('teams'));
    }

    public function add_team(){

        return view('admin.form_add_team');
    }

    public function create_team(Request $request){

        $team = new Team;

        $team->name = $request->name;
        $team->job = $request->job;
        $team->short_desc = $request->short_desc;
        $team->email = $request->email;
        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->twitter = $request->twitter;
        $team->instagram = $request->instagram;

        $image = $request->photo;

        $photoname = time().'.'.$image->getClientOriginalExtension();

        $image->move('photo_team',$photoname);

        $team->photo = $photoname;

       

        $team->save();

        return redirect()->route('read_team');
    }

    public function delete_team($id){

        $team = Team::find($id);

        unlink('photo_team/'.$team->photo);

        $team->delete();

        return redirect()->back();
    }

    public function read_team(){

        $teams = Team::all();

        return view('admin.team',compact('teams'));
    }

    public function edit_team($id){

        $team = Team::find($id);

        return view('admin.form_edit_team',compact('team'));
    }

    public function update_team(Request $request, $id){

        $team= Team::find($id);

        $team->name = $request->name;
        $team->job = $request->job;
        $team->short_desc = $request->short_desc;

        

        

        $team->email = $request->email;
        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->twitter = $request->twitter;
        $team->instagram = $request->instagram;



        $image = $request->photo;

        If($image){

            unlink('photo_team/'.$team->photo);

            $photoname = time().'.'.$image->getClientOriginalExtension();

            $image->move('photo_team',$photoname);

            $team->photo = $photoname;

        }


        $team->save();

        return redirect()->route('read_team');
    }


    

}




