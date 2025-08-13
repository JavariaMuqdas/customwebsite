@extends('master')
@section('content')

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ asset($Product['gallery']) }}" alt="" style="max-width: 100%;">



        </div>
        <div class="col-sm-6">
            <a href="/" class="text-decoration-none fs-5">Go Back</a>
            <br><br>
            <h3>Name : {{$Product['name']}}</h3>
            <h4>Price : {{$Product['price']}}</h4>
            <h5>Category : {{$Product['category']}}</h5>
            <h5>Description : {{$Product['description']}}</h5>
            <br>
            <!-- <p>Product ID: {{ $Product['id'] }}</p> -->

            <div class="d-flex flex-row align-items-start ">
                <form action="/Add_to_cart" method="post">
                    <input type="hidden" name="product_id" value="{{ $Product['id'] }}">
                    @csrf
                    <button class="btn btn-secondary mb-2">Add to Cart</button>
                </form>

                <button class="btn btn-success mx-1">Buy Now</button>
            </div>



        </div>
    </div>

</div>


@endsection