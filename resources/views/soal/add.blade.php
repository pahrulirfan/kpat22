@extends('layout.template')
@section('judul', 'Tambah Soal')

@section('isi')
    <div class="card">
        <div class="card-header">Form Tambah Soal
            <a href="{{ route('soal.index')  }}" class="btn btn-sm btn-warning float-end">Kembali</a>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form class="row g-3" action="{{ route('soal.save') }}" method="post">
                @csrf
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nama MK</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nama_mk">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Dosen</label>
                    <input type="text" class="form-control" id="inputPassword4" name="dosen">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Jumlah Soal</label>
                    <input type="text" class="form-control" id="inputZip" name="jumlah_soal">
                </div>
                <div class="col-10">
                    <label for="inputAddress" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="inputAddress" name="keterangan">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
