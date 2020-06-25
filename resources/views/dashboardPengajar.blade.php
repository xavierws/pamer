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
                <div>PROFILE PENGAJAR
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
                            <div class="display-identity">{{ $pengajar->nama }}</div>
                            <div class="display-identity">{{ Session::get('username') }}</div>
                            <div class="display-identity">{{ $pengajar->ttl }}</div>
                            <div class="display-identity">{{ $pengajar->nohp }}</div>
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
                    <div class="page-title-subheading">kelas yang diampu oleh pengajar</div>
                </div>
            </div>
            <div class="page-title-actions">
                <form method="GET" action="{{ url('tambah-kelas') }}" class="form-inline">
                    <button type="submit" class="btn btn-secondary form-inline">tambah kelas</button>
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
                    <div class="card-title">{{ $kls['nama_kelas'] }}</div>
                    <p>{{ $kls['keterangan'] }}</p>
                    <a class="btn btn-primary" type="submit"
                        href="{{ action('HomeController@lihatKelas', $kls['id']) }}">Lihat</a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h5>Anda belum memiliki kelas untuk di ajar</h5>
        @endif
    </div>
</div>
{{-- daftar kelas end --}}
@endsection
