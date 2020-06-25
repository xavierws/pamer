@extends('template')

@section('content')
<div class="app-main__inner">
    <div class="row">
        <div class="col card-margin">
            <div class="card main-card">
                <div class="card-body">
                    <div class="card-title">LOGIN</div>
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
                    <form action="{{ url('login') }}" class="" method="POST">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="username" class="">Username</label>
                            <input name="username" id="username" placeholder="fill your username here" type="text"
                                class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="password" class="">Password</label>
                            <input name="password" id="password" placeholder="fill your password here" type="password"
                                class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mb-3">masuk</button>
                        </div>
                    </form>
                    <div>
                        <p>Anda belum memiliki akun? Silakan <a href="{{ url('/register') }}">SIGN UP</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
