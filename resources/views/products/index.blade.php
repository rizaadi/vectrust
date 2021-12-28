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
                                    </svg></span></span>@DexterStark</div>
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
                <div class="product-image">
                    <img src="{{asset('img/content/product-img/product-2.png')}}" alt="Product Image">
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
                                        <div class="title h6">Revive your Twitter with Awesome Graphics!</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                            in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        <ul class="list-line-height">
                                            <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>1500x500 pixels</li>
                                            <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>All free fonts used</li>
                                            <li><svg class="crumina-icon bullet-icon">
                                                    <use xlink:href="#circle-icon"></use>
                                                </svg>PS vectors for easier customization</li>
                                        </ul>
                                        <p>Remember to follow our <a href="#">profile</a> to know when new items are
                                            released!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside>
                <div class="product-additional-info">
                    <div class="product-fav-counter"><svg class="crumina-icon">
                            <use xlink:href="#heart-icon"></use>
                        </svg><span class="count">105</span>
                    </div>
                    <div class="product-purchase-info">
                        <form class="cryptoki-form" id="purchase-form">
                            <div class="product-price">
                                <div class="price">{{$product->price}}</div>
                                <div class="label">one time payment</div>
                            </div>
                            <div class="pricing-plans">
                                <div class="plan">
                                    <input type="radio" name="license-type" id="regular">
                                    <label for="regular">Regular License</label>
                                    <div class="license-description">Here’s a small explanation about what you can do
                                        with this <a href="#">regular license</a> and fair use. </div>
                                </div>
                                <div class="plan">
                                    <input type="radio" name="license-type" id="commercial">
                                    <label for="commercial">Commercial License</label>
                                </div>
                                <div class="plan">
                                    <input type="radio" name="license-type" id="extended">
                                    <label for="extended">Extended License</label>
                                </div>
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
                                <li>Files included</li>
                                <li>Software</li>
                                <li>Size</li>
                                <li>Tags</li>
                            </ul>
                            <ul class="details-value">
                                <li>{{$product->created_at->format('m/d/Y')}}</li>
                                <li>{{$product->updated_at->format('m/d/Y')}}</li>
                                <li>PSD, PNG</li>
                                <li>Photoshop CS6</li>
                                <li>12MB</li>
                                <li class="tags-list"><span class="colored"><a href="#">social</a></span>, <span
                                        class="colored"><a href="#">twitter</a></span>, <span class="colored"><a
                                            href="#">header</a></span>,
                                    <span class="colored"><a href="#">banner</a></span>, <span class="colored"><a
                                            href="#">gaming</a></span>, <span class="colored"><a
                                            href="#">streamer</a></span>,
                                    <span class="colored"><a href="#">gamer</a></span>, <span class="colored"><a
                                            href="#">live</a></span>
                                </li>
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
                                    <div class="name"><a href="06-profile-page.html">Dexter Stark</a></div>
                                    <div class="meta gradient-text">@dexterstark</div>
                                </div>
                                <ul class="social-icons-list">
                                    <li class="social-icon icon-border"><a href="#"><svg class="crumina-icon">
                                                <use xlink:href="#link-icon"></use>
                                            </svg></a></li>
                                    <li class="social-icon icon-border"><a href="#"><svg class="crumina-icon">
                                                <use xlink:href="#facebook-icon"></use>
                                            </svg></a></li>
                                    <li class="social-icon icon-border"><a href="#"><svg class="crumina-icon">
                                                <use xlink:href="#twitter-icon"></use>
                                            </svg></a></li>
                                    <li class="social-icon icon-border"><a href="#"><svg class="crumina-icon">
                                                <use xlink:href="#instagram-icon"></use>
                                            </svg></a></li>
                                    <li class="social-icon icon-border"><a href="#"><svg class="crumina-icon">
                                                <use xlink:href="#twitch-icon"></use>
                                            </svg></a></li>
                                </ul>
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