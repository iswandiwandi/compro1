<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Education::get();
        $title = "Data Education";
        return view('education.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Education";
        return view('education.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Education::create([
            'nama_sekolah' => $request->nama_sekolah,


        ]);

        return redirect()->to('admin/education')->with('massage', 'Data Berhasil ditambah');
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
        $edit = Education::find($id);
        $title = "Edit Data  " . $edit->name;
        return view('education.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Education::where('id', $id)->update([
            'nama_sekolah' => $request->nama_sekolah,

        ]);
        return redirect()->to('admin/education')->with('message', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::where('id', $id)->delete();
        return redirect()->to('admin/education')->with('massage', 'Data berhasil di hapus');
    }
}
