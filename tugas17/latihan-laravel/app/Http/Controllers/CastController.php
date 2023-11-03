<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cast = DB::table('cast')->get();
        return view('cast', ['cast' => $cast]);
        // return $casts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        DB::table('cast')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);
        return redirect('cast')->with('status','cast berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $cast =DB::table('cast')->find($id);
        return view('show', compact('cast'));
    }

    public function edit($id)
    {   
        $cast = DB::table('cast')->find($id);
        return view('edit', compact(['cast']));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'umur' => 'required',
        'bio' => 'required',
    ]);

    DB::table('cast')
        ->where('id', $id)
        ->update([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

    return redirect('/cast')->with('success', 'Data berhasil diperbarui!');
}


    public function delete($id)
    {
        // return "delete";
        DB::table('cast')->where('id',$id)->delete();
        return redirect('cast')->with('status','Cast berhasil dihapus');
    }
}
