@extends('site.layouts.master')
@section('title')
    {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{@$config->image->path ?? ''}}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="/site/assets/css/home-page.css">

@endsection

@section('content')

    <main id="tm-main" ng-controller="homePage">

        <!-- Builder #page -->
        <style class="uk-margin-remove-adjacent">#page\#0 .el-overlay {
                width: 100%;
                height: 100%;
            }

            #page\#0 .el-link {
                font-size: 0;
                position: absolute;
                width: 100%;
                height: 100%;
                border: unset;
                background: transparentl;
            }

            #page\#1 .el-overlay {
                width: 100%;
                height: 100%;
            }

            #page\#1 .el-link {
                font-size: 0;
                position: absolute;
                width: 100%;
                height: 100%;
                border: unset;
                background: transparentl;
            }

            @media only screen and (max-width: 640px) {
                #page\#2 {
                    font-size: 24px;
                }
            }

            @media only screen and (max-width: 640px) {
            }

            @media only screen and (max-width: 640px) {
                #page\#4 {
                    font-size: 16px;
                }
            }

            #page\#5 {
                padding-bottom: 30px;
            }

            @media only screen and (max-width: 640px) {
                #page\#5 {
                    padding-bottom: 0px;
                }
            }

            @media only screen and (max-width: 1024px) {
                #page\#6 .el-image {
                    width: 350px;
                }

                #page\#6 {
                    text-align: center;
                }
            }

            @media only screen and (max-width: 640px) {
                #page\#7 {
                    left: 70% !important;
                    bottom: -180px !important;
                }
            }

            #page\#8 {
                border-top: 3px dashed #5cc9ff;
                border-bottom: 3px dashed #5cc9ff;
            }

            @media only screen and (max-width: 640px) {
                #page\#9 {
                    font-size: 24px;
                }
            }

            #slider_product img {
                max-width: 170px;
            }

            @media only screen and (max-width: 640px) {
                #slider_product ul.products > * {
                    padding-left: 0;
                }

                #slider_product .products.uk-slider-items {
                    flex-wrap: nowrap;
                }
            }

            #page\#10 {
                overflow: inherit;
            }

            #page\#11 {
                font-size: 30px;
                font-weight: bold;
                color: #FFF;
                background: #2f55a6;
                padding: 5px 120px;
                width: fit-content;
                margin: 0 auto;
                border-radius: 20px;
            }

            @media only screen and (max-width: 640px) {
                #page\#11 {
                    padding: 5px 40px;
                    width: 100%;
                    font-size: 25px;
                    box-sizing: border-box;
                }
            }

            @media only screen and (max-width: 360px) {
                #page\#11 {
                    font-size: 22px;
                }

                #page\#11 p {
                    margin-bottom: 0;
                }
            }

            @media only screen and (max-width: 640px) {
                #page\#12 {
                    width: fit-content;
                    top: -15px !important;
                    left: 90% !important;
                }

                #page\#12 img {
                    width: 55px;
                }
            }

            @media only screen and (max-width: 640px) {
                #page\#13 .el-title {
                    font-size: 20px;
                    font-weight: bold;
                }
            }

            @media only screen and (max-width: 640px) {
                #page\#14 {
                    font-size: 24px;
                }
            }

            #page\#15 .el-title {
                font-size: 18px;
            }

            @media only screen and (max-width: 640px) {
                #page\#15 img {
                    width: 105px;
                    height: 105px;
                }

                #page\#15 .el-title {
                    font-size: 14px;
                }
            }

            #page\#16 {
                font-size: 36px;
                font-weight: bold;
            }

            @media only screen and (max-width: 640px) {
                #page\#16 {
                    font-size: 24px;
                    font-weight: bold;
                }
            }

            #page\#17 .el-link {
                border-radius: 25px;
                text-transform: none;
                background: #78bcdd;
                font-size: 19px;
                color: #FFF;
                line-height: 50px;
            }

            @media only screen and (max-width: 640px) {
                #page\#17 .el-title {
                    font-size: 17px;
                }

                #page\#17 .el-link {
                    font-size: 14px;
                    line-height: 30px;
                }
            }

            #page\#18 .el-link {
                border-radius: 25px;
                text-transform: none;
                background: #78bcdd;
                font-size: 19px;
                color: #FFF;
                line-height: 50px;
            }

            #page\#19 .el-link {
                border-radius: 25px;
                text-transform: none;
                background: #78bcdd;
                font-size: 19px;
                color: #FFF;
                line-height: 50px;
            }

            #page\#20 {
                font-size: 36px;
                font-weight: bold;
            }

            @media only screen and (max-width: 640px) {
                #page\#20 {
                    font-size: 24px;
                    font-weight: bold;
                }
            }

            #page\#21 .el-title {
                font-size: 19px;
            }

            #page\#21 .el-image {
                border-radius: 20px;
            }

            #page\#22 {
                font-size: 36px;
                font-weight: bold;
            }

            @media only screen and (max-width: 640px) {
                #page\#22 {
                    font-size: 24px;
                }
            }

            #page\#23 {
                font-size: 24px;
            }

            @media only screen and (max-width: 640px) {
                #page\#23 {
                    font-size: 16px;
                }
            }

            #page\#24 .el-item {
                border: 1px solid #eaeaea;
            }

            #page\#25 {
                font-size: 24px;
            }

            @media only screen and (max-width: 640px) {
                #page\#25 {
                    font-size: 16px;
                }
            }

            #page\#26 .el-item {
                border: 1px solid #eaeaea;
            }</style>
        <div class="uk-section-default uk-section uk-padding-remove-vertical">


            <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                <div class="uk-width-1-1">


                    <div uk-slideshow="ratio: 1920:648; autoplay: 1;  autoplayInterval: 8000;" id="page#0"
                         class="uk-margin uk-visible@m">
                        <div class="uk-position-relative">

                            <div class="uk-slideshow-items">
                                @foreach($banners as $banner)
                                    <div class="el-item">


                                        <picture>
                                            <source type="image/webp"
                                                    srcset="{{ $banner->image->path ?? '' }} 768w,
                                                    {{ $banner->image->path ?? '' }} 1024w,
                                                    {{ $banner->image->path ?? '' }} 1366w,
                                                    {{ $banner->image->path ?? '' }} 1600w,
                                                    {{ $banner->image->path ?? '' }} 1920w"
                                                    sizes="(max-aspect-ratio: 1920/648) 296vh">
                                            <img decoding="async"
                                                 src="{{ $banner->image->path ?? '' }}"
                                                 width="1920" height="648" class="el-image" alt=""
                                                 loading="lazy" uk-cover>
                                        </picture>


                                    </div>
                                @endforeach



                            </div>

                            <div class="uk-visible@s"><a class="el-slidenav uk-position-medium uk-position-center-left"
                                                         href="#" uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                    class="el-slidenav uk-position-medium uk-position-center-right" href="#"
                                    uk-slidenav-next uk-slideshow-item="next"></a></div>

                            <div class="uk-position-bottom-center uk-position-medium">
                                <ul class="el-nav uk-slideshow-nav uk-dotnav uk-flex-center" uk-margin>
                                    @foreach($banners as $keyBanner => $banner)
                                        <li uk-slideshow-item="{{$keyBanner}}">
                                            <a href="#"></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div uk-slideshow="ratio: 415:416; autoplay: 1;  autoplayInterval: 8000;" id="page#1"
                         class="uk-margin-remove-vertical uk-hidden@m">
                        <div class="uk-position-relative">

                            <div class="uk-slideshow-items">
                                @foreach($banners as $banner)
                                    <div class="el-item">

                                        <picture>
                                            <source type="image/webp"
                                                    srcset="{{ $banner->image_mobile->path ?? '' }} 768w,
                                                     {{ $banner->image_mobile->path ?? '' }} 1000w"
                                                    sizes="(max-aspect-ratio: 1000/1000) 100vh">
                                            <img decoding="async"
                                                 src="{{ $banner->image_mobile->path ?? '' }}"
                                                 width="1000" height="1000" class="el-image" alt=""
                                                 loading="lazy" uk-cover>
                                        </picture>

                                    </div>
                                @endforeach



                            </div>

                            <div class="uk-visible@s"><a class="el-slidenav uk-position-medium uk-position-center-left"
                                                         href="#" uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                    class="el-slidenav uk-position-medium uk-position-center-right" href="#"
                                    uk-slidenav-next uk-slideshow-item="next"></a></div>

                            <div class="uk-position-bottom-center uk-position-small">
                                <ul class="el-nav uk-slideshow-nav uk-dotnav uk-flex-center" uk-margin>
                                    @foreach($banners as $keyBanner => $banner)
                                        <li uk-slideshow-item="{{ $keyBanner }}">
                                            <a href="#"></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>
        <div id="page#8" class="uk-section-default">
            <div style="background-size: 563px 163px; background-color: #C8EDFF;"
                 data-src="/site/img/dammay-e1662628382833.png"
                 data-sources="[{&quot;type&quot;:&quot;image\/webp&quot;,&quot;srcset&quot;:&quot;/site/img/dammay-e1662628382833-1e6ec0a9.webp 563w&quot;,&quot;sizes&quot;:&quot;(min-width: 563px) 563px&quot;}]"
                 uk-img class="uk-background-norepeat uk-background-top-right uk-section uk-padding-remove-bottom">


                <div class="uk-container">
                    <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                        <div class="uk-grid-item-match uk-width-expand@m" id="page#5">


                            <div class="uk-panel uk-width-1-1">


                                <h2 class="uk-text-primary uk-text-bold uk-text-center"
                                    id="page#2"> {{ $blockStory->title }} </h2>
                                <div class="uk-position-absolute uk-width-1-1" id="page#3" style="left: -60px;">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/phaytren-13473d91.webp 27w"
                                                sizes="(min-width: 27px) 27px">
                                        <img decoding="async"
                                             src="/site/img/phaytren-1daa069b.png" width="27"
                                             height="21" class="el-image" alt loading="lazy">
                                    </picture>
                                </div>

                                <div class="uk-panel uk-text-primary uk-margin uk-margin-remove-top uk-text-justify"
                                     id="page#4">
                                    {!! $blockStory->body !!}
                                </div>

                                <div class="uk-position-absolute uk-width-1-1" style="left: 100%;">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/duoi-bf91dc6f.webp 27w"
                                                sizes="(min-width: 27px) 27px">
                                        <img decoding="async"
                                             src="/site/img/duoi-b65eb26b.png" width="27"
                                             height="21" class="el-image" alt loading="lazy">
                                    </picture>

                                </div>

                            </div>


                        </div>
                        <div class="uk-grid-item-match uk-flex-bottom uk-width-auto@m uk-flex-first@m">


                            <div class="uk-panel uk-width-1-1">


                                <div class="uk-margin" id="page#6">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $blockStory->image->path ?? '' }}"
                                                sizes="(min-width: 400px) 400px">
                                        <img decoding="async"
                                             src="{{ $blockStory->image->path ?? '' }}" width="400"
                                             height="502" class="el-image" alt loading="lazy">
                                    </picture>

                                </div>

                            </div>


                        </div>
                        <div class="uk-grid-item-match uk-flex-bottom uk-width-auto@m uk-visible@m">


                            <div class="uk-panel uk-width-1-1">


                                <div class="uk-position-relative uk-margin uk-visible@m" id="page#7"
                                     style="left: 0; bottom: 0;">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $blockStory->image_back->path ?? '' }} 150w,
                                                 {{ $blockStory->image_back->path ?? '' }}  186w"
                                                sizes="(min-width: 150px) 150px">
                                        <img decoding="async"
                                             src="{{ $blockStory->image_back->path ?? '' }} " width="150"
                                             height="157" class="el-image" alt loading="lazy">
                                    </picture>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>


            </div>

        </div>


        @foreach($categoriesSpecial as $categorySpecial)
            <div class="uk-section-default uk-section">
                <div class="uk-container">
                    <div id="page#10" class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin" uk-slider>
                        <div class="uk-width-1-1">


                            <h2 class="uk-h2 uk-text-primary uk-text-bold uk-margin-large uk-text-center" id="page#9"><span>{{ $categorySpecial->name }}</span>
                            </h2>
                            <div class="uk-panel uk-margin">
                                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin" uk-slider>
                                    <div class="uk-width-1-1">


                                        <div class="uk-panel tm-element-woo-products" id="slider_product">
                                            <div class="woocommerce columns-2 ">
                                                <ul class="products columns-2">
                                                    @foreach($categorySpecial->products as $productSpec)
                                                        <li class="product type-product post-43696 status-publish first instock product_cat-chua-phan-loai has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="uk-text-center">
                                                                <a href="{{ route('front.getProductDetail', $productSpec->slug) }}"
                                                                   class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                                        width="300" height="436"
                                                                        src="{{ $productSpec->image->path ?? '' }}"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt="" decoding="async" fetchpriority="high"/>
                                                                    <h2 class="woocommerce-loop-product__title">{{ $productSpec->name }}</h2>
                                                                    <span class="gia">Giá: </span>
                                                                    @if($productSpec->price > 0)
                                                                        <span class="price"><span
                                                                                class="woocommerce-Price-amount amount"><bdi>{{ formatCurrency($productSpec->price) }}<span
                                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                                    </span>
                                                                    @else
                                                                        <span class="price"><span
                                                                                class="woocommerce-Price-amount amount"><bdi>Liên hệ<span
                                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                                    </span>
                                                                    @endif

                                                                </a>
                                                                <div class="uk-margin-bottom ju-expert">
                                                                    {{ $productSpec->intro }}
                                                                </div>
                                                                <div id="button-cart" uk-grid
                                                                     class="uk-child-width-1-2 uk-grid-small">
                                                                    <div><a class="uk-button uk-button-secondary uk-width-1-1"
                                                                            href="{{ route('front.getProductDetail', $productSpec->slug) }}">Xem
                                                                            chi tiết</a></div>
                                                                    <div><a href="javascript:void(0)"
                                                                            data-quantity="1" ng-click="addToCart({{$productSpec->id}}, 1)"
                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart uk-width-1-1"
                                                                            aria-label="Thêm vào giỏ hàng"
                                                                            rel="nofollow">Thêm giỏ hàng</a>
                                                                    </div>
                                                                    <div>
                                                                        <button id="mua_ngay" ng-click="buyNow({{$productSpec->id}}, 1)"
                                                                                class="uk-visible@m uk-button uk-button-secondary"
                                                                               >Mua ngay
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <style>
                .bg-sky{
                    background-image:
                        radial-gradient(120px 80px at 70% 25%, rgba(255,255,255,.45), transparent 60%),
                        radial-gradient(140px 90px at 20% 35%, rgba(255,255,255,.35), transparent 65%),
                        linear-gradient(to top, #FFD43B 0%, #FBE47A 32%, #EAF8FF 62%, #C8EDFF 100%);
                }
        </style>

        <div class="uk-panel uk-section-default">
{{--            <div data-src="#" uk-img class="uk-background-norepeat uk-background-center-center uk-section"--}}
{{--                 style="background-color: color-mix(in srgb, #FFD43B 55%, #C8EDFF 45%);">--}}
                <div class="uk-section uk-background-norepeat uk-background-center-center bg-sky">


                <div class="uk-margin-remove-vertical uk-container uk-container-small">
                    <div class="tuyenngon uk-grid tm-grid-expand uk-grid-column-collapse uk-child-width-1-1">
                        <div class="uk-grid-item-match uk-width-1-1">


                            <div class="uk-panel uk-width-1-1">


                                <div class="uk-text-center" id="page#11"><p>Tuyên ngôn &#8220;4 KHÔNG&#8221; <br/>An
                                        toàn cho bé</p></div>
                                <div class="uk-position-absolute uk-width-1-1" id="page#12"
                                     style="left: 70%; top: -50px;">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/gau-1-9ddef051.png 200w,
                                                 /site/img/gau-1-9ddef051.png 400w"
                                                sizes="(min-width: 200px) 200px">
                                        <img decoding="async"
                                             src="/site/img/gau-1-9ddef051.png" width="200"
                                             height="200" class="el-image" alt loading="lazy">
                                    </picture>

                                </div>
                                <div id="page#13" class="uk-margin-large">
                                    <div
                                        class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m uk-grid-match"
                                        uk-grid>
                                        @foreach($messages as $message)
                                            <div>
                                                <div class="el-item uk-panel">

                                                    <div class="uk-grid-column-small uk-flex-middle" uk-grid>
                                                        <div class="uk-width-auto">


                                                            <picture>
                                                                <source type="image/webp"
                                                                        srcset="{{ $message->image->path ?? '' }} 67w"
                                                                        sizes="(min-width: 67px) 67px">
                                                                <img decoding="async"
                                                                     src="{{ $message->image->path ?? '' }}"
                                                                     width="67" height="63" alt loading="lazy"
                                                                     class="el-image">
                                                            </picture>


                                                        </div>
                                                        <div class="uk-width-expand uk-margin-remove-first-child">


                                                            <h3 class="el-title uk-margin-top uk-margin-remove-bottom">
                                                                {{ $message->name }}</h3>


                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach



                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div class="uk-section-default uk-section uk-padding-remove-bottom">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <div class="uk-h2 uk-text-primary uk-text-bold uk-text-center" id="page#14"> Chứng nhận chất
                            lượng
                        </div>
                        <div id="page#15" class="uk-margin-large uk-text-center">
                            <div
                                class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-center uk-grid-match"
                                uk-grid>

                                @foreach($certifications as $certification)
                                    <div>
                                        <div class="el-item uk-panel uk-margin-remove-first-child">


                                            <picture>
                                                <source type="image/webp"
                                                        srcset="{{ $certification->image->path ?? '' }} 180w,
                                                         {{ $certification->image->path ?? '' }} 312w"
                                                        sizes="(min-width: 180px) 180px">
                                                <img decoding="async"
                                                     src="{{ $certification->image->path ?? '' }}"
                                                     width="180" height="180" alt loading="lazy" class="el-image">
                                            </picture>


                                            <div class="el-title uk-margin-top uk-margin-remove-bottom">
                                                {!! $certification->intro !!}
                                            </div>


                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
        <div class="uk-section-default uk-section uk-padding-remove-bottom">


            <div class="uk-container uk-padding-remove-horizontal">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <div class="uk-text-primary uk-text-center" id="page#16"> Video {{ $config->short_name_company }}</div>

                        @if($videos[0]['link_youtube'])

                            <div class="uk-light uk-margin uk-text-center" id="page#17" uk-lightbox>
                                <a class="uk-inline-clip uk-link-toggle" href="{{ $videos[0]['link_youtube'] }}"
                                   target="_blank" rel="noopener">


                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $videos[0]->image->path ?? '' }} 768w,
                                               {{ $videos[0]->image->path ?? '' }} 1024w,
                                                {{ $videos[0]->image->path ?? '' }} 1366w,
                                                 {{ $videos[0]->image->path ?? '' }} 1427w,
                                                 {{ $videos[0]->image->path ?? '' }} 1428w"
                                                sizes="(min-width: 1428px) 1428px">
                                        <img decoding="async"
                                             src="{{ $videos[0]->image->path ?? '' }}"
                                             width="1428" height="703" alt loading="lazy"
                                             class="el-image uk-transition-opaque">
                                    </picture>


                                    <div class="uk-overlay-primary uk-position-cover"></div>
                                    <div class="uk-position-center">
                                        <div class="uk-overlay uk-margin-remove-first-child">


                                            <div class="uk-margin-top">
                                                <div class="el-link uk-button uk-button-primary">Xem tại đây</div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>

                        @endif


                    </div>
                </div>
                <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>

                    @if($videos[1]['link_youtube'])
                        <div class="uk-width-1-2 uk-width-1-2@s uk-width-1-2@m">
                            <div class="uk-light uk-margin uk-text-center" id="page#18" uk-lightbox>
                                <a class="uk-inline-clip uk-link-toggle" href="{{ $videos[1]['link_youtube'] }}"
                                   target="_blank" rel="noopener">


                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $videos[1]->image->path ?? '' }} 681w,
                                                {{ $videos[1]->image->path ?? '' }} 682w"
                                                sizes="(min-width: 682px) 682px">
                                        <img decoding="async"
                                             src="{{ $videos[1]->image->path ?? '' }}"
                                             width="682" height="384" alt loading="lazy"
                                             class="el-image uk-transition-opaque">
                                    </picture>


                                    <div class="uk-overlay-primary uk-position-cover"></div>
                                    <div class="uk-position-center">
                                        <div class="uk-overlay uk-margin-remove-first-child">


                                            <div class="el-content uk-panel uk-margin-top"><p><img decoding="async"
                                                                                                   src="/site/img/play.png"
                                                                                                   alt="" width="55"
                                                                                                   height="55"
                                                                                                   class="aligncenter size-full wp-image-321"/>
                                                </p></div>

                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                    @endif

                    @if($videos[2]['link_youtube'])
                        <div class="uk-width-1-2 uk-width-1-2@s uk-width-1-2@m">
                                <div class="uk-light uk-margin uk-text-center" id="page#18" uk-lightbox>
                                    <a class="uk-inline-clip uk-link-toggle" href="{{ $videos[2]['link_youtube'] }}"
                                       target="_blank" rel="noopener">


                                        <picture>
                                            <source type="image/webp"
                                                    srcset="{{ $videos[2]->image->path ?? '' }} 681w,
                                                {{ $videos[2]->image->path ?? '' }} 682w"
                                                    sizes="(min-width: 682px) 682px">
                                            <img decoding="async"
                                                 src="{{ $videos[2]->image->path ?? '' }}"
                                                 width="682" height="384" alt loading="lazy"
                                                 class="el-image uk-transition-opaque">
                                        </picture>


                                        <div class="uk-overlay-primary uk-position-cover"></div>
                                        <div class="uk-position-center">
                                            <div class="uk-overlay uk-margin-remove-first-child">


                                                <div class="el-content uk-panel uk-margin-top"><p><img decoding="async"
                                                                                                       src="/site/img/play.png"
                                                                                                       alt="" width="55"
                                                                                                       height="55"
                                                                                                       class="aligncenter size-full wp-image-321"/>
                                                    </p></div>

                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                    @endif
                </div>
            </div>


        </div>
        <div class="uk-section-default uk-section">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <div class="uk-text-primary uk-text-center" id="page#20"> Tin tức sự kiện</div>
                        <div class="uk-margin uk-text-center" uk-slider="autoplay: 1;  autoplayInterval: 3000;"
                             id="page#21">
                            <div class="uk-position-relative">
                                <div class="uk-slider-container">

                                    <div class="uk-slider-items uk-grid uk-grid-match">
                                        @foreach($blogs as $blog)
                                            <div class="uk-width-1-1 uk-width-1-3@m">
                                                <div class="el-item uk-grid-item-match">
                                                    <a class="uk-panel uk-margin-remove-first-child uk-link-toggle"
                                                       href="{{ route('front.blogDetail', $blog->slug) }}">


                                                        <picture>
                                                            <source type="image/webp"
                                                                    srcset="{{ $blog->image->path ?? '' }} 373w,
                                                                     {{ $blog->image->path ?? '' }} 745w,
                                                                      {{ $blog->image->path ?? '' }} 746w"
                                                                    sizes="(min-width: 373px) 373px">
                                                            <img decoding="async"
                                                                 src="{{ $blog->image->path ?? '' }}"
                                                                 width="373" height="210" alt loading="lazy"
                                                                 class="el-image uk-border-rounded">
                                                        </picture>


                                                        <div class="el-title uk-margin-top uk-margin-remove-bottom"> {{ $blog->name }}
                                                        </div>


                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>


                                <div><a class="el-slidenav uk-position-medium uk-position-center-left-out" href="#"
                                        uk-slidenav-previous uk-slider-item="previous"
                                        uk-toggle="cls: uk-position-center-left-out uk-position-center-left; mode: media; media: @xl"></a>
                                    <a class="el-slidenav uk-position-medium uk-position-center-right-out" href="#"
                                       uk-slidenav-next uk-slider-item="next"
                                       uk-toggle="cls: uk-position-center-right-out uk-position-center-right; mode: media; media: @xl"></a>
                                </div>
                            </div>
                            <ul class="el-nav uk-slider-nav uk-dotnav uk-flex-center uk-margin-top" uk-margin></ul>
                        </div>


                    </div>
                </div>
            </div>


        </div>

        <div class="uk-section-default uk-section uk-padding-remove-top">
            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <div class="uk-text-primary uk-text-center" id="page#22"> Đối tác của chúng tôi</div>

                        @if(@$partners[1])
                            <div class="uk-panel uk-margin uk-text-center" id="page#23"><p>Hệ thống các shop mẹ bé</p></div>
                            <div class="uk-margin" uk-slider="autoplay: 1;  autoplayInterval: 3000;" id="page#24">
                                <div class="uk-position-relative">
                                    <div class="uk-slider-container">

                                        <div class="uk-slider-items uk-grid uk-grid-medium uk-grid-match">
                                            @foreach(@$partners[1] as $partner)
                                                <div class="uk-width-1-2 uk-width-1-4@m uk-width-1-5@l">
                                                    <div class="el-item uk-panel uk-margin-remove-first-child">


                                                        <picture>
                                                            <source type="image/webp"
                                                                    srcset="{{ $partner->image->path ?? '' }} 328w"
                                                                    sizes="(min-width: 328px) 328px">
                                                            <img decoding="async"
                                                                 src="{{ $partner->image->path ?? '' }}"
                                                                 width="328" height="126" alt loading="lazy" class="el-image">
                                                        </picture>


                                                    </div>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <div><a class="el-slidenav uk-position-center-left-out" href="#" uk-slidenav-previous
                                            uk-slider-item="previous"
                                            uk-toggle="cls: uk-position-center-left-out uk-position-center-left; mode: media; media: @xl"></a>
                                        <a class="el-slidenav uk-position-center-right-out" href="#" uk-slidenav-next
                                           uk-slider-item="next"
                                           uk-toggle="cls: uk-position-center-right-out uk-position-center-right; mode: media; media: @xl"></a>
                                    </div>
                                </div>
                                <ul class="el-nav uk-slider-nav uk-dotnav uk-flex-center uk-margin-top" uk-margin></ul>
                            </div>
                        @endif


                        @if(@$partners[2])
                            <div class="uk-panel uk-margin-large uk-margin-remove-bottom uk-text-center" id="page#25"><p>Hệ
                                    thống nhà thuốc lớn trên toàn quốc</p></div>
                            <div class="uk-margin" uk-slider="autoplay: 1;  autoplayInterval: 4000;" id="page#26">
                                <div class="uk-position-relative">
                                    <div class="uk-slider-container">

                                        <div class="uk-slider-items uk-grid uk-grid-medium uk-grid-match">
                                            @foreach(@$partners[2] as $partner)
                                                <div class="uk-width-1-2 uk-width-1-4@m uk-width-1-5@l">
                                                    <div class="el-item uk-panel uk-margin-remove-first-child">


                                                        <picture>
                                                            <source type="image/webp"
                                                                    srcset="{{ $partner->image->path ?? '' }} 327w"
                                                                    sizes="(min-width: 327px) 327px">
                                                            <img decoding="async"
                                                                 src="{{ $partner->image->path ?? '' }}"
                                                                 width="327" height="126" alt loading="lazy" class="el-image">
                                                        </picture>


                                                    </div>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>


                                    <div><a class="el-slidenav uk-position-center-left-out" href="#" uk-slidenav-previous
                                            uk-slider-item="previous"
                                            uk-toggle="cls: uk-position-center-left-out uk-position-center-left; mode: media; media: @xl"></a>
                                        <a class="el-slidenav uk-position-center-right-out" href="#" uk-slidenav-next
                                           uk-slider-item="next"
                                           uk-toggle="cls: uk-position-center-right-out uk-position-center-right; mode: media; media: @xl"></a>
                                    </div>
                                </div>
                                <ul class="el-nav uk-slider-nav uk-dotnav uk-flex-center uk-margin-top" uk-margin></ul>
                            </div>

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@push('scripts')
    <script>
        app.controller('homePage', function ($rootScope, $scope, cartItemSync, $interval) {
            $scope.cart = cartItemSync;


            $scope.addToCart = function (productId, qty = null) {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);

                if(! qty) {
                    var currentVal = parseInt(jQuery('input[name="quantity"]').val());
                } else {
                    var currentVal = parseInt(qty);
                }

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        'qty': currentVal
                    },
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);
                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);
                        }

                        toastr.success('Đã thêm sản phẩm vào giỏ hàng!');

                    },
                    error: function () {
                        toastr.error('Có lỗi xảy ra. Vui lòng thử lại.');
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.buyNow = function (productId, qty = null) {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);

                if(! qty) {
                    var currentVal = parseInt(jQuery('input[name="quantity"]').val());
                } else {
                    var currentVal = parseInt(qty);
                }

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        'qty': currentVal
                    },
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);
                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);
                        }

                        window.location.href = "{{ route('cart.checkout') }}";

                    },
                    error: function () {
                        toastr.error('Có lỗi xảy ra. Vui lòng thử lại.');
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }


        })

    </script>
@endpush
