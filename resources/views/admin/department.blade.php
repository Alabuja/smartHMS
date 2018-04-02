@extends('admin.layouts.app')
     
@section('content') 

				<!-- profile head start-->
            <!-- page head start-->
            <div class="page-head">
                <h3>
                    Department
                </h3>
                {{-- <span class="sub-title">Welcome to SlickLab dashboard</span> --}}
                <div class="state-information">
                    <a data-toggle="modal" href="#addDepartment" class="btn btn-success m-t-10"><i class="fa fa-plus"></i> Add Department </a>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <!--state overview start-->
                @include('layouts.alerts')
                <div class="col-md-11">
                	<div class="row state-overview">
                    <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Department Name</th> 
                                <th>Description</th>  
                                <th>Options</th>                                                 
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1 ?>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$i}}</td> 
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->description}}</td>
                                    
                                    <td>
                                    	<a href="" class="btn btn-success m-t-10"><i class="fa fa-plus"></i> Manage Facilities</a></td>
                                    	<td><a href="#" class="btn btn-info m-t-10"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    	<td><a href="#" class="btn btn-danger m-t-10"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @endforeach

                            </tbody>
                            <!-- <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Username</th>
                                <th></th>
                            </tr>
                            </tfoot> -->
                        </table>
                        {{ $paginations->links() }}
                </div>
                </div>
                <!--state overview end-->
            </div>

            @include('footer')
            @include('admin.newdepartment')

@endsection