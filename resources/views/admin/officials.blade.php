@extends('admin.layouts.app')
     
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

                <ul class="nav nav-tabs background-grey" id="official_users" >
	                
	                <li class="active corp-finance-tab width-14 font-size-11" id="doctor"><a href="#doctor" data-toggle="tab"> Doctors</a></li>
	                <li class="corp-finance-tab width-14 font-size-11" id="nurse"><a href="#nurse" data-toggle="tab" data-url="/nurse">Nurses</a></li>
	                
	                <li class="corp-finance-tab width-14 font-size-11" id="pharmacist"><a href="#pharmacist" data-toggle="tab" data-url="/pharmacist">Pharmacists</a></li>
	                
	                <li class = "corp-finance-tab width-14 font-size-11" id="laboratist"><a  href="#laboratist" data-toggle="tab" data-url="/laboratist">Laboratists</a></li>
	                <li class = "corp-finance-tab width-14 font-size-11" id="receptionist"><a  href="#receptionist" data-toggle="tab" data-url="/receptionist">Receptionists</a></li>
	                <li class = "corp-finance-tab width-14 font-size-11" id="accountant"><a  href="#accountant" data-toggle="tab" data-url="/accountant">Accountants</a></li>
	            </ul>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <!--state overview start-->
                @include('layouts.alerts')
                <div class="tab-content corp-tab-content">
                	<div class="col-md-11">
		                <div id="doctor" class="tab-pane fade in active ">
		                	<div class="row state-overview">
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
			                            <?php $i=1 ?>
			                            @foreach($doctors as $user)
			                                <tr>
			                                    <td>{{$i}}</td> 
			                                    <td>{{$user->name}}</td>
			                                    <td>{{$user->email}}</td>
			                                    <td>{{$user->phone_number}}</td>
			                                    <td>{{$user->address or '-'}}</td>
			                                    <td>{{$user->role}}</td>
			                                    <td>{{$user->department->name or '-'}}</td>
			                                    <td>{{$user->linkedin_url or '-'}}</td>
			                                    <td>{{$user->facebook_url or '-'}}</td>
			                                    <td>{{$user->twitter_url or '-'}}</td>
			                                </tr>
			                                <?php $i++ ?>
			                            @endforeach

			                            </tbody>
			                    </table>
			                       
			                </div>
		                </div>

		                <div id="nurse" class="tab-pane fade in">
			                <div class="row state-overview">
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
			                            <?php $i=1 ?>
			                            @foreach($nurses as $user)
			                                <tr>
			                                    <td>{{$i}}</td> 
			                                    <td>{{$user->name}}</td>
			                                    <td>{{$user->email}}</td>
			                                    <td>{{$user->phone_number}}</td>
			                                    <td>{{$user->address or '-'}}</td>
			                                    <td>{{$user->role}}</td>
			                                    <td>{{$user->department->name or '-'}}</td>
			                                    <td>{{$user->linkedin_url or '-'}}</td>
			                                    <td>{{$user->facebook_url or '-'}}</td>
			                                    <td>{{$user->twitter_url or '-'}}</td>
			                                </tr>
			                                <?php $i++ ?>
			                            @endforeach

			                            </tbody>
			                    </table>
			                       
			                </div>
			            </div>
		                {{ $paginations->links() }}
		            </div>
	                <!--state overview end-->

	                
	            </div>
            </div>

            @include('footer')
            @include('admin.newusers')

            <script type="text/javascript">
            	$(document).ready(function(){

			        $('#official_users a').click(function (e) {
					    e.preventDefault();

					    var url = $(this).attr("data-url");
					    var href = this.hash;
					    var pane = $(this);

					    // ajax load from data-url
					    $(href).load(url,function(result){
					        pane.tab('show');
					    });
					});

					$('#doctor').load($('.active a').attr("data-url"),function(result){
						$('.active a').tab('show');
					});
			    });
            </script>
@endsection