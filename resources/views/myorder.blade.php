@extends('master')
@section('content')

<div class="orders-page-wrapper">
    <div class="orders-content container mt-5 mb-5">

        <h3>My Orders List</h3>

        @if(is_countable($orders) && count($orders) > 0)

            @foreach($orders as $order)
                <div class="row mb-4 p-3 border rounded shadow-sm">
                    <div class="col-md-3">
                        <img src="{{ $order->gallery }}" class="img-fluid rounded" alt="{{ $order->name }}">
                    </div>
                    <div class="col-md-6">
                        <h5>{{ $order->name }}</h5>
                        <p>Price: <strong>{{ $order->price }}</strong></p>
                        <p>Status: 
                            <span class="badge bg-primary">{{ ucfirst($order->status ?? 'pending') }}</span>
                        </p>
                        <p>Payment Method: {{ ucfirst($order->payment_method) }}</p>
                        <p>Payment Status: 
                            <span class="badge bg-warning text-dark">{{ ucfirst($order->payment_status) }}</span>
                        </p>
                        <p>Delivery Address: {{ $order->address }}</p>
                    </div>
                    <div class="col-md-3 text-end">
                        <small>Order ID: {{ $order->id }}</small><br>
                        <small>Placed On: {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</small>
                    </div>
                </div>
            @endforeach

        @else
            <div class="alert alert-info text-center">
                <strong>You have no orders yet.</strong>
            </div>
        @endif

    </div>
</div>

@endsection
