@extends('layouts.layout')
@section('content')

<div class="primary-content-area container content-padding product-page-ds">
            <div class="main-content-area product-ds">
                <div class="product-title-section">
                    <h2>{{$product->name}}</h2>
                    <div class="product-subtitle">
                        <div class="product-author"><span class="avatar box-26"><a href="06-profile-page.html"><img
                                        src="{{asset('img/avatar.png')}}" alt=""></a><span class="verified"><svg
                                        class="crumina-icon">
                                        <use xlink:href="#check-icon"></use>
                                    </svg></span></span>&#64;{{$userProfile->username}}</div>
                        <div class="item-category social-graphics">
                            {{$product->category}}
                        </div>
                        <div class="item-rating">
                            
                        </div>
                    </div>
                </div>
                <div class="product-image">
                    <img src="/storage/files/{{$product->cover_img}}" alt="Product Image">
                </div>
                <div class="product-info">
                    <div class="tabs-block swiper-container">
                        <div class="swiper-nav">
                            <div class="swiper-button-next">
                                <svg class="crumina-icon next-button">
                                    <use xlink:href="#arrow-right2-icon"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-prev">
                                <svg class="crumina-icon prev-button">
                                    <use xlink:href="#arrow-left2-icon"></use>
                                </svg>
                            </div>
                        </div>
                        <ul class="tabs-list swiper-wrapper">
                            <li class="swiper-slide active"><a href="#tab1">Description</a></li>
                        </ul>
                        <div class="tabs-content-wrapper">
                            <div id="tab1" class="tab active">
                                <div class="tab-content">
                                    <div class="product-description">
                                        <!-- <div class="title h6">Revive your Twitter with Awesome Graphics!</div> -->
                                        <p>{{$product->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="product-additional-info">
                    <div class="product-purchase-info">
                        <form class="cryptoki-form" id="purchase-form">
                            <div class="product-price">
                                <div class="price">IDR.{{$product->price}}</div>
                                <div class="label"></div>
                            </div>
                            <button class="btn btn-fullwidth  gradient-background" type="submit">Buy
                                Now!</button>
                            <button class="btn btn-fullwidth  btn-dark" type="submit">Add to Cart</button>
                        </form>
                    </div>
                    <div class="product-score">
                        <div class="score-item">
                            <div class="value">27</div>
                            <div class="label">Item Sales</div>
                        </div>
                        <div class="score-item">
                            <div class="value">4.3 / 5</div>
                            <div class="label">Item Rating</div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="small-title">Item details</div>
                        <div class="product-details-wrapper">
                            <ul class="details-title">
                                <li>Published</li>
                                <li>Updated</li>
                            </ul>
                            <ul class="details-value">
                                <li>{{$product->created_at->format('m/d/Y')}}</li>
                                <li>{{$product->updated_at->format('m/d/Y')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="seller-info">
                        <div class="small-title">Item Seller</div>
                        <div class="seller-box">
                            <div class="avatar box-64">
                                <a href="06-profile-page.html">
                                    <img src="{{asset('img/avatar.png')}}" alt="avatar"><span class="verified"><svg
                                            class="crumina-icon">
                                            <use xlink:href="#check-icon"></use>
                                        </svg></span></a>
                            </div>
                            <div class="seller-meta">
                                <div class="seller-name">
                                    <div class="name"><a href="06-profile-page.html">{{$userProfile->name}}</a></div>
                                    <div class="meta gradient-text">&#64;{{$userProfile->username}}</div>
                                </div>
                                <div class="seller-buttons">
                                    <!-- <a class="btn  btn-small-wide gradient-background"
                                        href="06-profile-page.html">Profile</a>
                                    <a class="btn  btn-small-wide btn-dark" href="#">Follow</a> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!-- main content area -->
@endsection