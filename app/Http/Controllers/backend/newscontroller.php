<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\newsmodel;
// use Illuminate\support\facades\Input;

class newscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $n=newsmodel::get();
        return view('backend.news.news',compact('n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.news_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'heading'=>'required',
            'category'=>'required',
            'doc'=>'required',

        ]);
        $r=new newsmodel();

        $dest='backend\newsfile';
        
            $extension=$request->doc->getClientOriginalExtension();
            $filename=rand(11111111,99999999).'.'.$extension;
            $request->doc->move($dest,$filename);
            $r -> document=$filename;
        

        $r-> heading = $request -> heading;
        // $r-> image = $request -> image;
        $r-> published_date =date("y-m-d");
        $r-> category = $request -> category;

        $r ->save();
        return redirect('admin/news');
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
        $n=newsmodel::find($id);
        // dd($n);
        return view('backend.news.news_edit',compact('n'));
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
            'heading'=>'required',
            'category'=>'required',
            'doc'=>'required',

        ]);
        $r=newsmodel::find($id);

        $dest='backend\newsfile';
        if($request->doc){
            $extension=$request->doc->getClientOriginalExtension();
            $filename=rand(11111111,99999999).'.'.$extension;
            $request->doc->move($dest,$filename);
            $r -> document=$filename;
        }
        

        $r-> heading = $request -> heading;
        // $r-> image = $request -> image;
        $r-> published_date =date("y-m-d");
        $r-> category = $request -> category;

        $r ->save();
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $n=newsmodel::find($id);
        $n->delete();
        return redirect('admin/news');
    }
}
