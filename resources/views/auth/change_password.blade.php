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
                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Change Password</h4>
                    <p class="text-muted mb-4">Select a strong password to secure your account.</p>
                </div>

                <form action="#">
                    <div class="form-group">
                        <label for="password">New Password</label>
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
                        <label for="password">Confirm Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                            <div class="input-group-append" data-password="false">
                                <div class="input-group-text">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary" type="submit"> Change Password </button>
                    </div>

                </form>
            </div> <!-- end card-body-->
        </div>
        <!-- end card-->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-muted">Return to Sign In <a href="{{ url('/login') }}" class="text-muted ml-1"><b>Sign In</b></a></p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end col -->
</div>

@endsection
