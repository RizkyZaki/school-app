<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Kelas;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $listKelas = Kelas::all();
        $mapel = Mapel::count();
        $listMapel = Mapel::all();
        $listMateri = Materi::latest()->limit(5)->get();
        return view('client.landing', [
            'listMapel' => $listMapel,
            'listMateri' => $listMateri,
            'mapelCount' => $mapel,
            'listKelas' => $listKelas,
        ]);
    }

    public function detail(Materi $materi)
    {
        return view('client.detail', [
            'materi' => $materi
        ]);
    }
    public function allMateri()
    {
        $materi = Materi::latest()->get();
        return view('client.listMateri', [
            'materi' => $materi
        ]);
    }

    public function allMapel()
    {
        $mapel = Mapel::all();
        return view('client.listMapel', [
            'mapel' => $mapel
        ]);
    }

    public function mapels($id)
    {
        $mapel = Mapel::find($id);
        return view('client.mapels', [
            'mapel' => $mapel->materi,
            'namaMapel' => $mapel
        ]);
    }

    public function about()
    {
        return view('client.about');
    }

    public function contact()
    {
        return view('client.contact');
    }
}
