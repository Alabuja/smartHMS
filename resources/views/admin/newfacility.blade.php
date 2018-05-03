<!-- Modal -->
<div class="modal fade" id="addFacility" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New Department Facility</h4>
            </div>
            <div class="modal-body">
                <form class="" action="{{ url('admin/department_facilities') }}" method="POST">

                    {{ csrf_field() }}
	                <div class="row">
	                    <div class="form-group {{ $errors->has('title') ? 'has-error': ''}} required">
	                        <label class="control-label col-md-4" for="title">Title</label>

	                        <div class="col-md-8">
	                            <input size="16" type="text" value="{{old('title')}}" id="title" class="form-control" name="title" required>
	                            @if($errors->has('title'))
									<span class="help-block">{{$errors->first('title') }}</span>
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
                        <div class="form-group {{ $errors->has('department_id') ? 'has-error': ''}}">
	                        <!-- <label class="control-label col-md-4" for="department_id">Title</label> -->

	                        <div class="col-md-8">
                                
                                <input size="16" type="hidden" value="{{request()->route('id')}}" id="department_id" class="form-control" name="department_id">
                                 
	                            @if($errors->has('department_id'))
									<span class="help-block">{{$errors->first('department_id') }}</span>
								@endif
	                        </div>
	                    </div>
	                </div>
	                                    
	                <div class="modal-footer">
	                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	                    <button type="submit" class="btn btn-success">New Department Facility</button>
	                </div>
	            </form>
            </div>
        </div>
    </div>
</div>
<!-- modal -->