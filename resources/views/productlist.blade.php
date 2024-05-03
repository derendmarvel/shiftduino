@extends('layouts.template')

@section('title', 'Our Products')

@section('content')
    <div class = "row p-5 justify-content-center" id = "products">
        <h1 class = "fw-bold fs-0 mb-0 pb-0 text-center"> Products </h1>
        <h5 class = "fw-light mb-5 text-center"> Find your perfect Shiftduino </h5>
        @foreach ($products as $product)
        <div class = "col-4 shadow-sm rounded-3 p-0 m-3">
            <img src = "{{ $product-> image }}" class = "w-100 m-0">
            <div class = "pt-2 pb-4 px-4"> 
                <p class = "fw-medium my-2"> {{ $product->name }} </p>
                <p class = "opacity-50"> Rp. {{ $product->price }}.000 </p>
                <a class = " btn btn-outline-success rounded-0" href = "/product/{{$product->id}}"> View Product </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection