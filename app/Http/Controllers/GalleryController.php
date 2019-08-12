<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries=\App\Gallery::all();
        return view('datagallery',compact('galleries'));
    }

    public function index1()
    {
        //
        $galleries=\App\Gallery::all();
        return view('gallery',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('creategallery');
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
        $gallery = new\App\Gallery;
        if($request->file('foto') == "")
        {
            $gallery->foto = $gallery->foto;
        }
        else
        {
            $file       = $request->file('foto');
            $filename   = $file->getClientOriginalName();
            $request->file('foto')->move("gallery/",$filename);
            $gallery->foto = $filename;
        }
        $gallery ->judul = $request->get('judul');
        $gallery ->deskripsi = $request->get('deskripsi');
        

        $gallery->update();
        $gallery->save();
        return redirect('/galery')->with('success', 'Data telah ditambahkan');
        return redirect()->to('/galery');
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
        $gallery = \App\Gallery::find($id);
        return view('edit',compact('gallery','id'));
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
        $gallery= \App\Gallery::find($id);
        if($request->file('foto') == "")
        {
            $gallery->foto = $gallery->foto;
        }
        else
        {
            $file       = $request->file('foto');
            $filename   = $file->getClientOriginalName();
            $request->file('foto')->move("foto/",$filename);
            $gallery->foto = $filename;
        }
        $gallery ->judul = $request->get('judul');
        $gallery ->deskripsi = $request->get('deskripsi');
        
        
        $gallery->update();
        $gallery->save();
        return redirect('/galleries')->with('success', 'Data anda telah dirubah');
        return redirect()->to('/galleries');
        
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
        $gallery = \App\Gallery::find($id);
        $gallery->delete();
        return redirect('galleries')->with('success', 'Data telah dihapus');
    }
}
