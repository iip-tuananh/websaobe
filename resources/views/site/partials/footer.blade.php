<footer ng-controller="footerCtrl">
    <!-- Builder #footer -->
    <style class="uk-margin-remove-adjacent">#footer\#0 {
            font-weight: bold;
            font-size: 28px;
        }

        #footer\#1 .el-item::before {
            margin-bottom: -1.9em;
            color: #2b5095;
        }

        @media only screen and (max-width: 640px) {
            #footer\#1 .el-content {
                font-size: 16px;
            }
        }

        #footer\#2 .uk-input, #footer\#2 .uk-textarea {
            border: 1px solid #5670a8;
            border-radius: 5px;
        }

        #footer\#2 .uk-button {
            border-radius: 10px;
        }

        #footer\#2 p {
            margin: 0;
            margin-bottom: 15px;
        }

        #footer\#2 .wpcf7-spinner {
            position: absolute;
        }

        #footer\#3 {
            background-color: #FEF7F7;
        }

        @media only screen and (max-width: 1024px) {
            #footer\#4 {
                width: 135px;
                left: 80% !important;
                top: 0px !important;
                transform: translatey(-140px)
            }
        }

        @media only screen and (max-width: 640px) {
            #footer\#4 {
                left: 75% !important;
            }
        }

        #footer\#5 {
            font-size: 18px;
        }

        #footer\#6 {
            font-size: 16px;
        }

        #footer\#7 {
            font-size: 18px;
        }

        #footer\#8 {
            line-height: 24px;
            font-size: 16px;
        }

        #footer\#9 .uk-icon-button {
            background: none;
            width: 50px;
            height: 50px;
        }

        #footer\#9 {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 1111;
        }

        @media only screen and (max-width: 1280px) {
            #footer\#9 {
                right: 5px;
            }
        }

        #footer\#10 {
            font-size: 12px;
            font-weight: bold;
            color: #fff;
        }

        #footer\#11 .el-item > * {
            background: #ff7474;
        }

        #footer\#11 {
            position: fixed;
            bottom: 0;
            left: 0px;
            right: 0px;
            z-index: 1111;
        }

        #footer\#11 .el-title {
            font-size: 20px;
        }

        @media only screen and (max-width: 640px) {
            #footer\#11 > .uk-grid {
                margin-left: -1px;
            }

            #footer\#11 > .uk-grid > div {
                padding-left: 1px;
            }

            #footer\#11 .el-title {
                font-size: 13px;
                white-space: nowrap;
                position: relative;
                left: -10px;
            }

            #footer\#11 .el-item > * {
                padding: 5px;
            }
        }

        #footer\#12 .uk-section-xsmall {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        @media only screen and ( max-width: 1024px) {
            #footer\#12 {
                padding-bottom: 40px;
            }
        }</style>
    <div id="footer#3" class="datmua uk-section-default uk-section">


        <div class="uk-container">
            <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                <div class="uk-grid-item-match uk-flex-middle uk-width-2-3@m">


                    <div class="uk-panel uk-width-1-1">


                        <div class="uk-heading-bullet uk-text-primary" id="footer#0"> Đặt mua {{ $config->short_name_company }}</div>
                        <div class="uk-margin uk-hidden@s">
                            <picture>
                                <source type="image/webp"
                                        srcset="{{ $blockImgPurpose->image->path ?? '' }} 768w,
                                        {{ $blockImgPurpose->image->path ?? '' }} 1024w,
                                         {{ $blockImgPurpose->image->path ?? '' }} 1225w"
                                        sizes="(min-width: 1225px) 1225px">
                                <img src="{{ $blockImgPurpose->image->path ?? '' }}"
                                     width="1225" height="1396" class="el-image" alt loading="lazy">
                            </picture>

                        </div>
                        <ul class="uk-list uk-list-disc" id="footer#1">


                            <li class="el-item">
                                <div class="el-content uk-panel"><p>Sau khi đặt đơn hàng thành công, bạn vui lòng
                                        chú ý điện thoại. Nhãn hàng sẽ liên hệ xác nhận đơn hàng trước khi giao cho đơn
                                        vị vận chuyển.</p></div>
                            </li>
                            <li class="el-item">
                                <div class="el-content uk-panel"><p>Giao hàng tận tay và thanh toán khi nhận
                                        hàng</p></div>
                            </li>


                        </ul>
                        <div id="footer#2"><p id="content"></p>
                            <p>Mục đích sử dụng*</p>
                            <select class="uk-select" onchange="chonloai(this)" >
                                <option data-option="0">Sản phẩm Tương ứng với mỗi mục đích sử dụng</option>
                                @foreach($purposes as $p)
                                    @php
                                        // Tập id SP thuộc purpose này (dùng has() thay vì isset cho gọn)
                                        $setIds = $p->products->pluck('id')->flip();

                                        $valueStr = implode('-',
                                            $products->map(function($prod) use ($setIds) {
                                                return $setIds->has($prod->id) ? 1 : 0;
                                            })->all()
                                        );
                                    @endphp

                                    <option value="{{ $valueStr }}">{{ $p->name }}</option>
                                @endforeach

                            </select>
                            <div>
                                <a id="filter" href="#" class="" uk-filter-control=".tag-blue"></a>
                                <table id="table_form" class="uk-table" data-nguong="150000">
                                    <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>

                                    </thead>
                                    <tbody class="uk-hidden">
                                    @foreach($products as $prod)
                                        <tr id="{{ $prod->id }}">
                                            <td class="title">{{ $prod->name }}</td>
                                            <td>
                                                <input class="uk-input soluong"
                                                       min="0" type="number" value="0"
                                                       data-gia="{{ (int)($prod->price ?? 0) }}"
                                                       onchange="soluong(this)">
                                            </td>
                                            <td><span class="tongtien" data-tong="0">0đ</span></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2">Phí vận chuyển</td>
                                        <td class="vanchuyen" data-format="20000" data-vc="20000">20.000đ</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Tổng tiền</td>
                                        <td><span class="tong"></span></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="wpcf7 no-js" id="wpcf7-f43169-o1" lang="vi" dir="ltr">
                                <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                       aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form id="orderForm"
                                    class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate"
                                    data-status="init" ng-cloak>
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
                                            <p><span class="wpcf7-form-control-wrap" data-name="sodienthoai">
                                                    <input
                                                        size="40" maxlength="400"
                                                        class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel uk-input"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Số điện thoại" value="" type="tel"
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
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>

                            <script>


                            </script>

                            <div class="uk-text-center">
                                <button class="uk-button uk-button-secondary" ng-click="submitOrder()" class=""><span
                                        uk-icon="cart"></span> Đặt hàng
                                </button>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="uk-grid-item-match uk-flex-middle uk-width-1-3@m uk-visible@s">


                    <div class="uk-panel uk-width-1-1">


                        <div class="uk-margin uk-visible@s">
                            <a class="el-link" href="tell:{{ $config->hotline }}">
                                <picture>
                                    <source type="image/webp"
                                            srcset="{{ $blockImgPurpose->image->path ?? '' }} 768w,
                                            {{ $blockImgPurpose->image->path ?? '' }} 1024w,
                                            {{ $blockImgPurpose->image->path ?? '' }} 1225w"
                                            sizes="(min-width: 1225px) 1225px">
                                    <img src="{{ $blockImgPurpose->image->path ?? '' }}"
                                         width="1225" height="1396" class="el-image" alt loading="lazy">
                                </picture>
                            </a>

                        </div>

                    </div>


                </div>
            </div>
        </div>


    </div>
    <div class="uk-section-secondary uk-section uk-section-small">


        <div class="uk-container">
            <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                <div class="uk-width-expand@m">


                    <div class="uk-margin">
                        <picture>
                            <source type="image/webp"
                                    srcset="{{ $config->image->path ?? '' }} 226w"
                                    sizes="(min-width: 226px) 226px">
                            <img src="{{ $config->image->path ?? '' }}" width="226"
                                 height="73" class="el-image" alt loading="lazy">
                        </picture>

                    </div>
                    <div class="uk-panel uk-margin">
                        <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                            <div class="uk-width-1-2@s uk-width-1-2@m">


                                <h5 class="uk-text-uppercase uk-text-bold" id="footer#5">{{ $config->web_title }}<br/>
                                    <hr/>
                                </h5>
                                <div class="uk-panel uk-margin-remove-vertical uk-text-justify" id="footer#6">
                                  {{ $config->introduction }}
                                </div>




                            </div>
                            <div class="uk-width-1-2@s uk-width-1-2@m">


                                <h5 class="uk-text-uppercase uk-text-bold" id="footer#7"> Danh mục <br/>
                                    <hr/>
                                </h5>
                                <div class="uk-panel uk-margin" id="footer#8">
                                    <ul>
                                        <li><a href="{{ route('front.home-page') }}">Trang chủ</a></li>

                                    @foreach($categories as $cate)
                                            <li><a href="{{ route('front.getProductList', $cate->slug) }}">{{ $cate->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </div>



                            </div>

                        </div>
                    </div>


                </div>
                <div class="uk-width-1-4@m">

                    <div id="footer#9" class="uk-margin uk-visible@m" uk-scrollspy="target: [uk-scrollspy-class];">
                        <ul class="uk-child-width-auto uk-flex-column uk-grid-small uk-flex-inline uk-flex-middle"
                            uk-grid>
                            <li class="el-item">
                                <a class="el-link uk-icon-button" href="https://zalo.me/{{ $config->zalo }}"
                                   rel="noreferrer">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/icon-zalo-1-83f92e50.webp 148w"
                                                sizes="(min-width: 148px) 148px">
                                        <img src="/site/img/icon-zalo-1-a1684d11.png"
                                             width="148" height="148" alt loading="lazy">
                                    </picture>
                                </a></li>
                            <li class="el-item">
                                <a class="el-link uk-icon-button"
                                   href="{{ $config->facebook }}" rel="noreferrer">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/message1-6a024b16.webp 148w"
                                                sizes="(min-width: 148px) 148px">
                                        <img src="/site/img/message1-bb7fe89e.png"
                                             width="148" height="148" alt loading="lazy">
                                    </picture>
                                </a></li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>


    </div>
    <div id="footer#12" class="uk-section-default">
        <div data-src="#" uk-img
             class="uk-background-norepeat uk-background-center-center uk-section uk-section-xsmall"
             style="background-color: #48ACDC;">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <div class="uk-margin-remove-vertical uk-text-center" id="footer#10"> © 2025, {{ $config->short_name_company }} All
                            Rights Reserved
                        </div>
                        <div class="uk-visible@m">
                            <style>
                                #view_cart .quality-1 {
                                    background: #cf0000;
                                    position: absolute;
                                    width: 20px;
                                    height: 20px;
                                    color: #FFF;
                                    justify-content: center;
                                    align-items: center;
                                    display: flex;
                                    font-size: 16px;
                                    border-radius: 50%;
                                    top: 0;
                                    right: 0;
                                    transform: translateY(-50%) translateX(50%);
                                }

                                #view_cart .pointer {
                                    position: relative;
                                }
                            </style>
                            <div id="view_cart">
                                <div uk-grid class="uk-grid-small uk-child-width-1-1">
                                    <div><a><img src="/site/img/bacsi1.png"></a></div>
                                    <div><a class="pointer" href="{{ route('cart.index') }}"><img
                                                src="/site/img/giohang1.png"><span
                                                class="quality-1"><% cart.count %></span></a></div>
                                    <div><a><img src="/site/img/call1.png"></a></div>
                                </div>
                            </div>
                        </div>
                        <div id="footer#11" class="uk-margin-remove-vertical uk-text-center uk-hidden@m">
                            <div class="uk-grid uk-child-width-1-3 uk-grid-column-small uk-grid-match" uk-grid>
                                <div>
                                    <div class="el-item uk-grid-item-match">
                                        <a class="uk-card uk-card-default uk-card-small uk-card-hover uk-card-body uk-flex-stretch uk-link-toggle"
                                           href="tel:{{ $config->hotline }}">
                                            <div class="uk-grid-column-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto uk-flex-center">


                                                    <picture>
                                                        <source type="image/webp"
                                                                srcset="/site/img/call2-1b522f4e.webp 21w"
                                                                sizes="(min-width: 21px) 21px">
                                                        <img
                                                            src="/site/img/call2-2a10936b.png"
                                                            width="21" height="22" alt loading="lazy"
                                                            class="el-image">
                                                    </picture>


                                                </div>
                                                <div class="uk-width-expand uk-margin-remove-first-child">


                                                    <h5 class="el-title uk-h3 uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                                        {{ $config->hotline }} </h5>


                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="el-item uk-grid-item-match">
                                        <a class="uk-card uk-card-default uk-card-small uk-card-hover uk-card-body uk-flex-stretch uk-link-toggle"
                                           href="{{ route('cart.index') }}">
                                            <div class="uk-grid-column-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto uk-flex-center">


                                                    <picture>
                                                        <source type="image/webp"
                                                                srcset="/site/img/cart11-95c75c13.webp 29w"
                                                                sizes="(min-width: 29px) 29px">
                                                        <img
                                                            src="/site/img/cart11-e486b5f8.png"
                                                            width="29" height="27" alt loading="lazy"
                                                            class="el-image">
                                                    </picture>


                                                </div>
                                                <div class="uk-width-expand uk-margin-remove-first-child">


                                                    <h5 class="el-title uk-h3 uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                                        MUA HÀNG </h5>


                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="el-item uk-grid-item-match">
                                        <a class="uk-card uk-card-default uk-card-small uk-card-hover uk-card-body uk-flex-stretch uk-link-toggle"
                                           href="{{ route('front.getStores') }}">
                                            <div class="uk-grid-column-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto uk-flex-center">


                                                    <picture>
                                                        <source type="image/webp"
                                                                srcset="/site/img/diemban1-1a80bf8a.webp 15w"
                                                                sizes="(min-width: 15px) 15px">
                                                        <img
                                                            src="/site/img/diemban1-84d26ce6.png"
                                                            width="15" height="30" alt loading="lazy"
                                                            class="el-image">
                                                    </picture>


                                                </div>
                                                <div class="uk-width-expand uk-margin-remove-first-child">


                                                    <h5 class="el-title uk-h3 uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                                        ĐIỂM BÁN </h5>


                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>

    </div>
</footer>
