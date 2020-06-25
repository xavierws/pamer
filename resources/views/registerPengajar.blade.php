@extends('template')

@section('content')
<div class="app-main__inner">
    <div class="row">
        <div class="col card-margin">
            <div class="card main-card">
                <div class="card-body">
                    <div class="card-title">SIGN UP</div>
                    <p>anda akan mendaftar sebagai PENGAJAR</p>
                    <form action="{{ url('register/pengajar') }}" method="POST">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="nama" class="">Nama</label>
                            <input name="nama" id="nama" placeholder="type your fullname" type="text"
                                class="form-control" required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="username" class="">Username</label>
                            <input name="username" id="username" placeholder="" type="text" class="form-control"
                                required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="password" class="">Password</label>
                            <input name="password" id="password" placeholder="type your password" type="password"
                                class="form-control" required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="password_confirmation" class="">Konfirmasi Password</label>
                            <input name="password_confirmation" id="password_confirmation"
                                placeholder="type your password again" type="password" class="form-control" required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="ttl" class="">tanggal lahir</label>
                            <input name="ttl" id="ttl" placeholder="" type="date" class="form-control" required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="nohp" class="">no HP</label>
                            <input name="nohp" id="nohp" placeholder="08xxxxxxxxxx" type="tel" class="form-control"
                                required>
                        </div>
                        <div class="position-relative form-group">
                            <label for="email" class="">email</label>
                            <input name="email" id="email" placeholder="example@mail.com" type="email"
                                class="form-control" required>
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
