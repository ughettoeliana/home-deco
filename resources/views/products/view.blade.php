<?php
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')

@section('title', $product->name . 'details')

@section('main')
    <div class='info-container'>
        <h1 class="">Product Details</h1>
        {{-- @include('products._product-data') --}}
        <x-product-data :product="$product"/>
        
        <div class="base-button-container">
            <a class="base-button">Add to cart</a>
        </div>
    </div>

@endsection
