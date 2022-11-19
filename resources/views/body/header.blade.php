<header>
    <div class="header__desktopNav">
        <a class="header__logo" href="#">
            <img src="{{ asset('frontend/img/logo.svg') }}" alt="Levre" />
        </a>
        <div class="header__links">
            <a href="">Home</a>
            <a href="">Shop</a>
            <a href="">Categories</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </div>
        <div class="header__actions">
            <a class="header__wishlist" href="#"><img src="{{ asset('frontend/img/heart-icon.svg') }}" alt="Levre Wishlist" /></a>
            <a class="header__profile" href="#"><img src="{{ asset('frontend/img/profile.svg') }}" alt="Levre User" /></a>
            <button class="header__cartBtn">
                <img src="{{ asset('frontend/img/cart-icon.svg') }}" alt="Levre Navigation" />
                <span class="cart-item-counter">0</span>
            </button>
            <button class="header__mobileBtn">
                <img src="{{ asset('frontend/img/bars.svg') }}" alt="Levre Navigation" />
            </button>
        </div>
    </div>
    <div class="header__mobileNav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Shop</a></li>
            <li><a href="">Categories</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li>
                <a class="header__wishlist-mobile" href="#"><img src="{{ asset('frontend/img/heart-icon.svg') }}" alt="Levre Wishlist" /></a>
                <a class="header__profile-mobile" href="#"><img src="{{ asset('frontend/img/profile.svg') }}" alt="Levre User" /></a>
            </li>
        </ul>
    </div>
</header>