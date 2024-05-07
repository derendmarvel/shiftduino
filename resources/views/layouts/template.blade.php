<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/images/starability-basic.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        html, body{
            font-family: 'Poppins', sans-serif;
        }

        .fs-0{
            font-size: 64px;
        }

        .header{
            background: url('/images/Background-1.png');
            background-size: cover;
            height: 100%;
            padding-top: 200px;
            padding-bottom: 200px;
        }

        .header-2{
            background-size: cover;
            height: 500px;
        }

        .swiper {
            width: 100%;
            height: 400px;
            padding-left: 100px;
            padding-right: 100px;
        }

        .swiper-slide {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .pm-0{
            padding: 0;
            margin: 0;
        }

        .player{
            aspect-ratio: 16/9;
            width: 100%;
        }

    </style>
</head>
<body>
    <nav class="navbar bg-body-tertiary p-3">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 fw-bold ms-3"> SHIFTDUINO </a>
            <ul class = "nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-black" aria-current="page" href="/"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-black" href="/products"> Products </a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-black" href="/wishlist"> Wishlist </a>
                </li>
                @endauth
            </ul>
            <ul class="nav justify-content-end">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-black" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none text-black">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer class = "row bg-dark py-5 px-4 text-white justify-content-center">
        <div class = "col-6 text-center">
            <p class="fs-2 fw-bold"> SHIFTDUINO </p>
            <p> Contact Person: Maverick </br> ID Line: maverickong </br> maverickmcpe@gmail.com </p>
            <p class ="text-center"> All rights reserved @2024 El Arduino Jaya Jaya Jaya </p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
            slidesPerView: 2,
            spaceBetween: 10,
            },
            768: {
            slidesPerView: 3,
            spaceBetween: 20,
            },
        },
        });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init();
    </script>
</body>
</html>