<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/admin/mapel/list', [
            'title' => 'School app | Daftar List',
            'mapel' => Mapel::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/admin/mapel/create', [
            'title' => 'Bikin Mapel'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_mapel' => 'required|unique:mapel'
        ]);

        Mapel::create($data);

        return redirect('mapel')->with('berhasil', 'Mapel Baru Sudah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        // return $mapel;
        return view('dashboard/admin/mapel/edit', [
            'title' => 'Ubah Data Mapel',
            'mapel' => $mapel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        // $mapel = Mapel::find($id);
        $request->validate([
            'nama_mapel' => 'required|unique:mapel'
        ]);
        $mapel->nama_mapel = $request->input('nama_mapel');

        $mapel->save();

        return redirect('mapel')->with('berhasil', 'Mapel Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {

        Mapel::destroy($mapel->id);
        return redirect('mapel')->with('berhasil', 'data berhasil dihapus');
    }
}
