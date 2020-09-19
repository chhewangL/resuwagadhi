<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\gallerymodel;

class GallaryController extends Controller
{
    public function gallary()
    {
    	$g=gallerymodel::get();
    	// dd($g);

    	return view('frontend.pages.gallary',compact('g'));
    }
}
