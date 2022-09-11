<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Kelas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $materi = Materi::count();
        $kelas = Kelas::count();
        $guru = User::count();
        $mapel = Mapel::count();
        return view('dashboard.admin.home', [
            'materiCount' => $materi,
            'kelasCount' => $kelas,
            'guruCount' => $guru,
            'mapelCount' => $mapel,
        ]);
    }
}
