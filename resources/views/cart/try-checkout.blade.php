@extends('layouts.layout')

@section('media')
        <link
            rel="stylesheet"
            type="text/css"
            href="/css/try-checkout.css"
        />
@endsection

@section('content')
        <main class="site">
           
            <div class="body">
                <div class="body__icon-demo"></div>
                <h2 class="body__title">Hey {{Auth::user()->name}} !</h2>
                <div class="body__message">
                    Thank You for being our valued customer.<br />Your support and trust in us are much appreciated.
                </div>
                <div class="body__links">
                    
                </div>
                <div class="panel">
                    <h3 class="panel__title">Wasn’t that fun?</h3>
                    <div class="panel__description">
                        Try again with a nyenyenyenye.
                    </div>
                    <a class="panel__link" href="/">Explore Design</a>
                </div>
            </div>
            <footer>
                <div class="footer__logo-xendit"></div>
            </footer>
        </main>
@endsection
@section('page-style')
<!-- Javascripts -->
<script src="/js/getinvoice.js"></script>
@endsection