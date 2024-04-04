<?php
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>

@extends('layouts.admin')

@section('title', 'Edit ' . $product->name)

@section('main')
    <div>
        <h1 class="text-center">Edit {{ $product->name }}</h1>
        <form action="{{ route('products.processUpdate', ['id' => $product->id]) }}" method="post"
            enctype="multipart/form-data">
            @csrf

            <label for="name">Name:</label>
            <input class='input' type="text" id="name" name="name" value="{{ old('name', $product->name) }}"
                @error('name') aria-describedby="error-name" @enderror>
            @error('name')
                <div class="text-danger" id="error-name">
                    {{ $message }}
                </div>
            @enderror

            <label for="price">Price:</label>
            <input class='input' type="number" id="price" name="price" min="0.01"
                value="{{ old('price', $product->price) }}" step="0.01"
                @error('price') aria-describedby="error-price" @enderror>
            @error('price')
                <div class="text-danger" id="error-price">
                    {{ $message }}
                </div>
            @enderror

            <label for="description">Description:</label>
            <textarea class='input' id="description" name="description" rows="4">{{ old('description', $product->description) }} </textarea>
            @error('description')
                <div class="text-danger" id="error-description">
                    {{ $message }}
                </div>
            @enderror

            <label for="category">Category:</label>
            <select class='input' id="category" name="category" required>
                <option value="furniture">Furniture</option>
                <option value="decor">Decor</option>
                <option value="lighting">Lighting</option>
                <option value="kitchen & dining">Kitchen & Dining</option>
                <option value="bedding & bath">Bedding & Bath</option>
                <option value="outdoor & garden">Outdoor & Garden</option>
                <option value="home office">Home Office</option>
                <option value="storage & organization">Storage & Organization</option>
                <option value="kids & baby">Kids & Baby</option>
                <option value="pet supplies">Pet Supplies</option>
            </select>

            <div class="current-image-container">
                <label for="image" class="file-label">Current Image:</label>
                <x-product-image :product="$product" />
            </div>
            <label for="image" class="file-label">Image URL:</label>
            <input class="file-input" type="file" id="image" name="image" value="{{ old('img', $product->img) }}"
                @error('image') aria-describedby="error-image" @enderror>
            @error('name')
                <div class="text-danger" id="error-name">
                    {{ $message }}
                </div>
            @enderror

            <label for="img_description">Image Description:</label>
            <input class='input' type="text" id="img_description" name="img_description"
                value="{{ old('img_description', $product->img_description) }}">

            <div class="text-center">
                <button type="submit" class="base-button submit-button">Submit</button>
            </div>
    </div>
    </form>
    </div>
@endsection
