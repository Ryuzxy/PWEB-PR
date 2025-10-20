@extends('layouts.login')

@section('content')
<div class="container mt-5" style="max-width: 500px;">
    <div class="card shadow-sm">
        <div class="card-header text-center bg-primary text-white">
            <h4>Login Admin</h4>
        </div>
        <div class="card-body">
            @if ($errors->has('login_error'))
                <div class="alert alert-danger">{{ $errors->first('login_error') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="submit">
                    <button type="submit" class="btn btn-primary w-100" >Login</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
