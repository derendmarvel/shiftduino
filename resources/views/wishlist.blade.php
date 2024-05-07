@extends('layouts.template')

@section('title', 'Your Wishlist')

@section('content')
        <div class = "row justify-content-center align-items-center align-middle p-5">
            @if($wishlists->isNotEmpty())
                <h1 class = "fw-bold fs-0 mb-0 pb-0 text-center" data-aos="fade-up" data-aos-duration="1500"> Your Wishlist </h1>
                @foreach ($wishlists as $product)
                    <div class = "col-12 col-md-4 shadow-sm rounded-3 p-0 m-3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                        <img src = "{{ $product->product->image }}" class = "w-100 m-0">
                        <div class = "pt-2 pb-4 px-4"> 
                            <p class = "fw-medium my-2"> {{ $product->product->name }} </p>
                            <p class = "opacity-50"> Rp. {{ $product->product->price }}.000 </p>
                            <form action="/wishlist/destroy/{{$product->product->id}}" method="POST" id="deleteWishlist">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger rounded-0"> Remove from Wishlist </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 px-5 py-3 text-center">
                <h1 class = "fw-bold fs-1 mb-2 pb-0 text-center" data-aos="fade-up" data-aos-duration="1500"> Wishlist is Empty. </h1>
                    <a class = " w-75 btn btn-outline-dark rounded-0 px-2 px-md-5 py-2 my-2" href = "/products" data-aos="fade-up" data-aos-duration="1500" data-aos-delay = "250"> Browse Catalog </a>
                </div>
            @endif
        </div>
@endsection