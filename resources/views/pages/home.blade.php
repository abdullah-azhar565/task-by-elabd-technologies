@extends('layouts.master')

@section('title', 'Grailed: Online Marketplace to Buy Fashion')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush


@section('content')
    <section class="hero-section">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide position-relative">
                    <img src="https://images.ctfassets.net/bdvz0u6oqffk/71ptEcTCWwq06RqYuLHz1b/3ec70e6581c91cd9ee01e1b8b6c8dcf9/Collection_Hero.jpg"
                        class="img-fluid w-100" alt="Hero Image">
                    <div class="hero-gradient-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    <!-- Text and Buttons Overlaid -->
                    <div class="slide-caption text-white text-center position-absolute top-50 start-50 translate-middle">
                        <p class="mb-2 text-uppercase fw-semibold" style="font-size: 14px;">Chrome Hearts, Supreme & More
                        </p>
                        <h2 class="fw-bold mb-3" style="font-size: 40px;">Summer Accessories</h2>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-outline-light rounded-0 px-4 hero-btn">Shop + Follow</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="https://images.ctfassets.net/bdvz0u6oqffk/7b8Dr2lb6iY8z3ETgskLXR/699da3305ed1288d0577a0802e59e25d/ERD-Desktop.jpg"
                        class="img-fluid w-100" alt="Hero Image">
                    <div class="hero-gradient-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    <!-- Text and Buttons Overlaid -->
                    <div class="slide-caption text-white text-center position-absolute top-50 start-50 translate-middle">
                        <p class="mb-2 text-uppercase fw-semibold" style="font-size: 14px;">In Demand</p>
                        <h2 class="fw-bold mb-3" style="font-size: 40px;">Enfants Riches Déprimés</h2>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-outline-light rounded-0 px-4 hero-btn">Shop + Follow</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="https://images.ctfassets.net/bdvz0u6oqffk/5Y6AG640tK9pfII4gRBtrX/480c179e35af740ab8597e43ef9a4008/VintageTees-Desktop.jpg"
                        class="img-fluid w-100" alt="Hero Image">
                    <div class="hero-gradient-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    <!-- Text and Buttons Overlaid -->
                    <div class="slide-caption text-white text-center position-absolute top-50 start-50 translate-middle">
                        <p class="mb-2 text-uppercase fw-semibold" style="font-size: 14px;">Surfaced</p>
                        <h2 class="fw-bold mb-3" style="font-size: 40px;">Vintage Tees Worth Collecting

                        </h2>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-outline-light rounded-0 px-4 hero-btn">Shop + Follow</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide position-relative">
                    <img src="https://images.ctfassets.net/bdvz0u6oqffk/6noZNgqPbLeLihFEt7StGR/2154838cdf55d45699364791f4b3c76b/Emerging-desktop.jpg"
                        class="img-fluid w-100" alt="Hero Image">
                    <div class="hero-gradient-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                    <!-- Text and Buttons Overlaid -->
                    <div class="slide-caption text-white text-center position-absolute top-50 start-50 translate-middle">
                        <p class="mb-2 text-uppercase fw-semibold" style="font-size: 14px;">Mowalola, 424, Willy Chavarria +
                            More

                        </p>
                        <h2 class="fw-bold mb-3" style="font-size: 40px;">On the Rise

                        </h2>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-outline-light rounded-0 px-4 hero-btn">Shop + Follow</a>
                        </div>
                    </div>
                </div>

                <!-- Add more slides here if needed -->
            </div>

            <!-- Arrows -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>

            <!-- Dots -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="trending-section pb-3 pt-5">
        <div class="container trending-container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Vintage, Streetwear, Supreme +More
                    </p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Apparel</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/35979145/9db62f2d583c4e38857290004afb2075?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/9a12fe593ef44464be4561063166812f?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/48073563/8906db80942e43e4a07ee2d5227a92b9?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative cursor-pointer">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/422ad65be4874643885c49578c5afca8?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/957fa53d0188413f97bed2c565f5c75f?orient=180&w=1500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">From Grailed</p>
                    <h4 class="fw-bold mb-3 trending-heading">Get In Your Bag: Travel Essentials</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/fb31757b4d954f63b82a1329007d94bf?w=1500?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/b0faa580cb3e4afd8e2d3955a2247942?w=1500?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/f7f9b84121b243a8ada461c7704cf38b?w=1500?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/d051169c26d84daaa33783f4793078eb?w=1500?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/422ad65be4874643885c49578c5afca8?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Jordan Brand, Nike, Maison
                        Margiela +More</p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Footwear</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/b3ac932e3b0b44708ec36053b723997b?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/b860492313624b50be81464fb6e7e2dd?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/64eb98bd06524303a86582d161735731?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/5f915dbebe454ce79d7ab967a5ddcd67?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/422ad65be4874643885c49578c5afca8?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="accessories-section py-3">
        <div class="container trending-container">
            <div class="row align-items-center">
                <!-- Left Column (Image Grid) -->
                <div class="col-md-4 ">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Supreme, Vintage, Chrome Hearts
                        +More
                    </p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Accessories</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/c85460b735f2457793eade4b2079fe5f?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/40263990/b8d1193c33324f5993e4bd7d878c285b?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/47955518/638f1ea511e7493d9eada03738ba2c7d?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative cursor-pointer">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/a5ba1c86b4f54daca2a70d3bba6c350f?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/957fa53d0188413f97bed2c565f5c75f?orient=180&w=1500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Editorial Image & Card) -->
                <div class="col-md-8 position-relative">
                    <img src="https://images.ctfassets.net/bdvz0u6oqffk/6i9d57PE5y2Qh9c2Lib3m/5bfaaef3f4f2d98372338d0b34024cd9/Homepage-Desktop.jpg"
                        class="img-fluid home-big-img" alt="Editorial Image">
                    <div class="accessories-editorial-card bg-white shadow-sm p-3 position-absolute"
                        style="bottom: 2rem; left: 2rem; border-radius: 1rem; max-width: 360px;">
                        <small class="text-muted fw-semibold">Editorial</small>
                        <h5 class=" mt-1 mb-2">What to Pack for Your Next Trip</h5>
                        <p class="mb-0 text-muted">The only accessories you'll need for summer vacation. No checked bags
                            required.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending-section pb-3 pt-5">
        <div class="container trending-container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Vintage, Streetwear, Supreme
                        +More
                    </p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Apparel</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/9a59042fe6e6496e9bfecc5104ae2df9?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/94bf696b32dd40f8b044a0c35f72715c?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/97d05266dda84a37b72731b4b0f69043?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative cursor-pointer">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/fa8fba7583104cc19b2c236363b9ce25?w=660"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/957fa53d0188413f97bed2c565f5c75f?orient=180&w=1500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">From Grailed</p>
                    <h4 class="fw-bold mb-3 trending-heading">Get In Your Bag: Travel Essentials</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/9e6e4676690d419aaf0a200488a98352?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/9aa64cc84bae468fa06656ceba2d7aeb?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/828b2e7d71f0481e9347b963b532b0bb?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/5e15cfa890db46dd824400f102222fb6?w=660"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/422ad65be4874643885c49578c5afca8?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Jordan Brand, Nike, Maison
                        Margiela +More</p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Footwear</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/95a30ba3c96b4852af6f94291289057a?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/97c9c08f7b124444a155c4f3fe11a03e?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/40d3c07b8ee544359269b4818dfc81ba?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/581187336e5849479fdcec1bff3315e5?w=660"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/422ad65be4874643885c49578c5afca8?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="accessories-section py-3">
        <div class="container trending-container">
            <div class="row align-items-center">
                <!-- Right Column (Editorial Image & Card) -->
                <div class="col-md-8 position-relative">
                    <img src="https://images.ctfassets.net/bdvz0u6oqffk/4u3v5wpNZwrrvpbJoz1FaG/529b9f75cbd989bbee2b6de9c277dd94/HeliotEmil-Desktop.jpg"
                        class="img-fluid home-big-img" alt="Editorial Image">
                    <div class="accessories-editorial-card bg-white shadow-sm p-3 position-absolute"
                        style="bottom: 2rem; left: 2rem; border-radius: 1rem; max-width: 360px;">
                        <small class="text-muted fw-semibold">Editorial</small>
                        <h5 class=" mt-1 mb-2">What to Pack for Your Next Trip</h5>
                        <p class="mb-0 text-muted">The only accessories you'll need for summer vacation. No checked bags
                            required.</p>
                    </div>
                </div>
                <!-- Left Column (Image Grid) -->
                <div class="col-md-4 ">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Supreme, Vintage, Chrome Hearts
                        +More
                    </p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Accessories</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/4923cc74310446619bcd1775acefebc1?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/40d3c07b8ee544359269b4818dfc81ba?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/aa20453d48364dc29c5b46099c4d4938?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative cursor-pointer">
                            <img src="https://media-assets.grailed.com/prd/listing/44077912/4344fc56b6e94d8384d65545f46677b0?w=660"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/957fa53d0188413f97bed2c565f5c75f?orient=180&w=1500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="accessories-section py-3">
        <div class="container trending-container">
            <div class="row align-items-center">
                <!-- Left Column (Image Grid) -->
                <div class="col-md-4 ">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Supreme, Vintage, Chrome Hearts
                        +More
                    </p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Accessories</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/misc/b2c43439cd9041a19eced258666c4f49?w=1500?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/6727ae52d8e2463d8dc6016268549637?w=1500?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/37c0012ff2cf450186f96b796b476121?w=1500?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative cursor-pointer">
                            <img src="https://media-assets.grailed.com/prd/listing/47550333/535efb4de09c4b6cb4bc1a8b4f83ca2c?w=1500?w=660"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/957fa53d0188413f97bed2c565f5c75f?orient=180&w=1500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Editorial Image & Card) -->
                <div class="col-md-8 position-relative">
                    <img src="https://images.ctfassets.net/bdvz0u6oqffk/3a3BBxTqvXvuPl1ik78R8m/dcb517955035cbc5116020a624df2fa2/Clubwear-Desktop.jpg"
                        class="img-fluid home-big-img" alt="Editorial Image">
                    <div class="accessories-editorial-card bg-white shadow-sm p-3 position-absolute"
                        style="bottom: 2rem; left: 2rem; border-radius: 1rem; max-width: 360px;">
                        <small class="text-muted fw-semibold">Editorial</small>
                        <h5 class=" mt-1 mb-2">What to Pack for Your Next Trip</h5>
                        <p class="mb-0 text-muted">The only accessories you'll need for summer vacation. No checked bags
                            required.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending-section pb-3 pt-5">
        <div class="container trending-container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Vintage, Streetwear, Supreme
                        +More
                    </p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Apparel</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/60e35108a5464c21ba16d5b9e242da1e?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/ca6525e3f35c4070990b467da1088b72?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/b406bc1c36bb4da9a08c0fd2d1c7d011?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative cursor-pointer">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/444282ac11ae4074beac0b3fe7f77b3f?w=660"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/957fa53d0188413f97bed2c565f5c75f?orient=180&w=1500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">From Grailed</p>
                    <h4 class="fw-bold mb-3 trending-heading">Get In Your Bag: Travel Essentials</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/5b7cfaee69364a70b8cf44f7fd0df6ef?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/ee7d40aaa03d471496549647e954d178?w=660"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/5b25f85d3817449fa57889de8eea868b?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/c432555f25df405b859996d1bf083fb7?orient=270&w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/422ad65be4874643885c49578c5afca8?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4 mb-4">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Jordan Brand, Nike, Maison
                        Margiela +More</p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Footwear</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/c4c8f9242bb84052836988550390943b?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/2ce75a0cedd843698391f3762378c311?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/40d3c07b8ee544359269b4818dfc81ba?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/375fdfd651994eddb73155241384109b?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/422ad65be4874643885c49578c5afca8?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="accessories-section py-3">
        <div class="container trending-container">
            <div class="row align-items-center">
                <!-- Right Column (Editorial Image & Card) -->
                <div class="col-md-8 position-relative">
                    <img src="https://images.ctfassets.net/bdvz0u6oqffk/7aeAN2KD7c86b6DJH621oN/08bd0946e1b91e52576339de0b77fecd/Homepage-module-desktop.jpg"
                        class="img-fluid home-big-img" alt="Editorial Image">
                    <div class="accessories-editorial-card bg-white shadow-sm p-3 position-absolute"
                        style="bottom: 2rem; left: 2rem; border-radius: 1rem; max-width: 360px;">
                        <small class="text-muted fw-semibold">Editorial</small>
                        <h5 class=" mt-1 mb-2">What to Pack for Your Next Trip</h5>
                        <p class="mb-0 text-muted">The only accessories you'll need for summer vacation. No checked bags
                            required.</p>
                    </div>
                </div>
                <!-- Left Column (Image Grid) -->
                <div class="col-md-4 ">
                    <p class="text-uppercase text-muted fw-semibold trending-sub-heading">Supreme, Vintage, Chrome Hearts
                        +More
                    </p>
                    <h4 class="fw-bold mb-3 trending-heading">Trending: Accessories</h4>
                    <div class="row g-2">
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/9ba2bad46969492a89e51e456e8c3b27?w=1500?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 mob-height">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/eb82a9c4080645bc8a345200119baad3?w=1500?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/671c847f94f549f7895d509c7a737d59?w=1500?w=500"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-6 position-relative cursor-pointer">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/0d42038cf93544a59a2f43a72ae5d10f?w=1500?w=500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                        <div class="col-6 position-relative cursor-pointer d-none mobile-hidden-img">
                            <img src="https://media-assets.grailed.com/prd/listing/temp/957fa53d0188413f97bed2c565f5c75f?orient=180&w=1500"
                                class="img-fluid" alt="">
                            <div class="view-more-overlay d-flex justify-content-center align-items-center ">
                                <span class="text-white fw-bold">+ VIEW MORE</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="shopwear-section pb-5">
        <div class="container tending-container shopwear-container" style="max-width: 76.5rem;">

            <h3 class="shopwear-heading">Shop Menswear</h3>
            <div class="shopwear-grid pb-4">
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/8fda5c6f43a9458ea40cd83d608a9f10?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/2410ef3c87df47b8a9faa59e98cd985a?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/a688bc0d112244cd88c1f70566da7f30?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/6420b439e3df49cab399a6275af8b98b?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/ffc3c5500ed34b02ae7d2c94de13b5c6?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/7aeb2d7d079347c18341f65398078c07?w=240"
                        alt="">
                </div>
            </div>

            <h3 class="shopwear-heading">Shop Womenswear</h3>
            <div class="shopwear-grid">
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/f59c72b819f248f4beaf6e9aef3db0c8?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/27e54541e3664af58c3a6df705cb8987?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/6abb0c77d3854bd0bf0e3670883fc764?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/4162f392c7ad48a7bbb28579d7ce8c60?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/1c102183ae3147e5bece5ecb568fa0a4?w=240"
                        alt="">
                </div>
                <div class="shopwear-item">
                    <img src="https://media-assets.grailed.com/prd/misc/82c0a4374f32429cb0d6559746a30b0c?w=240"
                        alt="">
                </div>
            </div>
        </div>
    </section>

@endsection
