<?php

namespace App\Http\Controllers;

use App\Models\System\SkillsGroup;
use App\Resume;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $data;
    /**
     * Show the Resume Home Page..
     */
    public function index()
    {
        $this->data['activeResume'] = Resume::with('user','blocks')->where('active',1)->first();
        if(!empty($this->data['activeResume'])){
            $this->data['blocks'] = collect($this->data['activeResume']->blocks)->pluck('value','key')->toArray();
        }

        if(isset($this->data['blocks']['skills_boxes']) && $this->data['blocks']['skills_boxes'] == '1'){
            $this->data['skillGroups'] = SkillsGroup::limit(2)->get();
        }
        return view('home')->with('data',$this->data);
    }
}
