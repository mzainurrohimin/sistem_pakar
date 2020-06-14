<?php

namespace App\Http\Controllers;

use App\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $tampil = Gejala::all();
        return view('gejala.index',compact('tampil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gejala.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $a = $request->all();
        // Gejala::create($a);
        $gejala= new Gejala();
        $gejala ->id=$request->get('id');
        $gejala->nama_gejala= $request->get('nama_gejala');
        $gejala->save();
        return redirect('gejala');
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
        $edit = Gejala::findOrFail($id);
        return view('gejala.edit',compact('edit'));
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
        $a = $request->all();
        $b = Gejala::findOrFail($id);
        $b -> update($a);
        return redirect('gejala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete= Gejala::findOrFail($id);
        $delete->delete();
        return redirect('gejala');
    }
}
