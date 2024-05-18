<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        return view('pages.teams.index', ['teams' => Team::get()]);
    }

    public function create()
    {
        return view('pages.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust maximum file size as needed
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/teamProfile'), $imageName);
        }

        Team::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => $imageName, // Assuming you have an 'image' column in your products table
        ]);
        return redirect()->route('team.index')->with('success', 'Member added successfully');
    }

    public function show($id){
        $data = Team::find($id);
        return view('pages.teams.show',compact(['data']));
    }

    public function edit($id){
        $team = Team::where('id', $id)->first();
        return view('pages.teams.edit',compact(['team']));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $team = Team::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($team->image) {
                $oldImagePath = public_path('images/teamProfile/' . $team->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/teamProfile'), $imageName);
            $team->image = $imageName;
        }

        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->description = $request->description;
        $team->save();


        return redirect()->route('team.index')->with('success', 'Details updated successfully');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('team.index')->with('deleted', 'Member deleted successfully');
    }
}
