<?php 
/** @var \App\Models\Product[] \Illuminate\Database\Eloquent\Collection $products */
?>
@extends('layouts.main')

@section('title', 'Products')

@section('main')
    <div class='info-container'>
        <div class="products-container">
            <h2 class="font-display">Check out this products</h2>
        </div>
        <div class="new-products">
            @foreach ($products as $product)
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/art-lamp.png') }}" alt="white art lamp">
                </div>
                <div class="product-details">
                    <p class="bold-text">{{ $product->name}}</p>
                    <p>$ {{ $product->price}}</p>
                    <a href="{{url('products/' . $product->id)}}">See more</a>
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div>
            @endforeach
{{--             
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/office-blue-chair.png') }}" alt="white art lamp">
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/white-single-person-couch.png') }}" alt="white art lamp">
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/black-chair.png') }}" alt="white art lamp">
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div> --}}
        </div>
    </div>

@endsection
