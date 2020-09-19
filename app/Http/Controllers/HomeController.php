<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\aboutmodel;
use App\model\gallerymodel;
use App\model\newsmodel;
use App\model\slidermodel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
        
    }
}
