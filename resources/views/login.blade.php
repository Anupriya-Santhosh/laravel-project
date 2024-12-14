@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow-lg">
                <h2 class="text-center mb-4">Login</h2>
                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" name="email" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
