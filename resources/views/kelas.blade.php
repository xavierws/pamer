@extends('template')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-monitor icon-gradient bg-mean-fruit"></i>
                </div>
                <div>DAFTAR KELAS
                    <div class="page-title-subheading">silakan memilih kelas yang diminati</div>
                </div>
            </div>
            <div class="page-title-actions">
                <form method="GET" action="{{ action('HomeController@cariKelas') }}" class="form-inline">
                    <input type="text" class="form-control" name="keyword" placeholder="cari nama kelas">
                    <button type="submit" class="btn btn-secondary form-inline">Search</button>
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
        <h5>Maaf belum terdapat kelas</h5>
        @endif
    </div>
</div>
@endsection
