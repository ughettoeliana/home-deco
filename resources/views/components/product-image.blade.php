<?php
/** @var \App\Models\Product $product */
?>

<div>
    @if ($product->img !== null && file_exists(public_path('imgs/' . $product->img)))
        <div class="img-container">
            <img src="{{ url('imgs/' . $product->img) }}" alt="{{ $product->img_description }}">
        </div>
    @else
        <div class="img-container">
            <img class="no-image-icon" src="{{ url('assets/no-image-icon.png') }}" alt="not an image show">
        </div>
    @endif
</div>