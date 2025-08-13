@extends('master')
@section('content')

<div class="product-carousel m-2">
    <div id="productCarousel" class="carousel slide " data-bs-ride="carousel" data-bs-interval="3000">

        <!-- <div class="carousel-indicators">
            @foreach($products as $index => $item)
            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="{{ $index }}"
                class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                aria-label="Slide {{ $index + 1 }}">
            </button>
            @endforeach
        </div> -->




        <div class="carousel-inner">
            @foreach ($products as $index => $item)
            <div class="carousel-item  {{ $index == 0 ? 'active' : '' }}">
                <a href="{{ url('/detail', $item['id']) }}">
                    <img src="{{ $item['gallery'] ?? 'https://via.placeholder.com/900x300' }}" class="img-slider" alt="{{ $item['name'] ?? 'Product' }}">
                    <div class="carousel-caption   d-none d-md-block">
                        <h5>{{ $item['name'] ?? 'Product Name' }}</h5>
                        <p>{{ $item['description'] ?? 'No description available.' }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div
        <div class="trending-wrapper m-5">
        <h1>Trending Products</h1>
        @foreach ($products as $index => $item)
        <div class="trending-item m-3">
            <a href="{{ url('/detail', $item['id']) }}" style="text-decoration: none; color: black;">
                <img src="{{ $item['gallery'] ?? 'https://via.placeholder.com/900x300' }}" class="trending-img" alt="{{ $item['name'] ?? 'Product' }}">
                <div class="carousel-inner">
                    <h5>{{ $item['name'] ?? 'Product Name' }}</h5>
                </div>
            </a>
        </div>
        @endforeach

    </div>

</div>

@endsection