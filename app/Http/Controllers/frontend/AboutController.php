<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\aboutmodel;

class AboutController extends Controller
{
    public function about()
    {
    	$a=aboutmodel::get();
    	return view('frontend.pages.about',compact('a'));
    }
}
