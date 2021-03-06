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
            <div class="section-title"><span class="gradient-text">Featured</span> Items</div>
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
                <div class="swiper-slide">
                    <div class="featured-item v5">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <div class="fav-counter"><svg class="crumina-icon">
                                        <use xlink:href="#heart-icon"></use>
                                    </svg><span class="count">22</span></div>
                                <div class="featured-item-image">
                                    <a href="06-profile-page.html">
                                        <img src="img/content/items/featured-item-25.png" alt=""></a>
                                </div>
                                <div class="featured-item-info">
                                    <div class="item-category ui-templates">
                                        UI templates
                                    </div>
                                    <div class="title"><a href="05-product.html">Cryptoki - NFT and Digital
                                            Market...</a>
                                    </div>
                                    <div class="item-meta"><span class="avatar box-26"><a
                                                href="06-profile-page.html"><img src="img/avatar.png" alt=""></a><span
                                                class="verified"><svg class="crumina-icon">
                                                    <use xlink:href="#check-icon"></use>
                                                </svg></span></span>@DexterStark</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
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
                                <div class="item-price">$12.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured-item v5">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <div class="fav-counter"><svg class="crumina-icon">
                                        <use xlink:href="#heart-icon"></use>
                                    </svg><span class="count">22</span></div>
                                <div class="featured-item-image">
                                    <a href="06-profile-page.html">
                                        <img src="img/content/items/featured-item-26.png" alt=""></a>
                                </div>
                                <div class="featured-item-info">
                                    <div class="item-category coded-templates">
                                        Coded templates
                                    </div>
                                    <div class="title"><a href="05-product.html">Olympus HTML - Social
                                            Networking...</a></div>
                                    <div class="item-meta"><span class="avatar box-26"><a
                                                href="06-profile-page.html"><img src="img/avatar-2.png" alt=""></a><span
                                                class="verified"><svg class="crumina-icon">
                                                    <use xlink:href="#check-icon"></use>
                                                </svg></span></span>@JackieJ</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
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
                                    <span class="filled"><svg class="crumina-icon">
                                            <use xlink:href="#star2-icon"></use>
                                        </svg></span>
                                </div>
                                <div class="item-price">$24.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured-item v5">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <div class="fav-counter"><svg class="crumina-icon">
                                        <use xlink:href="#heart-icon"></use>
                                    </svg><span class="count">68</span></div>
                                <div class="featured-item-image">
                                    <a href="06-profile-page.html">
                                        <img src="img/content/items/featured-item-27.png" alt=""></a>
                                </div>
                                <div class="featured-item-info">
                                    <div class="item-category social-graphics">
                                        Social graphics
                                    </div>
                                    <div class="title"><a href="05-product.html">Twitter Gaming Headers Pack
                                            04</a></div>
                                    <div class="item-meta"><span class="avatar box-26"><a
                                                href="06-profile-page.html"><img src="img/avatar.png" alt=""></a><span
                                                class="verified"><svg class="crumina-icon">
                                                    <use xlink:href="#check-icon"></use>
                                                </svg></span></span>@DexterStark</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
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
                                <div class="item-price">$8.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured-item v5">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <div class="fav-counter"><svg class="crumina-icon">
                                        <use xlink:href="#heart-icon"></use>
                                    </svg><span class="count">22</span></div>
                                <div class="featured-item-image">
                                    <a href="06-profile-page.html">
                                        <img src="img/content/items/featured-item-28.png" alt=""></a>
                                </div>
                                <div class="featured-item-info">
                                    <div class="item-category video-tutorials">
                                        Video tutorials
                                    </div>
                                    <div class="title"><a href="05-product.html">Add Video Reviews to your
                                            Theme!</a></div>
                                    <div class="item-meta"><span class="avatar box-26"><a
                                                href="06-profile-page.html"><img src="img/avatar-8.png" alt=""></a><span
                                                class="verified"><svg class="crumina-icon">
                                                    <use xlink:href="#check-icon"></use>
                                                </svg></span></span>@beardedwndr</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
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
                                    <span><svg class="crumina-icon">
                                            <use xlink:href="#star2-icon"></use>
                                        </svg></span>
                                    <span><svg class="crumina-icon">
                                            <use xlink:href="#star2-icon"></use>
                                        </svg></span>
                                </div>
                                <div class="item-price">$17.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured items carousel -->
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
    <!-- featured items grid -->
    <div class="container section-padding">
        <div class="section-title-wrapper">
            <div class="section-title"><span class="gradient-text">Newest</span> Items</div>
            <div class="all-items-link"><a href="02-explore.html">Explore all Artworks</a></div>
        </div>
        <div class="featured-box">
            <div class="featured-box-wrapper grid-4-columns">
                @foreach ($allProducts as $product)
                <div class="featured-item v5">
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <div class="fav-counter">
                                <a href="{{route('cart.add', $product->id)}}">
                                    <svg class="crumina-icon">
                                        <use xlink:href="#bag-icon"></use>
                                    </svg><span class="count">Cart</span>
                                </div>
                            <div class="featured-item-image"><a href="{{route('products.index', $product->id)}}">
                                    <img src="/storage/files/{{$product->cover_img}}" alt="">
                            </div>
                            </a>
                            <div class="featured-item-info">
                                <div class="item-category social-graphics">
                                    {{$product->category}}
                                </div>
                                <div class="title"><a href="{{route('products.index', $product->id)}}">{{$product->name}}</a>
                                </div>
                                <div class="item-meta"><span class="avatar box-26"><a href="#"><img
                                                src="img/avatar.png" alt=""></a><span class="verified"><svg
                                                class="crumina-icon">
                                                <use xlink:href="#check-icon"></use>
                                            </svg></span></span>@DexterStark</div>
                            </div>
                        </div>
                        <div class="featured-item-post-content">
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
                            <div class="item-price">{{$product->price}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- featured items grid -->
    <!-- featured sellers carousel -->

    <!-- featured sellers carousel -->
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
</div>
@stop
@section('page-style')
<script type="text/javascript">
    $(document).ready(function () {
        $('.fav-counterz').on('click', function () {
            // e.preventDefault(); 
            let idv = $(this).data('id');
            if (confirm('Are you sure you want to delete this vector ?')) {
                $.ajax({
                    cache: false,
                    type:"GET",
                    url:"/add-to-cart/"+idv,
                    typeData: "json",
                    success:function(data){
                        if (data.code == 1) {
                        alert('adfhjak');
                    }else{
                        fetchAllCart()
                        
                        alert(data.msg);
                        $("span.counter").val(data);
                    }
                }
                })
                
            }
        });
        fetchAllCart() 
        function fetchAllCart() {
                $.get('{{route("fetch.cart")}}', {}, function(data) {
                    console.log(data.cartTotal);
                    $('#countercartt').val(data.cartTotal);
                }, 'json');
            }
    });

</script>
@stop
