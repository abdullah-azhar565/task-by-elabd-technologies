<nav class="top-navbar">
    <!-- Desktop Navbar -->
    <div class="container nav-container d-flex justify-content-between align-items-center desktop-nav">
        <!-- Left Section -->
        <div class="top-navbar-left d-flex">
            <a href="{{ url('/') }}" class="logo">
                <video poster="https://assets.grailed.com/logo.jpg" autoplay loop muted playsinline>
                    <source src="https://assets.grailed.com/logo.webm" type="video/webm">
                    <source src="https://assets.grailed.com/logo.mp4" type="video/mp4">
                </video>
            </a>
            <form action="" class="search-bar-wrapper d-flex align-items-center position-relative">
                <i class="bi bi-search search-icon position-absolute"></i>
                <input class="form-control top-search-input border border-black rounded-0" type="text"
                    placeholder="Search for anything">
                <button type="submit" class="btn  border rounded-0 search-btn fw-bold">SEARCH</button>
            </form>
        </div>

        <!-- Right Section -->
        <div class="top-navbar-right d-flex align-items-center gap-4">
            <a href="#" class="btn btn-outline-dark rounded-0 fw-bold text-uppercase">Sell</a>
            <a href="#" class="btn rounded-0 fw-bold text-uppercase nav-signup">Sign Up</a>
            <a href="#" class="btn btn-dark rounded-0 fw-bold text-uppercase text-white">Log In</a>
        </div>
    </div>

    <!-- Mobile Navbar -->
    <div class="container nav-container d-flex justify-content-between align-items-center mobile-nav">
        <!-- Left side: hamburger + search -->
        <div class="d-flex align-items-center gap-3">
            <button class="hamburger-btn border-0 bg-transparent"><i class="bi bi-list fs-4"></i></button>
            <button class="search-toggle-btn border-0 bg-transparent"><i class="bi bi-search fs-5"></i></button>
        </div>

        <!-- Center: Logo -->
        <a href="{{ url('/') }}" class="logo mx-auto d-flex align-items-center">
            <video poster="https://assets.grailed.com/logo.jpg" autoplay loop muted playsinline>
                <source src="https://assets.grailed.com/logo.webm" type="video/webm">
                <source src="https://assets.grailed.com/logo.mp4" type="video/mp4">
            </video>
        </a>

        <!-- Right: Auth Buttons -->
        <div class="d-flex align-items-center gap-2 mobile-auth">
            <a href="#" class="btn btn-link fw-bold text-uppercase p-0 text-dark">Sign Up</a>
            <a href="#" class="btn btn-link fw-bold text-uppercase p-0 text-dark">Log In</a>
        </div>
    </div>
</nav>


<!-- Main Navigation Menu -->
<nav class="main-navbar">
    <div class="container nav-container">
        <ul class="main-nav d-flex list-unstyled mb-0">
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    DESIGNERS <i class="bi bi-chevron-down arrow-icon"></i>
                </button>

                <div class="dropdown-menu mega-menu">
                    <div class="container nav-container py-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="dropdown-header">Shop Popular Designers</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="dropdown-item" href="#">Acne Studios</a>
                                        <a class="dropdown-item" href="#">Amiri</a>
                                        <a class="dropdown-item" href="#">Arcteryx</a>
                                        <a class="dropdown-item" href="#">Balenciaga</a>
                                        <a class="dropdown-item" href="#">Bape</a>
                                        <a class="dropdown-item" href="#">Bottega Veneta</a>
                                        <a class="dropdown-item" href="#">Carhartt</a>
                                        <a class="dropdown-item" href="#">Celine</a>
                                    </div>
                                    <div class="col-md-6 ">
                                        <a class="dropdown-item" href="#">Chanel</a>
                                        <a class="dropdown-item" href="#">Chrome Hearts</a>
                                        <a class="dropdown-item" href="#">Comme des Garçons</a>
                                        <a class="dropdown-item" href="#">Dior</a>
                                        <a class="dropdown-item" href="#">Enfants Riches Deprimés</a>
                                        <a class="dropdown-item" href="#">Gucci</a>
                                        <a class="dropdown-item" href="#">Kapital</a>
                                        <a class="dropdown-item" href="#">Louis Vuitton</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="dropdown-item" href="#">Maison Margiela</a>
                                        <a class="dropdown-item" href="#">Moncler</a>
                                        <a class="dropdown-item" href="#">Nike</a>
                                        <a class="dropdown-item" href="#">Polo Ralph Lauren</a>
                                        <a class="dropdown-item" href="#">Prada</a>
                                        <a class="dropdown-item" href="#">Raf Simons</a>
                                        <a class="dropdown-item" href="#">Rick Owens</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="dropdown-item" href="#">Stone Island</a>
                                        <a class="dropdown-item" href="#">Supreme</a>
                                        <a class="dropdown-item" href="#">Undercover</a>
                                        <a class="dropdown-item" href="#">Vetements</a>
                                        <a class="dropdown-item" href="#">Vintage</a>
                                        <a class="dropdown-item" href="#">Vivienne Westwood</a>
                                        <a class="dropdown-item" href="#">Yoji Yamamoto</a>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-3">
                                <a href="#" class="dropdown-designers-button">SEE ALL DESIGNERS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    MENSWEAR <i class="bi bi-chevron-down arrow-icon"></i>
                </button>
                <div class="dropdown-menu mega-menu">
                    <div class="container nav-container py-4">
                        <h6 class="dropdown-header">Shop By Category</h6>
                        <div class="row">
                            <div class="col-md-2">
                                <h6 class="fw-bold">Tops</h6>
                                <a class="dropdown-item" href="#">Long Sleeve T-Shirts</a>
                                <a class="dropdown-item" href="#">Polos</a>
                                <a class="dropdown-item" href="#">Shirts (Button Ups)</a>
                                <a class="dropdown-item" href="#">Short Sleeve T-Shirts</a>
                                <a class="dropdown-item" href="#">Sweaters & Knitwear</a>
                                <a class="dropdown-item" href="#">Sweatshirts & Hoodies</a>
                                <a class="dropdown-item" href="#">Tank Tops & Sleeveless</a>
                                <a class="dropdown-item" href="#">Jerseys</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Bottoms</h6>
                                <a class="dropdown-item" href="#">Casual Pants</a>
                                <a class="dropdown-item" href="#">Cropped Pants</a>
                                <a class="dropdown-item" href="#">Denim</a>
                                <a class="dropdown-item" href="#">Leggings</a>
                                <a class="dropdown-item" href="#">Overalls & Jumpsuits</a>
                                <a class="dropdown-item" href="#">Shorts</a>
                                <a class="dropdown-item" href="#">Sweatpants & Joggers</a>
                                <a class="dropdown-item" href="#">Swimwear</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Outerwear</h6>
                                <a class="dropdown-item" href="#">Bombers</a>
                                <a class="dropdown-item" href="#">Cloaks & Capes</a>
                                <a class="dropdown-item" href="#">Denim Jackets</a>
                                <a class="dropdown-item" href="#">Heavy Coats</a>
                                <a class="dropdown-item" href="#">Leather Jackets</a>
                                <a class="dropdown-item" href="#">Light Jackets</a>
                                <a class="dropdown-item" href="#">Parkas</a>
                                <a class="dropdown-item" href="#">Raincoats</a>
                                <a class="dropdown-item" href="#">Vests</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Footwear</h6>
                                <a class="dropdown-item" href="#">Boots</a>
                                <a class="dropdown-item" href="#">Casual Leather Shoes</a>
                                <a class="dropdown-item" href="#">Formal Shoes</a>
                                <a class="dropdown-item" href="#">Hi-Top Sneakers</a>
                                <a class="dropdown-item" href="#">Low-Top Sneakers</a>
                                <a class="dropdown-item" href="#">Sandals</a>
                                <a class="dropdown-item" href="#">Slip Ons</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Accessories</h6>
                                <a class="dropdown-item" href="#">Bags & Luggage</a>
                                <a class="dropdown-item" href="#">Belts</a>
                                <a class="dropdown-item" href="#">Glasses</a>
                                <a class="dropdown-item" href="#">Gloves & Scarves</a>
                                <a class="dropdown-item" href="#">Hats</a>
                                <a class="dropdown-item" href="#">Jewelry & Watches</a>
                                <a class="dropdown-item" href="#">Wallets</a>
                                <a class="dropdown-item" href="#">Miscellaneous</a>
                                <a class="dropdown-item" href="#">Socks & Underwear</a>
                                <a class="dropdown-item" href="#">Sunglasses</a>
                                <a class="dropdown-item" href="#">Ties & Pocketsquares</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Tailoring</h6>
                                <a class="dropdown-item" href="#">Blazers</a>
                                <a class="dropdown-item" href="#">Formal Shirting</a>
                                <a class="dropdown-item" href="#">Formal Trousers</a>
                                <a class="dropdown-item" href="#">Suits</a>
                                <a class="dropdown-item" href="#">Tuxedos</a>
                                <a class="dropdown-item" href="#">Vests</a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="dropdown-designers-button">SEE ALL CATEGORIES</a>
                        </div>
                    </div>
                </div>

            </li>
            <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    WOMENSWEAR <i class="bi bi-chevron-down arrow-icon"></i>
                </button>
                <div class="dropdown-menu mega-menu">
                    <div class="container nav-container py-4">
                        <h6 class="dropdown-header">Shop By Category</h6>
                        <div class="row">
                            <div class="col-md-2">
                                <h6 class="fw-bold">Tops</h6>
                                <a class="dropdown-item" href="#">Blouses</a>
                                <a class="dropdown-item" href="#">Bodysuits</a>
                                <a class="dropdown-item" href="#">Button Ups</a>
                                <a class="dropdown-item" href="#">Crop Tops</a>
                                <a class="dropdown-item" href="#">Hoodies</a>
                                <a class="dropdown-item" href="#">Long Sleeve T-Shirts</a>
                                <a class="dropdown-item" href="#">Polos</a>
                                <a class="dropdown-item" href="#">Short Sleeve T-Shirts</a>
                                <a class="dropdown-item" href="#">Sweaters</a>
                                <a class="dropdown-item" href="#">Sweatshirts</a>
                                <a class="dropdown-item" href="#">Tank Tops</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Bottoms</h6>
                                <a class="dropdown-item" href="#">Jeans</a>
                                <a class="dropdown-item" href="#">Jumpsuits</a>
                                <a class="dropdown-item" href="#">Leggings</a>
                                <a class="dropdown-item" href="#">Maxi Skirts</a>
                                <a class="dropdown-item" href="#">Midi Skirts</a>
                                <a class="dropdown-item" href="#">Mini Skirts</a>
                                <a class="dropdown-item" href="#">Pants</a>
                                <a class="dropdown-item" href="#">Shorts</a>
                                <a class="dropdown-item fw-bold" href="#">Dresses</a>
                                <a class="dropdown-item" href="#">Mini Dresses</a>
                                <a class="dropdown-item" href="#">Midi Dresses</a>
                                <a class="dropdown-item" href="#">Maxi Dresses</a>
                                <a class="dropdown-item" href="#">Gowns</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Outerwear</h6>
                                <a class="dropdown-item" href="#">Blazers</a>
                                <a class="dropdown-item" href="#">Bombers</a>
                                <a class="dropdown-item" href="#">Coats</a>
                                <a class="dropdown-item" href="#">Denim Jackets</a>
                                <a class="dropdown-item" href="#">Down Jackets</a>
                                <a class="dropdown-item" href="#">Fur & Faux Fur</a>
                                <a class="dropdown-item" href="#">Jackets</a>
                                <a class="dropdown-item" href="#">Leather Jackets</a>
                                <a class="dropdown-item" href="#">Rain Jackets</a>
                                <a class="dropdown-item" href="#">Vests</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Footwear</h6>
                                <a class="dropdown-item" href="#">Boots</a>
                                <a class="dropdown-item" href="#">Heels</a>
                                <a class="dropdown-item" href="#">Platforms</a>
                                <a class="dropdown-item" href="#">Mules</a>
                                <a class="dropdown-item" href="#">Flats</a>
                                <a class="dropdown-item" href="#">Hi-Top Sneakers</a>
                                <a class="dropdown-item" href="#">Low-Top Sneakers</a>
                                <a class="dropdown-item" href="#">Sandals</a>
                                <a class="dropdown-item" href="#">Slip Ons</a>
                                <a class="dropdown-item fw-bold" href="#">Jewelry</a>
                                <a class="dropdown-item" href="#">Bracelets</a>
                                <a class="dropdown-item" href="#">Earrings</a>
                                <a class="dropdown-item" href="#">Necklaces</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Accessories</h6>
                                <a class="dropdown-item" href="#">Belts</a>
                                <a class="dropdown-item" href="#">Glasses</a>
                                <a class="dropdown-item" href="#">Gloves</a>
                                <a class="dropdown-item" href="#">Hair Accessories</a>
                                <a class="dropdown-item" href="#">Hats</a>
                                <a class="dropdown-item" href="#">Miscellaneous</a>
                                <a class="dropdown-item" href="#">Scarves</a>
                                <a class="dropdown-item" href="#">Socks & Intimates</a>
                                <a class="dropdown-item" href="#">Sunglasses</a>
                                <a class="dropdown-item" href="#">Wallets</a>
                                <a class="dropdown-item" href="#">Watches</a>
                            </div>
                            <div class="col-md-2">
                                <h6 class="fw-bold">Bags & Luggage</h6>
                                <a class="dropdown-item" href="#">Backpacks</a>
                                <a class="dropdown-item" href="#">Belt Bags</a>
                                <a class="dropdown-item" href="#">Bucket Bags</a>
                                <a class="dropdown-item" href="#">Clutches</a>
                                <a class="dropdown-item" href="#">Crossbody Bags</a>
                                <a class="dropdown-item" href="#">Handle Bags</a>
                                <a class="dropdown-item" href="#">Hobo Bags</a>
                                <a class="dropdown-item" href="#">Luggage & Travel</a>
                                <a class="dropdown-item" href="#">Messengers & Satchels</a>
                                <a class="dropdown-item" href="#">Mini Bags</a>
                                <a class="dropdown-item" href="#">Shoulder Bags</a>
                                <a class="dropdown-item" href="#">Tote Bags</a>
                                <a class="dropdown-item" href="#">Other</a>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="dropdown-designers-button">SEE ALL CATEGORIES</a>
                        </div>
                    </div>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SNEAKERS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">STAFF PICKS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">COLLECTIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EDITORIAL</a>
            </li>
        </ul>
    </div>
</nav>

{{-- Mobile SideBar --}}
<!-- Mobile Sidebar -->
<!-- Mobile Sidebar -->
<div class="mobile-sidebar position-fixed top-0 start-0 bg-white vh-100 shadow"
    style="width: 335px; z-index: 1050; transform: translateX(-100%); transition: transform 0.3s ease; border-right: 1px solid #dee2e6;">
    <div class="p-3 d-flex justify-content-between align-items-center border-bottom">
        <button class="btn btn-sm btn-light rounded-circle d-flex align-items-center justify-content-center"
            id="closeSidebar" style="width: 32px; height: 32px;">
            <i class="bi bi-x fs-5"></i>
        </button>
    </div>
    <ul class="list-unstyled m-0 p-0 mobile-menu-items">
        <li><a href="#" class="d-block px-4 py-3 fw-bold border-bottom">Designers <i
                    class="bi bi-chevron-right float-end"></i></a></li>
        <li><a href="#" class="d-block px-4 py-3 fw-bold border-bottom">Menswear <i
                    class="bi bi-chevron-right float-end"></i></a></li>
        <li><a href="#" class="d-block px-4 py-3 fw-bold border-bottom">Womenswear <i
                    class="bi bi-chevron-right float-end"></i></a></li>
        <li><a href="#" class="d-block px-4 py-3 fw-bold border-bottom">Sneakers <i
                    class="bi bi-chevron-right float-end"></i></a></li>
        <li><a href="#" class="d-block px-4 py-3 fw-bold border-bottom">Staff Picks <i
                    class="bi bi-chevron-right float-end"></i></a></li>
        <li><a href="#" class="d-block px-4 py-3 fw-bold border-bottom">Collections <i
                    class="bi bi-chevron-right float-end"></i></a></li>
        <li><a href="#" class="d-block px-4 py-3 fw-bold border-bottom">Editorial <i
                    class="bi bi-chevron-right float-end"></i></a></li>
    </ul>

    <ul class="list-unstyled text-muted px-4 small mobile-menu-links">
        <li><a href="#" class="d-block py-1 text-muted">Help</a></li>
        <li><a href="#" class="d-block py-1 text-muted">About</a></li>
        <li><a href="#" class="d-block py-1 text-muted">Accessibility</a></li>
        <li><a href="#" class="d-block py-1 text-muted">Terms</a></li>
        <li><a href="#" class="d-block py-1 text-muted">Privacy</a></li>
    </ul>
</div>

<!-- Sidebar backdrop -->
<div class="mobile-sidebar-backdrop position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"
    style="z-index: 1049; display: none;"></div>


{{-- Mobile SideBar --}}

<script>
    // This script will handle the arrow icon change
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                // Close other open dropdowns when one is clicked
                dropdownToggles.forEach(otherToggle => {
                    if (otherToggle !== toggle) {
                        const otherDropdown = otherToggle.nextElementSibling;
                        otherDropdown.classList.remove('show');
                        otherToggle.querySelector('i').classList.remove(
                            'bi-chevron-up');
                        otherToggle.querySelector('i').classList.add('bi-chevron-down');
                    }
                });

                // Toggle the current dropdown
                const dropdown = this.nextElementSibling;
                const icon = this.querySelector('i');

                if (dropdown.classList.contains('show')) {
                    icon.classList.remove('bi-chevron-up');
                    icon.classList.add('bi-chevron-down');
                } else {
                    icon.classList.remove('bi-chevron-down');
                    icon.classList.add('bi-chevron-up');
                }

            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown')) {
                dropdownToggles.forEach(toggle => {
                    const dropdown = toggle.nextElementSibling;
                    dropdown.classList.remove('show');
                    toggle.querySelector('i').classList.remove('bi-chevron-up');
                    toggle.querySelector('i').classList.add('bi-chevron-down');
                });
            }
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerBtn = document.querySelector('.hamburger-btn');
        const sidebar = document.querySelector('.mobile-sidebar');
        const backdrop = document.querySelector('.mobile-sidebar-backdrop');
        const closeSidebar = document.querySelector('#closeSidebar');

        hamburgerBtn.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(0%)';
            backdrop.style.display = 'block';
        });

        closeSidebar.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(-100%)';
            backdrop.style.display = 'none';
        });

        backdrop.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(-100%)';
            backdrop.style.display = 'none';
        });
    });
</script>
