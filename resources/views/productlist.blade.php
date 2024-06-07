@extends('layouts.template')

@section('title', 'Our Products')

@section('content')
    <div class = "row p-5 justify-content-center" id = "products">
        <h1 class = "fw-bold fs-0 mb-0 pb-0 text-center" data-aos="fade-up" data-aos-duration="1500"> Products </h1>
        <h5 class = "fw-light mb-5 text-center normal-text" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250"> Find your perfect Shiftduino </h5>
        @foreach ($products as $key => $product)
        @php
            $delay_pattern = [250, 500];
            $animation_delay = $delay_pattern[$key % count($delay_pattern)];
        @endphp
        <div class = "col-12 col-md-4 shadow-sm rounded-3 p-0 m-3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="{{$animation_delay}}">
            <img src = "{{ $product-> image }}" class = "w-100 m-0">
            <div class = "pt-2 pb-4 px-4"> 
                <p class = "fw-medium my-2"> {{ $product->name }} </p>
                @if ($product->id == 2)
                <p class = "opacity-50"> {{ $product->launch }} </p>
                @else
                <p class = "opacity-50"> {{ $product->price }} </p>
                @endif
                <a class = " btn btn-outline-success rounded-0" href = "/product/{{$product->id}}"> View Product </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection