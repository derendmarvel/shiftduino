@extends('layouts.template')

@section('title', 'Details')

@section('content')
    <div class = "row px-5 py-4 justify-content-center align-items-center align-middle" style = "background: url('{{ $product->image2 }}'); background-size: cover; height: 500px;">
        <div class = "col-6">
        </div>

        <div class = "col-6 px-3">
            <h1 class = "fw-bold fs-0"> {{ $product->name }} </h1> 
            <p class = "opacity-75"> Rp {{ $product->price }}.000 </p>

            <p> {{ $product->description }} </p>
            <p class = "opacity-75"> Wishlisted by {{ $product->demand }} </p>
            <div class = "d-flex w-100 justify-content-between">
                <form action="/wishlist/{{ $product->id }}" method="POST">
                    @csrf
                    @method('post')
                    <button type = "submit" class = " btn btn-outline-success rounded-0" href = "/wishlist/{{$product->id}}"> Add to Wishlist </button>
                </form>
            </div>
        </div>
    </div>
@endsection