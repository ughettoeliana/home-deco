<?php
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')

@section('title', 'Confirm delete of ' . $product->name)

@section('main')
    <div class="confirm-delete-div">
        <div class='info-container'>
            <h1>Are you sure you want to <span class="text-red">delete</span> this product?</h1>

            <div class="border-red">
                <x-product-data :product="$product" />
            </div>

            <div class="buttons-container">
                <div class="base-button-container">
                    <a class="base-button" href="{{ route('products') }}">Cancel</a>
                </div>
                <form action="{{ route('products.processDelete', ['id' => $product->id]) }}" method="post">
                    @csrf
                    <div class="base-button-container">
                        <button type="submit" class="base-button delete-button">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
