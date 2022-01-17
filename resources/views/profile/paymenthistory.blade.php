@extends('layouts.layout')
@section('content')
<div class="primary-content-area container content-padding grid-small-sidebar-left">
@include('layouts.sidebar')
            <div class="main-content-area">
                <div class="page-title-section">
                    <h2><span class="gradient-text">Payments History</span</h2>
                </div>
                <div class="upload-row">
                    <div class="upload-column">
                        <div class="payment-history">
                            <h5>Last Payments</h5>
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="heading-label">Date</th>
                                        <th scope="col" class="heading-label">Method</th>
                                        <th scope="col" class="heading-label">Amount</th>
                                        <th scope="col" class="heading-label">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datahistory as $gi)
                                    <tr>
                                        <td data-label="Date">
                                            <div class="date">{{$gi['create']}}</div>
                                        </td>
                                        <td data-label="Method">
                                            <div class="item-title">{{$gi->payer_email}}
                                            </div>
                                        </td>
                                        <td data-label="Amount" class="stat-value">{{$gi->amount}}</td>
                                        <td data-label="price" class="stat-value">{{$gi->status}}</td>
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