@extends('layouts.layout')
@section('content')
<!-- header -->
        <!-- mobile navigation panel -->
        <div class="mobile-nav-panel">
            <div class="mobile-nav-header">
                <div class="mobile-menu-logo logo"><a href="01-home-ds.html"><img src="svg/logo-ds.svg" alt="logo"></a>
                </div>
                <svg class="crumina-icon close-icon">
                    <use xlink:href="#cross-icon"></use>
                </svg>
            </div>
            <div class="mobile-menu-wrapper">
                <!-- mobile menu -->
                <ul class="mobile-menu">
                    <li class="menu-item"><a class="menu-link" href="01-home-ds.html">Home</a></li>
                    <li class="menu-item menu-item-has-children"><a class="menu-link" href="#">Explore
                            <span class="indicator"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-down-icon"></use>
                                </svg></span>
                        </a>
                        <ul class="submenu">
                            <li class="menu-item"><a class="menu-link" href="02-explore.html">Explore
                                </a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="04-item-versions.html">Item versions
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="07-sellers.html">Sellers</a></li>
                    <li class="menu-item menu-item-has-megamenu menu-item-has-children"><a class="menu-link"
                            href="#">All pages<span class="indicator"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-down-icon"></use>
                                </svg></span><span class="highlighted-item gradient-background">NEW</span></a>
                        <div class="megamenu">
                            <div class="megamenu-wrapper">
                                <div class="megamenu-column">
                                    <div class="megamenu-title">Main Pages</div>
                                    <div>
                                        <ul class="submenu-column">
                                            <li class="menu-item"><a href="01-home-ds.html" class="menu-link">Home</a>
                                            </li>
                                            <li class="menu-item"><a href="02-explore.html"
                                                    class="menu-link">Explore</a></li>
                                            <li class="menu-item"><a href="03-shop-category.html" class="menu-link">Shop
                                                    Category</a>
                                            </li>
                                            <li class="menu-item"><a href="04-item-versions.html" class="menu-link">Item
                                                    Versions</a>
                                            </li>
                                            <li class="menu-item"><a href="05-product.html" class="menu-link">Product
                                                    Page</a>
                                            </li>
                                            <li class="menu-item"><a href="06-profile-page.html"
                                                    class="menu-link">Profile Page</a>
                                            </li>
                                        </ul>
                                        <ul class="submenu-column">
                                            <li class="menu-item"><a href="07-sellers.html"
                                                    class="menu-link">Sellers</a></li>
                                            <li class="menu-item"><a href="08-shopping-cart.html"
                                                    class="menu-link">Shopping Cart</a>
                                            </li>
                                            <li class="menu-item"><a href="09-checkout.html"
                                                    class="menu-link">Checkout</a></li>
                                            <li class="menu-item"><a href="25-notifications.html"
                                                    class="menu-link">Notifications</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="megamenu-column">
                                    <div class="megamenu-title">Dashboard</div>
                                    <div>
                                        <ul class="submenu-column">
                                            <li class="menu-item"><a href="26-profile-info.html"
                                                    class="menu-link">Profile Info</a>
                                            </li>
                                            <li class="menu-item"><a href="%21.html#" class="menu-link">Account Settings</a>
                                            </li>
                                            <li class="menu-item"><a href="%21.html#" class="menu-link">Notification
                                                    Settings</a></li>
                                            <li class="menu-item"><a href="10-profile-dashboard.html"
                                                    class="menu-link">Dashboard</a></li>
                                            <li class="menu-item"><a href="11-profile-sales-statement.html"
                                                    class="menu-link">Sales Statement</a>
                                            </li>
                                            <li class="menu-item"><a href="12-profile-upload-item.html"
                                                    class="menu-link">Upload Item</a></li>
                                        </ul>
                                        <ul class="submenu-column">
                                            <li class="menu-item"><a href="13-profile-manage-items.html"
                                                    class="menu-link">Manage Items</a>
                                            </li>
                                            <li class="menu-item"><a href="14-profile-payment-history.html"
                                                    class="menu-link">Payouts</a></li>
                                            <li class="menu-item"><a href="15-profile-purchases.html"
                                                    class="menu-link">Purchases</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item menu-item-has-children"><a class="menu-link" href="#">Blog
                            <span class="indicator"><svg class="crumina-icon">
                                    <use xlink:href="#arrow-down-icon"></use>
                                </svg></span></a>
                        <ul class="submenu">
                            <li class="menu-item"><a class="menu-link" href="16-blog-grid.html">Blog grid
                                </a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="17-blog-classic.html">Blog classic
                                </a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="18-blog-post-centered.html">Blog post
                                    centered
                                </a>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="19-blog-post-sidebar.html">Blog post
                                    sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- mobile menu -->
            </div>
            <div class="mobile-nav-footer">
                <!-- currency and language switchers -->
                <div class="topbar-switchers">
                    <div class="currency-switcher">
                        <select class="select-nice">
                            <option value="eth" selected>ETHEREUM (ETH)</option>
                            <option value="euro">Euro</option>
                            <option value="usd">USD</option>
                        </select>
                    </div>
                    <div class="language-switcher">
                        <select class="select-nice">
                            <option value="english" selected>English</option>
                            <option value="french">French</option>
                            <option value="german">German</option>
                        </select>
                    </div>
                </div>
                <!-- currency and language switchers -->
                <!-- social icons list -->
                <ul class="social-icons-list">
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#facebook-icon"></use>
                            </svg></a></li>
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#twitter-icon"></use>
                            </svg></a></li>
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#instagram-icon"></use>
                            </svg></a></li>
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#twitch-icon"></use>
                            </svg></a></li>
                    <li class="social-icon"><a href="#"><svg class="crumina-icon">
                                <use xlink:href="#discord-icon"></use>
                            </svg></a></li>
                </ul>
                <!-- social icons list -->
            </div>
        </div>
        <!-- mobile navigation panel -->
        <!-- header navigation -->
        <!-- main content area -->
        <div class="primary-content-area container content-padding shopping-cart-page">
            <div class="page-title-section">
                <h2>Shopping <span class="gradient-text">Cart</span></h2>
            </div>
            <div class="shopping-cart-area grid-right-sidebar">
                <!--      shopping cart -->
                <div class="shopping-cart">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th scope="col" class="heading-label">Item details</th>
                                <th scope="col" class="heading-label">License</th>
                                <th scope="col" class="heading-label">Price</th>
                                <th scope="col" class="heading-label"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                            <tr>
                                <td data-label="Item details">
                                    <div class="product-info">
                                        <div class="product-thumb"><a href="05-product.html">
                                                <img src="img/content/previews/project-thumb-37.png" alt=""></a>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name"><a href="05-product.html">{{$item['name']}}</a></div>
                                            <div class="product-meta">
                                                <div class="item-category ui-templates">UI TEMPLATES</div>
                                                <div class="product-seller">
                                                    @DexterStark<span class="verified"><svg class="crumina-icon">
                                                            <use xlink:href="#check-icon"></use>
                                                        </svg></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="License">
                                    <form>
                                        <select class="select-nice">
                                            <option value="regular">Regular</option>
                                            <option value="commercial">Commercial</option>
                                            <option value="extended">Extended</option>
                                        </select>
                                    </form>
                                </td>
                                <td data-label="price" class="price">{{$item['price']}}</td>
                                <td><a href="{{ route('cart.destroy', $item['id']) }}"><button class="close"><svg class="crumina-icon">
                                            <use xlink:href="#close-circle-icon"></use>
                                        </svg></button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="discount-section">
                        <form class="cryptoki-form" id="discount-form">
                            <span class="label">Redeem Code</span>
                            <input type="text" placeholder="CRYP1258OFF">
                            <button class="btn btn-normal btn-dark" type="submit">Redeem!</button>
                        </form>
                    </div>
                </div>
                <!--    cart total box -->
                <aside>
                    <div class="cart-total-box">
                        <div class="cart-total-wrapper">
                            <div class="small-title">Order Total</div>
                            <div class="total-price">{{\Cart::session(auth()->id())->getTotal()}}</div>
                            <!-- <div class="total-price-details">
                                <div class="field">
                                    <div class="label">Cart</div>
                                    <div class="value">$120.00</div>
                                </div>
                                <div class="field">
                                    <div class="label">Code</div>
                                    <div class="value">-$5.00</div>
                                </div>
                                <div class="field">
                                    <div class="label">Total</div>
                                    <div class="value">$115.00</div>
                                </div>
                            </div> -->
                            <div class="to-checkout-button">
                                <a class="btn btn-wide gradient-background" href="#">Proceed to Checkout</a>
                            </div>

                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <!-- main content area -->
@endsection