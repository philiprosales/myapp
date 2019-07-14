<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use DB;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$skills = Skill::all();
        //return Skill::where('confidencelvl', 'Option One')->get();
        //$skills = DB::select('SELECT * FROM skills');
        //$skills = Skill::orderBy('confidencelvl', 'desc')->take(1)->get();
        //$skills = Skill::orderBy('created_at', 'asc')->paginate(1);
        
        $skills = Skill::orderBy('created_at', 'asc')->get();
        return view ('skills.index')->with('skills', $skills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'confidencelvl' => 'required',
            'skill_icon' => 'required'
        ]);
        
        // Create Skill
        $skill = new Skill;
        $skill->confidencelvl = $request->input('confidencelvl');
        $skill->skill_icon = $request->input('skill_icon');
        $skill->save();

        return redirect('/skills')->with('success', 'Skills Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skill::find($id);
        return view('skills.show')->with('skill', $skill);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('skills.edit')->with('skill', $skill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'confidencelvl' => 'required',
            'skill_icon' => 'required'
        ]);
        
        // Create Skill
        $skill = new Skill;
        $skill->confidencelvl = $request->input('confidencelvl');
        $skill->skill_icon = $request->input('skill_icon');
        $skill->save();

        return redirect('/skills')->with('success', 'Skills Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('/skills')->with('success', 'Skill Removed');
    }
}
