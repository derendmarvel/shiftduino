<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="css/star-rating.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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

        .swiper {
            width: 100%;
            height: 300px;
            padding-left: 100px;
            padding-right: 100px;
        }

        .swiper-slide {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-body-tertiary p-3">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 fw-bold"> SHIFTDUINO </a>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
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

    <script src="js/star-rating.js"></script>
    <script>
        var stars = new StarRating('.star-rating');
    </script>
</body>
</html>