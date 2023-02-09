<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita = Berita::all();
        return view('backend.berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.berita.create');
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
        $validate = $request->validate([
            'title' => 'required|unique:beritas',
            'body' => 'required',
            'foto' => 'required',

        ]);            
        
        $beritas = new Berita();
        $beritas->title = $request->title;
        $beritas->body = $request->body;
        $beritas->excerpt = Str::limit(strip_tags($request->body), 80, '...');
        $beritas->excerpttitle = Str::limit(strip_tags($request->title), 45, '...');
        if ($request->hasFile('foto')) {
            $beritas->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/berita/', $name);
            $beritas->foto = $name;
        }
        $beritas->slug = Str::slug($beritas['foto']);

        $beritas->save();

        return redirect('/berita')->with('success', 'data created successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = berita::findOrFail($id);
        return view('backend.berita.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $berita = Berita::findOrFail($id);
        return view('backend.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validate = $request->validate([
            'title' => 'required',
            'foto' => 'required',
            'body' => 'required',

        ]);
        
        
            
        

        $beritas = berita::findOrFail($id);
        $beritas->title = $request->title;
        if ($request->hasFile('foto')) {
            $beritas->deleteImage(); //menghapus foto sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/berita/', $name);
            $beritas->foto = $name;
        }
        $beritas->body = $request->body;
        $beritas->excerpt = Str::limit(strip_tags($request->body), 80, '...');
        $beritas->excerpttitle = Str::limit(strip_tags($request->title), 45, '...');
        $beritas->slug = Str::slug($beritas['foto']);
        $beritas->save();

        return redirect('/berita')->with('success', 'data created successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $beritas = Berita::findOrFail($id);
        $beritas->delete();
        return redirect('/berita')
            ->with('success', 'Data berhasil dihapus!');
    }
}
