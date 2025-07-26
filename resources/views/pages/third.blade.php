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
                    <div class="col-md-8">
                        <div class="row "style="gap: 120px;">
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
                        </div>
                        <section class="sort-section ">
                            <div class="container">
                                <div class="d-flex justify-content-between align-items-center py-3">
                                    <div class="listings-count">
                                        <p class="mb-0" style="font-size: 22px; font-weight: bold;">Similar Listings</p>
                                    </div>
                                    <div class="see-all-btn">
                                        <a href="">SEE ALL-></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="swiper related-designers-swiper">
                                <div class="swiper-wrapper">
                                    <!-- Card 1 -->
                                    <div class="swiper-slide">
                                        <div class="simple-card">
                                            <div class="simple-card-image">
                                                <img src="https://media-assets.grailed.com/prd/listing/46316955/aa6947945b784fa784bda70b685bc88d?w=300"
                                                    alt="Designer Image">
                                            </div>
                                            <div class="simple-card-content">
                                                <p class="brand-name">Acne Studios</p>
                                                <p class="price">$613</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="swiper-slide">
                                        <div class="simple-card">
                                            <div class="simple-card-image">
                                                <img src="https://media-assets.grailed.com/prd/listing/12695520/216ff7b008ac40d29ae38a65fb7394ff?w=300"
                                                    alt="Designer Image">
                                            </div>
                                            <div class="simple-card-content">
                                                <p class="brand-name">Acne Studios</p>
                                                <div class="price-container">
                                                    <span class="original-price">$25</span>
                                                    <span class="discounted-price">$45</span>
                                                    <span class="discount">44% off</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="swiper-slide">
                                        <div class="simple-card">
                                            <div class="simple-card-image">
                                                <img src="https://media-assets.grailed.com/prd/listing/47363814/cb4148e260c04eb6905bb8b612ce971b?w=300"
                                                    alt="Designer Image">
                                            </div>
                                            <div class="simple-card-content">
                                                <p class="brand-name">Acne Studios</p>
                                                <div class="price-container">
                                                    <span class="original-price">$72</span>
                                                    <span class="discounted-price">$99</span>
                                                    <span class="discount">27% off</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div class="swiper-slide">
                                        <div class="simple-card">
                                            <div class="simple-card-image">
                                                <img src="https://media-assets.grailed.com/prd/listing/temp/0f3a6f5f3e91493fb677f3aa8760cbea?w=300"
                                                    alt="Designer Image">
                                            </div>
                                            <div class="simple-card-content">
                                                <p class="brand-name">Acne Studios</p>
                                                <div class="price-container">
                                                    <span class="original-price">$200</span>
                                                    <span class="discounted-price">$250</span>
                                                    <span class="discount">20% off</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 5 -->
                                    <div class="swiper-slide">
                                        <div class="simple-card">
                                            <div class="simple-card-image">
                                                <img src="https://media-assets.grailed.com/prd/listing/temp/0dc3fb8135a843d39500c7600cc63b13?w=300"
                                                    alt="Designer Image">
                                            </div>
                                            <div class="simple-card-content">
                                                <p class="brand-name">Acne St</p>
                                                <p class="price">$99</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Navigation Arrows -->
                                <div class="swiper-button-next text-dark"></div>
                                <div class="swiper-button-prev text-dark"></div>
                            </div>
                        </section>
                        <section class="related-searches-section">
                            <div class="container">
                                <h3 class="section-heading">RELATED SEARCHES</h3>
                                <div class="search-tags-container">
                                    <div class="search-tags-track">
                                        <a href="#" class="search-tag">ACNE STUDIOS MEN'S CLOTHING</a>
                                        <a href="#" class="search-tag">ACNE STUDIOS WOMEN'S CLOTHING</a>
                                        <a href="#" class="search-tag">ACNE STUDIOS MEN'S BOTTOMS</a>
                                        <a href="#" class="search-tag">ACNE STUDIOS MEN'S TOPS</a>
                                        <a href="#" class="search-tag">ACNE STUDIOS MEN'S OUTERWEAR</a>
                                        <a href="#" class="search-tag">ACNE STUDIOS WOMEN'S BOTTOMS</a>
                                        <a href="#" class="search-tag">ACNE STUDIOS MEN'S ACCESSORIES</a>
                                        <a href="#" class="search-tag">ACNE STUDIOS WOMEN'S DRESSES</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="articles-section">
                            <div class="container">
                                <h2 class="articles-heading">Related Acne Studios Articles</h2>
                                <div class="article-cards-container">
                                    <div class="article-cards-scroller">
                                        <!-- Card 1 -->
                                        <div class="article-card">
                                            <img src="https://media-assets.grailed.com/prd/article/708fb1d20a2d4dc6a116db3cb0d6c725?w=480&fit=clip&auto=format"
                                                alt="Sweater styles" class="article-image">
                                            <div class="article-tag">Surfaced</div>
                                            <h3 class="article-title">Sweater Styles Every Man Needs to Know and Own</h3>
                                        </div>

                                        <!-- Card 2 -->
                                        <div class="article-card">
                                            <img src="https://media-assets.grailed.com/prd/article/72641c00f5ec4bc28b03e02984cf1de2?w=480&fit=clip&auto=format"
                                                alt="Luxury sneakers" class="article-image">
                                            <div class="article-tag">Surfaced</div>
                                            <h3 class="article-title">The 10 Best Luxury Sneakers to Buy in 2020 and 2021
                                            </h3>
                                        </div>

                                        <!-- Card 3 -->
                                        <div class="article-card">
                                            <img src="https://media-assets.grailed.com/prd/article/5fc8912554574ae3ad57bca85d27573a?w=480&fit=clip&auto=format"
                                                alt="Nigel Sylvester" class="article-image">
                                            <div class="article-tag">The Drop</div>
                                            <h3 class="article-title">Nigel Sylvester for Grailed</h3>
                                        </div>

                                        <!-- Card 4 -->
                                        <div class="article-card">
                                            <img src="https://media-assets.grailed.com/prd/article/83657ef2fe0b4126b7a2ea89e4dd1a5c?w=480&fit=clip&auto=format"
                                                alt="Project Upgrade" class="article-image">
                                            <div class="article-tag">Surfaced</div>
                                            <h3 class="article-title">Project Upgrade: The Next Three Brands You Need on
                                                Your Style...</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Right Column: Product Info Sidebar -->
                    <div class="col-md-4">
                        <div class="product-info">
                            <div class="product-header">
                                <h2 class="product-title">ACNE STUDIOS</h2>
                                <div class="product-icons">
                                    <button class="icon-btn save-btn">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 2H19C20.1046 2 21 2.89543 21 4V22L12 18L3 22V4C3 2.89543 3.89543 2 5 2Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="icon-btn heart-btn">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.84 4.60999C20.3292 4.099 19.7228 3.69364 19.0554 3.41708C18.3879 3.14052 17.6725 2.99817 16.95 2.99817C16.2275 2.99817 15.5121 3.14052 14.8446 3.41708C14.1772 3.69364 13.5708 4.099 13.06 4.60999L12 5.66999L10.94 4.60999C9.9083 3.5783 8.50903 2.9987 7.05 2.9987C5.59096 2.9987 4.19169 3.5783 3.16 4.60999C2.1283 5.64169 1.54871 7.04096 1.54871 8.49999C1.54871 9.95903 2.1283 11.3583 3.16 12.39L4.22 13.45L12 21.23L19.78 13.45L20.84 12.39C21.351 11.8792 21.7563 11.2728 22.0329 10.6053C22.3095 9.93789 22.4518 9.22248 22.4518 8.49999C22.4518 7.77751 22.3095 7.0621 22.0329 6.39464C21.7563 5.72718 21.351 5.12075 20.84 4.60999V4.60999Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <p class="product-brand">AUZ Blue</p>

                            <div class="product-meta">
                                <p><strong>Size</strong> Women's / XS / US 0.2 / IT 36-38</p>
                                <p><strong>Color</strong> <span class="color-indicator">●</span> Blue</p>
                                <p><strong>Condition</strong> New</p>
                            </div>

                            <p class="product-price">$613</p>
                            <p class="page-sensitive"><span class="free-shipping-color">Free Shipping</span> to United
                                States</p>

                            <div class="product-actions">
                                <button class="purchase-btn">PURCHASE</button>
                                <button class="offer-btn">OFFER</button>
                                <button class="message-btn">MESSAGE</button>
                            </div>

                            <div class="auth-status">
                                <span class="badge"><svg width="20px" height="20px" viewBox="0 0 22 22"
                                        fill="none" xmlns="http://www.w3.org/2000/svg" class="-flair">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.375 3.125L11.75 0.5H10.25L7.625 3.125H4.25L3.125 4.25V7.625L0.5 10.25V11.75L3.125 14.375V17.75L4.25 18.875H7.625L10.25 21.5H11.75L14.375 18.875H17.75L18.875 17.75V14.375L21.5 11.75V10.25L18.875 7.625V4.25L17.75 3.125H14.375ZM17.1287 4.625H13.7537L11.1287 2H10.8713L8.24632 4.625H4.87132L4.625 4.87132V8.24632L2 10.8713V11.1287L4.625 13.7537V17.1287L4.87132 17.375H8.24632L10.8713 20H11.1287L13.7537 17.375H17.1287L17.375 17.1287V13.7537L20 11.1287V10.8713L17.375 8.24632V4.87132L17.1287 4.625Z"
                                            fill="#0000FF"></path>
                                        <path
                                            d="M15.875 8.75L10.25 14.375H8.75L5.75 11.375L7.0625 10.0625L9.5 12.5L14.5625 7.4375L15.875 8.75Z"
                                            fill="#0000FF"></path>
                                    </svg>&nbsp;&nbsp;Authenticated</span>
                                <p>This item has been authenticated by our in-house team or a trusted partner. <a
                                        style="color: #00f" href="#">Learn more</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script>
        // Function to change the main image
        function changeMainImage(imageSrc) {
            const mainImg = document.getElementById('mainImage');
            if (mainImg) {
                mainImg.src = imageSrc;
            }
        }

        // Initialize Swiper when window loads
        window.onload = function() {
            try {
                if (document.querySelector(".related-designers-swiper")) {
                    new Swiper(".related-designers-swiper", {
                        loop: true,
                        slidesPerView: 6,
                        spaceBetween: 20,
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        breakpoints: {
                            1200: {
                                slidesPerView: 4
                            },
                            1024: {
                                slidesPerView: 5
                            },
                            768: {
                                slidesPerView: 4
                            },
                            576: {
                                slidesPerView: 3
                            },
                            480: {
                                slidesPerView: 2
                            }
                        }
                    });
                }
            } catch (error) {
                console.error("Swiper initialization error:", error);
            }
        };
    </script>
@endsection
