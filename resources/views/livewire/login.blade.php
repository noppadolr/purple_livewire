<div>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-4">
            <div class="card bg-pattern">

                <div class="card-body p-4">

                    <div class="text-center w-75 m-auto">
                        <div class="auth-brand">
                            <a href="#" class="logo logo-dark text-center">
                                <span class="logo-lg">
                                    <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="22">
                                </span>
                            </a>

                            <a href="#" class="logo logo-light text-center">
                                <span class="logo-lg">
                                    <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="" height="22">
                                </span>
                            </a>
                        </div>
                        <p class="text-muted mb-4 mt-3">Enter your username and password to access admin panel.</p>
                    </div>

                    @if (Session::has("success"))

                    <div class="alert alert-success  alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ Session::get('success') }}
                    </div>


                    {{-- <p class="alert alert-success my-2">
                        {{ Session::get('success') }}
                    </p> --}}

                    @endif
                    @if (Session::has("login_error"))
                    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ Session::get('login_error') }}
                    </div>
                    {{-- <p class="alert alert-danger alert-dismissible my-2">

                        {{ Session::get('login_error') }}
                    </p> --}}

                    @endif


                    <form wire:submit.prevent='handleSubmit'>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input class="form-control @error('username') is-invalid @enderror" wire:model='username'
                                type="text" id="username" placeholder="Enter your username">
                            @error('username')
                            <p class="text-danger my-1 px-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" wire:model='password'
                                    class="form-control  @error('password') is-invalid @enderror"
                                    placeholder="Enter your password">
                                <div class="input-group-text @error('password') is-invalid @enderror"
                                    data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                            @error('password')
                            <p class="text-danger my-1 px-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>
                        </div>

                        <div class="text-center d-grid">
                            <button class="btn btn-primary" type="submit"> Log In </button>
                        </div>

                    </form>


                </div> <!-- end card-body -->
            </div>
            <!-- end card -->

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p> <a href="auth-recoverpw.html" class="text-white-50 ms-1">Forgot your password?</a></p>
                    {{-- <p class="text-white-50">Don't have an account? <a href="auth-register.html"
                            class="text-white ms-1"><b>Sign Up</b></a></p> --}}
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- end col -->
    </div>
</div>
