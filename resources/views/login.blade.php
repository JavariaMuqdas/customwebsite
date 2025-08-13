@extends('master')
@section('content')

<style>
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.4),
                rgba(0, 0, 0, 0.4)),
            url('https://png.pngtree.com/background/20230614/original/pngtree-ecommerce-website-with-shopping-cart-with-the-shopping-cart-on-a-picture-image_3515047.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        color: rgba(44, 43, 43, 0.932);
    }

    .login-form {
        background: rgba(255, 255, 255, 0.49);
        padding: 30px;
        border-radius: 10px;
        max-width: 50%;
        margin: 100px auto;
        opacity: 1;
    }
</style>

<div class="login-form">
    <h3 class="text-center">Login</h3>

    @if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif

    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <form action="/login" method="POST">
        @csrf
        <div class="mb-3">
            <label class="fw-bold">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>
</div>

@endsection