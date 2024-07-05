<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;



class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Blog::get();
        $title = "Data Blog";
        return view('blog.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Blog";
        return view('blog.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::create([
            'judul' => $request->judul,
            'kotak_gambar' => $request->kotak_gambar,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,






        ]);

        return redirect()->to('admin/blog')->with('massage', 'Data Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Blog::find($id);
        $title = "Edit Data  " . $edit->name;
        return view('blog.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::where('id', $id)->update([
            'judul' => $request->judul,
            'kotak_gambar' => $request->kotak_gambar,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,

        ]);
        return redirect()->to('admin/blog')->with('message', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::where('id', $id)->delete();
        return redirect()->to('admin/blog')->with('massage', 'Data berhasil di hapus');
    }
}


