@extends('backend.layout.auth')

@section('contents')

    <div class="auth-page bg-info">
        <div class="container-fluid p-0">
            <div class="row g-0 justify-content-center">
                <div class="col-xxl-4 col-lg-4 col-md-5 bg-light">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="" class="d-block auth-logo">
                                        <img src=" {{asset('public/backend')}}/assets/images/logo-sm.svg" alt="" height="28"> <span class="logo-txt">Eco Bazar</span>
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Register Account</h5>
{{--                                        <p class="text-muted mt-2">Get your free Minia account now.</p>--}}
                                    </div>
                                    <form class="needs-validation mt-4 pt-2" method="POST" action="{{ route('admin.register.store') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="useremail" value="{{old('email')}}" placeholder="Enter email" required>
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="name" class="form-control" id="username" placeholder="Enter username" required>
                                            <div class="invalid-feedback">
                                                Please Enter Username
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" id="userpassword" placeholder="Confirm password" required>
                                            <div class="invalid-feedback">
                                                Confirm Password
                                            </div>

                                            <!-- General Errors -->
                                            @if ($errors->any())
                                                <div class="mt-2">
                                                    
                                                        @foreach ($errors->all() as $error)
                                                            <span class="text-danger">{{ $error }}</span>
                                                        @endforeach
                                                    
                                                </div>
                                            @endif
                                            
                                        </div>
                                        <div class="mb-4">
                                            <p class="mb-0">By registering you agree to the Eco Bazar's <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                        </div>
                                    </form>

                                    <div class="mt-4 pt-2 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign up using -</h5>
                                        </div>

                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                   class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                   class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                   class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Already have an account ? <a href="{{route('login')}}"
                                                                                                class="text-primary fw-semibold"> Login </a> </p>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Ecobazar   . Crafted with <i class="mdi mdi-heart text-danger"></i> by Eco</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
    
@endsection



@push('backendJs')

    <!-- validation init -->
    <script src=" {{asset('public/backend')}}/assets/js/pages/validation.init.js"></script>
    
@endpush