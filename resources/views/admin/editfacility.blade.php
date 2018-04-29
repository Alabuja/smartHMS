<!-- Modal -->
@extends('admin.layouts.app')
     
@section('content') 
				<!-- profile head start-->
            <!-- page head start-->
            <div class="page-head">
                <h3>
                    Edit Department Facilities
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

                            <form class="form-signin" action="{{ url('admin/department_facilities/edit/'. $editFacilities->id ) }}" method="POST">

                                {{ csrf_field() }}
                                <div class="login-wrap">
                                    <input size="16" type="text" value="{{$editFacilities->title}}" id="title" class="form-control" name="title" required>
                                    @if ($errors->has('title')) <p class="text-danger">{{ $errors->first('title') }}</p> @endif
                                        
                                    <textarea class="form-control" name="description" id="description" row="20">
                                    {!! $editFacilities->description !!}
                                    </textarea>
                                    @if ($errors->has('description')) <p class="text-danger">{{ $errors->first('description') }}</p> @endif

                                    <input type="text" value="{{$editFacilities->department_id}}" class="form-control hidden" name="department_id" required>
                                    @if ($errors->has('department_id')) <p class="text-danger">{{ $errors->first('department_id') }}</p> @endif
                                    
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