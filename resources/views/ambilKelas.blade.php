@extends('template')

@section('content')
<div class="app-main__inner">
    <div class="row">
        <div class="col card-margin">
            <div class="card main-card">
                <div class="card-body">
                    <div class="card-title">AMBIL KELAS DENGAN TOKEN</div>
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                    @endif
                    @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <p>{{ \Session::get('error') }}</p>
                    </div><br />
                    @endif
                    <form action="{{ url('token-kelas') }}" method="POST">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="token" class="">TOKEN</label>
                            <input name="token" id="token" placeholder="masukkan token/kode kelas" type="text"
                                class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mb-3">kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
