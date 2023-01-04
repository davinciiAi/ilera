@extends('layouts.app')

@section('content')


    <!--Forget Password-->
    <section class="section-padding blue-bg dots-after" style="min-height: 60vh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">


                    @if(Session::has('status'))

                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 centered">
                                <div class="section-title cl-white">
                                    <h4><span>Suceess!</span>{{ Session::get('status') }}</h4>
                                </div>
                            </div>
                        </div>

                    @else

                        <div class="section-title cl-white">
                            <h4><span>New</span>Forget Password?</h4>
                        </div>
                    @endif



                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="site-form mb-30">
                        <form action="{{ url('forgot-password') }}" method="post">
                            @csrf
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <input type="email" placeholder="Recovery Email" name="email" required>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <button type="submit" class="bttn-mid btn-fill w-100">Reset Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Forget Password-->

@endsection
