<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;

class SubmissionController extends Controller
{
    public function index(){
        //ambil data dari database
        $data = Submission::all();

        //passing data ke view
        return view('submission')->with('data', $data);
    }

    public function store(Request $request){

        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $this->validate($request, [
            'file'          => 'required',
            'keterangan'    => 'required'
        ]);

        //mengambil data file yang diupload
        $file           = $request->file('file');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('file_upload',$file->getClientOriginalName());


        $submission = new Submission;
        $submission->file       = $nama_file;
        $submission->keterangan = $request->input('keterangan');

        //menyimpan data ke database
        $submission->save();

        //kembali ke halaman sebelumnya
        return back();
    }


    public function destroy(Submission $submission)
    {
        Submission::destroy($submission->id);

        return redirect('/submission')->with('success', 'Data pelatihan berhasil di hapus!');
    }
}

