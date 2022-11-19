@extends('main_master')
@section('main')
<section class="hero">
    <div class="hero__text">
        <h1>Beauty products that really work.</h1>
        <p>Our formulations have proven efficacy, contain organic ingredients only and are 100% cruelty free.</p>
        <div class="hero__buttons">
            <a class="hero__blackBtn">Skincare</a>
            <a class="hero__transBtn">Shop All</a>
        </div>
    </div>
</section>
<div class="marquee">
    <div class="track">
        <div class="content">&nbsp;&nbsp;&nbsp; Proven Efficacy &nbsp;&nbsp;&nbsp; Free shipping on orders over $30 &nbsp;&nbsp;&nbsp; Cruelty Free &nbsp;&nbsp;&nbsp; Made in France &nbsp;&nbsp;&nbsp; Organic Ingredients &nbsp;&nbsp;&nbsp; Proven Efficacy &nbsp;&nbsp;&nbsp; Free shipping on orders over $30 &nbsp;&nbsp;&nbsp; Cruelty Free &nbsp;&nbsp;&nbsp; Made in France &nbsp;&nbsp;&nbsp; Organic Ingredients &nbsp;&nbsp;&nbsp; Proven Efficacy &nbsp;&nbsp;&nbsp; Free shipping on orders over $30 &nbsp;&nbsp;&nbsp; Cruelty Free &nbsp;&nbsp;&nbsp; Made in France &nbsp;&nbsp;&nbsp; Organic Ingredients</div>
    </div>
</div>
<section class="homeCategory">
    <div class="homeCategory__images">
        <div class="homeCategory__col1">
            <!-- Featured Product Start -->
            <div class="homeCategory__item">
                <div class="homeCategory__itemInner">
                    <a href="#" class="homeCategory__link"></a>
                    <div class="homeCategory__thumbnail">
                        <img src="{{ asset('frontend/img/product28_large.webp') }}" class="homeCategory__overlay" alt="">
                    </div>
                </div>
            </div>
            <!-- Featured Product End -->
            <!-- Featured Product Start -->
            <div class="homeCategory__item">
                <div class="homeCategory__itemInner">
                    <a href="#" class="homeCategory__link"></a>
                    <div class="homeCategory__thumbnail">
                        <img src="{{ asset('frontend/img/product9_large.webp') }}" class="homeCategory__overlay" alt="">
                    </div>
                </div>
            </div>
            <!-- Featured Product End -->
        </div>
        <div class="homeCategory__col2">
            <!-- Featured Product Start -->
            <div class="homeCategory__item">
                <div class="homeCategory__itemInner">
                    <a href="#" class="homeCategory__link"></a>
                    <div class="homeCategory__thumbnail">
                        <img src="{{ asset('frontend/img/product29_large.webp') }}" class="homeCategory__overlay" alt="">
                    </div>
                </div>
            </div>
            <!-- Featured Product End -->
            <!-- Featured Product Start -->
            <div class="homeCategory__item">
                <div class="homeCategory__itemInner">
                    <a href="#" class="homeCategory__link"></a>
                    <div class="homeCategory__thumbnail">
                        <img src="{{ asset('frontend/img/product31_large.webp') }}" class="homeCategory__overlay" alt="">
                    </div>
                </div>
            </div>
            <!-- Featured Product End -->
        </div>
    </div>
    <div class="homeCategory__text">
        Home Text
    </div>
</section>
@endsection