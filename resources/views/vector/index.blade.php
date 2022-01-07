@extends('layouts.layout')
@section('content')

<div class="primary-content-area container content-padding product-page-ds">
            <div class="main-content-area product-ds">
                <div class="product-title-section">
                    <h2>{{$vector->name}}</h2>
                    <div class="product-subtitle">
                        <div class="product-author"><span class="avatar box-26"><a href="06-profile-page.html"><img
                                        src="{{asset('img/avatar.png')}}" alt=""></a><span class="verified"><svg
                                        class="crumina-icon">
                                        <use xlink:href="#check-icon"></use>
                                    </svg></span></span>{{$userProfile->name}}</div>
                        <div class="item-category social-graphics">
                            Social graphics
                        </div>
                        <div class="item-rating">
                            <span class="filled"><svg class="crumina-icon">
                                    <use xlink:href="#star2-icon"></use>
                                </svg></span>
                            <span class="filled"><svg class="crumina-icon">
                                    <use xlink:href="#star2-icon"></use>
                                </svg></span>
                            <span class="filled"><svg class="crumina-icon">
                                    <use xlink:href="#star2-icon"></use>
                                </svg></span>
                            <span class="filled"><svg class="crumina-icon">
                                    <use xlink:href="#star2-icon"></use>
                                </svg></span>
                            <span><svg class="crumina-icon">
                                    <use xlink:href="#star2-icon"></use>
                                </svg></span>
                        </div>
                    </div>
                </div>
                <div class="product-image ">
                    <img src="/storage/files/{{$vector->itemImage}}" alt="Product Image">
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
                                        <div class="title h6">{{$vector->name}}</div>
                                        <p>{{$vector->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="product-additional-info">
                    <!-- <div class="product-fav-counter"><svg class="crumina-icon">
                            <use xlink:href="#heart-icon"></use>
                        </svg><span class="count">10a5</span>
                    </div> -->
                    
                    
                    <div class="product-score">
                        <div class="score-item">
                            <div class="value">{{$vector->itemDownload}}</div>
                            <div class="label">Item Download</div>
                        </div>
                        <div class="score-item">
                            <div class="value">{{$vector->itemRating}}</div>
                            <div class="label">Item Rating</div>
                        </div>
                    </div>
                    <div>
                        <a href="{{route('download.vector',[$vector->id,$vector->itemImage])}}"><button class="btn btn-fullwidth  gradient-background" type="submit">DOWNLOAD</button></a>
                    </div>
                    <div class="product-details">
                        <div class="small-title">Item details</div>
                        <div class="product-details-wrapper">
                            <ul class="details-title">
                                <li>Published</li>
                                <li>Updated</li>
                                <li>Files included</li>
                                <li>Software</li>
                            </ul>
                            <ul class="details-value">
                                <li>{{$vector->created_at->format('m/d/Y')}}</li>
                                <li>{{$vector->updated_at->format('m/d/Y')}}</li>
                                <li>{{$vector->itemFile}}</li>
                                <li>{{$vector->itemSoftware}}</li>
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
                                    <div class="name"><a href="">{{$userProfile->name}}</a></div>
                                    <div class="meta gradient-text">@ {{$userProfile->username}}</div>
                                </div>
                                <div class="seller-buttons">
                                    <a class="btn  btn-small-wide gradient-background"
                                        href="06-profile-page.html">Profile</a>
                                    <a class="btn  btn-small-wide btn-dark" href="#">Follow</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!-- main content area -->
@endsection