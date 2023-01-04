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
                                    <div class="icon">
                                        <i class="ti-check"></i>
                                    </div>
                                    <h3>No dependent(s) found</h3>
                                    <p> You do not have any active dependent yet</p>
                                    <a href="{{ url('add_dependent') }}" class="bttn-small btn-fill">Add a dependent</a>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section><!--/Fee area-->


@endsection
