<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\newsmodel;

class NewsController extends Controller
{
    public function news()
    {
    	$n=newsmodel::orderBy('published_date','desc')->get();
    	// dd($n);
    	return view('frontend.pages.news',compact('n'));
    }
}
