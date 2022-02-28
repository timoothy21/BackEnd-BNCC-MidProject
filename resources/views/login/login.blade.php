@extends('layouts.main')

@section('container')
    <h1>Halaman Login</h1>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <h1 class = "pt-4"></h1>

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please log in</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                        <label label for="username">Username</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
        
                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Log in</button>
                </form>
                <small class="d-block text-center mt-3">Not registered?<a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection