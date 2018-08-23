@extends('admin.layouts.app')
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->

@section('content') 
				<!-- profile head start-->
            <!-- page head start-->
            <div class="page-head">
                <h3>
                    User
                </h3>
                {{-- <span class="sub-title">Welcome to SmartHMS Admin dashboard</span> --}}
                <div class="state-information">
                    <a data-toggle="modal" href="#addUser" class="btn btn-success m-t-10"><i class="fa fa-plus"></i> Add User </a>
                </div> 

                <ul class="nav nav-tabs" id="official_users" >
	                
	                <li class="active"><a href="#doctor" data-toggle="tab"> Doctors</a></li>
	                <li><a href="#nurse" data-toggle="tab">Nurses</a></li>
	                
	                <li><a href="#pharmacist" data-toggle="tab">Pharmacists</a></li>
	                
	                <li><a  href="#laboratist" data-toggle="tab">Laboratists</a></li>
	                <li><a  href="#receptionist" data-toggle="tab">Receptionists</a></li>
	                <li><a  href="#accountant" data-toggle="tab">Accountants</a></li>
	            </ul>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <!--state overview start-->
                @include('layouts.alerts')
                <div class="tab-content">
                	<div class="col-md-11">
		                <!-- <div class="row state-overview"> -->
		                	<div id="doctor" class="tab-pane fade in active ">
			                    @include('admin.officialusers.doctor')
			                </div>

			                <div id="nurse" class="tab-pane fade">
				                 @include('admin.officialusers.nurse')
				            </div>
		                {{ $paginations->links() }}
		            	<!-- </div> -->
		            </div>
	                <!--state overview end-->

	     
	            </div>
            </div>

            @include('footer')
            @include('admin.newusers')

            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

            <script type="text/javascript">
			    $(document).ready(function(){
			        $(".nav-tabs a").click(function(){
			            $(this).tab('show');
			        });
			    });
            </script>
@endsection