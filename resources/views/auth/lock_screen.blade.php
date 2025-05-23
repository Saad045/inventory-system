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

                <div class="text-center w-75 m-auto">
                    <img src="assets/images/users/avatar-1.jpg" height="64" alt="user-image" class="rounded-circle shadow">
                    <h4 class="text-dark-50 text-center mt-3 font-weight-bold">Hi ! Michael </h4>
                    <p class="text-muted mb-4">Enter your password to access the admin.</p>
                </div>

                <form action="#">
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                    </div>

                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary" type="submit">Log In</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div>
        <!-- end card-->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-muted">Not you? return <a href="{{ url('/login') }}" class="text-muted ml-1"><b>Sign In</b></a></p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end col -->
</div>

@endsection
