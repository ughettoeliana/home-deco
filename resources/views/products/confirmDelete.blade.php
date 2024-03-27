<?php
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')

@section('title', 'Confirm delete of ' . $product->name)

@section('main')
    <div class="confirm-delete-div">
        <div class='info-container'>
            <h1>Are you sure you want to <span class="text-red">delete</span> this product?</h1>
            <div class="new-products">
                <div class="product">
                    <div class="img-container">
                        <img src="{{ url('assets/art-lamp.png') }}" alt="white art lamp">
                    </div>
                </div>
                <div class="product-details-container">
                    <h2>{{ $product->name }}</h2>
                    <div class="product-details">
                        <p class="bold-text">$ {{ $product->price }}</p>
                        <br>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="buttons-container">
                        <div class="base-button-container">
                            <button class="base-button">Cancel</button>
                        </div>
                        <form action="{{ route('products.processDelete', ['id' => $product->id]) }}" method="post">
                            @csrf
                            <div class="base-button-container">
                                <button type="submit" class="delete-button">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
