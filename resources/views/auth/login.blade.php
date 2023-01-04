@extends('layouts.app')

@section('content')

    <!--breadcrumb area-->
    <section class="breadcrumb-area gradient-overlay"
             style="background: url({{ asset('assets/images/banner/3.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-breadcrumb">
                        <h2>Login Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/breadcrumb area-->

    <!--Login Section -->
    <section class="section-padding blue-bg shaded-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">
                    @if(Session::has('message'))
                        <div class="section-title cl-white">
                            <h4 class="red"><span class="bg-red">error!</span>{{ Session::get('message') }}</h4>
                        </div>
                    @else
                        <div class="section-title cl-white">
                            <h4><span>New</span>Login account</h4>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <div class="site-form mb-30">
                        <form action="{{ url('login') }}" method="post">
                            @csrf
                            <input type="hidden" id="ltz" value="" name="time_zone">

                            <div class="row">

                                @error('username')
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                </div>
                                @enderror
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <input type="text" placeholder="Username" name="username" required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <input type="password" placeholder="Password" name="password" required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <button type="submit" class="bttn-mid btn-fill w-100">Login Account</button>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <div class="extra-links">
                                        <a href="{{ url('register') }}" class="cl-white">Create new account</a>
                                        <a href="{{ url('forgot-password') }}" class="cl-white">Forget Password?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Login Section-->

@endsection

@section('scripts')
    <script>
        window.addEventListener("load", function () {
            document.getElementById("ltz").value = Intl.DateTimeFormat().resolvedOptions().timeZone
        });
    </script>

@endsection
