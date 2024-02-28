<?php
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')

@section('title', $product->name . 'details')

@section('main')
    <div class='info-container'>
        <div class="new-products">
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/art-lamp.png') }}" alt="white art lamp">
                </div>
            </div>
            <div class="product-details-container">
                <h1>{{ $product->name }}</h1>
                <div class="product-details">
                    <p class="bold-text">$ {{ $product->price }}</p>
                    <br>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div>
            
        </div>
    </div>

@endsection
