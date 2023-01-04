@extends('layouts.app')

@section('content')

    <!--Hero Area-->
    <section class="hero-area gradient-overlay"
             style="background: url({{ asset('assets/images/banner/3.jpg') }}) no-repeat center center;">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="hero-content">

                        <h1>Our parents deserve good health</h1>
                        <h4><span>new</span> Lagos, Nigeria </h4>
                        <ul>
                            <li>Location based</li>
                            <li>Monthly Checkup</li>
                            <li>Emergency Response</li>
                            <li>On-demand health accesories</li>
                        </ul>
                        <div class="hero-btn">
                            <a href="{{ url('login') }}" class="bttn-mid btn-fill"><i class="ti-crown"></i> Login </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12">

                </div>
            </div>
        </div>
        <div class="hero-bg-alimation">
            <ul class="box">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </section><!--/Hero Area-->

    <!--Map-->
    <div class="section-padding pb-0 blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered">
                    <img src="/itare.jpg" alt="">
                </div>
            </div>
        </div>
    </div><!--/Map-->

    <!--Why Choose Us-->
    <section class="section-padding-3 blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered">
                    <div class="section-title mb-60">
                        <h4><span>New</span> Why Choose us</h4>
                        <h2>We pair the elderly to the nearest health services in their area</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-008-target"></i>
                        </div>
                        <div class="title">
                            <h3>Location based</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-005-monitor"></i>
                        </div>
                        <div class="title">
                            <h3>Automated drug notification
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-013-pie-chart"></i>
                        </div>
                        <div class="title">
                            <h3>Digital Payments</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-035-profit"></i>
                        </div>
                        <div class="title">
                            <h3>Actively monitors your progress
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-2991871"></i>
                        </div>
                        <div class="title">
                            <h3>Promotes good health by preventing late diagnonsis
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-023-line-chart"></i>
                        </div>
                        <div class="title">
                            <h3>Flexible subscriptions
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-030-carrier"></i>
                        </div>
                        <div class="title">
                            <h3>Organic Growth</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-why-choose">
                        <div class="icon">
                            <i class="flaticon-016-organization"></i>
                        </div>
                        <div class="title">
                            <h3>COVID-19 Complaint</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Why Choose Us-->


    <!--Solutions Section-->
    <section class="section-padding-2 blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12">
                    <div class="section-title">
                        <h4><span>new</span>Anyone can use</h4>
                        <h2>Health Solutions for</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="assets/images/users/1.jpg" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="">Freedom</a></h3>
                            <p>Now you can focus on your work while we take care of your parent's health need</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="assets/images/users/2.jpg" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="">IRL consultancy</a></h3>
                            <p>We can notify health facilities to send medical professional to visit your aged ones</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="assets/images/users/3.jpg" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="">Dieting</a></h3>
                            <p>Our experts can suggest and followup on good dieting habits</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <div class="product-pro-img">
                            <img src="assets/images/users/4.jpg" alt="">
                        </div>
                        <div class="product-pro-title">
                            <h3><a href="">Active monitoring</a></h3>
                            <p>You can check your parents health statistics form your dashboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Solutions Section-->

    <!-- What we do -->
    <section class="section-padding-2 blue-bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12 centered">
                    <div class="section-title">
                        <h4><span>new</span> How it works</h4>
                        <h2>Follow these steps</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="single-what-we-do">
                        <div class="icon">
                            <i class="ti-user"></i>
                        </div>
                        <div class="title">
                            <h3>Register an Account</h3>
                        </div>
                        <p>We need only your basic details. Register in less than 2 minutes</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="single-what-we-do">
                        <div class="icon">
                            <i class="ti-package"></i>
                        </div>
                        <div class="title">
                            <h3>Add a dependent</h3>
                        </div>
                        <p>We understand that most elderly ones are not tech savvy. You can enrol your parents as
                            dependents</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="single-what-we-do">
                        <div class="icon">
                            <i class="ti-cup"></i>
                        </div>
                        <div class="title">
                            <h3>Subscribe</h3>
                        </div>
                        <p>You can make a one-time service or a recurring monthly subscription to ensure your parents
                            health are routinely in check. </p>
                    </div>
                </div>
            </div>

            <div class=" mt-2 row justify-content-center">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="single-price-table">
                        <div class="pricing-title">
                            <i class="ti-medall-alt"></i>
                            <h2>Standard Plan</h2>
                        </div>

                        <div class="pricing-body">
                            <ul>
                                <li><i class="ti-check"></i> Full body test</li>

                                <li><i class="ti-check"></i>1 visit per month</li>

                            </ul>
                        </div>
                        <a href="{{ url('login') }}" class="bttn-small btn-fill">Start now</a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="single-price-table">
                        <div class="pricing-title">
                            <i class="ti-medall-alt"></i>
                            <h2>Gold Plan</h2>
                        </div>

                        <div class="pricing-body">
                            <ul>
                                <li><i class="ti-check"></i> Full body test</li>

                                <li><i class="ti-check"></i>2 visits per month</li>


                                <li><i class="ti-check"></i> Ambulance service</li>

                            </ul>
                        </div>
                        <a href="{{ url('login') }}" class="bttn-small btn-fill">Start now</a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="single-price-table">
                        <div class="pricing-title">
                            <i class="ti-medall-alt"></i>
                            <h2>Diamond plan</h2>
                        </div>

                        <div class="pricing-body">
                            <ul>
                                <li><i class="ti-check"></i> Full body test</li>

                                <li><i class="ti-check"></i>4 visits per month</li>

                                <li><i class="ti-check"></i> Dedicated specialist</li>

                                <li><i class="ti-check"></i> Ambulance service</li>

                            </ul>
                        </div>
                        <a href="{{ url('login') }}" class="bttn-small btn-fill">Start now</a>
                    </div>
                </div>


            </div>
        </div>
    </section><!-- /What we do -->


@endsection
