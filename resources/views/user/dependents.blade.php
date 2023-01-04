@extends('layouts.app')

@section('add', 'active')

@section('content')

    <!--Jackpots-->
    <section class="section-padding-2 blue-bg dots-before">
        <div class="container">
            <div class=" justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title cl-white centered">
                        <h4><span>Successful!</span>Best match</h4>
                        <p> Your dependent will be contacted shortly</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="card col-md-5">
                    <div class="card-header">
                        Dependent
                    </div>
                    <div class="card-body">
                        <p>{{$dependents->title}} {{ $dependents->f_name }} </p>
                        <p>{{$dependents->address}} </p>
                        <p>{{$dependents->phone}} </p>
                    </div>
                </div>

                <div class="card col-md-5">
                    <div class="card-header">
                        Health Facility
                    </div>
                    <div class="card-body">
                        <h5> {{$dependents->health_center}} </h5>
                        <p>{{$dependents->health_addr}} </p>
                    </div>
                </div>
            </div>
            <br>
            <a href="{{ url('dashboard') }}" class="bttn-small btn-fill">Dashboard</a>
        </div>

    </section><!--/Jackpots-->

@endsection
