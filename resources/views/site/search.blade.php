@extends('site.layouts.master')
@section('title')
    Tìm kiếm - {{ $config->web_title }}
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

    <div class="breadcumb-wrapper" data-bg-src="">
        <div class="container">
            <div class="breadcumb-content"><h1 class="breadcumb-title">Tìm kiếm</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('front.home-page') }}">Trang chủ</a></li>
                    <li>Tìm kiếm</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom" ng-controller="productList">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <p class="woocommerce-result-count">
                            Tìm thấy {{ $products->count() }} sản phẩm phù hợp với từ khóa "{{ $keyword }}"
                        </p>
                    </div>

                </div>
            </div>
            <div class="row gy-40">
                @foreach($products as $product)
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                        @include('site.partials.product_item', ['product' => $product])
                    </div>

                @endforeach

            </div>



        </div>
    </section>

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


        })

    </script>

@endpush
