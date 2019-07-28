<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aduan;

class UrusAduanController extends Controller
{
    //lock only to admins
    public function __construct()
    {
        $this->middleware('auth');
        //to block un-authorised user
    }

    public function index()
    {
        //
        $aduans=Aduan::all()->toArray();
        return view ('urusaduan.index', compact('aduans'));
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
        //
        //display edit form
        $aduan = Aduan::find($id);
        return view('urusaduan.edit',
            compact('aduan','id'));
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
        //
        $aduan=Aduan::find($id);
        $aduan->tindakan=$request->get('tindakan');
        $aduan->save();

        return redirect('/urusaduan')->with('success','Maklumbalas telah direkod');
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
