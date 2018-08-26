<!-- Modal -->
                        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">New User</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST" action="{{ url('admin/newofficials') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name" class="col-md-4 control-label">Name</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div> 

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                                <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                                                <div class="col-md-6">
                                                    <input id="phone_number" type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required>

                                                    @if ($errors->has('phone_number'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                                <label for="address" class="col-md-4 control-label">Address</label>

                                                <div class="col-md-6">
                                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password" class="col-md-4 control-label">Password</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div> 
                                            </div>

                                            {{-- roles options --}}
                                             <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                                <label for="role" class="col-md-4 control-label">Role</label>

                                                <div class="col-md-6">
                                                    <select id="role" type="text" class="form-control" name="role" value="{{ old('role') }}" required >
                                                        @foreach($roles as $role)
                                                            <option value="{{strtolower($role->name)}}">{{$role->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('role'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('role') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                                                <label for="department_id" class="col-md-4 control-label">Department </label>

                                                <div class="col-md-6">
                                                    <select id="department_id" type="text" class="form-control" name="department_id" value="{{ old('role') }}">
                                                        @foreach($departments as $department)
                                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                           <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                            <button type="submit" class="btn btn-success">New User</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->