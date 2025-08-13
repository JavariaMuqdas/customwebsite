@extends('master')
@section('content')

<div class="custom-products m-4">
    <div class="row mb-3">
        <div class="col-sm-12 text-center">
            <a href="#" class="btn btn-outline-primary">Filter</a>
        </div>
    </div>

    <div class="container">
        <h3 class="text-center mb-4">Result for Products</h3>
        <div class="col-sm-12 text-center">
            <a  class="btn btn-success text-center" href="ordernow"> Order Now</button></a> <br><br>

        </div>
        <div class="row justify-content-center">
            @foreach ($products as $item)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="{{ url('/detail', $item['id']) }}" style="text-decoration: none; color: black;">
                        <img src="{{ $item['gallery'] ?? 'https://via.placeholder.com/900x300' }}" class="card-img-top trending-img" alt="{{ $item['name'] ?? 'Product' }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">{{ $item['description'] }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection