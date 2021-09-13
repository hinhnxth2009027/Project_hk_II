<header id="header">
    <div class="header">
        <div class="header-container">
            <a href="/">
                <img src="/libs/client/images/logo.png" alt="" style="height: 60px">
            </a>
            <div class="search-bar">
                <form action="{{route('product')}}" method="get">
                    <input type="text" placeholder="Tìm kiếm sản phẩm" name="smart_phone" id="header-search-field">
                    <button></button>
                </form>
            </div>
            <div class="header-right">
                <div class="hotline">
                    <div class="header-content-bottom">
                        <i class="fas fa-phone-alt"></i>
                        <a class="header_item" rel="nofollow" href="tel:0888888888">0888.888.888</a>
                    </div>
                </div>
                <div class="hotline">
                    <div class="header-content-bottom">
                        <i class="fas fa-user"></i>&nbsp;
                        <a class="header_item" rel="nofollow" href="{{route('login_register')}}">Login/register</a>
                    </div>
                </div>
                <div class="hotline">
                    <div class="header-content-bottom">
                        <i class="fas fa-shopping-cart"></i>
                        <a class="header_item" href="{{route('cart_view')}}">Giỏ hàng &nbsp;<span class="cart_count">{{Illuminate\Support\Facades\Session::get('shoppingCart') ? sizeof(Illuminate\Support\Facades\Session::get('shoppingCart')) : 0}}</span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-btn" class="mobile-menu-btn" onclick="openMenu(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </div>
    <div id="cat-nav">
        <div class="container cat-menu">
            <div class="item mobile dropdown has-child">
                <i class="fas fa-home"></i> <a class="main-menu-dien-thoai" href="{{route('home_page')}}"> Trang chủ</a>
            </div>
            <div class="item mobile dropdown has-child">
                <i class="fab fa-product-hunt"></i> <a class="main-menu-dien-thoai" href="{{route('product')}}"> Sản phẩm</a>
            </div>
            <div class="item mobile dropdown has-child">
                <i class="fas fa-id-badge"></i> <a class="main-menu-dien-thoai" href="{{route('contactus_view')}}"> Liên hệ</a>
            </div>
            <div class="item mobile dropdown has-child">
                <i class="far fa-address-card"></i> <a class="main-menu-dien-thoai" href="{{route('view_about_us')}}"> Về chúng tôi</a>
            </div>
            <div class="item mobile dropdown has-child">
                <i class="fas fa-user"></i> <a class="main-menu-dien-thoai" href="{{route('user_profile')}}"> Thông tin cá nhân</a>
            </div>
            <div class="item mobile dropdown has-child">
                <i class="fas fa-shipping-fast"></i> <a class="main-menu-dien-thoai" href="{{}}"> Đơn hàng</a>
            </div>
        </div>
    </div>
</header>
