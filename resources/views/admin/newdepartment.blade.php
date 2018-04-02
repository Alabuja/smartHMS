<!-- Modal -->
                        <div class="modal fade" id="addDepartment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">New Department</h4>
                                    </div>
                                    <div class="modal-body">
                                    	<form class="" action="{{ url('admin/newdepartment') }}" method="POST">

                        					{{ csrf_field() }}
	                                        <div class="row">
	                                            <div class="form-group {{ $errors->has('name') ? 'has-error': ''}} required">
	                                                <label class="control-label col-md-4" for="name">Department Name</label>

	                                                <div class="col-md-8">
	                                                    <input size="16" type="text" value="{{old('name')}}" id="name" class="form-control" name="name" required>
	                                                    @if($errors->has('name'))
														    <span class="help-block">{{$errors->first('name') }}</span>
														@endif
	                                                </div>
	                                            </div>
	                                           
	                                            <div class="form-group {{ $errors->has('description') ? 'has-error': ''}}">
	                                                <label class="control-label col-md-4" for="description">Description</label>

	                                                <div class="col-md-8">
														<textarea class="form-control" name="description" id="description" value="{{ old('description') }}">
														</textarea>

														@if($errors->has('description'))
														    <span class="help-block">{{$errors->first('description') }}</span>
														@endif
	                                                </div>
	                                            </div>
	                                        </div>
	                                    
	                                    <div class="modal-footer">
	                                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	                                        <button type="submit" class="btn btn-success">New Department</button>
	                                    </div>
	                                </div>
                                	</form>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->