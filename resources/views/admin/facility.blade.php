@extends('admin.layouts.app')
     
@section('content') 
@if($facilities)
				<!-- profile head start-->
            <!-- page head start-->
            <div class="page-head">
                <h3>
                @foreach($facilities as $i => $facility)
                    @if($i == 0)
                        Department Facilities | {{$facility->name}} Department
                    @endif
                @endforeach 
                </h3>
                {{-- <span class="sub-title">Welcome to SmartHMS Admin dashboard</span> --}}
                <div class="state-information">
                    <a data-toggle="modal" href="#addFacility" class="btn btn-success m-t-10"><i class="fa fa-plus"></i> Add Department Facilities </a>
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
                            @foreach($facilities as $facility)
                                <tr>
                                    <td>{{$i}}</td> 
                                    <td>{{$facility->title or ''}}</td>
                                    <td>{{$facility->description or ''}}</td>
                                    <td>
                                    	<td><a href="#" class="btn btn-info m-t-10"><i class="fa fa-pencil-square-o" aria-hidden="true"> Edit</i></a></td>
                                    	<td><a href="#" class="btn btn-danger m-t-10"><i class="fa fa-trash-o" aria-hidden="true"> Delete</i></a>
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
            @include('admin.newfacility')
@endif
@endsection