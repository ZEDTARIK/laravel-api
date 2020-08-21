                        <div class="form-group row">
                            <label for="FullName" class="col-sm-2">Full Name</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="FullName" id="FullName" placeholder="Full Name" value="{{ old('FullName', $employee->FullName ?? null) }}">
                            </div>
                            @foreach($errors->get('FullName') as $error)    
                            <div class="col-sm-4">
                                <span style="color:red;" class="help-block">{{$error}}</span>
                            </div>
                             @endforeach
                        </div>
                        <div class="form-group row">
                            <label for="Email" class="col-sm-2">Email</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="Email" id="Email" placeholder="Email" value="{{ old('Email', $employee->Email ?? null) }}">
                            </div>
                            @foreach($errors->get('Email') as $error)    
                            <div class="col-sm-4">
                                <span style="color:red;" class="help-block">{{$error}}</span>
                            </div>
                             @endforeach
                        </div>
                        <div class="form-group row">
                            <label for="PhoneNumber" class="col-sm-2">Phone Number</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number" value="{{ old('PhoneNumber',  $employee->PhoneNumber ?? null) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2">Address</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="address" id="address" placeholder="Address" value="{{ old('address', $employee->address ?? null) }}">
                            </div>
                            @foreach($errors->get('address') as $error)    
                            <div class="col-sm-4">
                                <span style="color:red;" class="help-block">{{$error}}</span>
                            </div>
                             @endforeach
                        </div>