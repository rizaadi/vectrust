@extends('layouts.layout')
@section('content')
<div class="primary-content-area container content-padding shopping-cart-page">
    <div class="page-title-section">
        <h2>Order <span class="gradient-text">Checkout</span></h2>
    </div>
    <!--  checkout form -->
    <div class="checkout-area">
        <form class="cryptoki-form grid-2-columns" id="checkout-form">
            <div class="form-column">
                <div class="form-group">
                    <div class="form-field">
                        <label for="name">You name</label>
                        <input type="text" id="name">
                    </div>
                    <div class="form-field">
                        <label for="email">Email address</label>
                        <input type="email" id="email">
                    </div>
                </div>
                <div class="form-field">
                    <label for="address">Full address address</label>
                    <input type="text" id="address">
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label for="country">Country</label>
                        <select id="country">
                            <option value="your-country">Your country</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="state">State</label>
                        <select id="state">
                            <option value="your-state">Your state</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label for="city">City</label>
                        <select id="city">
                            <option value="city">Your country</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="zip-code">ZIP code</label>
                        <select id="zip-code">
                            <option value="your-zip-code">Your ZIP code</option>
                        </select>
                    </div>
                </div>
                <div class="form-field">
                    <label for="state">Additonal comments</label>
                    <textarea cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="form-column">
                <div class="summary-section">
                    <div class="small-title">Summary</div>
                    <div class="products-in-cart">
                        <div class="product-in-cart">
                            <div class="product-info">
                                <div class="product-thumb"><a href="05-product.html"><img
                                            src="img/content/previews/project-thumb-37.png" alt=""></a></div>
                                <div class="product-details">
                                    <div class="product-name"><a href="05-product.html">Cryptoki NFT and DIgital
                                            Market PSD Template</a></div>
                                    <div class="license-type">Regular License</div>
                                </div>
                            </div>
                            <div class="product-price">$12.00</div>
                        </div>
                        <div class="product-in-cart">
                            <div class="product-info">
                                <div class="product-thumb"><a href="05-product.html"><img
                                            src="img/content/previews/project-thumb-38.png" alt=""></a></div>
                                <div class="product-details">
                                    <div class="product-name"><a href="05-product.html">Twitter Gaming Headers
                                            Pack 04</a></div>
                                    <div class="license-type">Commercial License</div>
                                </div>
                            </div>
                            <div class="product-price">$40.00</div>
                        </div>
                        <div class="product-in-cart">
                            <div class="product-info">
                                <div class="product-thumb"><a href="05-product.html"><img
                                            src="img/content/previews/project-thumb-42.png" alt=""></a></div>
                                <div class="product-details">
                                    <div class="product-name"><a href="05-product.html">Olympus WP - Social
                                            Networking Theme</a></div>
                                    <div class="license-type">Regular License</div>
                                </div>
                            </div>
                            <div class="product-price">$12.00</div>
                        </div>
                    </div>
                    <div class="total-price-section">
                        <div class="total-price-details">
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
                                <div class="value total-price gradient-text">$115.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-method-section">
                        <div class="small-title">Payment Method</div>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="paypal">
                            <label for="paypal">Paypal</label>
                            <div class="payment-description">Pay with your Paypal balance or connected bank
                                account/ credit card! It’s quick and really secure, it just takes a few minutes
                                to set it up!</div>
                        </div>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="credit-card">
                            <label for="credit-card">Credit or Debit Card</label>
                        </div>
                    </div>
                    <div class="complete-order-button">
                        <input class="btn gradient-background" type="submit" value="Complete Order!">
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@stop
@section('page-style')
<!-- Javascripts -->
<script src="/js/checkout.js"></script>
@endsection