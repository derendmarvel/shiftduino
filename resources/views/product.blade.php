@extends('layouts.template')

@section('title', 'Details')

@push('css') 
    <style>
        .bg-background-image {
            background: transparent;
        }

        @media (min-width: 767px) { /* Bootstrap's 'sm' breakpoint, adjust as needed */
            .bg-background-image {
                background: url('{{ $product->image2 }}');
                background-size: cover; 
                height: 500px;
            }
        }
</style>
@endpush

@section('content')
    <div class = "row px-5 py-4 justify-content-center align-items-center align-middle bg-background-image">
        <div class = "col-0 col-md-6 mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="1500">
            <img src = "{{ $product-> image }}" class = "w-100 m-0 p-0 hide-on-mobile">
        </div>

        <div class = "col-12 col-md-6 px-3 text-center text-md-start" data-aos="fade-up" data-aos-duration="1500">
            <h1 class = "fw-bold fs-0"> {{ $product->name }} </h1> 
            <p class = "opacity-75 fs-3"> {{ $product->price }}</p>
            <p class = "opacity-75"> {{ $product->launch }} </p>

            <p> {{ $product->description }} </p>
            <p class = "opacity-75"> Wishlisted by {{ $product->demand }} </p>
            <div class = "d-flex flex-column flex-md-row justify-content-center justify-content-md-start">
                @guest
                    <a class = "btn btn-outline-success rounded-0 text-center text-md-start" href="{{ route('login') }}"> Add to Wishlist </a>
                @else
                    @if (!$existingWishlist)
                    <form action="/wishlist/{{ $product->id }}" method="POST">
                        @csrf
                        @method('post')
                        <button type = "submit" class = "btn btn-outline-success rounded-0" href = "/wishlist/{{$product->id}}"> Add to Wishlist </button>
                    </form>
                    @else
                    <button class = "btn btn-outline-success rounded-0 text-center text-md-start" href = "#"> Already Wishlisted </button>
                    @endif
                @endguest
                
            </div>
        </div>
    </div>
@endsection