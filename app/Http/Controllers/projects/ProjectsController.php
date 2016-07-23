<?php namespace App\Http\Controllers\Content;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use Config;
use Request;
use Response;
use Log;
use Auth;
use DB;

use App\Model\ContentProjectModel;
use App\Model\ContentProjectTopicModel;
use App\Model\ContentProjectGenericModel;

class ProjectsController extends Controller {

	public function projects(){
		return view('projects');
	}

	 public function projectsload(){
	 	
		$all_avail_proj = ContentProjectModel::whereIn('available', [1,2,3])->orderBy('created_at', 'DESC')->get();
		return view('project_content')->with('project', $all_avail_proj);
	} 


	 public function projectGeneric(){
	 	
		$all_proj = ContentProjectGenericModel::where('available',1)->orderBy('id', 'ASC')->get();
		return view('project_content_generic')->with('projectgen', $all_proj);
		Log::info($all_proj);
	} 


	public function ProjDesc(){

		
		if(!Input::has('proj_id')){
			return json_encode([Config::get('constants.CONTENT.GENERAL.JSON_ERROR_TAG') => 'Tutorial ID not passed. Please contact us at ' . Config::get('constants.CONTENT.GENERAL.CONTACT_EMAIL') . '!']);
		}

		$proj_id = Input::get('proj_id');
		$cur_proj = ContentProjectModel::find($proj_id);
	    $pid = $cur_proj->id;

		if(count($pid) == 0){
			return json_encode([Config::get('constants.CONTENT.GENERAL.JSON_ERROR_TAG') => 'Incorrect Tutorial ID passed. Please contact us at ' . Config::get('constants.CONTENT.GENERAL.CONTACT_EMAIL') . '!']);
		}
		else

		$data = ContentProjectTopicModel::where('proj_id',$pid)->first();

		DB::table('con_project_list')->where('id',$pid)->increment('count_project');
		log::info("Hi");
		DB::table('content_count')->where('id', Auth::user()->id)->increment('down_project');

		return view('show_projects')->with(['cur_proj'  =>	$cur_proj, 'data' => $data]);
	
}
}
