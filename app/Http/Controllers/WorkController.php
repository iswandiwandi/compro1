<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Work::get();
        $title = "Data Work";
        return view('work.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Work";
        return view('work.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Work::create([
            'judul' => $request->judul,
            'line_biru' => $request->line_biru,
            'kotak_biru' => $request->kotak_biru,






        ]);

        return redirect()->to('admin/work')->with('massage', 'Data Berhasil ditambah');
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
        $edit = Work::find($id);
        $title = "Edit Data  " . $edit->name;
        return view('work.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Work::where('id', $id)->update([
            'judul' => $request->judul,
            'line_biru' => $request->line_biru,
            'kotak_biru' => $request->kotak_biru,

        ]);
        return redirect()->to('admin/work')->with('message', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Work::where('id', $id)->delete();
        return redirect()->to('admin/work')->with('massage', 'Data berhasil di hapus');
    }
}
