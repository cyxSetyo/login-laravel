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
                                <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Name" @error('name')
                                        is-invalid
                                    @enderror value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Username" value="{{ old('username') }}" @error('name')
                                    is-invalid
                                @enderror>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" value="{{ old('email') }}" @error('email')
                                is-invalid
                            @enderror>
                        </div>
                        <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password" @error('password')
                                    is-invalid
                                @enderror>
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
