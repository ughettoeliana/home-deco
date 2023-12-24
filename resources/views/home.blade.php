@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <div class="banner">
        <div class="button-container">
            <button class="banner-button">Check new collection</button>
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
                <a href="about" class="black-text">About us <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                </a>
            </div>
        </div>
        <div class="categories-container">
            <div class="categories">
                <a href='#' id="kitchen" class="categories-link">/kitchen</a>
                <a href='#' id="living" class="categories-link">/living room</a>
                <a href='#' id="bedroom" class="categories-link">/bedroom</a>
                <a href='#' id="dining" class="categories-link">/dining</a>
                <a href='#' id="bathroom" class="categories-link">/bathroom</a>
            </div>
            <div></div>
        </div>
        <div id="image-container">
        </div>
    </div>
    </div>

@endsection
