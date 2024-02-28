<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="icon" href="{{ url('assets/logo.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        crossorigin="anonymous" />

    <title>@yield('title') :: Home Deco</title>

</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo-container">
                <a class="logo-link" href="{{ route('home') }}">
                    <img src="{{ url('assets/full-logo.svg') }}" /></a>
            </div>
            <div class="links-container">
                <a class="links-link" href="{{ route('home') }}">HOME</a>
                <a class="links-link" href="{{ route('home') }}">ABOUT</a>
                <a class="links-link" href="{{ route('products') }}">SHOP</a>
                <a class="links-link" href="{{ route('home') }}">COLLECTION</a>
                <a class="links-link" href="{{ route('home') }}">BLOG</a>
            </div>
            <div class="cart-container">
                <a class="cart-link" href="{{ route('home') }}"><i class="fas fa-shopping-cart"
                        style="color: #ffffff;"></i></a>

            </div>
        </nav>
    </header>
    <main>
        @yield('main')
    </main>
    <footer class="footer">
        <div class="footer-div">
            <h5 class="">Diseño y Programación Web</h5>
            <p>
                <a class="">Profesor: Santiago Gallino</a>
            </p>
            <p>
                <a class="">Portales y Comercio Electrónico</a>
            </p>
            <p>
                <a class="">4 Cuatrimestre</a>
            </p>
        </div>
        <div class="footer-div">
            <h5 class="">Davinci</h5>
            <p>
                <a class="">Turno Tarde</a>
            </p>
            <p>
                <a class="">Comisión A</a>
            </p>
            <p>
                <a class="">Final</a>
            </p>
        </div>
        <div class="footer-div">
            <h5 class="">Alumna</h5>
            <p>
                <a class="">Eliana Ughetto</a>
            </p>
            <p>
                <a class="">22 años</a>
            </p>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
