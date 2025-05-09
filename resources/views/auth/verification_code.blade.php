@extends('auth.layouts.main')
@section('auth-main-section')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card">
            <!-- Logo -->
            <div class="card-header pt-4 pb-4 text-center bg-primary">
                <a href="{{ url('/') }}">
                    <span><img src="assets/images/logo.png" alt="" height="18"></span>
                </a>
            </div>

            <div class="card-body p-4">

                <div class="text-center m-auto">
                    {{-- <img src="assets/images/mail_sent.svg" alt="mail sent image" height="64" /> --}}
                    <h4 class="text-dark-50 text-center mt-4 font-weight-bold">Please check your email</h4>
                    <p class="text-muted mb-4">
                        A email has been send to <b>youremail@domain.com</b>.
                    </p>
                </div>

                <form action="#">
                    <div class="form-group mb-3">
                        <label for="password">Verification Code</label>
                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                    </div>

                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary" type="submit">Verify</button>
                    </div>
                </form>

                {{-- <form action="index.html">
                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-home mr-1"></i> Back to Home</button>
                    </div>
                </form> --}}

            </div> <!-- end card-body-->
        </div>
        <!-- end card-->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-muted">Don't have an account? <a href="{{ url('/register') }}" class="text-muted ml-1"><b>Sign Up</b></a></p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end col -->
</div>

@endsection
