<!-- Modal -->
@extends('admin.layouts.app')
     
@section('content') 
				<!-- profile head start-->
            <!-- page head start-->
            <div class="page-head">
                <h3>
                    Edit Department {{$editDepartments->name}}
                </h3>
                {{-- <span class="sub-title">Welcome to SmartHMS Admin dashboard</span> --}}
                <div class="state-information">
                    <!-- <a data-toggle="modal" href="#addDepartment" class="btn btn-success m-t-10"><i class="fa fa-plus"></i> Add Department </a> -->
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <!--state overview start-->
                @include('layouts.alerts')
                <div class="col-md-11"> 
                	<div class="row state-overview">
                        <div class="container log-row">

                            <form class="form-signin" action="{{ url('admin/department/'. $editDepartments->id ) }}" method="POST">

                                {{ csrf_field() }}
                                <div class="login-wrap">
                                    <input size="16" type="text" value="{{$editDepartments->name}}" id="name" class="form-control" name="name" required>
                                    @if ($errors->has('name')) <p class="text-danger">{{ $errors->first('name') }}</p> @endif
                                        
                                    <textarea class="form-control" name="description" id="description" row="20">
                                    {!! $editDepartments->description !!}
                                    </textarea>
                                    @if ($errors->has('description')) <p class="text-danger">{{ $errors->first('description') }}</p> @endif
                                    
                                    <button class="btn btn-lg btn-success btn-block" type="submit">Edit Department</button>
                                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--state overview end-->
            </div>

            <style>
                button {
                    margin-top: 10px;
                }
            </style>

            @include('footer')
@endsection