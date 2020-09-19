<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\testimonialmodel;

class testicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $t=testimonialmodel::find($id);
        return view('backend.homepage.testimonial_form',compact('t'));
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
        $this->validate($request,[
            'image'=>'required',
            'post'=>'required',
            'saying'=>'required',
            'name'=>'required',

        ]);
        $t=testimonialmodel::find($id);
        $dest='backend/testi_img';
        if($request->image){
            $extension=$request->image->getClientOriginalExtension();
            $imgname=rand(111111111,999999999).'.'.$extension;
            $request->image->move($dest,$imgname);
            $t->image=$imgname;
        };
        $t->position=$request->post;
        $t->sayings=$request->saying;
        $t->name=$request->name;
        $t->save();
        return redirect('/admin/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
