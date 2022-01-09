@extends('layouts.layout')
@section('content')
<div class="primary-content-area container content-padding grid-small-sidebar-left">
    @include('layouts.sidebar')
    <div class="main-content-area">
        <div class="page-title-section">
            <h2>Your <span class="gradient-text">Dashboard</span></h2>
        </div>
        <div class="dashboard-wrapper">
            <!--   user stats -->
            <div class="user-stats-section">
                <div class="stat-item blue-gradient-diagonal">
                    <div class="stat-icon"><svg class="crumina-icon">
                            <use xlink:href="#face-id-icon"></use>
                        </svg></div>
                    <div class="stat-info">
                        <div class="stat-number">436K</div>
                        <div class="stat-description">Monthly Vector Views</div>
                    </div>
                </div>
                <div class="stat-item fuchsia-gradient-diagonal">
                    <div class="stat-icon"><svg class="crumina-icon">
                            <use xlink:href="#heart-icon"></use>
                        </svg></div>
                    <div class="stat-info">
                        <div class="stat-number">107</div>
                        <div class="stat-description">Monthly Vector Likes</div>
                    </div>
                </div>
                <div class="stat-item yellow-gradient-diagonal">
                    <div class="stat-icon"><svg class="crumina-icon">
                            <use xlink:href="#dollar-icon"></use>
                        </svg></div>
                    <div class="stat-info">
                        <div class="stat-number">94</div>
                        <div class="stat-description">Monthly Vector Download</div>
                    </div>
                </div>
            </div>
            <!--    earnings diagram -->
            <!-- <div class="earnings-report-section">
                <h5>Earnings Report</h5>
                <img src="img/content/profile-dashboard/earnings-picture.png" alt="">
            </div> -->
            <!--     best selling items -->
            <div class="best-sellers-section">
                <h5>Top Selling Items</h5>
                <div class="best-sellers">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th scope="col" class="heading-label">Item details</th>
                                <th scope="col" class="heading-label">Download</th>
                                <th scope="col" class="heading-label">Views</th>
                                <th scope="col" class="heading-label">Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vector as $v)
                            <tr>
                                <td data-label="Item details">
                                    <div class="product-info">
                                        <div class="item-number">01</div>
                                        <div class="product-thumb"><a href="{{route('view.vector', $v->id)}}">
                                                <img src="/storage/files/{{$v->itemImage}}" alt=""></a>
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name"><a
                                                    href="{{route('view.vector', $v->id)}}">{{$v->name}}</a></div>
                                            <div class="product-meta">
                                                <div class="item-category ui-templates">{{$v->category}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Sales" class="stats-item colored">{{$v->itemDownload}}</td>
                                <td data-label="Views" class="stats-item">{{$v->itemRating}}</td>
                                <td data-label="Rating" class="stats-item">
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
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
