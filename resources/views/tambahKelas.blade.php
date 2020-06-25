@extends('template')

@section('content')
<div class="app-main__inner">
    <div class="row">
        <div class="col card-margin">
            <div class="card main-card">
                <div class="card-body">
                    <div class="card-title">BUAT KELAS</div>
                    <p>anda akan membuat kelas baru</p>
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                    @endif
                    <form action="{{ url('tambah-kelas') }}" method="POST">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="nama_kelas" class="">Nama kelas</label>
                            <input name="nama_kelas" id="nama_kelas" placeholder="masukkan nama kelas" type="text"
                                class="form-control" required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="kode_kelas" class="">Kode kelas</label>
                            <input name="kode_kelas" id="kode_kelas" placeholder="masukkan kode kelas" type="text"
                                class="form-control" required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="keterangan" class="">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"
                                required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mb-3">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
