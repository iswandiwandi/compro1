<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Experience::get();
        $title = "Data Experience";
        return view('experience.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Experience";
        return view('experience.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Experience::create([
            'nama_sekolah' => $request->nama_sekolah,


        ]);

        return redirect()->to('admin/experience')->with('massage', 'Data Berhasil ditambah');
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
        $edit = Experience::find($id);
        $title = "Edit Data  " . $edit->name;
        return view('experience.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Experience::where('id', $id)->update([
            'nama_sekolah' => $request->nama_sekolah,

        ]);
        return redirect()->to('admin/experience')->with('message', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Experience::where('id', $id)->delete();
        return redirect()->to('admin/experience')->with('massage', 'Data berhasil di hapus');
    }
}
