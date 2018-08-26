@extends('admin.layouts.app')
     {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}

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
		                		<table id="example2" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>S/N</th>
											<th>Name</th> 
											<th>Email</th> 
											<th>Phone Number</th> 
											<th>Address</th>
											<th>Role</th>  
											<th>Department</th> 
											<th>LinkedIn URL</th> 
											<th>Facebook URL</th>  
											<th>Twitter URL</th>                                                 
										</tr>
									</thead>
									<tbody>

										@foreach($users as $i => $doctor)
											<tr>
												<td>{{++$i}}</td> 
												<td>{{$doctor->name}}</td>
												<td>{{$doctor->email}}</td>
												<td>{{$doctor->phone_number}}</td>
												<td>{{$doctor->address or '-'}}</td>
												<td>{{$doctor->role}}</td>
												<td>{{$doctor->department->name or '-'}}</td>
												<td>{{$doctor->linkedin_url or '-'}}</td>
												<td>{{$doctor->facebook_url or '-'}}</td>
												<td>{{$doctor->twitter_url or '-'}}</td>
											</tr>
										@endforeach

									</tbody>
								</table>

			                </div>

			                <div id="nurse" class="tab-pane fade">
			                	<span id="nurse_loader" style="display:none"><img src="{{ url('img/ajax-loader.gif') }}" alt=""></span>

			                	<input type="hidden" name="type_nurse" id="type_nurse" value="nurse">
			                    <div id="nurse_container">
			                      <input type="hidden" name="nurse_details" id="nurse_details" value="1">

			                    </div>
				               {{--  @include('admin.officialusers.nurse') --}}
				            </div>

				            <div id="pharmacist" class="tab-pane fade">
				            	<span id="pharmacist_loader" style="display:none"><img src="{{ url('img/ajax-loader.gif') }}" alt=""></span>

				            </div>

				            <div id="laboratist" class="tab-pane fade">
				            	<span id="laboratists_loader" style="display:none"><img src="{{ url('img/ajax-loader.gif') }}" alt=""></span>
				            	
				            </div>

				            <div id="receptionist" class="tab-pane fade">
				            	<span id="receptionists_loader" style="display:none"><img src="{{ url('img/ajax-loader.gif') }}" alt=""></span>
				            	
				            </div>

				            <div id="accountant" class="tab-pane fade">
				            	<span id="accountant_loader" style="display:none"><img src="{{ url('img/ajax-loader.gif') }}" alt=""></span>
				            	
				            </div>



		                {{-- $paginations->links() --}}
		            	<!-- </div> -->
		            </div>
	                <!--state overview end-->

	     
	            </div>
            </div>

            @include('footer')
           @include('admin.newusers')

            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
@section('js')
            <script type="text/javascript">

            	jQuery(function(e){
				    $(document).ready(function(){
				        $(".nav-tabs a").click(function(){
				            $(this).tab('show');
				        });
				    });
			    });
            </script>
@stop
@endsection