<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\slidermodel;
use App\model\newsmodel;
use App\model\testimonialmodel;

class HomeController extends Controller
{
   public function home()
    {
    	$s=slidermodel::get();
    	$n=newsmodel::orderBy('id','desc')->paginate(3);
    	$t=testimonialmodel::get();
    	return view('frontend.pages.home',compact('s','n','t'));
    }
}
