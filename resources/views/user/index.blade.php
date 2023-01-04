@extends('layouts.app')

@section('loans', 'active')

@section('content')

    <!--Fee area-->
    <section class="section-padding-2 blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title">
                        <h4><span>All</span> Active Dependents</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-12 mb-20" style="min-height: 50vh">
                    <div class="card">
                        <div class="card-body">
                            <div class="sent-success">
                                @if($dependents)
                                    @foreach($dependents as $dependent)
                                        <div class="row justify-content-around">
                                            <div class="card col-md-5">
                                                <div class="card-body">
                                                    <h5 class="card-title">Dependent</h5>
                                                    <h6 class="card-subtitle mb-2 text-muted">{{$dependent->f_name}}</h6>
                                                    <p>{{$dependent->address}}</p>
                                                    <p>{{$dependent->phone}}</p>
                                                </div>
                                            </div>
                                            <div class="card col-md-5 ml-2">
                                                <div class="card-body">
                                                    <h6 class="card-subtitle mb-2 text-muted">Assigned To:</h6>
                                                    <h5>{{$dependent->health_center}}</h5>
                                                    <p>{{$dependent->health_addr}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="icon">
                                        <i class="ti-check"></i>
                                    </div>
                                    <div>
                                        <h3>No dependent(s) found</h3>
                                        <p> You do not have any active dependent yet</p>
                                    </div>
                                @endif
                                    <br>
                                <a href="{{ url('add_dependent') }}" class="bttn-small btn-fill">Add a dependent</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/Fee area-->


@endsection
