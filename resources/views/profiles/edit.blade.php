@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}/update" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-8">

                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>

                    <div  class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                        <label for="firstName" class="col-md-4 control-label">First Name</label>


                        <input id="firstName" type="text" class="form-control" name="firstName"
                               value="{{ old('firstName') ?? $user->firstName }}" onkeyup="loadDoc()" required autofocus>

                        @if ($errors->has('firstName'))
                            <span class="help-block">
                          <strong>{{ $errors->first('firstName') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                        <label for="lastName" class="col-md-4 control-label">Last Name</label>


                        <input id="lastName" type="text" class="form-control" name="lastName"
                               value="{{ old('lastName') ?? $user->lastName }}" required autofocus>

                        @if ($errors->has('lastName'))
                            <span class="help-block">
                          <strong>{{ $errors->first('lastName') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label for="mobile" class="col-md-4 control-label">Mobile </label>


                        <input id="mobile" type="text" class="form-control" name="mobile"
                               value="{{ old('mobile') ?? $user->mobile }}" required autofocus>

                        @if ($errors->has('mobile'))
                            <span class="help-block">
                          <strong>{{ $errors->first('mobile') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label">Phone</label>


                        <input id="phone" type="text" class="form-control" name="phone"
                               value="{{ old('phone') ?? $user->phone }}" required autofocus>

                        @if ($errors->has('phone'))
                            <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                        <label for="company" class="col-md-4 control-label">company</label>


                        <input id="company" type="text" class="form-control" name="company"
                               value="{{ old('company') ?? $user->company }}" required autofocus>

                        @if ($errors->has('company'))
                            <span class="help-block">
                          <strong>{{ $errors->first('company') }}</strong>
                      </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-4 control-label">address</label>


                        <input id="address" type="text" class="form-control" name="address"
                               value="{{ old('address') ?? $user->address }}" required autofocus>

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
        </form>
        <br>
        <div class="row"><button class="btn btn-primary" id="testbtn" onclick=loadDoc()>Test</button></div>

    </div>
@endsection
@section('script')
    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("testbtn").innerHTML = this.responseText;
                }
            };
            var x = document.getElementById("firstName").value;
            xhttp.open("get", "{{ Route("test",1) }}?firstName="+x, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send();
        }
    </script>
    @endsection
