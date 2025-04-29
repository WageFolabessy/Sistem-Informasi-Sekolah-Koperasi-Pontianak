@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <!-- Section Header -->
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Foto</div>
                                @if ($siswa->foto)
                                <img alt="image" src="{{ asset('img/siswa/'.$siswa->foto) }}" class="rounded-circle profile-widget-picture">
                                @else
                                <img alt="image" src="https://placehold.co/600x400" class="rounded-circle profile-widget-picture">
                                @endif
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">NIP</div>
                                <div class="profile-widget-item-value">{{ $siswa->nis }}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Telp</div>
                                <div class="profile-widget-item-value">{{ $siswa->telp }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description pb-0">
                        <div class="profile-widget-name">{{ $siswa->nama }}
                            <div class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> siswa {{ $siswa->kelas->nama_kelas }}
                            </div>
                        </div>
                        <label for="alamat">Alamat</label>
                        <p>{{ $siswa->alamat }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Jadwal Pelajaran -->
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="card card-hero" style="margin-top: 36px">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <h4>Jadwal Pelajaran</h4>
                        <div class="card-description">Jadwal Pelajaran hari ini</div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tickets-list">
                            @foreach ($jadwal as $data)
                            @if($data->hari == $hari)
                            <div class="ticket-item">
                                <div class="ticket-title">
                                    <h4>{{ $data->kelas->nama_kelas }}</h4>
                                </div>
                                <div class="ticket-info">
                                    <div class="text-primary">Pada jam {{ $data->dari_jam }}</div>
                                </div>
                            </div>
                            @else
                            <div class="ticket-item">
                                <div class="ticket-title">
                                    <h4>Tidak ada jadwal hari ini</h4>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Materi Tersedia -->
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="card card-hero" style="margin-top: 36px">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4>{{ $materi->count() }}</h4>
                        <div class="card-description">Materi Tersedia</div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tickets-list">
                            @foreach ($materi as $data)
                            <div class="ticket-item">
                                <div class="ticket-title">
                                    <h4>{{ $data->judul }}</h4>
                                </div>
                                <div class="ticket-info">
                                    <div>{{ $data->guru->nama }}</div>
                                    <div class="bullet"></div>
                                    <div class="text-primary">{{ $data->guru->mapel->nama_mapel }}</div>
                                </div>
                            </div>
                            @endforeach
                            <a href="{{ route('siswa.materi') }}" class="ticket-item ticket-more">
                                Lihat Semua <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tugas Tersedia -->
            <div class="col-12 col-sm-12 col-lg-4">
                <div class="card card-hero" style="margin-top: 36px">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4>{{ $tugas->count() }}</h4>
                        <div class="card-description">Tugas Tersedia</div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tickets-list">
                            @foreach ($tugas as $data)
                            <div class="ticket-item">
                                <div class="ticket-title">
                                    <h4>{{ $data->judul }}</h4>
                                </div>
                                <div class="ticket-info">
                                    <div>{{ $data->guru->nama }}</div>
                                    <div class="bullet"></div>
                                    <div class="text-primary">{{ $data->guru->mapel->nama_mapel }}</div>
                                </div>
                            </div>
                            @endforeach
                            <a href="{{ route('siswa.materi') }}" class="ticket-item ticket-more">
                                Lihat Semua <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection