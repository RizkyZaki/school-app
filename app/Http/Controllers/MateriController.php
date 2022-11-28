<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::where('id_user', auth()->user()->id)->latest()->paginate(8);
        // dd($materi);
        return view('dashboard/guru/materi/list', [
            'materi' => $materi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.guru.materi.create', [
            'kelas' => Kelas::all(),
            'mapel' => Mapel::all(),
            'title' => 'Add Materi'
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
        // $materi = new Materi();
        $validatedData = $request->validate([
            'judul' => 'required|unique:materi',
            // 'slug' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|file',
            'id_kelas' => 'required',
            'id_mapel' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->input('judul'), '-');
        $validatedData['id_user'] = auth()->user()->id;
        $validatedData['gambar'] = $request->file('gambar')->store('gambar');
        // ddd($validatedData);
        Materi::create($validatedData);


        return redirect('materi')->with('berhasil', 'Data Berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        return view('dashboard.guru.materi.detail', [
            'materi' => $materi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        return view('dashboard.guru.materi.edit', [
            'title' => 'Ubah Data Materi',
            'materi' => $materi,
            'kelas' => Kelas::all(),
            'mapel' => Mapel::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {

        $rules = [
            // 'judul' => 'required|unique:materi',
            // 'slug' => 'required',
            'isi' => 'required',
            'gambar' => 'image|file',
            'id_kelas' => 'required',
            'id_mapel' => 'required',
        ];

        if ($request->judul != $materi->judul) {
            $rules['judul'] = 'required|unique:materi';
        }

        $validatedData = $request->validate($rules);

        $validatedData['slug'] = Str::slug($request->input('judul'), '-');
        $validatedData['id_user'] = auth()->user()->id;
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('gambar');
        }

        // ddd($validatedData);

        Materi::where('id', $materi->id)->update($validatedData);

        return redirect('materi')->with('berhasil', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        if ($materi->gambar) {
            Storage::delete($materi->gambar);
        }
        Materi::destroy($materi->id);
        return redirect('materi')->with('berhasil', 'data berhasil dihapus');
    }
}
