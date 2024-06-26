<?php
/** @var \App\Models\Product[] \Illuminate\Database\Eloquent\Collection $products */
?>
@extends('layouts.main')

@section('title', 'Products')

@section('main')
    <div class='info-container'>
            <h1 class="font-display">Check out this products</h1>
        <div class="new-products">
            @foreach ($products as $product)
                <div class="product">

                    <x-product-image :product="$product"/>

                    <div class="product-details">
                        <p class="bold-text">{{ $product->name }}</p>
                        <p>$ {{ $product->price }}</p>
                        <a href="{{ route('products.view', ['id' => $product->id]) }}">See more</a>
                    </div>
                    <div class="base-button-container">
                        <button class="base-button">Add to cart</button>
                    </div>
                    <div class="base-button-container">
                        <a class="base-button edit-button"
                                href="{{ route('products.formUpdate', ['id' => $product->id]) }}">Edit</a>
                    </div>
                    <div class="base-button-container">
                        <a class="base-button delete-button"
                                href="{{ route('products.confirmDelete', ['id' => $product->id]) }}">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
