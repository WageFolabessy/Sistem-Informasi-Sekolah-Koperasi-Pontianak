@extends('layouts.main')
@section('title', 'Edit Mapel')

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Edit Mata Pelajaran</h4>
                            <a href="{{ route('mapel.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('mapel.update', $mapel->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama_mapel">Nama Mapel</label>
                                    <input type="text" id="nama_mapel" name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="{{ __('Nama Mata Pelajaran') }}" value="{{ $mapel->nama_mapel }}">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select id="jurusan" name="jurusan" class="select2bs4 form-control @error('jurusan') is-invalid @enderror">
                                        <option value="">-- Pilih Jurusan --</option>
                                        <option value="Pemasaran"
                                            @if ($mapel->jurusan->nama_jurusan == "Pemasaran")
                                                selected
                                            @endif
                                        >Pemasaran</option>
                                        <option value="Rekayasa Perangkat Lunak"
                                            @if ($mapel->jurusan->nama_jurusan == "Rekayasa Perangkat Lunak")
                                                selected
                                            @endif
                                        >Rekayasa Perangkat Lunak</option>
                                        <option value="Akuntasi Lembaga Keuangan"
                                            @if ($mapel->jurusan->nama_jurusan == "Akuntasi Lembaga Keuangan")
                                                selected
                                            @endif
                                        >Akuntasi Lembaga Keuangan</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
