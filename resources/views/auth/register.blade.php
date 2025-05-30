@extends('auth.layouts.main')
@section('auth-main-section')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card">
            <!-- Logo-->
            <div class="card-header pt-4 pb-4 text-center bg-primary">
                <a href="{{ url('/') }}">
                    <span><img src="assets/images/logo.png" alt="" height="18"></span>
                </a>
            </div>

            <div class="card-body p-4">

                <div class="text-center w-75 m-auto">
                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Sign Up</h4>
                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                </div>

                <form action="#">

                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input class="form-control" type="text" id="fullname" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">
                        <label for="emailaddress">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" required placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                            <div class="input-group-append" data-password="false">
                                <div class="input-group-text">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                        </div>
                    </div>

                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary" type="submit"> Sign Up </button>
                    </div>

                </form>
            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-muted">Already have account? <a href="{{ url('/login') }}" class="text-muted ml-1"><b>Log In</b></a></p>
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- end col -->
</div>

@endsection
