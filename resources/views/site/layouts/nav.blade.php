<nav class="border-bottom bg-white">
    <div class="container main-content">
        <div class="navbar header-container align-items-stretch p-0">
            <button class="btn btn-light d-block d-lg-none" id="openNav">
                <i class="fas fa-bars"></i>
            </button>
            <div class="flex-grow-0 navbar__logo-wrapper">
                <a href="/">
                    <img class="navbar__logo" src="{{ asset('site/images/bcc-logo.png') }}" alt="bcc">
                </a>
            </div>
            <div id="mobileNav" class="align-items-stretch flex-grow-1 overlay bg-white d-lg-flex">
                @foreach($menus as $menu)
                    @if(!$menu->parent_id)
                        <div class="overlay-content mega-menu d-flex align-items-center navbar__item flex-1 pointer">
                            <div class="w-100 text-center">
                                <span class="d-flex d-lg-inline-block justify-content-between">
                                     <a class="navbar__item__text">
                                         {{ $menu->name }}
                                     </a>
                                <button class="btn d-inline-block navbar__item__btn d-lg-none">
                                    <i class="fas fa-angle-down"></i>
                                </button>
                                </span>
                                <div class="mega-menu__content">
                                    <div class="row">
                                        @foreach($menu->children as $middleChildMenu)
                                            <div class="col-lg-2 col-12 pt-3 pt-lg-0 d-flex flex-column">
                                                <div
                                                    class="d-flex d-lg-inline-block justify-content-between align-items-center mega-menu__title text-md-right">
                                                    <a class="" href="{{ $middleChildMenu->link }}">
                                                        {{ $middleChildMenu->name }}
                                                    </a>
                                                    <button
                                                        class="btn d-inline-block d-lg-none navbar__item__btn collapsed"
                                                        data-target="#menuBabyBoy"
                                                        data-toggle="collapse">
                                                        <i class="fas fa-angle-up"></i>
                                                    </button>
                                                </div>
                                                <ul class="list-unstyled collapse" id="menuBabyBoy">
                                                    @foreach($middleChildMenu->children as $grandChildMenu)
                                                        <li>
                                                            <a class="mega-menu__subtitle"
                                                               href="{{ $middleChildMenu->link }}">
                                                                {{ $grandChildMenu->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                        @if($menu->image)
                                            <div class="col-4 d-none d-lg-flex">
                                                <img class="mega-menu__image" src="{{ $menu->image}}"
                                                     alt="">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="d-flex navbar__search-wrapper align-items-center">
                <form class="flex-1 search-form" id="searchForm" action="">
                    <div class="navbar__search d-flex align-items-center" id="dropdownMenuButton"
                         data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">
                        <i class="icon fas fa-search ml-2"></i>
                        <input class="flex-grow-1" placeholder="??????????..." name="search" type="text">
                        <div class="dropdown-menu search-suggestions" aria-labelledby="dropdownMenuButton">
                            <ul class="">
                                <li class="d-flex border-bottom p-3">
                                    <img class="ml-3" src="{{ asset('site/images/3020111430_r01_1.jpg') }}" alt="">
                                    <div class="d-flex flex-column justify-content-between">
                                        <a class="search-suggestion">
                                            ????????????
                                            <span class="suggestion-title">????????</span>
                                            ???? ???????? ????????
                                            <span class="suggestion-title">???? ????????????</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="d-flex border-bottom p-3">
                                    <img class="ml-3" src="{{ asset('site/images/3020111430_r01_1.jpg') }}" alt="">
                                    <div class="d-flex flex-column justify-content-between">
                                        <a class="search-suggestion">
                                            ????????????
                                            <span class="suggestion-title">????????</span>
                                            ???? ???????? ????????
                                            <span class="suggestion-title">???? ????????????</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="d-flex border-bottom p-3">
                                    <img class="ml-3" src="{{ asset('site/images/3020111430_r01_1.jpg') }}" alt="">
                                    <div class="d-flex flex-column justify-content-between">
                                        <a class="search-suggestion">
                                            ????????????
                                            <span class="suggestion-title">????????</span>
                                            ???? ???????? ????????
                                            <span class="suggestion-title">???? ????????????</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="d-flex border-bottom p-3">
                                    <img class="ml-3" src="{{ asset('site/images/3020111430_r01_1.jpg') }}" alt="">
                                    <div class="d-flex flex-column justify-content-between">
                                        <a class="suggestion-title" href="">
                                            ???????? ???????????? ?????? ????????????
                                        </a>
                                        <p class="suggestion-category">
                                            ???????? ????????:
                                            <a href="">????????</a>
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex border-bottom p-3">
                                    <img class="ml-3" src="{{ asset('site/images/3020111430_r01_1.jpg') }}" alt="">
                                    <div class="d-flex flex-column justify-content-between">
                                        <a class="suggestion-title" href="">
                                            ???????? ???????????? ?????? ????????????
                                        </a>
                                        <p class="suggestion-category">
                                            ???????? ????????:
                                            <a href="">????????</a>
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex border-bottom p-3">
                                    <img class="ml-3" src="{{ asset('site/images/3020111430_r01_1.jpg') }}" alt="">
                                    <div class="d-flex flex-column justify-content-between">
                                        <a class="suggestion-title" href="">
                                            ???????? ???????????? ?????? ????????????
                                        </a>
                                        <p class="suggestion-category">
                                            ???????? ????????:
                                            <a href="">????????</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
                <button class="btn wish-list-btn d-none d-md-inline-block" type="button">
                    <i class="far fa-heart"></i>
                </button>
                <button class="btn d-inline-block d-md-none search-btn" id="openMobileSearch" type="button">
                    <i class="fas fa-search"></i>
                </button>
                <a href="{{ route('site.cart.show') }}" class="shopping-cart" id="shoppingCartBtn">
                    <i class="svg-icon svg-icon-cart"></i>
                    <span class="cart-counter">{{ !empty($cartItemCount) ? $cartItemCount : 0 }}</span>
                </a>
            </div>
        </div>
    </div>
</nav>
