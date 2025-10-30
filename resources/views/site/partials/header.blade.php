<div class="uk-panel uk-hidden@m">
    <div class="uk-navbar-center uk-flex-center">
        <a href="{{ route('front.home-page') }}" class="uk-logo uk-navbar-item">
            <picture>
                <source type="image/webp"
                        srcset="{{ $config->image->path ?? '' }} 150w,
                        {{ $config->image->path ?? '' }} 202w"
                        sizes="(min-width: 150px) 150px">
                <img alt loading="eager" src="{{ $config->image->path ?? '' }}" width="150"
                     height="59">
            </picture>
        </a></div>
</div>
<div class="tm-header-mobile uk-hidden@m">


    <div uk-sticky cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container">

        <div class="uk-navbar-container">

            <div class="uk-container uk-container-expand">
                <nav class="uk-navbar"
                     uk-navbar="{&quot;container&quot;:&quot;.tm-header-mobile &gt; [uk-sticky]&quot;}">

                    <div class="uk-navbar-left">


                        <a uk-toggle href="#tm-dialog-mobile" class="uk-navbar-toggle uk-navbar-toggle-animate">


                            <div uk-navbar-toggle-icon></div>


                        </a>
                        <ul class="uk-navbar-nav">

                            <li class="menu-item menu-item-type-post_type_archive menu-item-object-product"><a
                                    href="{{ route('front.getProductList') }}"> SẢN PHẨM</a></li>
                            <li class="menu-item menu-item-type-post_type_archive menu-item-object-dia-diem"><a
                                    href="{{ route('front.getStores') }}" class="uk-preserve-width">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/diemban-10355e90.webp 20w"
                                                sizes="(min-width: 20px) 20px">
                                        <img src="/site/img/diemban-3fd2c981.png" width="20"
                                             height="20" class="uk-margin-small-right" alt loading="eager">
                                    </picture>
                                    Điểm bán</a></li>
                        </ul>

                    </div>


                    <div class="uk-navbar-right">


                        <div class="uk-navbar-item widget widget_text" id="text-7">


                            <div class="uk-panel textwidget">
                                <a class="pointer" href="{{ route('cart.index') }}"><img
                                        decoding="async" src="/site/img/cart_mini.png">
                                    <span class="quality-1 uk-hidden">0</span>
                                </a>
                            </div>

                        </div>

                    </div>

                </nav>
            </div>

        </div>

    </div>


    <div id="tm-dialog-mobile" class="uk-dropbar uk-dropbar-top"
         uk-drop="{&quot;clsDrop&quot;:&quot;uk-dropbar&quot;,&quot;flip&quot;:&quot;false&quot;,&quot;container&quot;:&quot;.tm-header-mobile&quot;,&quot;target-y&quot;:&quot;.tm-header-mobile .uk-navbar-container&quot;,&quot;mode&quot;:&quot;click&quot;,&quot;target-x&quot;:&quot;.tm-header-mobile .uk-navbar-container&quot;,&quot;stretch&quot;:true,&quot;bgScroll&quot;:&quot;false&quot;,&quot;animation&quot;:&quot;reveal-top&quot;,&quot;animateOut&quot;:true,&quot;duration&quot;:300,&quot;toggle&quot;:&quot;false&quot;}">

        <div class="tm-height-min-1-1 uk-flex uk-flex-column">

            <div class="uk-margin-auto-bottom">

                <div class="uk-grid uk-child-width-1-1">
                    <div>
                        <div class="uk-panel widget widget_nav_menu" id="nav_menu-6">


                            <ul class="uk-nav uk-nav-default uk-nav-accordion" uk-nav="targets: &gt; .js-accordion">

                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-2963 current_page_item ">
                                    <a href="{{ route('front.home-page') }}"> Trang chủ</a></li>

                                @foreach($categories as $category)
                                    <li class="menu-item menu-item-type-post_type_archive menu-item-object-product menu-item-has-children uk-parent js-accordion">
                                        <a href='#' class='ju-scroll'><span uk-nav-parent-icon></span></a>
                                        <div><a href="{{ route('front.getProductList', $category->slug) }}"> {{ $category->name }}</a></div>
                                        <ul class="uk-nav-sub">
                                            @foreach($category->childs as $child)
                                                <li class="menu-item menu-item-type-post_type menu-item-object-product"><a
                                                        href="{{ route('front.getProductList', $child->slug) }}">{{ $child->name }}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                @endforeach

                                @foreach($postsCategory as $postCategory)
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-2963 ">
                                        <a href="{{ route('front.blogs', $postCategory->slug) }}"> {{ $postCategory->name }}</a>
                                    </li>
                                @endforeach



                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#!"> Đặt hàng</a></li>
                                <li class="menu-item menu-item-type-post_type_archive menu-item-object-dia-diem"><a
                                        href="{{ route('front.getStores') }}">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="/site/img/diemban-10355e90.webp 20w"
                                                    sizes="(min-width: 20px) 20px">
                                            <img src="/site/img/diemban-3fd2c981.png"
                                                 width="20" height="20" class="uk-margin-small-right" alt
                                                 loading="eager">
                                        </picture>
                                        Điểm bán</a></li>

                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                        href="tel:{{ $config->hotline }}"> {{ $config->hotline }}</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


</div>


<div class="tm-header uk-visible@m" uk-header>


    <div uk-sticky media="@m" cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container">

        <div class="uk-navbar-container">

            <div class="uk-container">
                <nav class="uk-navbar"
                     uk-navbar="{&quot;align&quot;:&quot;left&quot;,&quot;container&quot;:&quot;.tm-header &gt; [uk-sticky]&quot;,&quot;boundary&quot;:&quot;.tm-header .uk-navbar-container&quot;}">

                    <div class="uk-navbar-left">

                        <a href="{{ route('front.home-page') }}" class="uk-logo uk-navbar-item">
                            <picture>
                                <source type="image/webp"
                                        srcset="{{ $config->image->path ?? '' }} 202w"
                                        sizes="(min-width: 202px) 202px">
                                <img alt loading="eager"
                                     src="{{ $config->image->path ?? '' }}" width="202"
                                     height="80">
                            </picture>
                        </a>

                        <ul class="uk-navbar-nav">

                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-2963 current_page_item ">
                                <a href="{{ route('front.home-page') }}"> Trang chủ</a></li>

                            @foreach($categories as $cate)
                                <li class="menu-item menu-item-type-post_type_archive menu-item-object-product menu-item-has-children uk-parent">
                                    <a href="{{ route('front.getProductList', $cate->slug) }}"> {{ $cate->name }}</a>
                                    @if($cate->childs()->count() > 0)
                                        <div class="uk-navbar-dropdown">
                                            <div class="uk-navbar-dropdown-grid uk-child-width-1-1" uk-grid>
                                                <div>
                                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                                        @foreach($cate->childs as $child)
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-product">
                                                                <a href="{{ route('front.getProductList', $child->slug) }}">{{ $child->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </li>
                            @endforeach

                            <li class="menu-item menu-item-type-post_type_archive menu-item-object-product menu-item-has-children uk-parent">
                                <a href="{{ route('front.blogs') }}">Tin tức</a>

                                    <div class="uk-navbar-dropdown">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-1" uk-grid>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    @foreach($postsCategory as $postCategory)
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                                                            <a href="{{ route('front.blogs', $postCategory->slug) }}">{{ $postCategory->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                            </li>


                        </ul>


                    </div>


                    <div class="uk-navbar-right">


                        <ul class="uk-navbar-nav">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                    href="#!"> Đặt hàng</a></li>
                            <li class="menu-item menu-item-type-post_type_archive menu-item-object-dia-diem"><a
                                    href="{{ route('front.getStores') }}" class="uk-preserve-width">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/diemban-10355e90.webp 20w"
                                                sizes="(min-width: 20px) 20px">
                                        <img src="/site/img/diemban-3fd2c981.png" width="20"
                                             height="20" class="uk-margin-small-right" alt loading="eager">
                                    </picture>
                                    Điểm bán</a></li>
                        </ul>

                        <div class="uk-navbar-item tuvan widget widget_text" id="text-3">


                            <div class="uk-panel textwidget">Tư vấn miễn cước: <strong>{{ $config->hotline }}</strong></div>

                        </div>

                    </div>

                </nav>
            </div>

        </div>

    </div>


</div>
