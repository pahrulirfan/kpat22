@extends('layout.template')
@section('judul', 'Data Soals')

@section('isi')
    <div class="card">
        <div class="card-header">
            Data Soal
            <a href="{{ route('soal.create')  }}" class="btn btn-sm btn-primary float-end">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama MK</th>
                    <th>Dosen</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Pembuat</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($soals as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama_mk }}</td>
                        <td>{{ $row->dosen }}</td>
                        <td>{{ $row->jumlah_soal }}</td>
                        <td>{{ $row->keterangan }}</td>
                        <td>{{ $row->user ? $row->user->name : 'Admin' }}</td>
                        <td>
                            Update | Delete
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
