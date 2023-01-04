@extends('layouts.app')

@section('profile', 'active')

@section('content')

    @if(Session::has('message'))
        <section class="blue-bg shaded-bg pt-5" style="background: #022c43;">
            <div class="section-title cl-white row justify-content-center align-content-center"
                 style="margin-bottom: 0">
                <h4 style="margin-bottom: 0"><span
                        class="bg-{{ Session::get('alert-type') }}">{{ Session::get('alert-type') }}</span>{{ Session::get('message') }}
                </h4>
            </div>
        </section>
    @endif

    <!--Dashboard Bottom-->
    <section class="section-padding-sm-2 blue-bg-2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-9 col-lg-9 col-md-12 mb-20">

                    <div class="card">
                        <div class="card-header">
                            Add Dependent
                        </div>
                        <div class="card-body">
                            <div class="site-form mb-30">
                                <form action="{{ route('add_dependent') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-sm-12 mb-10">
                                            <label for="deposit-amount">Title</label>
                                            <input type="text" id="deposit-amount" name="title"
                                                   value="">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-sm-12 mb-10">
                                            <label for="deposit-amount">Full name</label>
                                            <input type="text" id="deposit-amount" name="f_name"
                                                   value="">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-sm-12 mb-10">
                                            <label for="deposit-amount">Phone</label>
                                            <input type="text" id="deposit-amount" name="phone"
                                                   value="">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-sm-12 mb-10">
                                            <label for="deposit-amount">Address</label>
                                            <input type="text" id="deposit-amount" name="address"
                                                   value="">
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-sm-12 mb-10">
                                            <br>
                                            <label for="deposit-amount">Location (Eti-Osa only)</label>
                                            <select name="location">
                                                <option value="1">Igbo Efon</option>
                                                <option value="2">Chevron</option>
                                                <option value="3">Agungi</option>
                                                <option value="4">Ikota</option>
                                                <option value="5">Jakande</option>
                                                <option value="6">Chisco</option>
                                                <option value="7">Ikate</option>
                                                <option value="8">Elf</option>
                                                <option value="9">Lekki Phase 1</option>
                                                <option value="10">Sandfill</option>
                                                <option value="11">Law school</option>
                                                <option value="12">Ajah</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-sm-12 text-right">
                                            <button type="submit" class="bttn-mid btn-fill">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section><!--Dashboard Bottom-->


@endsection
