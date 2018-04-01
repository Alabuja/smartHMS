@extends('patient.layouts.app')
     
@section('content') 

				<!-- profile head start-->
            <div class="profile-hero">
                <div class="profile-intro">
                    <img src="{{ Auth::guard('patient')->user()->avatar_url }}" alt="{{ Auth::guard('patient')->user()->name }}"/>
                    <h1>{{ Auth::guard('patient')->user()->name }}</h1>
                    <span>{{-- Web & User Interface Designer --}}</span>
                    <div class="s-n">
                        <a href="#"> <i class="fa fa-facebook-square"></i></a>
                        <a href="#"> <i class="fa fa-twitter"></i></a>
                        <a href="#"> <i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <!-- profile head end-->

            <!--body wrapper start-->
            <div class="wrapper no-pad">

            <div class="profile-desk">
            <aside class="p-aside">
                <section class="panel profile-info">
                    
                </section>

                <div class="profile-timeline">
                    
                </div>

            </aside>
            </div>

            </div>
            <!--body wrapper end-->

                @include('footer')

@endsection