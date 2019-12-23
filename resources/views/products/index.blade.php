@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        </div>

        <div class="row">
            @foreach($products as $product)
            <div class="col-4 p-2">
                <div class="card" >
                    <img class="card-img-top p-3 " src="/storage/{{ $product->image }}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->price }}</p>
                        <a href="/products/{{ $product->id }}" class="btn btn-primary">view</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="row">
            <div class="col-md-12">
                {{ $products->links() }}
            </div>
        </div>

    </div>
@endsection