@extends('layouts.app')

@section('content')
    <div class="container">


            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>

                    <div  class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                        <label for="firstName" class="col-md-4 control-label">First Name</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="firstName" type="text" class="form-control" name="firstName"
                               value="{{ old('firstName') ?? $user->firstName }}"  required autofocus>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" onclick="update(1)">change</button>
                            </div>
                        </div>
                        @if ($errors->has('firstName'))
                            <span class="help-block">
                          <strong>{{ $errors->first('firstName') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                        <label for="lastName" class="col-md-4 control-label">Last Name</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="lastName" type="text" class="form-control" name="lastName"
                                       value="{{ old('lastName') ?? $user->lastName }}" required autofocus>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" onclick="update(2)">change</button>
                            </div>
                        </div>


                        @if ($errors->has('lastName'))
                            <span class="help-block">
                          <strong>{{ $errors->first('lastName') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label for="mobile" class="col-md-4 control-label">Mobile </label>
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="mobile" type="text" class="form-control" name="mobile"
                                       value="{{ old('mobile') ?? $user->mobile }}" required autofocus>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" onclick="update(3)">change</button>
                            </div>
                        </div>



                        @if ($errors->has('mobile'))
                            <span class="help-block">
                          <strong>{{ $errors->first('mobile') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label">Phone</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="phone" type="text" class="form-control" name="phone"
                                       value="{{ old('phone') ?? $user->phone }}" required autofocus>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" onclick="update(4)">change</button>
                            </div>
                        </div>


                        @if ($errors->has('phone'))
                            <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                        <label for="company" class="col-md-4 control-label">company</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="company" type="text" class="form-control" name="company"
                                       value="{{ old('company') ?? $user->company }}" required autofocus>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" onclick="update(5)">change</button>
                            </div>
                        </div>


                        @if ($errors->has('company'))
                            <span class="help-block">
                          <strong>{{ $errors->first('company') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-4 control-label">address</label>

                        <div class="row">
                            <div class="col-lg-6">
                                <input id="address" type="text" class="form-control" name="address"
                                       value="{{ old('address') ?? $user->address }}" required autofocus>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary" onclick="update(6)">change</button>
                            </div>
                        </div>


                        @if ($errors->has('address'))
                            <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                        @endif

                    </div>

                </div>
            </div>

            <div class="row">
                <button class="btn btn-primary"  style="margin-top:30px">Save Profile</button>
            </div>

        <br>


    </div>
@endsection
@section('script')
    <script>
        function update(id) {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //document.getElementById("testbtn").innerHTML = this.responseText;
                    window.alert("changed successfuly");
                }
            };
            switch(id){
                case 1:
                    var x = document.getElementById("firstName").value;
                    xhttp.open("get", "{{ Route("test",1) }}?firstName="+x, true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send();
                    break;

                case 2:
                    var x = document.getElementById("lastName").value;
                    xhttp.open("get", "{{ Route("test",1) }}?lastName="+x, true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send();
                    break;

                case 3:
                    var x = document.getElementById("mobile").value;
                    xhttp.open("get", "{{ Route("test",1) }}?mobile="+x, true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send();
                    break;

                case 4:
                    var x = document.getElementById("phone").value;
                    xhttp.open("get", "{{ Route("test",1) }}?phone="+x, true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send();
                    break;

                case 5:
                    var x = document.getElementById("company").value;
                    xhttp.open("get", "{{ Route("test",1) }}?company="+x, true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send();
                    break;

                case 6:
                    var x = document.getElementById("address").value;
                    xhttp.open("get", "{{ Route("test",1) }}?address="+x, true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send();
                    break;

            }

        }
    </script>
    @endsection
