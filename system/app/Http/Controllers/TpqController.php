<?php

namespace App\Http\Controllers;
use App\Models\Tpq;
use Illuminate\Http\Request;

class TpqController extends Controller
{
    public function index()
    {
        $data['list_tpq'] = Tpq::all();
        return view('tpq.index', $data);
        //
    }

    public function create()
    {
        return view('tpq.create');
        //
    }

    public function store(Request $request)
    {
        $tpq = new Tpq;
        $tpq->id_tpq = request('id_tpq');
        $tpq->nama = request('nama');
        $tpq->alamat = request('alamat');
        $tpq->no_hp = request('no_hp');
        $tpq->latitude = request('latitude');
        $tpq->longtitude = request('longtitude');
        $tpq->photo = request('photo');
        $tpq->save();

        return redirect('admin/tpq')->with('success','Data Berhasil Ditambahkan');
        //
    }

    public function show($id)
    {
        $data['tpq'] = $tpq;
        return view('tpq.show', $data);
        //
    }

    public function edit($id)
    {
        $data['tpq'] = $tpq;
        return view('tpq.edit', $data);
        //
    }

    public function update(Request $request, $id)
    {
        $tpq->id_tpq = request('id_tpq');
        $tpq->nama = request('nama');
        $tpq->alamat = request('alamat');
        $tpq->no_hp = request('no_hp');
        $tpq->latitude = request('latitude');
        $tpq->longtitude = request('longtitude');
        $tpq->photo = request('photo');
        $tpq->update = request('updated_at');
        $tpq->photo = request('created_at');

        $tpq->save();
      return redirect('admin/tpq')->with('success','Data Berhasil Diubah');  //
    }


    public function destroy($id)
    {
        $tpq->delete();
        return redirect('admin/tpq')->with('danger','Data Berhasil Dihapus');
        //
    }
}
