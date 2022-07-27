@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Pengajar</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pengajar</th>
                <th scope="col">Matkul Pengajar </th>
                <th scope="col">Foto Pengajar</th>
                <th scope="col">Aksi</th>
              
               
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajars as $pengajar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pengajar->nama_pengajar }}</td>
                <td>{{ $pengajar->matkul_pengajar }}</td>
                <td><img src="{{asset('/storage/' .$pengajar->foto_pengajar)}}" height="75px" width="100px"></td>
              
              
                <td>
                    <a href="/admin/training/{{ $pengajar->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                    <form method="post" action="/admin/training/{{ $pengajar->id }}" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="trash"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection