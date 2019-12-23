@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="width: 180px"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">
                <h5>
                    {{ $user->firstName }} {{ $user->lastName }}
                </h5>


                <ul class="nav nav-tabs pt-5" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Groups</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="/profile/{{ $user->id }}/edit"> Edit Profile </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Mobile</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $user->mobile }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $user->phone }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Company</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $user->company }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Address</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $user->address }}</p>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <label>VIP</label>
                        </div>
                        <div class="col-md-6">
                            <p>Yes</p>
                        </div>
                    </div>


        </div>
    </div>
</div>
@endsection
