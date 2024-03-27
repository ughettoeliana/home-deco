@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <div class="banner">
        <div class="base-button-container">
            <button class="base-button">Check new collection</button>
        </div>
    </div>
    <div class='info-container'>
        <div class="container">
            <h1 class="font-display">We create interior products by today's standars</h1>
            <br />
            <div>
                <p class="text-lightGray">Furnne is a brand that creates furniture of the highest quality with natural and
                    ecological materials. We
                    have been operating on the market for 10 years, our products are used by miltions of people around the
                    world
                    who are satistied with our products</p>
            </div>
            <div class="arrow-container">
                <a href="about" class="text-black">About us <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                </a>
            </div>
        </div>
        <div class="categories-container">
            <div class="categories">
                <a href='#' id="kitchen" class="categories-link" onclick="showImage('kitchen', event)">/kitchen</a>
                <a href='#' id="living" class="categories-link" onclick="showImage('living', event)">/living
                    room</a>
                <a href='#' id="bedroom" class="categories-link" onclick="showImage('bedroom', event)">/bedroom</a>
                <a href='#' id="dining" class="categories-link" onclick="showImage('dining', event)">/dining</a>
                <a href='#' id="bathroom" class="categories-link"
                    onclick="showImage('bathroom', event)">/bathroom</a>
            </div>
            <div id="image-container" class="image-container">
                <img id="image" src="/assets/kitchen.jpg">
                {{-- TO DO LINKS TO THE ESPECIFIC CATEGORIES AS THE USER CLICKS --}}
            </div>
        </div>

        <div class="products-container">
            <p>New collection 2023</p>
            <h2 class="font-display">You must own this products</h2>
            <br />
            <div class="base-button-container">
                <button class="base-button">Check new collection</button>
            </div>
        </div>
        <div class="new-products">
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/art-lamp.png') }}" alt="white art lamp">
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/office-blue-chair.png') }}" alt="white art lamp">
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/white-single-person-couch.png') }}" alt="white art lamp">
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div>
            <div class="product">
                <div class="img-container">
                    <img src="{{ url('assets/black-chair.png') }}" alt="white art lamp">
                </div>
                <div class="base-button-container">
                    <button class="base-button">Add to cart</button>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
