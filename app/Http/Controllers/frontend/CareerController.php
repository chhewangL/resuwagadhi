<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\newsmodel;

class CareerController extends Controller
{
public function career()
    {
    	$c=newsmodel::where('category','=','career')->orderBy('published_date','desc')->get();

    	return view('frontend.pages.careers',compact('c'));
    }
}
