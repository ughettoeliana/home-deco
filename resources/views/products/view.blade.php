<?php
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')

@section('title', $product->name . 'details')

@section('main')
    <div class='info-container'>
        <h1>Product Details</h1>

        <x-product-data :product="$product"/>
        
        <div class="base-button-container">
            <a class="base-button">Add to cart</a>
        </div>
    </div>

@endsection
