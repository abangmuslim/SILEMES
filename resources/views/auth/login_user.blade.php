@extends('layouts.apppublic')

@section('title', 'Login User')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">

        <div class="card shadow">
            <div class="card-header bg-success text-white text-center">
                <h5 class="mb-0"><b>Login User</b></h5>
                <small>Admin / Staff / Teacher</small>
            </div>

            <div class="card-body">

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.process') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required placeholder="Masukkan email">
                    </div>

                    <div class="form-group mb-3">
                        <label>Password</label>
                        <div class="input-group">
                            <input type="password" name="password" id="passwordUser" class="form-control" required placeholder="Masukkan password">
                            <div class="input-group-append">
                                <span class="input-group-text" style="cursor:pointer;" onclick="togglePassword('passwordUser', this)">
                                    👁️
                                </span>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block w-100">
                        Login
                    </button>

                </form>

                <div class="text-center mt-3">
                    <a href="{{ route('landing.home') }}">← Kembali ke Home</a>
                </div>

            </div>
        </div>

    </div>
</div>

<script>
function togglePassword(id, el) {
    let input = document.getElementById(id);
    if (input.type === "password") {
        input.type = "text";
        el.innerHTML = "🙈";
    } else {
        input.type = "password";
        el.innerHTML = "👁️";
    }
}
</script>

@endsection