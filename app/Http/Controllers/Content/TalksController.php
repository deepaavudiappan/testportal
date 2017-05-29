<?php namespace App\Http\Controllers\Content;

use Input;
use Config;
use Response;
use Log;
use DB;
use Auth;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\TalkModel;
use App\Model\TalkSeriesModel;


class TalksController extends Controller {

	public function index(){
		return view('content.index');
	}

	public function talks(){
		Log::info("talks");
		$table_talks=TalkModel::where('available','=',1)->get();
		Log::info($table_talks);
		return view('talks.talks')->with('table_talks',$table_talks);
	}
	
	public function talk_series(){
		Log::info("talk_series");
		$talk_id = Input::get('talk_id');
		Log::info("tftgjrees");
		$talk_details = TalkModel::where('id','=',$talk_id)->get();
		Log::info($talk_details);
	    $cur_talk = TalkSeriesModel::where('display','=',$talk_id)->get();
	    Log::info($cur_talk);
		return view('talks.talk_series')->with(['talk_details'=> $talk_details,'cur_talk' => $cur_talk]);
	}

	public function talks_base(){
		Log::info("talks_base");
		return view('talks.talk_base');
	}
}