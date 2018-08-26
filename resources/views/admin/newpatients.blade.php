<!-- Modal -->
                        <div class="modal fade" id="addPatient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">New Patient</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" id="newPatient">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} required">
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

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} required">
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

                                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }} required">
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

                                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} required">
                                                <label for="address" class="col-md-4 control-label">Address</label>

                                                <div class="col-md-6">
                                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>
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

                                            <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                                                <label for="birth_date" class="col-md-4 control-label">Date of Birth</label>

                                                <div class="col-md-6">
                                                    <input id="birth_date" type="date" class="form-control" name="birth_date" required>

                                                    @if ($errors->has('birth_date'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('birth_date') }}</strong>
                                                        </span>
                                                    @endif
                                                </div> 
                                            </div>

                                             <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                                                <label for="blood_group" class="col-md-4 control-label">Blood Group</label>

                                                <div class="col-md-6">
                                                    <select id="blood_group" class="form-control" name="blood_group" value="{{ old('blood_group') }}" required >
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="">A</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O+">O+</option>
                                                    </select>

                                                    @if ($errors->has('blood_group'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('blood_group') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('genotype') ? ' has-error' : '' }}">
                                                <label for="genotype" class="col-md-4 control-label">Genotype</label>

                                                <div class="col-md-6">
                                                    <select id="genotype" class="form-control" name="genotype" value="{{ old('genotype') }}" required >
                                                        <option value="AA">AA</option>
                                                        <option value="AS">AS</option>
                                                        <option value="SS">SS</option>
                                                        <option value="O+"></option>
                                                        <option value="O+">O+</option>
                                                    </select>

                                                    @if ($errors->has('genotype'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('genotype') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                                <label for="sex" class="col-md-4 control-label">Gender </label>

                                                <div class="col-md-6">
                                                    <select id="sex" class="form-control" name="sex" value="{{ old('sex') }}">
                                                    	<option value="Male">Male</option>
                                                    	<option value="Female">Male</option>
                                                    	<option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                                <label for="image" class="col-md-4 control-label">Patient Picture </label>

                                                <div class="col-md-6">
                                                    <input id="image" type="file" class="form-control" name="image" required>

                                                    @if ($errors->has('image'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('image') }}</strong>
                                                        </span>
                                                    @endif
                                                </div> 
                                            </div>
                                            <span id="add_patient_loader" style="display:none"><img src="{{ url('img/ajax-loader.gif') }}" alt=""></span>

                                           <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                            <button type="submit" class="btn btn-success" id="btnNewPatient">New Patient</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->