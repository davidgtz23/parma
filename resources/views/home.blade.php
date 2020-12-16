@extends('layouts.app')

@section('content')

    <section class="home">

        <div class="home__banner">
            <div class="container">
                <div class="home__banner-left">
                    SOMOS<br>
                    PREMIUM<br>
                    SOMOS<br>
                    PARMA
                </div>
                <img class="home__banner-products" src="{{ asset('images/home_products.png') }}" alt="Productos Parma">
                <div class="home__banner-right">
                    <p>
                        Desde hace 65 años deleitamos los paladares de las personas traduciendo recetas europeasantiguas en productos artesanales y delicatessen de la más alta calidad con un sabor único.
                    </p>
                </div>
            </div>
        </div>
        <div class="home__products">
            <div class="container">
                <a href="#" class="home__products-item" style="background-image: url({{ asset('images/home/producto_serranos.png') }})">
                    <div class="item-content">
                        <div class="category">Productos</div>
                        <div class="name">SERRANOS</div>
                    </div>
                </a>
                <a href="#" class="home__products-item" style="background-image: url({{ asset('images/home/producto_chorizos.png') }})">
                    <div class="item-content">
                        <div class="category">Productos</div>
                        <div class="name">CHISTORRAS Y CHORIZOS</div>
                    </div>
                </a>
                <a href="#" class="home__products-item" style="background-image: url({{ asset('images/home/producto_salamis.png') }})">
                    <div class="item-content">
                        <div class="category">Productos</div>
                        <div class="name">SALAMIS Y MADURADOS</div>
                    </div>
                </a>
                <a href="#" class="home__products-item" style="background-image: url({{ asset('images/home/producto_parmesanos.png') }})">
                    <div class="item-content">
                        <div class="category">Productos</div>
                        <div class="name">PARMESANOS</div>
                    </div>
                </a>
                <a href="#" class="home__products-item" style="background-image: url({{ asset('images/home/producto_jamones.png') }})">
                    <div class="item-content">
                        <div class="category">Productos</div>
                        <div class="name">JAMONES Y PECHUGAS</div>
                    </div>
                </a>
                <a href="#" class="home__products-item" style="background-image: url({{ asset('images/home/producto_salchichas.png') }})">
                    <div class="item-content">
                        <div class="category">Productos</div>
                        <div class="name">SALCHICHAS</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="home__recipe">
            <div class="container">
                <div class="home__recipe-text">
                    Panini de jamón de pierna selección natural 
                    <br>
                    <strong>PARMA</strong>®
                </div>
                <a class="home__recipe-btn" href="">
                    VER TODAS
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 545.43 188.72"><polygon points="451.07 0 430.02 20.56 489.13 79.67 0 79.67 0 109.05 489.13 109.05 430.02 168.15 451.07 188.72 545.43 94.36 451.07 0"/></svg>
                </a>
                <img class="home__recipe-product" src="{{ asset('images/home/panini_jamon.png') }}" alt="Panini Parma">
            </div>
        </div>

    </section>

@endsection
