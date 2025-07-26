@extends('layouts.master')

@section('title', 'Grailed: Online Marketplace to Buy Fashion')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/second.css') }}">
@endpush


@section('content')
    <div class="container second-container">
        <!-- Breadcrumb -->
        <div class="breadcrumb-wrapper py-3">
            <div class="container">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a href="#"
                                class="text-dark text-decoration-underline fw-medium">Designers</a></li>
                        <li class="breadcrumb-item active text-muted" aria-current="page">Acne Studios</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Acne Studios Section -->
        <section class="acne-studios pb-2 pt-3">
            <div class="container">
                <div class="row align-items-start">
                    <!-- Left Column: Logo + Title + Listings -->
                    <div class="col-md-4 d-flex align-items-start gap-3">
                        <img src="https://media-assets.grailed.com/prd/detail-page/daa30f5b56dd4f3688496aabf9e81431?w=100"
                            class="rounded-circle border p-2" style="width: 90px; height: 90px;" alt="Acne Studios Logo">
                        <div class="acne-heading d-flex flex-column gap-2">
                            <h2 class="fw-bold m-0">Acne Studios</h2>
                            <p class="text-muted small m-0">28.3k Listings</p>
                        </div>
                    </div>

                    <!-- Right Column: Text + Follow -->
                    <div class="col-md-8 d-flex justify-content-between mt-4 mt-md-0 acne-right-column">
                        <div class="flex-grow-1 pe-3">
                            <p class="brand-description collapsed">
                                “Ambition to Create Novel Expression” is the mission statement and name of Jonny Johansson’s
                                brand
                                Acne Studios.
                                Founded in Sweden in 1996, Acne Studios started out producing raw <a
                                    href="#">denim</a>
                                and
                                has since expanded into a full,
                                head-to-toe clothing brand. At the height of the minimalist, “upscale basics” trend of the
                                2010s,
                                Acne Studios rose in
                                popularity, providing high quality, tasteful clothing with minimal branding. Despite
                                expanding
                                into
                                other areas, denim
                                is still a cornerstone for the Stockholm-based company, with its Ace Denim and Max Cash cuts
                                remaining fan favorites.
                                <br><br>
                                <strong>What does Acne Studios stand for?</strong><br>
                                The acronym “Acne” stands for “Ambition to Create Novel Expressions.”<br><br>
                                <strong>Where can I buy Acne Studios?</strong><br>
                                Acne Studios is available at its own brick and mortar locations, stockists and its own
                                website—as
                                well as Grailed.<br><br>
                                <strong>Who created Acne Studios?</strong><br>
                                Jonny Johansson is the founder of Acne Studios.
                            </p>
                            <a href="#"
                                class="toggle-description mt-2 d-inline-block fw-bold text-decoration-underline">Show
                                More</a>
                        </div>
                        <div>
                            <button class="follow-btn">FOLLOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="related-designers pb-3 pt-3">
            <div class="container">
                <h3 class="section-related-designers-heading">Related Designers</h3>
                <div class="swiper related-designers-swiper">
                    <div class="swiper-wrapper">
                        <!-- Designer 1 & 2 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="dual-image-container">
                                    <img src="https://media-assets.grailed.com/prd/listing/46316955/aa6947945b784fa784bda70b685bc88d?w=300"
                                        class="card-img" alt="Designer Image">
                                    <img src="https://media-assets.grailed.com/prd/listing/12695520/216ff7b008ac40d29ae38a65fb7394ff?w=300"
                                        class="card-img" alt="Designer Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Burberry</h5>
                                    <p class="card-text">96.8k</p>
                                    <button class="btn btn-dark">FOLLOW</button>
                                </div>
                            </div>
                        </div>

                        <!-- Designer 3 & 4 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="dual-image-container">
                                    <img src="https://media-assets.grailed.com/prd/listing/temp/39c1ffcf7ec242dda0c4c589b7c6f5f6?w=300"
                                        class="card-img" alt="Designer Image">
                                    <img src="https://media-assets.grailed.com/prd/listing/temp/afdba18acd2544e8b6558d47555be277?w=300"
                                        class="card-img" alt="Designer Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Vivienne Westwood</h5>
                                    <p class="card-text">19.6k listings</p>
                                    <button class="btn btn-dark">FOLLOW</button>
                                </div>
                            </div>
                        </div>

                        <!-- Designer 5 & 6 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="dual-image-container">
                                    <img src="https://media-assets.grailed.com/prd/listing/47363814/cb4148e260c04eb6905bb8b612ce971b?w=300"
                                        class="card-img" alt="Designer Image">
                                    <img src="https://media-assets.grailed.com/prd/listing/47960071/ec8afc2de3714f918a273ca0d3ada570?w=300"
                                        class="card-img" alt="Designer Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Prada</h5>
                                    <p class="card-text">63.5k listings</p>
                                    <button class="btn btn-dark">FOLLOW</button>
                                </div>
                            </div>
                        </div>
                        <!-- Designer 5 & 6 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="dual-image-container">
                                    <img src="https://media-assets.grailed.com/prd/listing/temp/0f3a6f5f3e91493fb677f3aa8760cbea?w=300"
                                        class="card-img" alt="Designer Image">
                                    <img src="https://media-assets.grailed.com/prd/listing/48482504/d9fba5f600c340c38477f90d2e7956d2?w=300"
                                        class="card-img" alt="Designer Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Our Legacy</h5>
                                    <p class="card-text">6k listings</p>
                                    <button class="btn btn-dark">FOLLOW</button>
                                </div>
                            </div>
                        </div>
                        <!-- Designer 5 & 6 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="dual-image-container">
                                    <img src="https://media-assets.grailed.com/prd/listing/temp/0dc3fb8135a843d39500c7600cc63b13?w=300"
                                        class="card-img" alt="Designer Image">
                                    <img src="https://media-assets.grailed.com/prd/listing/28307003/f72a69e2ca6243229a571d92f274b4a2?w=300"
                                        class="card-img" alt="Designer Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Stone Island</h5>
                                    <p class="card-text">20.7k listings</p>
                                    <button class="btn btn-dark">FOLLOW</button>
                                </div>
                            </div>
                        </div>
                        <!-- Designer 5 & 6 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="dual-image-container">
                                    <img src="https://media-assets.grailed.com/prd/listing/44916939/623863381a9d457b9b4c3c08b70651cf?w=300"
                                        class="card-img" alt="Designer Image">
                                    <img src="https://media-assets.grailed.com/prd/listing/temp/b4a987960a3742c9830f05b77ae1de80?w=300"
                                        class="card-img" alt="Designer Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Moschino</h5>
                                    <p class="card-text">12.3k listings</p>
                                    <button class="btn btn-dark">FOLLOW</button>
                                </div>
                            </div>
                        </div>
                        <!-- Designer 5 & 6 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="dual-image-container">
                                    <img src="https://media-assets.grailed.com/prd/listing/temp/2e57aaf954cb448fb63bb371d9eebf33?w=300"
                                        class="card-img" alt="Designer Image">
                                    <img src="https://media-assets.grailed.com/prd/listing/temp/b3630bfd1f694606826bd03bc5fc7d3e?w=300"
                                        class="card-img" alt="Designer Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Stone Island</h5>
                                    <p class="card-text">20.7k listings</p>
                                    <button class="btn btn-dark">FOLLOW</button>
                                </div>
                            </div>
                        </div>
                        <!-- Designer 5 & 6 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="dual-image-container">
                                    <img src="https://media-assets.grailed.com/prd/listing/44707923/e6bc69cacccd4318a9534d1009e8b28e?w=300"
                                        class="card-img" alt="Designer Image">
                                    <img src="https://media-assets.grailed.com/prd/listing/44856874/335e0f5936ba4bff84fa923f97324c84?w=300"
                                        class="card-img" alt="Designer Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Moschino</h5>
                                    <p class="card-text">  12.3k listings</p>
                                    <button class="btn btn-dark">FOLLOW</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and Right Navigation Arrows -->
                    <div class="swiper-button-next text-dark"></div>
                    <div class="swiper-button-prev text-dark"></div>
                </div>
            </div>
        </section>


        <section class="sort-section ">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center py-3">
                    <div class="listings-count">
                        <p class="mb-0" style="font-size: 18px; font-weight: bold;">24,942 listings</p>
                    </div>
                    <div class="sort-dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sort: Most Relevant
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Most Relevant</a></li>
                            <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                            <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                            <li><a class="dropdown-item" href="#">Newest Arrivals</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="sidebar-cards-section">
            <div class="container">
                <div class="row">
                    <!-- Sidebar Column -->
                    <div class="col-md-3 sidebar">
                        <div class="sidebar-content">
                            <div class="sidebar-top-card">
                                <p class="sidebar-notice">Sign up or log in to add your sizes and we'll customize your feed
                                    to
                                    better fit your needs.</p>
                                <button class="btn black-color">ADD MY SIZES</button>
                            </div>

                            <div class="filters">
                                <div class="filter-category">
                                    <h6>Department</h6>
                                    <div class="filter-option">
                                        <input type="checkbox" id="menswear" checked>
                                        <label for="menswear">Menswear 108+</label>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="womenswear">
                                        <label for="womenswear">Womenswear 114+</label>
                                    </div>
                                </div>

                                <div class="filter-category">
                                    <h6>Category</h6>
                                    <div class="category-options">
                                        <label for="">Menswear</label>
                                        <div class="category-option">Tops</div>
                                        <div class="category-option">Bottoms</div>
                                        <div class="category-option">Outerwear</div>
                                        <div class="category-option">Footwear</div>
                                        <div class="category-option">Tailoring</div>
                                        <div class="category-option">Accessories</div>
                                    </div>
                                    <div class="category-options">
                                        <label for="">Womenswear</label>
                                        <div class="category-option">Tops</div>
                                        <div class="category-option">Bottoms</div>
                                        <div class="category-option">Outerwear</div>
                                        <div class="category-option">Footwear</div>
                                        <div class="category-option">Tailoring</div>
                                        <div class="category-option">Accessories</div>
                                    </div>
                                    <div class="category-options">
                                        <label for="">Womenswear</label>
                                        <div class="category-option">Tops</div>
                                        <div class="category-option">Bottoms</div>
                                        <div class="category-option">Outerwear</div>
                                        <div class="category-option">Footwear</div>
                                        <div class="category-option">Tailoring</div>
                                        <div class="category-option">Accessories</div>
                                    </div>
                                    <div class="category-options">
                                        <label for="">Womenswear</label>
                                        <div class="category-option">Tops</div>
                                        <div class="category-option">Bottoms</div>
                                        <div class="category-option">Outerwear</div>
                                        <div class="category-option">Footwear</div>
                                        <div class="category-option">Tailoring</div>
                                        <div class="category-option">Accessories</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cards Column -->
                    <div class="col-md-9 cards">
                        <div class="product-list-container">
                            <!-- Product 1 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/4f70bb9e640b4e5c9b97c287e94d2d5b?w=500"
                                    alt="Acne Studios Quilted Down Vest" class="product-image">
                                <div class="posted-time">2 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">XL</span>
                                </div>
                                <div class="product-name">Acne Studios Quilted Down Vest...</div>
                                <div class="product-price">$125</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 2 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/6268be8f825f478c899307dc43cc6464?w=500"
                                    alt="Acne Studios Super Baggy Jeans" class="product-image">
                                <div class="posted-time">15 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Super Baggy Fit Jeans</div>
                                <div class="product-price">$250</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 3 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/5be372389a70458aafcf8b1a16994d61?w=500"
                                    alt="Acne Studios Slim Jeans" class="product-image">
                                <div class="posted-time">16 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Slim North Dark Blue...</div>
                                <div class="product-price">$255</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 4 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/f7f6b73b2c354b9b91940450f8cfa02a?w=500"
                                    alt="Acne Studios Denim" class="product-image">
                                <div class="posted-time">31 minutes ago (40 days)</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Blá Konst Denim...</div>
                                <div class="product-price"><span class="original-price">$449</span> $120 <span
                                        class="discount-percent">19% off</span></div>
                                <div class="similar-products">See Similar</div>
                            </div>
                            <!-- Product 1 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/4f70bb9e640b4e5c9b97c287e94d2d5b?w=500"
                                    alt="Acne Studios Quilted Down Vest" class="product-image">
                                <div class="posted-time">2 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">XL</span>
                                </div>
                                <div class="product-name">Acne Studios Quilted Down Vest...</div>
                                <div class="product-price">$125</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 2 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/6268be8f825f478c899307dc43cc6464?w=500"
                                    alt="Acne Studios Super Baggy Jeans" class="product-image">
                                <div class="posted-time">15 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Super Baggy Fit Jeans</div>
                                <div class="product-price">$250</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 3 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/5be372389a70458aafcf8b1a16994d61?w=500"
                                    alt="Acne Studios Slim Jeans" class="product-image">
                                <div class="posted-time">16 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Slim North Dark Blue...</div>
                                <div class="product-price">$255</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 4 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/f7f6b73b2c354b9b91940450f8cfa02a?w=500"
                                    alt="Acne Studios Denim" class="product-image">
                                <div class="posted-time">31 minutes ago (40 days)</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Blá Konst Denim...</div>
                                <div class="product-price"><span class="original-price">$449</span> $120 <span
                                        class="discount-percent">19% off</span></div>
                                <div class="similar-products">See Similar</div>
                            </div>
                            <!-- Product 1 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/4f70bb9e640b4e5c9b97c287e94d2d5b?w=500"
                                    alt="Acne Studios Quilted Down Vest" class="product-image">
                                <div class="posted-time">2 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">XL</span>
                                </div>
                                <div class="product-name">Acne Studios Quilted Down Vest...</div>
                                <div class="product-price">$125</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 2 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/6268be8f825f478c899307dc43cc6464?w=500"
                                    alt="Acne Studios Super Baggy Jeans" class="product-image">
                                <div class="posted-time">15 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Super Baggy Fit Jeans</div>
                                <div class="product-price">$250</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 3 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/5be372389a70458aafcf8b1a16994d61?w=500"
                                    alt="Acne Studios Slim Jeans" class="product-image">
                                <div class="posted-time">16 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Slim North Dark Blue...</div>
                                <div class="product-price">$255</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 4 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/f7f6b73b2c354b9b91940450f8cfa02a?w=500"
                                    alt="Acne Studios Denim" class="product-image">
                                <div class="posted-time">31 minutes ago (40 days)</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Blá Konst Denim...</div>
                                <div class="product-price"><span class="original-price">$449</span> $120 <span
                                        class="discount-percent">19% off</span></div>
                                <div class="similar-products">See Similar</div>
                            </div>
                            <!-- Product 1 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/4f70bb9e640b4e5c9b97c287e94d2d5b?w=500"
                                    alt="Acne Studios Quilted Down Vest" class="product-image">
                                <div class="posted-time">2 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">XL</span>
                                </div>
                                <div class="product-name">Acne Studios Quilted Down Vest...</div>
                                <div class="product-price">$125</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 2 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/6268be8f825f478c899307dc43cc6464?w=500"
                                    alt="Acne Studios Super Baggy Jeans" class="product-image">
                                <div class="posted-time">15 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Super Baggy Fit Jeans</div>
                                <div class="product-price">$250</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 3 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/5be372389a70458aafcf8b1a16994d61?w=500"
                                    alt="Acne Studios Slim Jeans" class="product-image">
                                <div class="posted-time">16 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Slim North Dark Blue...</div>
                                <div class="product-price">$255</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 4 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/f7f6b73b2c354b9b91940450f8cfa02a?w=500"
                                    alt="Acne Studios Denim" class="product-image">
                                <div class="posted-time">31 minutes ago (40 days)</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Blá Konst Denim...</div>
                                <div class="product-price"><span class="original-price">$449</span> $120 <span
                                        class="discount-percent">19% off</span></div>
                                <div class="similar-products">See Similar</div>
                            </div>
                            <!-- Product 1 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/4f70bb9e640b4e5c9b97c287e94d2d5b?w=500"
                                    alt="Acne Studios Quilted Down Vest" class="product-image">
                                <div class="posted-time">2 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">XL</span>
                                </div>
                                <div class="product-name">Acne Studios Quilted Down Vest...</div>
                                <div class="product-price">$125</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 2 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/6268be8f825f478c899307dc43cc6464?w=500"
                                    alt="Acne Studios Super Baggy Jeans" class="product-image">
                                <div class="posted-time">15 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Super Baggy Fit Jeans</div>
                                <div class="product-price">$250</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 3 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/5be372389a70458aafcf8b1a16994d61?w=500"
                                    alt="Acne Studios Slim Jeans" class="product-image">
                                <div class="posted-time">16 minutes ago</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Slim North Dark Blue...</div>
                                <div class="product-price">$255</div>
                                <div class="similar-products">See Similar</div>
                            </div>

                            <!-- Product 4 -->
                            <div class="product-item">
                                <img src="https://media-assets.grailed.com/prd/listing/temp/f7f6b73b2c354b9b91940450f8cfa02a?w=500"
                                    alt="Acne Studios Denim" class="product-image">
                                <div class="posted-time">31 minutes ago (40 days)</div>
                                <div class="product-brand-size">
                                    <span class="product-brand">ACNE STUDIOS</span>
                                    <span class="product-size">32</span>
                                </div>
                                <div class="product-name">Acne Studios Blá Konst Denim...</div>
                                <div class="product-price"><span class="original-price">$449</span> $120 <span
                                        class="discount-percent">19% off</span></div>
                                <div class="similar-products">See Similar</div>
                            </div>


                        </div>
                    </div>
                </div>
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


        <section class="shopwear-section pb-5">
            <div class="container tending-container shopwear-container" style="max-width: 76.5rem;">

                <h3 class="shopwear-heading">Popular Menswear Categories</h3>
                <div class="shopwear-grid pb-4">
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/4foTbNCkPR5LY4eOIGnGcE/806d93ccb298a9e2ce3ba883f84546ae/acne-tees.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/1LksQ0mnPKuzztfWsOA7Qv/f5a11d82ad3288585b99bcc2717faf19/acne-bottoms.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/5BfGbFQvA6pRS4lbra2cjg/c95e6b1e3357ad1780682c3486172e71/acne-sweater.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/31aIV818nnpI1EV7GBcf4G/15fa75d01d4a6fb230d07477a01a9273/acne-shirts.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/7o5JmFPtsAq4BkvFffLC4/5e498c4b0e34f23067c0f6211431733a/acne-jackets.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    {{-- <div class="shopwear-item">
                        <img src="https://media-assets.grailed.com/prd/misc/7aeb2d7d079347c18341f65398078c07?w=240"
                            alt="">
                    </div> --}}
                </div>

                <h3 class="shopwear-heading">Popular Womenswear Categories</h3>
                <div class="shopwear-grid">
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/EksVJbJ3F7poV7ACk3rys/044a177c025c80552e30ae9f890a0055/ACNE-STUDIOS-BAGS.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/3TTILf3aCgDmE5BjAUJav6/2f6ca2a5663cc864e0a46a06bf6edc2e/ACNE-STUDIOS-BOOTS.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/7ik1KDz0x1dFzsQM00ijvO/b306ad6848cefcf190d5808ac38a6478/ACNE-STUDIOS-DRESSES.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/6kGPKbESxPqbRxv4guK2Wt/1a61a477b1b514e6c25ff3003a464bd5/ACNE-STUDIOS-JEANS.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                    <div class="shopwear-item">
                        <img src="https://images.ctfassets.net/bdvz0u6oqffk/17hlLSHXyCamtzx6MCbmRg/6afd7361ad1f8aed0ef86d81eccfe680/ACNE-STUDIOS-OUTERWEAR.jpg?fm=webp&h=490&w=780"
                            alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="articles-section">
            <div class="container">
                <h2 class="articles-heading">Related Acne Studios Articles</h2>
                <div class="article-cards">
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="article-card col-md-3">
                            <img src="https://media-assets.grailed.com/prd/article/708fb1d20a2d4dc6a116db3cb0d6c725?w=480&fit=clip&auto=format"
                                alt="Sweater styles" class="article-image">
                            <div class="article-tag">Surfaced</div>
                            <h3 class="article-title">Sweater Styles Every Man Needs to Know and Own</h3>
                        </div>

                        <!-- Card 2 -->
                        <div class="article-card col-md-3">
                            <img src="https://media-assets.grailed.com/prd/article/72641c00f5ec4bc28b03e02984cf1de2?w=480&fit=clip&auto=format"
                                alt="Luxury sneakers" class="article-image">
                            <div class="article-tag">Surfaced</div>
                            <h3 class="article-title">The 10 Best Luxury Sneakers to Buy in 2020 and 2021</h3>
                        </div>

                        <!-- Card 3 -->
                        <div class="article-card col-md-3">
                            <img src="https://media-assets.grailed.com/prd/article/5fc8912554574ae3ad57bca85d27573a?w=480&fit=clip&auto=format"
                                alt="Nigel Sylvester" class="article-image">
                            <div class="article-tag">The Drop</div>
                            <h3 class="article-title">Nigel Sylvester for Grailed</h3>
                        </div>

                        <!-- Card 4 -->
                        <div class="article-card col-md-3">
                            <img src="https://media-assets.grailed.com/prd/article/83657ef2fe0b4126b7a2ea89e4dd1a5c?w=480&fit=clip&auto=format"
                                alt="Project Upgrade" class="article-image">
                            <div class="article-tag">Surfaced</div>
                            <h3 class="article-title">Project Upgrade: The Next Three Brands You Need on Your Style...</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script>
        window.addEventListener("load", function() {
            var swiper = new Swiper(".related-designers-swiper", {
                loop: true,
                slidesPerView: 6, // Show 6 cards at once on large screens
                spaceBetween: 20, // Adjust space between cards
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 6, // 6 cards on larger screens
                    },
                    1024: {
                        slidesPerView: 5, // 5 cards on tablets
                    },
                    768: {
                        slidesPerView: 4, // 4 cards on medium-sized screens
                    },
                    576: {
                        slidesPerView: 3, // 3 cards on smaller screens
                    },
                    480: {
                        slidesPerView: 2, // 2 cards on very small screens
                    },
                },
            });
        });
    </script>
@endsection
