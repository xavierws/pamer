@extends('templateDashboard')

@section('content')
{{-- Profile --}}
<div id="userProfile">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-monitor icon-gradient bg-mean-fruit"></i>
                </div>
                <div>PROFILE SISWA
                    <div class="page-title-subheading"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card main-card">
                <div class="card-body">
                    <div class="card-title">Biodata</div>
                    <div class="row">
                        <div class="col-3">
                            <div class="display-profile">Nama</div>
                            <div class="display-profile">Username</div>
                            <div class="display-profile">Tanggal Lahir</div>
                            <div class="display-profile">No HP</div>
                            <div class="display-profile">Email</div>
                        </div>
                        <div class="col">
                            <div class="display-identity">{{ $siswa->nama }}</div>
                            <div class="display-identity">{{ Session::get('username') }}</div>
                            <div class="display-identity">{{ $siswa->ttl }}</div>
                            <div class="display-identity">{{ $siswa->nohp }}</div>
                            <div class="display-identity">{{ Session::get('email') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- profile end --}}

{{-- daftar kelas --}}
<div id="daftarKelas">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-monitor icon-gradient bg-mean-fruit"></i>
                </div>
                <div>DAFTAR KELAS
                    <div class="page-title-subheading">kelas yang diambil oleh siswa</div>
                </div>
            </div>
            <div class="page-title-actions">
                <form method="GET" action="{{ url('token-kelas') }}" class="form-inline">
                    <button type="submit" class="btn btn-secondary form-inline">ambil kelas</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        @if ($kelas != null)
        @foreach ($kelas as $kls)
        <div class="col-4">
            <div class="card main-card mb-3">
                <div class="card-body">
                    <div class="card-title">{{ $kls->nama_kelas }}</div>
                    <p>kode kelas: {{ $kls->kode_kelas }}</p>
                    <p>{{ $kls->keterangan }}</p>
                    <a class="btn btn-primary" type="submit"
                        href="{{ action('HomeController@lihatKelas', $kls->id) }}">Lihat</a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="col">
            <h5>Anda belum mengambil kelas</h5>
        </div>
        @endif
    </div>
</div>
{{-- daftar kelas end --}}
@endsection
