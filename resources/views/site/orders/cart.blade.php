@extends('site.layouts.master')
@section('title')
    Giỏ hàng
@endsection

@section('css')
    <style>
        :root{
            --c-border:#e6e8ec; --c-text:#111827; --c-sub:#6b7280;
            --c-muted:#f6f7f9; --c-primary:#12b886;
        }
        .cart-wrap{max-width:980px;margin:40px auto;padding:0 16px}
        .cart-card{background:#fff;border:1px solid var(--c-border);border-radius:10px}
        .cart-head{padding:18px 20px;border-bottom:1px solid var(--c-border);font-weight:700;color:var(--c-text)}
        .cart-row{display:grid;grid-template-columns:56px 1fr 140px 140px 140px;gap:16px;align-items:center;padding:16px 20px;border-bottom:1px solid var(--c-border)}
        .cart-row.head{font-size:13px;color:#475569;background:var(--c-muted);font-weight:700}
        .cart-row:last-of-type{border-bottom:none}
        .cart-remove{width:32px;height:32px;border:none;background:#fff;color:#f43f5e;font-size:20px;line-height:1;border-radius:6px;cursor:pointer}
        .cart-remove:hover{background:#fff0f2}
        .cart-title-box{display:flex;gap:12px;align-items:center}
        .cart-thumb{width:56px;height:56px;border-radius:6px;overflow:hidden;border:1px solid var(--c-border);background:#fff}
        .cart-thumb img{width:100%;height:100%;object-fit:cover}
        .cart-title{color:var(--c-text);font-weight:600;line-height:1.4}
        .money{white-space:nowrap}
        .cart-price,.cart-subtotal{text-align:right;font-weight:600;color:#111827; display: contents}
        .cart-qty{display:flex;justify-content:flex-start}
        .qtybox{display:flex;align-items:center;border:1px solid var(--c-border);border-radius:6px;overflow:hidden;background:#fff}
        .qtybox button{width:34px;height:34px;border:0;background:#fff;cursor:pointer}
        .qtybox input{width:50px;height:34px;border:0;border-left:1px solid var(--c-border);border-right:1px solid var(--c-border);text-align:center;outline:none}
        .cart-section{padding:18px 20px;border-top:1px solid var(--c-border)}
        .cart-section .row{display:flex;justify-content:space-between;gap:12px;color:#334155;line-height:1.6}
        .cart-section .row b{color:#111827}
        .cart-total{display:flex;justify-content:space-between;align-items:center;padding:18px 20px;border-top:1px solid var(--c-border);font-weight:700}
        .order-form{padding:0 20px 24px}
        .form-title{font-weight:700;color:#111827;margin:6px 0 12px}
        .form-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
        .form-grid .full{grid-column:1/-1}
        .form-control{height:42px;border:1px solid var(--c-border);border-radius:6px;padding:0 12px;outline:none}
        .form-actions{margin-top:16px}
        .btn-order{background:var(--c-primary);color:#fff;border:none;border-radius:8px;height:44px;line-height:44px;padding:0 22px;font-weight:700;cursor:pointer}
        @media (max-width:900px){.cart-row{grid-template-columns:40px 1fr 110px 120px 110px}}
        @media (max-width:680px){
            .cart-row.head{display:none}
            .cart-row{grid-template-columns:44px 1fr;gap:12px 14px;align-items:start}
            .cart-price,.cart-qty,.cart-subtotal{justify-self:flex-start}
            .cart-cell.price::before,.cart-cell.qty::before,.cart-cell.sub::before{content:attr(data-label);display:block;margin-bottom:4px;font:600 12px/1.2 system-ui;color:#64748b}
            .cart-cell.price{grid-column:1/-1}
            .cart-cell.qty{grid-column:1/2}
            .cart-cell.sub{grid-column:2/3}
            .form-grid{grid-template-columns:1fr}
        }
    </style>
@endsection

@section('content')
    <main id="tm-main" ng-controller="CartController">
        <!-- Cart Page -->

        <div class="uk-section-default uk-section" ng-if="total_qty > 0">
            <main id="tm-main">
                <div class="cart-wrap" ng-cloak>
                    <div class="cart-card">
                        <div class="cart-head">Sản phẩm</div>

                        <!-- Header hàng -->
                        <div class="cart-row head">
                            <div></div>
                            <div>SẢN PHẨM</div>
                            <div>GIÁ</div>
                            <div>SỐ LƯỢNG</div>
                            <div>TẠM TÍNH</div>
                        </div>



                        <!-- DEMO cứng (xoá đi khi dùng foreach) -->
                        <div class="cart-row"  data-id="" ng-repeat="item in items" >
                            <button class="cart-remove" type="button" aria-label="Xoá" ng-click="removeItem(item.id)">×</button>
                            <div class="cart-cell title">
                                <div class="cart-title-box">
                                    <div class="cart-thumb">
                                        <img  ng-src="<% (item && item.attributes && item.attributes.image) ? item.attributes.image : '' %>"
                                              alt="<% item.name %>">
                                    </div>
                                    <div class="cart-title"><% item.name %></div>
                                </div>
                            </div>
                            <div class="cart-cell price cart-price money" data-price="">
                                <% (+item.price > 0) ? ((+item.price) | number) + '₫' : 'Liên hệ' %> </div>
                            <div class="cart-cell qty cart-qty">
                                <div class="qtybox">
                                    <button class="btn-dec" type="button" aria-label="Giảm" ng-click="decrementQuantity(item); changeQty(item.quantity, item.id)">−</button>
                                    <input class="qty-input" type="number" min="1" value="<%item.quantity%>" ng-model="item.quantity" ng-change="changeQty(item.quantity, item.id)">
                                    <button class="btn-inc" type="button" aria-label="Tăng"  ng-click="incrementQuantity(item); changeQty(item.quantity, item.id)">+</button>
                                </div>
                            </div>
                            <div class="cart-cell sub cart-subtotal money">
                                <% (+item.price > 0)
                                ? (((+item.price) * (+item.quantity || 1)) | number) + '₫'
                                : 'Liên hệ' %>
                            </div>
                        </div>

                        <!-- ======= /DEMO ITEMS ======= -->

                        <!-- Phí ship -->
                        {{--                    <div class="cart-section">--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div><b>Giao hàng</b></div>--}}
                        {{--                            <div class="money" id="shipFeeText">Tính phí: 30.000 đ</div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="row"><div></div><div>Giao hàng miễn phí</div></div>--}}
                        {{--                        <div class="row"><div></div><div>Giao hàng miễn phí</div></div>--}}
                        {{--                    </div>--}}

                        <!-- Tổng -->
                        <div class="cart-total">
                            <div>Tổng</div>
                            <div class="money" id="grandTotal"><% total | number%> đ</div>
                        </div>

                        <!-- Form -->
                        <div class="order-form">
                            {{--                        <div class="form-title">Thông tin đặt hàng</div>--}}
                            {{--                        <div class="form-grid">--}}
                            {{--                            <input class="form-control" type="text" name="customer_name" placeholder="Tên của bạn">--}}
                            {{--                            <input class="form-control" type="tel" name="customer_phone" placeholder="Số điện thoại của bạn">--}}
                            {{--                            <input class="form-control full" type="text" name="customer_address" placeholder="Địa chỉ">--}}
                            {{--                        </div>--}}
                            <div class="form-actions">
                                <a href="{{ route('cart.checkout') }}">
                                    <button class="btn-order" type="button">Thanh toán</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>

        <div class="uk-section-default uk-section" ng-if="!total_qty || total_qty == 0" >





            <div class="uk-container uk-container-xsmall">
                <div class="tm-header-placeholder uk-margin-remove-adjacent" style="height: 120px;"></div><div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-grid-item-match uk-width-1-1">
                        <div class="uk-tile-muted uk-tile">





                            <div id="page#0"><div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><div class="wc-empty-cart-message">
                                        <div class="cart-empty woocommerce-info">
                                            Chưa có sản phẩm nào trong giỏ hàng.	</div>
                                    </div>	<p class="return-to-shop">
                                        <a class="button wc-backward" href="{{ route('front.home-page') }}">
                                            Quay trở lại cửa hàng		</a>
                                    </p>
                                </div></div><div id="page#1"><div class="woocommerce"><div class="woocommerce-notices-wrapper"></div></div></div>



                        </div>
                    </div></div>
            </div>



        </div>




    </main>
@endsection

@push('scripts')
    <script>
        app.controller('CartController', function ($scope, cartItemSync, $interval, $rootScope) {
            $scope.items = @json($cartCollection);
            $scope.total_qty = "{{ $total_qty }}";
            $scope.total = "{{$total_price}}";

            $scope.countItem = Object.keys($scope.items).length;

            $scope.changeQty = function (qty, product_id) {
                updateCart(qty, product_id)
            }

            $scope.incrementQuantity = function (product) {
                product.quantity = Math.min(product.quantity + 1, 9999);
            };

            $scope.decrementQuantity = function (product) {
                product.quantity = Math.max(product.quantity - 1, 0);
            };

            function updateCart(qty, product_id) {
                jQuery.ajax({
                    type: 'POST',
                    url: "{{ route('cart.update.item') }}",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        product_id: product_id,
                        qty: qty
                    },
                    success: function (response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;
                            $scope.total_qty = response.count;
                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $scope.$applyAsync();
                        }
                    },
                    error: function (e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.removeItem = function (product_id) {
                jQuery.ajax({
                    type: 'GET',
                    url: "{{ route('cart.remove.item') }}",
                    data: {
                        product_id: product_id
                    },
                    success: function (response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;
                            $scope.total_qty = response.count;

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $scope.countItem = Object.keys($scope.items).length;

                            $scope.$applyAsync();
                        }
                    },
                    error: function (e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }
        });
    </script>
@endpush
