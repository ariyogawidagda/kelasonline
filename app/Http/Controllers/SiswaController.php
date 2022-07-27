<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function index()
    {
        return view('admin.siswa.index', [
            'siswas' => Siswa::all(),
        ]);
    }

    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.edit', [
            'siswa' => $siswa,
        ]);
    }

    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required',
            'tgl_lahir_siswa' => 'required',
            'alamat_siswa' => 'required',
            'email_siswa' => 'required',
            'email_siswa' => 'required',
            'nomor_telepon_siswa' => 'required',
            'asal_sekolah_siswa' => 'required'
        ]);

        Siswa::where('id', $siswa->id)->update($validatedData);

        return redirect('/admin/siswa')->with('success', 'Data siswa berhasil di edit!');
    }
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);

        return redirect('/admin/siswa')->with('success', 'Data pelatihan berhasil di hapus!');
    }
}
