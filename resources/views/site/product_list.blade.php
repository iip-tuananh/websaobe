@extends('site.layouts.master')
@section('title')
    {{ $category ? $category->name : "Sản phẩm" }} - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{@$config->image->path ?? ''}}
@endsection

@section('css')

@endsection


@section('content')

    <main id="tm-main" ng-controller="productList">


        <style class="uk-margin-remove-adjacent">#template-CaSEkAw0\#0 {
                font-size: 43px;
            }

            @media only screen and (max-width: 640px) {
                #template-CaSEkAw0\#0 {
                    font-size: 33px;
                }
            }

            #template-CaSEkAw0\#1 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#1 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#1 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#1 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#1 .el-link {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#1:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#2 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#3 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#4 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#4 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#4 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#4 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#4 {
                top: -30px;
            }

            #template-CaSEkAw0\#4 .el-link {
                position: absolute;
                top: 130px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#4:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#5 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#6 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#7 {
                position: relative;
                top: -20px;
            }

            #template-CaSEkAw0\#8 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#8 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#8 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#8 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#8 .el-link {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#8:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#9 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#10 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#11 {
                position: relative;
                top: -20px;
            }

            #template-CaSEkAw0\#12 a.el-content, #template-CaSEkAw0\#12 .product_type_simple {
                padding: 0 5px;
                width: 100%;
            }

            @media only screen and (max-width: 1024px) {
                #template-CaSEkAw0\#12 .el-meta strong {
                    font-size: 20px !important;
                }

                #template-CaSEkAw0\#12 .el-title {
                    font-size: 16px;
                    white-space: warp;
                }

                #template-CaSEkAw0\#12 .el-content {
                    font-size: 16px;
                }

                #template-CaSEkAw0\#12 .price {
                    font-size: 15px;
                }
            }

            #template-CaSEkAw0\#13 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#13 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#13 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#13 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#13 .el-link {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#13:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#14 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#15 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#16 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#16 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#16 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#16 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#16 .el-link {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#16:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#17 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#18 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#19 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#19 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#19 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#19 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#19 .el-link {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#19:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#20 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#21 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#22 a.el-content, #template-CaSEkAw0\#22 .product_type_simple {
                padding: 0 5px;
                width: 100%;
            }

            @media only screen and (max-width: 1024px) {
                #template-CaSEkAw0\#22 .el-meta strong {
                    font-size: 20px !important;
                }

                #template-CaSEkAw0\#22 .el-title {
                    font-size: 16px;
                    white-space: warp;
                }

                #template-CaSEkAw0\#22 .el-content {
                    font-size: 16px;
                }

                #template-CaSEkAw0\#22 .price {
                    font-size: 15px;
                }
            }

            #template-CaSEkAw0\#23 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#23 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#23 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#23 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#23 .el-link {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#23:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#24 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#25 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#26 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#26 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#26 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#26 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#26 .el-link {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#26:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#27 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#28 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#29 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #template-CaSEkAw0\#29 .el-meta {
                font-size: 20px;
            }

            #template-CaSEkAw0\#29 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #template-CaSEkAw0\#29 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #template-CaSEkAw0\#29 .el-link {
                position: absolute;
                top: 100px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #template-CaSEkAw0\#29:hover .el-link {
                display: block;
            }

            #template-CaSEkAw0\#30 .el-content {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#31 .uk-button {
                border-radius: 20px;
            }

            #template-CaSEkAw0\#32 a.el-content, #template-CaSEkAw0\#32 .product_type_simple {
                padding: 0 5px;
                width: 100%;
            }

            @media only screen and (max-width: 1024px) {
                #template-CaSEkAw0\#32 .el-meta strong {
                    font-size: 20px !important;
                }

                #template-CaSEkAw0\#32 .el-title {
                    font-size: 16px;
                    white-space: warp;
                }

                #template-CaSEkAw0\#32 .el-content {
                    font-size: 16px;
                }

                #template-CaSEkAw0\#32 .price {
                    font-size: 15px;
                }
            }</style>
        <div class="uk-section-default uk-section uk-padding-remove-vertical">


            @if($category)
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <div uk-slideshow="ratio: 1920:648; minHeight: 278;" class="uk-margin uk-visible@m">
                            <div class="uk-position-relative">

                                <div class="uk-slideshow-items">
                                    <div class="el-item">


                                        <picture>
                                            <source type="image/webp"
                                                    srcset="{{ $category->banner->path ?? '' }} 768w,
                                                {{ $category->banner->path ?? '' }} 1024w,
                                                {{ $category->banner->path ?? '' }} 1366w,
                                                {{ $category->banner->path ?? '' }} 1600w,
                                                {{ $category->banner->path ?? '' }} 1920w"
                                                    sizes="(max-aspect-ratio: 1920/648) 296vh">
                                            <img decoding="async"
                                                 src="{{ $category->banner->path ?? '' }}"
                                                 width="1920" height="648" class="el-image" alt="Bộ sản phẩm Kutieskin"
                                                 loading="lazy" uk-cover>
                                        </picture>


                                    </div>
                                </div>

                                <div class="uk-visible@s"><a class="el-slidenav uk-position-medium uk-position-center-left"
                                                             href="#" uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                        class="el-slidenav uk-position-medium uk-position-center-right" href="#"
                                        uk-slidenav-next uk-slideshow-item="next"></a></div>

                                <div class="uk-position-bottom-center uk-position-medium uk-visible@s">
                                    <ul class="el-nav uk-slideshow-nav uk-dotnav uk-flex-center" uk-margin>
                                        <li uk-slideshow-item="0">
                                            <a href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div uk-slideshow="ratio: 415:416; minHeight: 278;"
                             class="uk-margin uk-margin-remove-top uk-hidden@m">
                            <div class="uk-position-relative">

                                <div class="uk-slideshow-items">
                                    <div class="el-item">


                                        <picture>
                                            <source type="image/webp"
                                                    srcset="{{ $category->banner->path ?? '' }} 768w,
                                                    {{ $category->banner->path ?? '' }} 830w"
                                                    sizes="(max-aspect-ratio: 830/832) 100vh">
                                            <img decoding="async"
                                                 src="{{ $category->banner->path ?? '' }}"
                                                 width="830" height="832" class="el-image"
                                                 alt=""
                                                 loading="lazy" uk-cover>
                                        </picture>


                                    </div>
                                </div>

                                <div class="uk-visible@s"><a class="el-slidenav uk-position-medium uk-position-center-left"
                                                             href="#" uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                        class="el-slidenav uk-position-medium uk-position-center-right" href="#"
                                        uk-slidenav-next uk-slideshow-item="next"></a></div>

                                <div class="uk-position-bottom-center uk-position-medium uk-visible@s">
                                    <ul class="el-nav uk-slideshow-nav uk-dotnav uk-flex-center" uk-margin>
                                        <li uk-slideshow-item="0">
                                            <a href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            @endif



        </div>
        <div class="uk-section-default uk-section">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-margin-large">
                    <div class="uk-width-1-1">

                        @if($category)
                            <h1 class="uk-text-primary uk-text-bold uk-text-center" id="template-CaSEkAw0#0">
                                {{ $category->name }}
                            </h1>
                        @else
                            <h1 class="uk-text-primary uk-text-bold uk-text-center" id="template-CaSEkAw0#0"> Cửa hàng
                                {{ $config->short_name_company }}
                            </h1>
                        @endif



                    </div>
                </div>

                <div id="template-CaSEkAw0#12"
                     class="uk-grid tm-grid-expand uk-grid-column-medium uk-grid-row-large uk-grid-margin-large"
                     uk-grid>
                    @foreach($products as $product)
                        <div class="uk-width-1-2 uk-width-1-3@m">


                            <div class="uk-panel uk-margin-remove-first-child uk-margin-remove-vertical uk-text-center"
                                 id="template-CaSEkAw0#1">


                                <picture>
                                    <source type="image/webp"
                                            srcset="{{ $product->image->path ?? '' }} 170w"
                                            sizes="(min-width: 170px) 170px">
                                    <img decoding="async"
                                         src="{{ $product->image->path ?? '' }}" width="170"
                                         height="247" alt loading="lazy" class="el-image">
                                </picture>


                                <h3 class="el-title uk-text-primary uk-margin-top uk-margin-remove-bottom"> {{ $product->name }} </h3>
                                <div class="el-meta uk-text-meta uk-text-primary uk-margin-top">Giá:
                                    @if($product->price > 0)
                                        <strong>{{ formatCurrency($product->price) }}đ</strong>
                                    @else
                                        <strong>Liên hệ</strong>
                                    @endif

                                </div>


                                <div class="el-content uk-panel uk-margin-top">
                                    <p> {{ $product->intro }} </p>
                                </div>

                                <div class="uk-margin-top"><a href="javascript:void(0)" uk-scroll ng-click="buyNow({{$product->id}}, 1)"
                                                              class="el-link uk-button uk-button-secondary">Mua ngay</a>
                                </div>


                            </div>
                            <div class="uk-panel uk-margin">
                                <div class="uk-grid tm-grid-expand uk-grid-small uk-margin-small" uk-grid>
                                    <div class="uk-width-1-2@s">


                                        <div id="template-CaSEkAw0#2" class="uk-margin uk-text-center">


                                            <a class="el-content uk-button uk-button-secondary"
                                               href="{{ route('front.getProductDetail', $product->slug) }}">

                                                Xem chi tiết

                                            </a>


                                        </div>


                                    </div>
                                    <div class="uk-width-1-2@s">


                                        <div id="template-CaSEkAw0#3"><a href="javascript:void(0)" ng-click="addToCart({{$product->id}}, 1)"
                                                                         class="product_type_simple add_to_cart_button ajax_add_to_cart uk-width-1-1 uk-button uk-button-primary"
                                                                         aria-label="Thêm vào giỏ hàng"
                                                                         rel="nofollow">Thêm giỏ hàng</a></div>


                                    </div>
                                </div>
                            </div>


                        </div>

                    @endforeach

                </div>



            </div>


        </div>
    </main>
@endsection

@push('scripts')
    <script>
        app.controller('productList', function ($rootScope, $scope, cartItemSync, $interval) {
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
