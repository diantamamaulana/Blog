<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artikels=\App\Artikel::all();
        return view('index',compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        $artikel = new\App\Artikel;
        if($request->file('foto') == "")
        {
            $artikel->gambar = $artikel->gambar;
        }
        else
        {
            $file       = $request->file('foto');
            $filename   = $file->getClientOriginalName();
            $request->file('foto')->move("foto/",$filename);
            $artikel->foto = $filename;
        }
        $artikel ->judul = $request->get('judul');
        $artikel ->deskripsi = $request->get('deksripsi');
        $artikel ->pembuat = $request->get('pembuat');
        $artikel ->kategori = $request->get('kategori');

        
        $artikel->update();
        $artikel->save();
        return redirect('/artikel')->with('success', 'Data telah ditambahkan');
        return redirect()->to('/artikel');
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
        $artikel = \App\Artikel::find($id);
        $comment = \App\comment::all();
        return view('artikelpost',compact('artikel','id','comment'));
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
        $artikel = \App\Artikel::find($id);
        return view('edit',compact('artikel','id'));
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
        $artikel= \App\Artikel::find($id);
        if($request->file('foto') == "")
        {
            $artikel->foto = $artikel->foto;
        }
        else
        {
            $file       = $request->file('foto');
            $filename   = $file->getClientOriginalName();
            $request->file('foto')->move("foto/",$filename);
            $artikel->foto = $filename;
        }
        $artikel ->judul = $request->get('judul');
        $artikel ->deskripsi = $request->get('deskripsi');
        $artikel ->pembuat = $request->get('pembuat');
        $artikel ->kategori = $request->get('kategori');

        
        $artikel->update();
        $artikel->save();
        return redirect('/artikels')->with('success', 'Data anda telah dirubah');
        return redirect()->to('/artikels');
        
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
        $artikel = \App\Artikel::find($id);
        $artikel->delete();
        return redirect('artikels')->with('success', 'Data telah dihapus');
    }
}
