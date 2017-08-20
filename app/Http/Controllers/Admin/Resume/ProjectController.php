<?php

namespace App\Http\Controllers\Admin\Resume;

use App\Http\Controllers\AdminController;
use App\Models\Resume\Portfolio;
use App\Models\Resume\Project;
use App\Models\System\PortfolioType;
use App\Resume;
use Illuminate\Http\Request;

class ProjectController extends AdminController
{
    public function create(){
        $this->data['types'] = PortfolioType::all();
        return view('admin.portfolio.add',$this->data);
    }

    public function store(Request $request){

        //First of All validate the Request
        $this->validate($request,[
            'title' => 'required',
            'type' => 'required|integer',
            'company' => 'required'
        ]);

        //First we need to check if Portfolio has the Type Class
        $portfolio = Portfolio::where('portfolio_type_id',$request['type'])->first();

        if(empty($portfolio)){
            //Get the Active Resume
            $ActiveResume = Resume::where('active',1)->first();

            //Create a new Portfolio Record for this Resume for the selected Type.
            $portfolio = new Portfolio();
            $portfolio->resume_id = $ActiveResume->id;
            $portfolio->portfolio_type_id = $request['type'];
            $resultPortfolio = $portfolio->save();
            if(!$resultPortfolio){
                return false;
            }
        }

        //We have the portfolio for which we want this project to be added.
        $Project = new Project();
        $Project->portfolio_id = $portfolio->id;
        $Project->title = $request['title'];
        $Project->website = $request['website'];
        $Project->company = $request['company'];
        $Project->tools = $request['tools'];
        $Project->description = $request['description'];

        $resultProject = $Project->save();
        if(!$resultProject){
            flash('Failed to add project to DB')->error();
            return false;
        }
        flash('Project Successfully Added')->success();
        return redirect()->to(route('portfolio'));
    }
}
