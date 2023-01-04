@extends('layouts.app')

@section('content')

    <!--breadcrumb area-->
    <section class="breadcrumb-area gradient-overlay" style="background: url({{ asset('assets/images/banner/3.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-breadcrumb">
                        <h2>One More Step..</h2>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/breadcrumb area-->

    <!--Forget Password-->
    <section class="section-padding blue-bg dots-after">
        <div class="container">

            @if(Session::has('status'))

                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">
                        <div class="section-title cl-white">
                            <h4><span>Success!</span>Email Verification Sent</h4>
                        </div>
                    </div>
                </div>

            @else

                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">
                        <div class="section-title cl-white">
                            <h4><span>Info</span>Check your mailbox or click "Resend Verification Email" to send another email.</h4>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="site-form mb-30">
                        <form action="{{ url('email/verification-notification') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <input type="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}" readonly required>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <button type="submit" class="bttn-mid btn-fill w-100">Resend Verification Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Forget Password-->

@endsection
