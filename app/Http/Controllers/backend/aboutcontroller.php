<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\aboutmodel;

class aboutcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=aboutmodel::get();
        // dd($a);
        return view('backend.about.about',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a=aboutmodel::get();

        // dd($a);
        return view('backend.about.aboutedit',compact('a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        //
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
            'location'=>'required',
            'top'=>'required',
            'df'=>'required',
            'gh'=>'required',
            'h'=>'required',
            'tls'=>'required',
            'pts'=>'required',
            'tct'=>'required',
            'gct'=>'required',
            'ic'=>'required',
            'aeg'=>'required',
            'dme'=>'required',
            'wme'=>'required',
            'tll'=>'required',


        ]);
        $b=aboutmodel::find($id);
        $b->location=$request->location;
        $b->type_of_project=$request->top;
        $b->design_flow=$request->df;
        $b->gross_head=$request->gh;
        $b->headwork=$request->h;
        $b->tls=$request->tls;
        $b->pts=$request->pts;
        $b->tct=$request->tct;
        $b->gct=$request->gct;
        $b->ic=$request->ic;
        $b->aeg=$request->aeg;
        $b->dme=$request->dme;
        $b->wme=$request->wme;
        $b->tll=$request->tll;

        $b -> save();
        return redirect('admin/about');
        

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
