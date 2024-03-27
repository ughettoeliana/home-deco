<?php
/** @var \App\Models\Product $product */
?>

<div class="products">
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
    </div>
</div>