<!-- <?php

        use App\Models\Cart;

        $total = Cart::cartItem();


        ?>

<nav class="navbar navbar-expand-lg bg-info bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/">E-Commerce</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <form action="/search" class="d-flex mx-2 " role="search">
                    <input class="form-control me-2 search-box" type="search" name="query" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>

            <ul class="nav navbar-nav navbar-right mx-auto">
                <li><a href="" style="text-decoration: none; color: white; margin-right:10px;">🛒Cart ({{$total}}) </a></li>

                @if(Session::has('user'))
                <div class="dropdown-center">
                    <button class="btn  btn-success dropdown-toggle mx-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Session::get('user')['name'] }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>

                    </ul>
                </div>
                @else
                <li><a href="/login"><button type="button" class="btn  btn-success ">Login</button></a></li>
                @endif
            </ul>
        </div>

    </div>
</nav> -->







<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <!-- Navbar toggler (for mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Full navbar content -->
        <div class="collapse navbar-collapse" id="navbarContent">

            <!-- Centered Menu (Home, Orders, Search) -->
            <ul class="navbar-nav  mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="navbar-brand nav-link" href="/">E-Commerce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myorder">Orders</a>
                </li>
                <li class="nav-item">
                    <form action="/search" class="d-flex mx-2" role="search">
                        <input class="form-control me-2 search-box" type="search" name="query"
                            placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </li>
            </ul>

            <!-- Right Side (Cart + Login/Logout) -->
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a href="/cartlist" class="nav-link text-white">🛒 Cart ({{ $total }})</a>
                </li>

                <li class="nav-item mx-2">
                    @if(Session::has('user'))
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Session::get('user')['name'] }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                    @else
                    <a href="/login"><button type="button" class="btn btn-success">Login</button></a>
                    <a href="/register"><button type="button" class="btn btn-success">Register</button></a>
                    @endif
                </li>
            </ul>

        </div>
    </div>
</nav>