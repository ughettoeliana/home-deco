<?php
/** @var \App\Models\Product $product */
?>

<div class="products">       

    <x-product-image :product="$product"/>
     
    <div class="product-details-container">
        <h2>{{ $product->name }}</h2>
        <div class="product-details">
            <p class="bold-text">$ {{ $product->price }}</p>
            <br>
            <p>{{ $product->description }}</p>
        </div>
    </div>
</div>
