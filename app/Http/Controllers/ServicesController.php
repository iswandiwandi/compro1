<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Services::get();
        $title = "Data Services";
        return view('services.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Services";
        return view('services.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Services::create([
            'kotak_putih' => $request->kotak_putih,
            'kotak_abu' => $request->kotak_abu,

        ]);

        return redirect()->to('admin/services')->with('massage', 'Data Berhasil ditambah');
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
        $edit = Services::find($id);
        $title = "Edit Data  " . $edit->name;
        return view('services.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Services::where('id', $id)->update([
            'kotak_putih' => $request->kotak_putih,
            'kotak_abu' => $request->kotak_abu,


        ]);
        return redirect()->to('admin/services')->with('message', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Services::where('id', $id)->delete();
        return redirect()->to('admin/services')->with('massage', 'Data berhasil di hapus');
    }
}
