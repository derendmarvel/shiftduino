@extends('layouts.template')

@section('title', 'Shiftduino')

@section('content')
    <div class = "header row justify-content-center align-items-center align-middle p-5">
        <div class = "col-6">
        </div>
        <div class = "col-6 my-5 p-4">
            <h5 class = "fs-5"> ENHANCE YOUR </h5>
            <h1 class = "fw-bold fs-0 mb-0 pb-0"> DRIVING EXPERIENCE </h1>
            <a class = " w-50 btn btn-outline-dark rounded-0 px-5 py-2 my-2" href = "#products"> Browse Catalog </a>
        </div>
    </div>

    <div class = "row p-5 justify-content-center" id = "products">
        <h1 class = "fw-bold fs-0 mb-0 pb-0 text-center"> Products </h1>
        <h5 class = "fw-light mb-5 text-center"> Find your perfect Shiftduino </h5>
        <div class = "col-3 shadow-sm rounded-3 p-0">
            <img src = "/images/Shiftduino.jpg" class = "w-100 m-0">
            <div class = "pt-2 pb-4 px-4"> 
                <p class = "fw-medium my-2"> Classic Shiftduino </p>
                <p class = "opacity-50"> Rp. 150.000 </p>
                <a class = " btn btn-outline-success rounded-0"> View Product </a>
            </div>
        </div>
        <div class = "col-3 shadow-sm rounded-3 p-0">
            <img src = "/images/1.jpg" class = "w-100 m-0">
            <div class = "pt-2 pb-4 px-4"> 
                <p class = "fw-medium my-2"> RoboDuino (Blue) </p>
                <p class = "opacity-50"> Rp. 200.000 </p>
                <a class = " btn btn-outline-success rounded-0"> View Product </a>
            </div>
        </div>
        <div class = "col-3 shadow-sm rounded-3 p-0">
            <img src = "/images/2.jpg" class = "w-100 m-0">
            <div class = "pt-2 pb-4 px-4"> 
                <p class = "fw-medium my-2"> RoboDuino (Orange) </p>
                <p class = "opacity-50"> Rp. 200.000 </p>
                <a class = " btn btn-outline-success rounded-0"> View Product </a>
            </div>
        </div>
        <div class = "col-3 shadow-sm rounded-3 p-0">
            <img src = "/images/3.jpg" class = "w-100 m-0">
            <div class = "pt-2 pb-4 px-4"> 
                <p class = "fw-medium my-2"> RoboDuino (Green) </p>
                <p class = "opacity-50"> Rp. 200.000 </p>
                <a class = " btn btn-outline-success rounded-0"> View Product </a>
            </div>
        </div>
    </div>

    <div class = "row p-5 justify-fontent-center">
        <h1 class = "fw-bold fs-0 mb-0 pb-0 text-center"> Feedback </h1>
        <h5 class = "fw-light mb-5 text-center"> Share your thoughts on Shiftduino </h5>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide shadow-lg">
                    <div class = "row px-5">
                        <h1 class = "fw-semibold fs-4 my-2"> Rafi Abhista </h1>
                        <p class = "fw-light"> Saya sangat suka dengan produk ini. </p>
                    </div>
                </div>
                <div class="swiper-slide shadow-lg">
                    <div class = "row px-5">
                        <h1 class = "fw-semibold fs-4 my-2"> Michael David Sin </h1>
                        <p class = "fw-light"> Sangat berguna bagi saya yang merupakan penggemar otomotif. </p>
                    </div>
                </div>
                <div class="swiper-slide shadow-lg">
                    <div class = "row px-5">
                        <h1 class = "fw-semibold fs-4 my-2"> Nathan Darrell </h1>
                        <p class = "fw-light"> Mantap </p>
                    </div>
                </div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class = "container d-flex flex-column align-items-center my-5">
            <h1 class = "fw-bold fs-2 my-3 pb-0 text-center"> Your Feedback </h1>
            <h5 class = "fw-light mb-5 text-center"> Help us improve our product! </h5>
            <form action = "/feedback"> 
                <div class="mb-3 w-50">
                    <label for="exampleFormControlInput1" class="form-label"> Name </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ex. John Doe">
                </div>
                <div class="mb-3 w-50">
                    <label for="exampleFormControlTextarea1" class="form-label"> Feedback </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Share your thoughts..."></textarea>
                </div>
                <select class="star-rating">
                    <option value="">Select a rating</option>
                    <option value="5">Excellent</option>
                    <option value="4">Very Good</option>
                    <option value="3">Average</option>
                    <option value="2">Poor</option>
                    <option value="1">Terrible</option>
                </select>
            </form>
        </div>
    </div> 

@endsection