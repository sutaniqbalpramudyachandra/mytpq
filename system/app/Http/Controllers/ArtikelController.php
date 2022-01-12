<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $data['list_artikel'] = Artikel::all();
        return view('artikel.index', $data);
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store()
    {
        $artikel = new Artikel;
        $artikel->judul = request('judul');
        $artikel->isi = request('isi');
        $artikel->tanggal = request('tanggal');
        $artikel->save();

        return redirect('admin/artikel')->with('success','Data Berhasil Ditambahkan');
    }

    public function show(Artikel $artikel)
    {
        $data['artikel'] = $artikel;
        return view('artikel.show', $data);
    }

    public function edit(Artikel $artikel)
    {
        $data['artikel'] = $artikel;
        return view('artikel.edit', $data);
    }

    public function update(Request $request, Artikel $artikel)
    {
        $artikel->judul = request('judul');
        $artikel->isi = request('isi');
        $artikel->tanggal = request('tanggal');
        $artikel->save();

        return redirect('admin/artikel')->with('waning','Data Berhasil Diubah');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect('admin/artikel')->with('danger','Data Berhasil Dihapus');
    }
}
