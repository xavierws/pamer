@extends('template')

@section('content')
<div class="app-main__inner">
    <div class="row">
        <div class="col card-margin">
            <div class="card main-card">
                <div class="card-body">
                    <div class="card-title">SIGN UP</div>
                    <p>Anda akan mendaftar sebagai:</p>
                    <div class="col">
                        <a href="{{ url('register/pelajar') }}" class="col border border-dark">SISWA</a>
                        <a href="{{ url('register/pengajar') }}" class="col border border-dark">PENGAJAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
