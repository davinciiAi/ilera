@extends('layouts.app')

@section('content')

    <!--breadcrumb area-->
    <section class="breadcrumb-area gradient-overlay"
             style="background: url({{ asset('assets/images/banner/3.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-breadcrumb">
                        <h2>Register now</h2>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/breadcrumb area-->

    <!--Signup Section -->
    <section class="section-padding blue-bg shaded-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">
                    <div class="section-title cl-white">
                        <h4><span>New</span>Create account</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="site-form mb-30">
                        <form action="{{ url('register') }}" method="post">
                            @csrf
                            <input type="hidden" id="ltz" value="" name="time_zone">

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="text" placeholder="Full name" name="name" value="{{ old('name') }}"
                                           required>
                                </div>


                                @error('username')
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                </div>
                                @enderror
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="text" placeholder="username" name="username"
                                           value="{{ old('username') }}" required>
                                </div>

                                @error('email')
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                </div>
                                @enderror
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                                           required>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <input type="password" placeholder="Password" name="password" required>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <button type="submit" class="bttn-mid btn-fill w-100">Register now</button>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <div class="extra-links">
                                        <a href="{{ url('login') }}" class="cl-white">Login Account?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Signup Section-->

@endsection


@section('scripts')
    <script>
        window.addEventListener("load", function () {
            document.getElementById("ltz").value = Intl.DateTimeFormat().resolvedOptions().timeZone
        });
    </script>

@endsection
