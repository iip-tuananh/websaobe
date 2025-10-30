@extends('site.layouts.master')
@section('title')
    Điểm bán - {{ $config->web_title }}
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

    <main id="tm-main" ng-controller="storePage">

        <!-- Builder #template-ArM1R-US -->
        <style class="uk-margin-remove-adjacent">#template-ArM1R-US\#0 .el-overlay {
                width: 100%;
                height: 100%;
            }

            #template-ArM1R-US\#0 .el-link {
                font-size: 0;
                position: absolute;
                width: 100%;
                height: 100%;
                border: unset;
                background: transparentl;
            }

            #template-ArM1R-US\#1 .el-overlay {
                width: 100%;
                height: 100%;
            }

            #template-ArM1R-US\#1 .el-link {
                font-size: 0;
                position: absolute;
                width: 100%;
                height: 100%;
                border: unset;
                background: transparentl;
            }

            #template-ArM1R-US\#2 {
                font-size: 30px;
            }

            @media only screen and (max-width: 1024px) {
                #template-ArM1R-US\#2 {
                    font-size: 22px;
                }
            }

            #template-ArM1R-US\#3 {
                font-size: 18px;
            }

            @media only screen and (max-width: 1024px) {
                #template-ArM1R-US\#3 {
                    font-size: 15px;
                }
            }

            #template-ArM1R-US\#4 {
                font-size: 18px;
            }

            @media only screen and (max-width: 640px) {
                #template-ArM1R-US\#4 {
                    font-size: 16px;
                }
            }

            #template-ArM1R-US\#5 .term-list.uk-list-disc > ::before {
                margin-bottom: -1.5em;
            }

            #template-ArM1R-US\#6 {
                font-size: 30px;
            }

            @media only screen and (max-width: 1024px) {
                #template-ArM1R-US\#6 {
                    font-size: 22px;
                }
            }

            #template-ArM1R-US\#7 {
                font-size: 18px;
            }

            @media only screen and (max-width: 1024px) {
                #template-ArM1R-US\#7 {
                    font-size: 16px;
                }
            }

            #template-ArM1R-US\#8 .el-title {
                font-size: 18px;
                font-weight: bold;
                background: #f6abb4;
                padding: 2px 10px;
                border-radius: 5px;
                color: #FFF;
            }

            #template-ArM1R-US\#8 .el-content {
                font-size: 20px;
            }

            #template-ArM1R-US\#8 strong {
                color: #24558f;
            }

            @media only screen and (max-width: 1024px) {
                #template-ArM1R-US\#8 .el-content {
                    font-size: 15px;
                }

                #template-ArM1R-US\#8 .el-title {
                    font-size: 15px;
                }
            }

            @media only screen and (max-width: 640px) {
                #template-ArM1R-US\#8 .el-title {
                    position: relative;
                    top: 5px;
                }
            }

            #template-ArM1R-US\#9 {
                font-size: 25px;
                font-weight: bold;
            }

            #template-ArM1R-US\#10 .uk-button {
                background: #e0790d;
                border-radius: 50px;
            }

            #template-ArM1R-US\#10 .wpcf7-spinner {
                position: absolute;
            }

            #template-ArM1R-US\#10 .uk-input, #template-ArM1R-US\#10 .uk-textarea {
                border-radius: 5px;
            }

            #template-ArM1R-US\#11 > .uk-panel {
                padding: 5px 20px;
                border: 2px solid #1baee4;
                border-radius: 10px;
                padding-bottom: 0;
            }

            #template-ArM1R-US\#11 .uk-button {
                font-weight: bold;
                font-size: 16px;
                color: #FFF;
            }</style>
        <div class="uk-section-default uk-section uk-padding-remove-vertical">


            <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                <div class="uk-width-1-1">


                    <div uk-slideshow="ratio: 1920:643; minHeight: 300;" id="template-ArM1R-US#0"
                         class="uk-margin-remove-vertical uk-visible@m">
                        <div class="uk-position-relative">

                            <div class="uk-slideshow-items">
                                <div class="el-item">


                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $banner->image->path ?? '' }} 768w,
                                               {{ $banner->image->path ?? '' }} 1024w,
                                                 {{ $banner->image->path ?? '' }} 1366w,
                                                {{ $banner->image->path ?? '' }} 1600w,
                                               {{ $banner->image->path ?? '' }} 1920w,
                                               {{ $banner->image->path ?? '' }} 2560w"
                                                sizes="(max-aspect-ratio: 2560/864) 296vh">
                                        <img decoding="async"
                                             src="{{ $banner->image->path ?? '' }}"
                                             width="2560" height="864" class="el-image" alt loading="lazy" uk-cover>
                                    </picture>


                                    <div class="uk-position-cover uk-flex uk-flex-left uk-flex-middle uk-padding">
                                        <div class="el-overlay uk-panel uk-margin-remove-first-child">


                                            <div class="uk-margin-top"><a class="el-link uk-button uk-button-default"
                                                                          href="#!"
                                                                          target="_blank">xem thêm</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-visible@s"><a class="el-slidenav uk-position-medium uk-position-center-left"
                                                         href="#" uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                    class="el-slidenav uk-position-medium uk-position-center-right" href="#"
                                    uk-slidenav-next uk-slideshow-item="next"></a></div>

                            <div class="uk-position-bottom-center uk-position-medium">
                                <ul class="el-nav uk-slideshow-nav uk-dotnav uk-flex-center" uk-margin>
                                    <li uk-slideshow-item="0">
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div uk-slideshow="ratio: 900:900; minHeight: 300;" id="template-ArM1R-US#1"
                         class="uk-margin-remove-vertical uk-hidden@s">
                        <div class="uk-position-relative">

                            <div class="uk-slideshow-items">
                                <div class="el-item">


                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $banner->image->path ?? '' }} 768w,
                                                 {{ $banner->image->path ?? '' }} 1000w"
                                                sizes="(max-aspect-ratio: 1000/1000) 100vh">
                                        <img decoding="async"
                                             src="{{ $banner->image->path ?? '' }}"
                                             width="1000" height="1000" class="el-image" alt loading="lazy" uk-cover>
                                    </picture>


                                    <div class="uk-position-cover uk-flex uk-flex-left uk-flex-middle uk-padding">
                                        <div class="el-overlay uk-panel uk-margin-remove-first-child">


                                            <div class="uk-margin-top"><a class="el-link uk-button uk-button-default"
                                                                          href="#!"
                                                                          target="_blank">xem thêm</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-visible@s"><a class="el-slidenav uk-position-medium uk-position-center-left"
                                                         href="#" uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                    class="el-slidenav uk-position-medium uk-position-center-right" href="#"
                                    uk-slidenav-next uk-slideshow-item="next"></a></div>

                            <div class="uk-position-bottom-center uk-position-medium">
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
        <div class="uk-section-default uk-section uk-section-xsmall">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <nav aria-label="Breadcrumb" class="uk-margin-medium">
                            <ul class="uk-breadcrumb uk-margin-remove-bottom" vocab="https://schema.org/"
                                typeof="BreadcrumbList">

                                <li property="itemListElement" typeof="ListItem"><a
                                        href="{{ route('front.home-page') }}" property="item"
                                        typeof="WebPage"><span
                                            property="name">Trang chủ</span></a>
                                    <meta property="position" content="1">
                                </li>
                                <li property="itemListElement" typeof="ListItem"><span property="name"
                                                                                       aria-current="page">Điểm bán</span>
                                    <meta property="position" content="2">
                                </li>
                            </ul>
                        </nav>


                    </div>
                </div>
                <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                    <div class="uk-width-expand@m">


                        <h1 class="uk-h2 uk-text-primary uk-margin-small" id="template-ArM1R-US#2"><strong>ĐIỂM BÁN
                                {{ $config->short_name_company }} CHÍNH HÃNG</strong></h1>
                        <div class="uk-panel uk-text-primary uk-margin uk-margin-remove-top" id="template-ArM1R-US#3">
                            <p>Sản phẩm có bán tại hệ thống nhà thuốc và cửa hàng mẹ bé trên toàn quốc.</p></div>

                        @if(@$partners[1])
                            <div class="uk-slider-container uk-margin" uk-slider="autoplay: 1;">
                                <div class="uk-position-relative">

                                    <div class="uk-slider-items uk-grid uk-grid-small uk-grid-match">
                                        @foreach(@$partners[1] as $partner)
                                            <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-5@m uk-width-1-4@l">
                                                <div class="el-item uk-grid-item-match">
                                                    <a class="uk-panel uk-margin-remove-first-child uk-link-toggle"
                                                       href="#!">
                                                        <picture>
                                                            <source type="image/webp"
                                                                    srcset="{{ $partner->image->path ?? '' }} 328w"
                                                                    sizes="(min-width: 328px) 328px">
                                                            <img decoding="async"
                                                                 src="{{ $partner->image->path ?? '' }}"
                                                                 width="328" height="126" alt loading="lazy"
                                                                 class="el-image">
                                                        </picture>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                    <div><a class="el-slidenav uk-position-center-left" href="#" uk-slidenav-previous
                                            uk-slider-item="previous"></a> <a
                                            class="el-slidenav uk-position-center-right"
                                            href="#" uk-slidenav-next
                                            uk-slider-item="next"></a></div>
                                </div>
                                <ul class="el-nav uk-slider-nav uk-dotnav uk-flex-center uk-margin-top" uk-margin></ul>
                            </div>
                        @endif

                        @if(@$partners[2])

                            <div class="uk-slider-container uk-margin"
                                 uk-slider="autoplay: 1;  autoplayInterval: 5000;">
                                <div class="uk-position-relative">

                                    <div class="uk-slider-items uk-grid uk-grid-small uk-grid-match">
                                        @foreach(@$partners[2] as $partner)
                                            <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-3@m uk-width-1-4@l">
                                                <div class="el-item uk-grid-item-match">
                                                    <a class="uk-panel uk-margin-remove-first-child uk-link-toggle"
                                                       href="#!">


                                                        <picture>
                                                            <source type="image/webp"
                                                                    srcset="{{ $partner->image->path ?? '' }} 327w"
                                                                    sizes="(min-width: 327px) 327px">
                                                            <img decoding="async"
                                                                 src="{{ $partner->image->path ?? '' }}"
                                                                 width="327" height="126" alt loading="lazy"
                                                                 class="el-image">
                                                        </picture>


                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                    <div><a class="el-slidenav uk-position-center-left" href="#" uk-slidenav-previous
                                            uk-slider-item="previous"></a> <a
                                            class="el-slidenav uk-position-center-right"
                                            href="#" uk-slidenav-next
                                            uk-slider-item="next"></a></div>
                                </div>
                                <ul class="el-nav uk-slider-nav uk-dotnav uk-flex-center uk-margin-top" uk-margin></ul>
                            </div>

                        @endif

                        <div class="uk-panel uk-text-lead uk-margin-large" id="template-ArM1R-US#4"><p><em>Bây giờ bạn
                                    hãy nhấn vào tỉnh thành của mình ở dưới để xem điểm bán nhé!</em></p>
                        </div>

                        <div id="template-ArM1R-US#5">
                            @foreach($result as $row)
                                <h3 class="term_location">
                                    <img decoding="async"
                                         class="uk-margin-small-right"
                                         src="/site/img/localtion.png"/>{{ $row['province_name'] }}</h3>
                                <ul uk-grid
                                    class="uk-child-width-1-4@m  uk-child-width-1-3@s  uk-child-width-1-2 uk-list uk-grid-collapse uk-list-disc term-list">
                                    @foreach($row['districts'] as $item)
                                        <li>
                                            <a href="{{ route('front.getStores', ['proSlug' => $row['province_slug'], 'distSlug' => $item['slug']] ) }}">{{ $item['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach


                        </div>
                        <div class="uk-panel uk-margin">
                            <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                                <div class="uk-width-1-1">


                                    <div class="uk-h2 uk-text-primary uk-margin-small" id="template-ArM1R-US#6"><strong>HƯỚNG
                                            DẪN CÁCH MUA {{ $config->short_name_company }} CHÍNH HÃNG</strong></div>
                                    <div class="uk-panel uk-margin uk-margin-remove-top" id="template-ArM1R-US#7"><p>Để
                                            có thể mua được sản phẩm chính hãng, khách hàng có thể làm theo 3
                                            cách:</p></div>
                                    <div id="template-ArM1R-US#8" class="uk-margin">
                                        <div class="uk-grid uk-child-width-1-1 uk-grid-row-medium uk-grid-match"
                                             uk-grid>
                                            <div>
                                                <div class="el-item uk-panel uk-margin-remove-first-child">


                                                    <div
                                                        class="uk-child-width-expand uk-grid-column-small uk-margin-top"
                                                        uk-grid>
                                                        <div class="uk-width-auto uk-margin-remove-first-child">

                                                            <div class="el-title uk-margin-top uk-margin-remove-bottom">
                                                                Cách 1
                                                            </div>

                                                        </div>
                                                        <div class="uk-margin-remove-first-child">


                                                            <div class="el-content uk-panel uk-margin-top"><p>Mua hàng
                                                                    chính hãng trực tiếp từ nhà sản xuất</p></div>


                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div>
                                                <div class="el-item uk-panel uk-margin-remove-first-child">


                                                    <div
                                                        class="uk-child-width-expand uk-grid-column-small uk-margin-top"
                                                        uk-grid>
                                                        <div class="uk-width-auto uk-margin-remove-first-child">

                                                            <div class="el-title uk-margin-top uk-margin-remove-bottom">
                                                                Cách 2
                                                            </div>

                                                        </div>
                                                        <div class="uk-margin-remove-first-child">


                                                            <div class="el-content uk-panel uk-margin-top"><p>Liên hệ
                                                                    tổng đài 1800.8179 để được các dược sĩ hướng dẫn</p>
                                                            </div>


                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div>
                                                <div class="el-item uk-panel uk-margin-remove-first-child">


                                                    <div
                                                        class="uk-child-width-expand uk-grid-column-small uk-margin-top"
                                                        uk-grid>
                                                        <div class="uk-width-auto uk-margin-remove-first-child">

                                                            <div class="el-title uk-margin-top uk-margin-remove-bottom">
                                                                Cách 3
                                                            </div>

                                                        </div>
                                                        <div class="uk-margin-remove-first-child">


                                                            <div class="el-content uk-panel uk-margin-top"><p><span>Mua trực tiếp tại các nhà thuốc và cửa hàng mẹ bé trên toàn quốc</span>
                                                                </p></div>


                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="uk-width-medium@m">
                        <div class="uk-position-z-index uk-panel"
                             uk-sticky="offset: 60; end: !.tm-grid-expand; media: @m;">


                            <div class="uk-panel uk-margin">
                                <div
                                    class="uk-grid tm-grid-expand uk-grid-column-medium uk-child-width-1-1 uk-grid-margin">
                                    <div class="uk-grid-item-match uk-width-1-1" id="template-ArM1R-US#11">


                                        <div class="uk-panel uk-width-1-1">


                                            <div class="uk-text-primary uk-margin uk-text-center"
                                                 id="template-ArM1R-US#9"> Hỏi đáp chuyên gia
                                            </div>
                                            <div class="uk-position-absolute uk-width-1-1"
                                                 style="left: 83%; bottom: 165px; z-index: 1;">
                                                <picture>
                                                    <source type="image/webp"
                                                            srcset="/site/img/babi-9979db43.webp 48w"
                                                            sizes="(min-width: 48px) 48px">
                                                    <img decoding="async"
                                                         src="/site/img/babi-e82ea3b8.png"
                                                         width="48" height="54" class="el-image" alt loading="lazy">
                                                </picture>

                                            </div>
                                            <div class="uk-position-absolute uk-width-1-1"
                                                 style="left: 90%; top: -16px; z-index: 1;">
                                                <picture>
                                                    <source type="image/webp"
                                                            srcset="/site/img/baby-d127d7d1.webp 45w"
                                                            sizes="(min-width: 45px) 45px">
                                                    <img decoding="async"
                                                         src="/site/img/baby-afbc691c.png"
                                                         width="45" height="63" class="el-image" alt loading="lazy">
                                                </picture>

                                            </div>
                                            <div id="template-ArM1R-US#10" ng-cloak>
                                                <div class="wpcf7 no-js" id="wpcf7-f40560-o1" lang="vi" dir="ltr">
                                                    <div class="screen-reader-response"><p role="status"
                                                                                           aria-live="polite"
                                                                                           aria-atomic="true"></p>
                                                        <ul></ul>
                                                    </div>
                                                    <form class="wpcf7-form init" id="sendContactForm"
                                                          aria-label="Form liên hệ" novalidate="novalidate"
                                                          data-status="init">
                                                        <div class="uk-child-width-1-1 uk-grid-small uk-margin-bottom"
                                                             uk-grid>
                                                            <div>
                                                                <p><label> Tên của bạn<br/>
                                                                        <span class="wpcf7-form-control-wrap"
                                                                              data-name="your-name"><input size="40"
                                                                                                           maxlength="400"
                                                                                                           class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required uk-input"
                                                                                                           autocomplete="name"
                                                                                                           aria-required="true"
                                                                                                           aria-invalid="false"
                                                                                                           value=""
                                                                                                           type="text"
                                                                                                           name="name"/></span>

                                                                        <div class="invalid-feedback d-block"
                                                                             ng-if="errors['name']"><% errors['name'][0]
                                                                            %>
                                                                        </div>
                                                                    </label>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p><label> Email của bạn<br/>
                                                                        <span class="wpcf7-form-control-wrap"
                                                                              data-name="your-email"><input size="40"
                                                                                                            maxlength="400"
                                                                                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email uk-input"
                                                                                                            autocomplete="email"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            value=""
                                                                                                            type="email"
                                                                                                            name="email"/></span>

                                                                        <div class="invalid-feedback d-block"
                                                                             ng-if="errors['emaill']"><%
                                                                            errors['emaill'][0] %>
                                                                        </div>
                                                                    </label>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p><label> Tiêu đề:<br/>
                                                                        <span class="wpcf7-form-control-wrap"
                                                                              data-name="your-subject"><input size="40"
                                                                                                              maxlength="400"
                                                                                                              class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required uk-input"
                                                                                                              aria-required="true"
                                                                                                              aria-invalid="false"
                                                                                                              value=""
                                                                                                              type="text"
                                                                                                              name="title"/></span>

                                                                        <div class="invalid-feedback d-block"
                                                                             ng-if="errors['title']"><%
                                                                            errors['title'][0] %>
                                                                        </div>
                                                                    </label>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p><label> Tin nhắn của bạn (không bắt buộc)<br/>
                                                                        <span class="wpcf7-form-control-wrap"
                                                                              data-name="your-message"><textarea
                                                                                cols="3" rows="4" maxlength="2000"
                                                                                class="wpcf7-form-control wpcf7-textarea uk-textarea"
                                                                                aria-invalid="false"
                                                                                name="message"></textarea></span>
                                                                    </label>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <div>
                                                                    <p><input ng-click="submitContact()"
                                                                              class="wpcf7-form-control wpcf7-submit has-spinner uk-button uk-button-primary"
                                                                              type="button" value="Gửi thông tin"/>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                    </div>
                </div>
            </div>


        </div>
    </main>

@endsection

@push('scripts')

    <script>
        app.controller('storePage', function ($rootScope, $scope, cartItemSync, $interval) {

            $scope.submitContact = function () {
                var url = "{{route('front.postContactQuick')}}";
                var data = jQuery('#sendContactForm').serialize();
                $scope.loading = true;
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: data,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            jQuery('#sendContactForm')[0].reset();
                            $scope.errors = [];
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
