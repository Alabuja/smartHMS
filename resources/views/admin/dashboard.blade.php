@extends('admin.layouts.app')
     
@section('content') 			

 			<!-- page head start-->
            <div class="page-head">
                <h3>
                    Dashboard
                </h3>
                <span class="sub-title">Welcome to Smart Hopital Management System</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel purple">
                            <div class="symbol">
                                <i class="fa fa-send"></i>
                            </div>
                            <div class="value white">
                                <h1 class="timer" data-from="0" data-to="{{$doctors}}"
                                    data-speed="1000">
                                    <!--320-->
                                </h1>
                                <p>Doctor</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel ">
                            <div class="symbol purple-color">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="value gray">
                                <h1 class="purple-color timer" data-from="0" data-to="{{$patients}}"
                                    data-speed="1000">
                                    <!--123-->
                                </h1>
                                <p>Patient</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel green">
                            <div class="symbol ">
                                <i class="fa fa-cloud-upload"></i>
                            </div>
                            <div class="value white">
                                <h1 class="timer" data-from="0" data-to="{{$nurses}}"
                                    data-speed="1000">
                                    <!--432-->
                                </h1>
                                <p>Nurse</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol green-color">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="value gray">
                                <h1 class="green-color timer" data-from="0" data-to="{{$pharmacists}}"
                                    data-speed="3000">
                                    <!--2345-->
                                </h1>
                                <p>Pharmacist</p>
                            </div>
                        </section>
                    </div>
                </div>
                <!--state overview end-->

                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel purple">
                            <div class="symbol">
                                <i class="fa fa-send"></i>
                            </div>
                            <div class="value white">
                                <h1 class="timer" data-from="0" data-to="{{$laboratorists}}"
                                    data-speed="1000">
                                    <!--320-->
                                </h1>
                                <p>Laboratorist</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel ">
                            <div class="symbol purple-color">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="value gray">
                                <h1 class="purple-color timer" data-from="0" data-to="{{$accountants}}"
                                    data-speed="1000">
                                    <!--123-->
                                </h1>
                                <p>Accountant</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel green">
                            <div class="symbol ">
                                <i class="fa fa-cloud-upload"></i>
                            </div>
                            <div class="value white">
                                <h1 class="timer" data-from="0" data-to="432"
                                    data-speed="1000">
                                    <!--432-->
                                </h1>
                                <p>Medicine</p>
                            </div>
                        </section>
                    </div>
                </div>
                <!--state overview end-->
            </div>

                @include('footer')

@endsection