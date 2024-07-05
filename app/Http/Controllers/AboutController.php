<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $datas = About::get();
            $title = "Data About";
            return view('about.index', compact('datas', 'title'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $title = "Tambah About";
            return view('about.create', compact('title'));
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            About::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'kotak_putih' => $request->kotak_putih,
                'kotak_kuning' => $request->kotak_kuning,

            ]);

            return redirect()->to('admin/about')->with('massage', 'Data Berhasil ditambah');
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
            $edit = About::find($id);
            $title = "Edit Data  " . $edit->name;
            return view('about.edit', compact('edit', 'title'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            About::where('id', $id)->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'kotak_putih' => $request->kotak_putih,
                'kotak_kuning' => $request->kotak_kuning,

            ]);
            return redirect()->to('admin/about')->with('message', 'Data berhasil di ubah');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            About::where('id', $id)->delete();
            return redirect()->to('admin/about')->with('massage', 'Data berhasil di hapus');
        }
    }


