@extends('template')

@section('content')
{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display">Selamat Datang di <span>PaMer</span> <br> Situs belajar Mudah Bagi Pelajar
        </h1>
        <a href="{{ url('/kelas') }}" class="btn btn-primary">Cek kelas sekarang</a>
    </div>
</div>
{{-- Jumbotron end --}}

{{-- Main Article --}}
<div class="app-main__inner">
    <div class="row">
        <div class="col mb-3">
            <div class="card main-card">
                <div class="card-body">
                    <h5 class="card-title">Example</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur blanditiis
                        dignissimos minima deserunt doloremque nesciunt perspiciatis, ea hic reiciendis
                        quos.
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card main-card">
                <div class="card-body">
                    <h5 class="card-title">Example</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur blanditiis
                        dignissimos minima deserunt doloremque nesciunt perspiciatis, ea hic reiciendis
                        quos.
                    </p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card main-card">
                <div class="card-body">
                    <h5 class="card-title">Example</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur blanditiis
                        dignissimos minima deserunt doloremque nesciunt perspiciatis, ea hic reiciendis
                        quos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Main article end --}}
@endsection
