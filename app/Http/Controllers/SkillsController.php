<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Skills::get();
        $title = "Data Skills";
        return view('skills.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Skills";
        return view('skills.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skills::create([
            'deskripsi' => $request->deskripsi,
            'garis_warna' => $request->garis_warna,

        ]);

        return redirect()->to('admin/skills')->with('massage', 'Data Berhasil ditambah');
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
        $edit = Skills::find($id);
        $title = "Edit Data  " . $edit->name;
        return view('skills.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Skills::where('id', $id)->update([
            'deskripsi' => $request->deskripsi,
            'garis_warna' => $request->garis_warna,

        ]);
        return redirect()->to('admin/skills')->with('message', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skills::where('id', $id)->delete();
        return redirect()->to('admin/skills')->with('massage', 'Data berhasil di hapus');
    }
}
