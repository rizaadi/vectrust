@extends('layouts.layout')
@section('content')
<div class="primary-content-area bottom-padding-70 ">
    <!-- fullwidth banner -->
    <div class="section-padding fullwidth-banner">
        <div class="banner-overlay" style="background-image:url(img/content/dashboard-banner.png)"></div>
        <div class="search-form-with-text section-small">
            <div class="text-content">
                <!-- <div class="subtitle">WELCOME TO VECTUST</div> -->
                <div class="title">Find And Search For Your Vector</div>
            </div>
            <div class="search-block">
                <form method="get" class="main-search">
                    <input class="main-search-params" type="hidden" name="params" value="all" />
                    <button class="search-params">
                        <span class="button-text search-param-title">All Categories</span>
                        <svg class="crumina-icon">
                            <use xlink:href="#arrow-down-icon"></use>
                        </svg>
                    </button>
                    <ul class="search-dropdown">
                        <li data-param="all">All Categories</li>
                        <li data-param="ui-templates">UI templates</li>
                        <li data-param="coded-templates">Coded templates</li>
                        <li data-param="social-graphics">Social Graphics</li>
                    </ul>
                    <input type="text" class="search-input" placeholder="Enter your search here...">
                    <button class="search-button">
                        <svg class="crumina-icon">
                            <use xlink:href="#search-icon"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- fullwidth banner -->
    <!-- featured items carousel -->
    <div class="container section-padding overflow-hidden ">
        <div class="section-title-wrapper">
            <div class="section-title"><span class="gradient-text">Featured</span> Vector</div>
            <div class="title-navigation">
                <div class="featured-carousel-icon swiper-button-prev"><svg class="crumina-icon">
                        <use xlink:href="#arrow-left2-icon"></use>
                    </svg></div>
                <div class="featured-carousel-icon swiper-button-next"><svg class="crumina-icon">
                        <use xlink:href="#arrow-right2-icon"></use>
                    </svg></div>
            </div>
        </div>
        <div class="featured-carousel">
            <div class="swiper-wrapper">
                @foreach($allVector as $v)
                <div class="swiper-slide">
                    <div class="featured-item v5">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <div class="fav-counter"><svg class="crumina-icon">
                                        <use xlink:href="#heart-icon"></use>
                                    </svg><span class="count">{{$v->itemDownload}}</span></div>
                                <div class="featured-item-image">
                                    <a href="{{route('view.vector', $v->id)}}">
                                        <img src="/storage/files/{{$v->itemImage}}" alt=""></a>
                                </div>
                                <div class="featured-item-info">
                                    <div class="item-category ui-templates">
                                        {{$v->category}}
                                    </div>
                                    <div class="title"><a href="{{route('view.vector', $v->id)}}">{{$v->name}}</a>
                                    </div>
                                    <div class="item-meta"><span class="avatar box-26"><a
                                                href="06-profile-page.html"><img src="img/avatar.png" alt=""></a><span
                                                class="verified"><svg class="crumina-icon">
                                                    <use xlink:href="#check-icon"></use>
                                                </svg></span></span>&#64;{{$userProfile->username}}</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
                                <div class="item-rating">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- featured items carousel -->
    
    <!-- featured items grid -->
    <div class="container section-padding">
        <div class="section-title-wrapper">
            <div class="section-title"><span class="gradient-text">Newest</span> Vector</div>
            <div class="all-items-link"><a href="02-explore.html">Explore all Artworks</a></div>
        </div>
        <div class="featured-box">
            <div class="featured-box-wrapper grid-4-columns">
                @foreach ($allVector as $vector)
                <div class="featured-item v5">
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <!-- <div class="fav-counter">
                                <a href="#">
                                    <svg class="crumina-icon">
                                        <use xlink:href="#heart-icon"></use>
                                    </svg><span class="count">Cart</span></a></div> -->
                            <div class="featured-item-image"><a href="{{route('view.vector', $vector->id)}}">
                                    <img src="/storage/files/{{$vector->itemImage}}" alt=""></a>
                            </div>
                            <div class="featured-item-info">
                                <div class="item-category social-graphics">
                                {{$v->category}}
                                </div>
                                <div class="title"><a href="{{route('view.vector', $vector->id)}}">{{$vector->name}}</a>
                                </div>
                                <div class="item-meta"><span class="avatar box-26"><a href="06-profile-page.html"><img
                                                src="{{ Auth::user()->profile_photo_url }}" alt=""></a><span class="verified"><svg
                                                class="crumina-icon">
                                                <use xlink:href="#check-icon"></use>
                                            </svg></span></span>&#64;{{$userProfile->username}}</div>
                            </div>
                        </div>
                        <div class="featured-item-post-content">
                            <div class="item-rating">
                                
                            </div>
                            <div class="item-price"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- featured items grid -->
    <!--  items categories carousel -->
    <div class="container section-padding">
        <div class="section-title-wrapper">
            <div class="section-title">Browse <span class="gradient-text">Categories</span></div>
            <div class="title-navigation">
                <div class="items-categories-icon swiper-button-prev"><svg class="crumina-icon">
                        <use xlink:href="#arrow-left2-icon"></use>
                    </svg></div>
                <div class="items-categories-icon swiper-button-next"><svg class="crumina-icon">
                        <use xlink:href="#arrow-right2-icon"></use>
                    </svg></div>
            </div>
        </div>
        <div class="items-categories-carousel overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="03-shop-category.html">
                        <div class="category-card turquoise-gradient-diagonal">
                            <div class="category-wrapper"
                                style="background-image: url(img/content/categories/screens-1.png);">
                                <div class="category-content">
                                    <div class="category-title">UI Templates</div>
                                    <div class="category-meta">537 Items</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="03-shop-category.html">
                        <div class="category-card purple-gradient-diagonal">
                            <div class="category-wrapper"
                                style="background-image: url(img/content/categories/screens-2.png);">
                                <div class="category-content">
                                    <div class="category-title">Coded<br>Templates
                                    </div>
                                    <div class="category-meta">109 Items</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="03-shop-category.html">
                        <div class="category-card orange-gradient-diagonal">
                            <div class="category-wrapper"
                                style="background-image: url(img/content/categories/screens-2.png);">
                                <div class="category-content">
                                    <div class="category-title">Social<br>
                                        Graphics
                                    </div>
                                    <div class="category-meta">1066 Items</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--  items categories carousel -->
    <!-- become seller block -->
    <div class="section-small section-padding">
        <div class="become-seller-block">
            <img src="img/content/become-seller.png" alt="">
            <div class="text-content">
                <div class="subtitle">JOIN OUR COMMUNITY!</div>
                <div class="title">Click <span class="gradient-text"><a href="20-become-a-creator.html">Here</a></span>
                    to <br />
                    Become a Seller!</div>
            </div>
        </div>
    </div>
    <!-- become seller block -->
    <!-- latest news -->

    <!-- latest news -->
</div>
@stop
