<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('role', '=', 'guru')->get();
        // return $user;
        // dd($user);
        return view('dashboard.admin.guru.list', [
            'guru' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            // 'role' => 'required',
            'password' => 'required|min:5|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = "guru";

        User::create($validatedData);

        return redirect('guru')->with('berhasil', 'Berhasil Login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = User::find($id);
        // dd($guru);
        return view('dashboard.admin.guru.edit', [
            'guru' => $guru,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            // 'role' => 'required',
            'password' => 'required|min:5|max:255',
        ]);
        $guru = User::find($id);
        $guru->nama_lengkap = $request->input('nama_lengkap');
        $guru->username = $request->input('username');
        if ($request->input('password')) {
            $guru->password = Hash::make($request->input('password'));
        }
        $guru->role = 'guru';

        $guru->save();
        return redirect('guru')->with('berhasil', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('guru')->with('berhasil', 'data berhasil dihapus');
    }
}
