<?php
/** @var \App\Models\Product $product */
?>

<div class="products">
    <div>
        @if ($product->img !== null && file_exist(url('imgs/' . $product->img)))
            <div class="img-container">
                <img src="{{ file_exist(url('imgs/' . $product->img)) }}" alt="{{ $product->img_description }}">
            </div>
        @else
            <div class="img-container">
                <img src="{{ url('assets/no-image.jpeg') }}" alt="not image">
            </div>
        @endif
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
