@extends('site.layouts.master')
@section('title')
    Đặt hàng - {{ $config->web_title }}
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

    <main id="tm-main" ng-controller="orderPageCtrl">

        <!-- Builder #page -->
        <style class="uk-margin-remove-adjacent">@media only screen and (max-width: 1024px) {
                #page\#0 {
                    font-size: 30px;
                }
            }

            #page\#1 .el-content {
                font-size: 20px;
            }

            @media only screen and (max-width: 1024px) {
                #page\#1 .el-content {
                    font-size: 16px;
                }
            }

            #page\#2 .uk-input, #page\#2 .uk-textarea {
                border-radius: 5px;
                border-color: #5670a8;
            }

            #page\#2 .uk-button {
                border-radius: 5px;
                background: #e18813;
                color: #FFF;
            }

            #page\#2 p {
                margin: 0;
            }

            @media only screen and (max-width: 1024px) {
                #page\#2 #dathang thead {
                    font-size: 14px;
                }

                #page\#2 #dathang tbody .title {
                    font-size: 14px;
                }

                #page\#2 #dathang tbody .gia {
                    font-size: 16px;
                }

                #page\#2 #dathang input {
                    font-size: 20px;
                    height: 30px;
                }

                #page\#2 #dathang .thanhtien {
                    font-size: 14px;
                }

                #page\#2 tfoot {
                    font-size: 15px;
                }

                #page\#2 #dathang tfoot .tong {
                    font-size: 14px;
                }
            }

            #page\#3 .uk-container {
                padding: 0 80px;
            }

            @media only screen and (max-width: 1024px) {
                #page\#3 .uk-container {
                    padding: 0 20px;
                }
            }</style>
        <div class="uk-section-default uk-section uk-padding-remove-vertical">


            <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                <div class="uk-width-1-1">


                    <div uk-slideshow="ratio: 1920:569; minHeight: 300;" class="uk-margin">
                        <div class="uk-position-relative">

                            <div class="uk-slideshow-items">
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
                                             width="1920" height="648" class="el-image" alt loading="lazy" uk-cover>
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


        </div>
        <div id="page#3" class="uk-section-default uk-section uk-section-small">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <h2 class="uk-text-primary uk-margin-remove-top uk-text-center" id="page#0"><strong>ĐẶT HÀNG
                                ONLINE CÙNG VỚI {{ $config->short_name_company }}</strong></h2>


                    </div>
                </div>
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-grid-item-match uk-width-1-1">
                        <div class="uk-tile-muted uk-tile  uk-tile-xsmall uk-flex uk-flex-middle">


                            <div class="uk-panel uk-width-1-1">


                                <ul class="uk-list uk-list-collapse" id="page#1">


                                    <li class="el-item">

                                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                             uk-grid>
                                            <div class="uk-width-auto">
                                                <picture>
                                                    <source type="image/webp"
                                                            srcset="/wp-content/themes/yootheme/cache/47/Ellipse-3-478c4b9c.webp 17w"
                                                            sizes="(min-width: 17px) 17px">
                                                    <img decoding="async"
                                                         src="https://kutieskin.vn/wp-content/themes/yootheme/cache/d3/Ellipse-3-d3836785.png"
                                                         width="17" height="17" class="el-image" alt loading="lazy">
                                                </picture>
                                            </div>
                                            <div>
                                                <div class="el-content uk-panel"><p>Sau khi đặt đơn hàng thành công, bạn
                                                        vui lòng chú ý điện thoại. Nhãn hàng sẽ liên hệ xác nhận đơn
                                                        hàng trước khi giao cho đơn vị vận chuyển.</p></div>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="el-item">

                                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle"
                                             uk-grid>
                                            <div class="uk-width-auto">
                                                <picture>
                                                    <source type="image/webp"
                                                            srcset="/wp-content/themes/yootheme/cache/47/Ellipse-3-478c4b9c.webp 17w"
                                                            sizes="(min-width: 17px) 17px">
                                                    <img decoding="async"
                                                         src="https://kutieskin.vn/wp-content/themes/yootheme/cache/d3/Ellipse-3-d3836785.png"
                                                         width="17" height="17" class="el-image" alt loading="lazy">
                                                </picture>
                                            </div>
                                            <div>
                                                <div class="el-content uk-panel"><p>Giao hàng tận tay và thanh toán khi
                                                        nhận hàng</p></div>
                                            </div>
                                        </div>

                                    </li>


                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <div id="page#2">
                            <table id="dathang" class="uk-table" data-nguong="150000">
                                <thead>
                                <tr>
                                    <td>SẢN PHẨM</td>
                                    <td>ĐƠN GIÁ</td>
                                    <td>SL</td>
                                    <td>THÀNH TIỀN</td>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $product)
                                    <tr id="{{ $product->id }}">
                                        <td class="title">{{ $product->name }}</td>
                                        <td class="gia" data-price="{{ $product->price }}">{{ formatCurrency($product->price) }}đ</td>
                                        <td><input class="uk-input soluong uk-width-auto" data-id="{{ $product->id }}" type="number"
                                                   data-gia="{{ (int)($product->price ?? 0) }}"
                                                   min="0" value="1" onchange="thaydoi(this)"></td>
                                        <td><span class="thanhtien" data-tt="{{ $product->price }}">{{ formatCurrency($product->price) }}đ</span></td>
                                    </tr>
                                @endforeach
                                </tbody>


                                <tfoot>
                                <tr>
                                    <td colspan="3" class="uk-text-bold">Phí vận chuyển</td>
                                    <td><span data-phi="20000" class="phi uk-text-bold">Miễn phí</span></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="uk-text-bold">Thành tiền</td>
                                    <td><span class="tong"></span></td>
                                </tr>
                                </tfoot>
                            </table>



                            <div class="wpcf7 no-js" id="wpcf7-f43167-o1" lang="vi" dir="ltr">
                                <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                       aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form id="orderPage" ng-cloak
                                      class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate"
                                      data-status="init">

                                    <div uk-grid class="uk-child-width-1-2 uk-grid-small">
                                        <div>
                                            <p><span class="wpcf7-form-control-wrap" data-name="tencuaban"><input
                                                        size="40" maxlength="400"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required uk-input"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Tên của bạn" value="" type="text"
                                                        name="name"/>

                                                    <div class="invalid-feedback d-block" ng-if="errors['name']"><% errors['name'][0] %></div>
                                                </span>
                                            </p>
                                        </div>
                                        <div>
                                            <p><span class="wpcf7-form-control-wrap" data-name="sodienthoai"><input
                                                        size="40" maxlength="400"
                                                        class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel uk-input"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Số điện thoại của bạn" value="" type="tel"
                                                        name="phone"/>
                                                     <div class="invalid-feedback d-block" ng-if="errors['phone']"><% errors['phone'][0] %></div>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <p><span class="wpcf7-form-control-wrap" data-name="diachi"><textarea
                                                        cols="3" rows="2" maxlength="2000"
                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required uk-textarea"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Địa chỉ nhận hàng" name="address"></textarea>
                                                     <div class="invalid-feedback d-block" ng-if="errors['address']"><% errors['address'][0] %></div>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <p><input class="wpcf7-form-control wpcf7-submit has-spinner dathang uk-hidden"
                                              type="submit" value="ĐẶT HÀNG"/>
                                    </p>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>

                            <div class="uk-text-center" style="margin-top: 10px">
{{--                                <button class="uk-button uk-button-primary" onclick="dathang(this)"><span--}}
{{--                                        uk-icon="cart"></span> Đặt hàng--}}
{{--                                </button>--}}

                                <button class="uk-button uk-button-primary" ng-click="submitOrderPage()" ><span
                                        uk-icon="cart"></span> Đặt hàng
                                </button>

                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </main>

@endsection

@push('scripts')
    <script>
        // format tiền VND
        function formatVND(n){ return (n||0).toLocaleString('vi-VN') + 'đ'; }

        // tính tiền 1 hàng
        function calcRow(row){
            const price = parseFloat(row.querySelector('.gia')?.dataset.price || '0');
            const qty   = parseInt(row.querySelector('.soluong')?.value || '0', 10);
            const total = price * qty;

            const ttEl = row.querySelector('.thanhtien');
            if (ttEl){
                ttEl.dataset.tt = total;
                ttEl.textContent = formatVND(total);
            }
            return total;
        }

        // tính tổng tất cả hàng
        function calcAll(){
            let sum = 0;
            document.querySelectorAll('tr[id]').forEach(row => { sum += calcRow(row); });
            const tongEl = document.querySelector('.tong');
            if (tongEl) tongEl.textContent = formatVND(sum);
        }



        // chạy ngay khi DOM sẵn sàng (mặc định qty = 1)
        document.addEventListener('DOMContentLoaded', calcAll);
    </script>

    <script>
        app.controller('orderPageCtrl', function ($rootScope, $scope, cartItemSync, $sce, $interval) {
            $scope.errors = [];
            $scope.cart = cartItemSync;

            $scope.submitOrderPage = function () {
                var url = "{{route('cart.submit.checkoutOrder')}}";
                var form = document.getElementById('orderPage');

                let rows = document.querySelectorAll('#dathang tbody tr');
                let products = [];
                rows.forEach(tr => {
                    const qtyInp = tr.querySelector('.soluong');
                    const qty    = parseInt(qtyInp.value || '0', 10);
                    const price  = qtyInp.getAttribute('data-gia');
                    const priceNum = parseFloat(price);
                    const title  = tr.querySelector('.title').textContent.trim();
                    const totalSpan = tr.querySelector('.tongtien');
                    // Chỉ push khi quantity > 0
                    if (qty > 0) {
                        products.push({
                            id: tr.id,
                            name: title,
                            price: (isNaN(priceNum) || priceNum <= 0) ? null : priceNum,
                            quantity: qty,
                            contact_price: (isNaN(priceNum) || priceNum <= 0) ? 1 : 0
                        });
                    }
                });
                if (products.length === 0) {
                    toastr.warning('Vui lòng chọn ít nhất 1 sản phẩm');
                    return;
                }
// Tổng cộng & phí vận chuyển
                const grand = document.querySelector('.tong');
                const vcEl  = document.querySelector('.vanchuyen');
                const order_total = grand ? grand.textContent : '';
                const shipping_vnd = vcEl ? (vcEl.getAttribute('data-vc') || vcEl.textContent) : '';
                console.log(products);
                const fd = new FormData(form); // chứa các input trong #orderForm
                fd.append('order_total_text', order_total);
                fd.append('shipping_text', shipping_vnd);

                products.forEach((p, i) => {
                    fd.append(`products[${i}][id]`, p.id);
                    fd.append(`products[${i}][name]`, p.name);
                    // nếu null -> gửi rỗng
                    fd.append(`products[${i}][price]`, p.price == null ? '' : p.price);
                    fd.append(`products[${i}][quantity]`, p.quantity);
                    fd.append(`products[${i}][total]`, p.total);
                    fd.append(`products[${i}][contact_price]`, p.contact_price);
                });


                $scope.loading = true;
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: fd,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            jQuery('#orderPage')[0].reset();
                            $scope.errors = [];
                            $scope.sendSuccess = true;
                            $scope.$apply();
                        } else {
                            $scope.errors = response.errors;
                            toastr.warning(response.message);
                        }
                    },
                    error: function () {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.loading = false;
                        $scope.$apply();
                    }
                });
            }
        })

    </script>
@endpush
