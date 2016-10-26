<?php namespace App\Http\Controllers\Content;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MainPagesController extends Controller {

	public function index(){
		return view('content.index');
	}

	public function aboutus(){
		return view('content.coming_soon');
		//return view('content.about-us');
	}

	public function talks(){
		return view('content.coming_soon');
		//return view('content.about-us');
	}

	public function projects(){
		return view('content.coming_soon');
		//return view('content.about-us');
	}

	public function constructPage(){
		sleep(1);
		return view('content.coming_soon');
	}
	public function congallery(){
		return view('content.gallery');
	}
}
