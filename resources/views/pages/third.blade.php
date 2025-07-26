@extends('layouts.master')

@section('title', 'Grailed: Online Marketplace to Buy Fashion')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/third.css') }}">
@endpush


@section('content')
    <div class="container third-container">
        <div class="breadcrumb-wrapper py-3">
            <div class="container">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a href="#"
                                class="text-dark text-decoration-underline fw-medium">Acne Studios</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-dark text-decoration-underline fw-medium">
                                Acne Studios Womenswear</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-dark text-decoration-underline fw-medium">
                                Acne Studios Dresses</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-dark text-decoration-underline fw-medium">
                                Acne Studios Mini Dresses</a></li>
                        <li class="breadcrumb-item active text-muted" aria-current="page">

                            ACNE STUDIOS Women Short Skirts A20780 AUZ Blue</li>
                    </ol>
                </div>
            </div>
        </div>


        <section class="product-detail-section">
            <div class="container">
                <div class="row">
                    <!-- Left Column: Thumbnail Images -->
                    <div class="col-md-1">
                        <div class="thumbnails">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/a995667d5bbd4ae7a8f4d5317b421d52?w=150"
                                alt="" class="thumbnail-img"
                                onclick="changeMainImage('https://media-assets.grailed.com/prd/listing/temp/a995667d5bbd4ae7a8f4d5317b421d52?w=800')">
                            <img src="https://media-assets.grailed.com/prd/listing/81322913/c401c6b7a26a4e839ce317cb9ef5008e?w=150"
                                alt="" class="thumbnail-img"
                                onclick="changeMainImage('https://media-assets.grailed.com/prd/listing/81322913/c401c6b7a26a4e839ce317cb9ef5008e?w=800')">
                            <img src="https://media-assets.grailed.com/prd/listing/81322913/8edbd9f2a61e4e46ad694ef4ed7fc930?w=150"
                                alt="" class="thumbnail-img"
                                onclick="changeMainImage('https://media-assets.grailed.com/prd/listing/81322913/8edbd9f2a61e4e46ad694ef4ed7fc930?w=800')">
                            <img src="https://media-assets.grailed.com/prd/listing/81322913/3ff3391b52884d7cae86a354ab3e3c76?w=150"
                                alt="" class="thumbnail-img"
                                onclick="changeMainImage('https://media-assets.grailed.com/prd/listing/81322913/3ff3391b52884d7cae86a354ab3e3c76?w=800')">
                            <img src="https://media-assets.grailed.com/prd/listing/81322913/53173de11f994e2d96816bfbf8dd9045?w=150"
                                alt="" class="thumbnail-img"
                                onclick="changeMainImage('https://media-assets.grailed.com/prd/listing/81322913/53173de11f994e2d96816bfbf8dd9045?w=800')">
                        </div>
                    </div>

                    <!-- Middle Column: Main Product Image -->
                    <div class="col-md-7">
                        <div class="main-img-container">
                            <img class="main-img" id="mainImage"
                                src="https://media-assets.grailed.com/prd/listing/temp/a995667d5bbd4ae7a8f4d5317b421d52?w=800"
                                alt="Main Product Image">
                        </div>
                    </div>

                    <!-- Right Column: Product Info Sidebar -->
                    <div class="col-md-4">
                        <div class="product-info">
                            <h2 class="product-title">ACNE STUDIOS</h2>
                            <p class="product-brand">AUZ Blue</p>

                            <div class="product-meta">
                                <p><strong>Size</strong> Women's / XS / US 0.2 / IT 36-38</p>
                                <p><strong>Color</strong> <span class="color-indicator">●</span> Blue</p>
                                <p><strong>Condition</strong> New</p>
                            </div>

                            <p class="product-price">$613</p>
                            <p class="page-sensitive"><span class="free-shipping-color">Free Shipping</span> to United States</p>

                            <div class="product-actions">
                                <button class="purchase-btn">PURCHASE</button>
                                <button class="offer-btn">OFFER</button>
                                <button class="message-btn">MESSAGE</button>
                            </div>

                            <div class="auth-status">
                                <span class="badge">Authenticated</span>
                                <p>This item has been authenticated by our in-house team or a trusted partner. <a
                                        href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script>
        // Function to change the main image when clicking on thumbnails
        // Function to change the main image when clicking on thumbnails
        function changeMainImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }
    </script>
@endsection
