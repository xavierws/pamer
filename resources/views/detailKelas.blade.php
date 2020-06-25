@extends('template')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-monitor icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    @if ($kelas != null)
                    {{ $kelas->nama_kelas }}
                    @else
                    MAAF KELAS KOSONG
                    @endif
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <form method="POST" action="{{ action('HomeController@ambilKelas', $id) }}" class="form-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary form-inline">ambil</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card main-card">
                <div class="card-body">
                    @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <p>{{ \Session::get('error') }}</p>
                    </div><br />
                    @endif
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                    @endif
                    <div class="card-title">penjelasan kelas</div>
                    <p align="justify">
                        @if ($kelas != null)
                        <div>kode kelas: {{ $kelas->kode_kelas }}</div>
                        {{ $kelas->keterangan }}
                        @else
                        Maaf tidak ada keterangan terkait kelas ini.
                        @endif
                    </p>
                    <div>
                        <a href="#" class="btn btn-info">Materi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
