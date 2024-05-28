@extends('layouts.template')

@section('title', 'Your Wishlist')

@section('content')
    <div class = "row justify-content-center align-items-center align-middle p-5">
        <h1 class = "fs-0 fw-bold pb-4"> Wishlisted </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User</th>
                    <th scope="col">Item</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wishlists as $key => $wishlist)
                <tr>
                    <th scope="row"> {{$key + 1}} </th>
                    <td> {{$wishlist->user->name}} </td>
                    <td> {{$wishlist->product->name}} </td>
                </tr>
                @endforeach
            </tbody>
            


        </table>
    </div>
@endsection