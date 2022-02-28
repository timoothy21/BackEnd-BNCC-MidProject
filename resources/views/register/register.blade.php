@extends('layouts.main')

@section('container')
    <h1>Halaman Register</h1>
    <div class="row justify-content-center">
            <div class="col-md-3">
                <h1 class = "pt-4"></h1>
                <main class="form-registration">
                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                            <label label for="name">Full Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                            <label label for="username">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Address" required value="{{ old('address') }}">
                            <label label for="address">Address</label>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" id="phonenumber" placeholder="Phone Number" required value="{{ old('phonenumber') }}">
                            <label label for="phonenumber">Phone Number</label>
                            @error('phonenumber')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Age" required value="{{ old('age') }}">
                            <label label for="age">Age</label>
                            @error('age')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="date" name="birthdate" class="form-control rounded-bottom @error('date') is-invalid @enderror" id="birthdate" placeholder="Birth date" required value="{{ old('birthdate') }}">
                            <label label for="birthdate">Birthdate</label>
                            @error('birthdate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
                    </form>
                    <small class="d-block text-center mt-3">All ready registered?<a href="/login">Login!</a></small>
                </main>
            </div>
        </div>
@endsection
