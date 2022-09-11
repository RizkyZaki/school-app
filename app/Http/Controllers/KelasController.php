<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/admin/kelas/list', [
            'title' => 'School app | Daftar List',
            'kelas' => Kelas::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/admin/kelas/create', [
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
            'nama_kelas' => 'required|unique:kelas',
            'jurusan' => 'required|unique:kelas',
        ]);

        Kelas::create($data);

        return redirect('kelas')->with('berhasil', 'Mapel Baru Sudah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kela)
    {
        // return $kela;
        return view('dashboard/admin/kelas/edit', [
            'title' => 'Ubah Data Mapel',
            'kelas' => $kela
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kela)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'jurusan' => 'required'
        ]);
        $kela->nama_kelas = $request->input('nama_kelas');
        $kela->jurusan = $request->input('jurusan');

        $kela->save();

        return redirect('kelas')->with('berhasil', 'Mapel Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kela)
    {
        Kelas::destroy($kela->id);
        return redirect('kelas')->with('berhasil', 'data berhasil dihapus');
    }
}
