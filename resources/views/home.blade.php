@extends('layouts.template')

@section('title', 'Shiftduino')

@section('content')
    <div class = "header row justify-content-center align-items-center align-middle p-5">
        <div class = "col-0 col-md-6">
        </div>
        <div class = "col-12 col-md-6 my-5 py-4 px-2" data-aos="fade-up" data-aos-duration="1500">
            <h5 class = "fs-5"> ENHANCE YOUR </h5>
            <h1 class = "fw-bold fs-0 mb-0 pb-0"> DRIVING EXPERIENCE </h1>
            <a class = "w-75 w-md-50 btn btn-outline-dark rounded-0 px-2 px-md-5 py-2 my-2" href = "/products"> Browse Catalog </a>
        </div>
    </div>

    <div class = "row p-5 justify-content-center">
        <h1 class = "fw-bold fs-0 mb-1 pb-0 text-center" data-aos="fade-up" data-aos-duration="1500"> Products </h1>
        <h5 class = "fw-light mb-5 text-center normal-text" data-aos="fade-up" data-aos-duration="1500"> Find your perfect Shiftduino </h5>
        <div class = "col-12 col-md-3 shadow-sm rounded-3 p-0 mx-3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
            <img src = "{{ $product1->image }}" class = "w-100 m-0">
            <div class = "pt-2 pb-4 px-4"> 
                <p class = "fw-medium my-2"> {{ $product1->name }}</p>
                <p class = "opacity-50"> Rp. {{ $product1->price }}.000 </p>
                <a class = " btn btn-outline-success rounded-0" href = "/product/{{$product1->id}}"> View Product </a>
            </div>
        </div>
        <div class = "col-12 col-md-3 shadow-sm rounded-3 p-0 mx-3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
            <img src = "{{ $product2->image }}" class = "w-100 m-0">
            <div class = "pt-2 pb-4 px-4"> 
                <p class = "fw-medium my-2"> {{ $product2->name }} </p>
                <p class = "opacity-50"> Rp. {{ $product2->price }}.000 </p>
                <a class = " btn btn-outline-success rounded-0" href = "/product/{{$product2->id}}"> View Product </a>
            </div>
        </div>
    </div>

    <div class = "row p-5 justify-content-center grid gap-3">
        <h1 class = "fw-bold fs-0 mb-1 pb-0 text-center" data-aos="fade-up" data-aos-duration="1500"> Features </h1>
        <h5 class = "fw-light mb-5 text-center" data-aos="fade-up" data-aos-duration="1500"> What our product caters </h5>
        <div class = "col-12 col-md-3 btn btn-outline-dark align-items-center align-middle py-5 px-3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
            <p class = "fs-3 fw-bold mb-2"> Animated Display </p> 
            <p> Your ShiftDuino will change colors and/or expressions as your RPM changes! </p>
        </div>
        <div class = "col-12 col-md-3 btn btn-outline-dark align-items-center align-middle py-5 px-3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
            <p class = "fs-3 fw-bold"> Warning Beep </p> 
            <p> Be warned of high RPM levels with automated alarmed displays! </p>
        </div>
        <div class = "col-12 col-md-3 btn btn-outline-dark align-items-center align-middle py-5 px-3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="750">
            <p class = "fs-3 fw-bold"> Saves Gas </p> 
            <p> Know when to change your RPM to save gas/fuel usage. </p>
        </div>
    </div>

    <div class = "row justify-content-center px-2 mx-2 px-md-5 mx-md-5" data-aos="fade-up" data-aos-duration="1500">
        <iframe class = "player" 
        src="https://www.youtube.com/embed/3eXWkyAPlrc?si=BjJ4fXwYc24ivoBp" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen>
        </iframe>
    </div>

    <div class = "row py-5 justify-fontent-center">
        <h1 class = "fw-bold fs-0 mb-1 pb-0 text-center" data-aos="fade-up" data-aos-duration="1500"> Feedback </h1>
        <h5 class = "fw-light mb-5 text-center normal-text" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250"> Share your thoughts on Shiftduino </h5>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($feedbacks as $feedback)
                <div class="swiper-slide shadow-lg" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
                    <div class = "row px-5 d-flex justify-content-center">
                    <p class="starability-result" data-rating="{{ $feedback->rating }}"> </p>
                        <h1 class = "fw-semibold fs-4 my-2"> {{ $feedback->name }} </h1>
                        <p class = "fw-light"> {{ $feedback->review}} </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class = "container d-flex flex-column align-items-center my-5">
            <h1 class = "fw-bold fs-2 my-3 pb-0 text-center" data-aos="fade-up" data-aos-duration="1500"> Your Feedback </h1>
            <h5 class = "fw-light mb-5 text-center normal-text" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250"> Help us improve our product! </h5>
            <form method = "POST" action = "/feedback" class = "w-100 d-flex flex-column align-items-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500"> 
                @method('post')
                @csrf

                <div class="mb-3 w-75">
                    <label for="exampleFormControlInput1" class="form-label"> Name </label>
                    <input name = "name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex. John Doe" required>
                </div>
                <div class="mb-3 w-75">
                    <label for="exampleFormControlTextarea1" class="form-label"> Feedback </label>
                    <textarea name = "review" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Share your thoughts..." required></textarea>
                </div>
                <fieldset class="starability-basic" name = "rating" required>
                    <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." />
                    <input type="radio" id="first-rate1" name="rating" value="1" />
                    <label for="first-rate1" title="Terrible">1 star</label>
                    <input type="radio" id="first-rate2" name="rating" value="2" />
                    <label for="first-rate2" title="Not good">2 stars</label>
                    <input type="radio" id="first-rate3" name="rating" value="3" />
                    <label for="first-rate3" title="Average">3 stars</label>
                    <input type="radio" id="first-rate4" name="rating" value="4" />
                    <label for="first-rate4" title="Very good">4 stars</label>
                    <input type="radio" id="first-rate5" name="rating" value="5" />
                    <label for="first-rate5" title="Amazing">5 stars</label>
                </fieldset>

                <div class="row mb-3 w-75">
                    <button type="submit" class="btn btn-outline-success rounded-0 px-5 py-2 my-2"> Submit </button>
                </div>
            </form>
        </div>
    </div> 

@endsection