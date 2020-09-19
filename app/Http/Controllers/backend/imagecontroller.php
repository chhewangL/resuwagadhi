<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\gallerymodel;

class imagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g=gallerymodel::get();
        return view('backend.Image.gallery.gallery',compact('g'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Image.gallery.gallery_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $g=new gallerymodel();
        $dist='backend\g_image';
        if($request->image)
        {
            $extension=$request->image->getClientOriginalExtension();
            $imgname=rand(111111111,999999999).'.'.$extension;
            $request->image->move($dist,$imgname);
            $g->image=$imgname;
        }
        $g->description=$request->dis;

        $g->save();
        return redirect('admin/gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $g=gallerymodel::find($id);
        return view('backend.Image.gallery.gallery_edit',compact('g'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $g=gallerymodel::find($id);
        $dist='backend\g_image';
        if($request->image)
        {
            $extension=$request->image->getClientOriginalExtension();
            $imgname=rand(111111111,999999999).'.'.$extension;
            $request->image->move($dist,$imgname);
            $g->image=$imgname;
        }
        $g->description=$request->dis;

        $g->save();
        return redirect('admin/gallery');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $g=gallerymodel::find($id);
        $g->delete();

        return redirect('admin/gallery');
    }
}
