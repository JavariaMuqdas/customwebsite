@extends('master')
@section('content')

<div class="cart-page-wrapper">
    <div class="cart-content container mt-5 mb-5">

        <h3>Your Cart</h3>

        @if(is_countable($products) && count($products) > 0)

        @foreach($products as $item)
        <div class="row mb-4">
            <div class="col-md-4">
                <img src="{{ $item->gallery }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h5>{{ $item->name }}</h5>
                <p>Price: {{ $item->price }}</p>
            </div>
            <div class="col-md-2">
                <p><strong>Quantity:</strong> {{ $item->quantity }}</p>
                <a href="{{ url('/remove_cart/' . $item->cart_id) }}" class="btn btn-danger">Remove</a>
            </div>
        </div>
        @endforeach

        <div class="text-end mt-4">
            <a href="/ordernow" class="btn btn-success">Proceed to Checkout</a>
        </div>

        @else
        <div class="alert alert-info text-center">
            <strong>Your cart is empty.</strong>
        </div>
        @endif

    </div>
</div>

@endsection