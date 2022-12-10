@extends('template.body')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" action="register" method="POST">
                        @csrf
                        <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user @error('name')
                                is-invalid @enderror" id="name"
                                    placeholder="Name"  value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control form-control-user @error('username')
                            is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-user @error('email')
                            is-invalid @enderror"  id="email"
                                placeholder="Email Address" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user @error('password')
                                is-invalid @enderror" id="password" placeholder="Password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">Register Account</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/login">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
