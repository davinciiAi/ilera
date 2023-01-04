@extends('layouts.app')

@section('content')

    <!--Forget Password-->
    <section class="section-padding blue-bg dots-after">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">
                    <div class="section-title cl-white">
                        <h4><span>New</span>Update Password?</h4>
                    </div>
                </div>
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif


            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="site-form mb-30">
                        <form action="{{ url('reset-password') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>

                                @error('password')
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                </div>
                                @enderror
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <input type="email" placeholder="New Password" name="password" required>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <input type="email" placeholder="Re-type New Password" name="password_confirmation" required>
                                </div>
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <button type="submit" class="bttn-mid btn-fill w-100">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Forget Password-->

@endsection
