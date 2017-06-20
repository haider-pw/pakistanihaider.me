<?php

namespace App\Http\Controllers\Admin;

use App\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resources
     */
    public function index()
    {
        $this->data['skills'] = Skill::all();
        return view('admin.skills.list')->with('data',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    //Store the Data in database
    public function store(Request $request)
    {
        $this->validate($request,[
            'skill' => 'required'
        ]);

        $skill = Skill::create([
            'name' => $request['skill'],
            'label' => str_replace(' ','_',$request['skill'])
        ]);

        if($skill){
            return $skill;
        }else{
            return 'FAIL::Could not add record to the database::error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return $skill['name'];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'skillID' => 'required|integer',
            'skill' => 'required'
        ]);

//        Skill::updateOrInsert();
        $Skill = Skill::find($request['skillID']);
        $Skill->name = $request['skill'];
        $boolResult = $Skill->save();
        if($boolResult){
            echo 'OK::Record Successfully Updated::success';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $boolResult = $skill->delete();
        if($boolResult){
            echo 'OK::Record Successfully Deleted::success';
        }
    }
}
