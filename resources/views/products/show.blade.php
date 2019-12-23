@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img class="w-100" src="/storage/{{ $product->image }}" style=""/>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-md-2">
                    <label>Name:</label>
                </div>
                <div class="col-md-6">
                    <p>{{ $product->name }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label>Price:</label>
                </div>
                <div class="col-md-6">
                    <p>{{ $product->price }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label>Description:</label>
                </div>
                <div class="col-md-6">
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
