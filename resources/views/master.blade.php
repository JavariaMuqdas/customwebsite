<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Commerce website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</head>

<body>
    @include('header')


    @yield('content')




     @include('footer')


    <style>
        .img-slider {
            height: 400px !important;

        }



        .product-carousel {
            height: 600px;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            opacity: 0.4;
        }

        .carousel-indicators button {
            background-color: #000;
        }

        .carousel-indicators .active {
            background-color: #fff;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #198754;
            /* Bootstrap green */
            border-radius: 50%;
            padding: 15px;
            background-size: 100%, 100%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            transition: all 0.3s ease-in-out;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(25, 135, 84, 0.2);
        }

        .trending-img {
            height: 100px;
        }


        .trending-item {
            float: left;
            width: 20%;
        }

        .detail-img {
            height: 400px;

        }

        .search-box {
            width: 500px;
        }

        .trending-img {
            height: 200px;
            width: 100%;
            object-fit: contain;
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</body>

</html>