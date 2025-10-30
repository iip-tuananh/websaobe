@extends('site.layouts.master')
@section('title')
    {{ $blog->name }} - {{ $config->web_title }}
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

    <main id="tm-main" ng-controller="blogPage">

        <!-- Builder #template-RGNsTisK -->
        <style class="uk-margin-remove-adjacent">.el-element {
                max-width: 1200px;
                margin: 0 auto;
                display: none;
            }

            @media only screen and (max-width: 1024px) {
                .uk-breadcrumb > * > * {
                    font-size: 14.4px;
                }

                .uk-breadcrumb {
                    text-align: center;
                    padding: 0 20px;
                }
            }

            #template-RGNsTisK\#1 {
                font-size: 28px;
                font-weight: bold;
            }

            @media only screen and (max-width: 640px) {
                #template-RGNsTisK\#1 {
                    font-size: 22px;
                }
            }

            #template-RGNsTisK\#2 .el-title {
                font-size: 18px;
            }

            #template-RGNsTisK\#2 .el-meta {
                font-size: 17px;
            }

            #template-RGNsTisK\#3 .el-title {
                font-size: 18px;
            }

            #template-RGNsTisK\#3 .el-meta {
                font-size: 17px;
            }

            #template-RGNsTisK\#4 .el-title {
                font-size: 18px;
            }

            #template-RGNsTisK\#4 .el-meta {
                font-size: 17px;
            }

            #template-RGNsTisK\#5 .el-title {
                font-size: 18px;
            }

            #template-RGNsTisK\#5 .el-meta {
                font-size: 17px;
            }

            #template-RGNsTisK\#6 > div {
                border: 1px dashed #000;
                border-right: none;
            }

            #template-RGNsTisK\#6 > div:last-child {
                border-right: 1px dashed #000;
            }

            @media only screen and (max-width: 1024px) {
                #template-RGNsTisK\#6 .el-title {
                    font-size: 15px !important;
                    min-height: 42.5px
                }

                #template-RGNsTisK\#6 .el-meta {
                    font-size: 13px !important;
                }
            }

            #template-RGNsTisK\#7 h2 {
                font-size: 24px;
                font-weight: bold;
                color: #336699;
            }

            #template-RGNsTisK\#7 .aligncenter {
                display: inherit;
                max-width: 100%;
            }

            #template-RGNsTisK\#7 h3 {
                color: #ff9600;
                font-weight: bold;
                font-size: 20px;
            }

            #template-RGNsTisK\#7 h1 {
                font-size: 28px;
            }

            #template-RGNsTisK\#7 p {
                font-size: 19px;
            }

            @media only screen and (max-width: 640px) {
                #template-RGNsTisK\#7 p, #template-RGNsTisK\#7 ul {
                    font-size: 16px;
                }
            }

            #template-RGNsTisK\#8 .el-title {
                font-size: 28px;
                font-weight: bold;
                color: #1baee4;
            }

            #template-RGNsTisK\#8 .el-content {
                font-size: 19px;
                font-weight: 400;
            }

            #binhluan .uk-child-width-auto > * {
                width: 50%;
            }

            #binhluan .el-content {
                padding: 0 5px;
                width: 100%;
            }

            @media only screen and ( max-width: 640px) {
                #binhluan .el-content {
                    font-size: 0.7rem;
                }
            }

            #macdinh {
                display: none;
            }

            #macdinh.ju-active {
                display: block;
            }

            #facebook {
                display: none;
            }

            #facebook.ju-active {
                display: block;
            }

            #template-RGNsTisK\#9 {
                padding-right: 30px;
            }

            @media only screen and (max-width: 1024px) {
                #template-RGNsTisK\#9 {
                    padding-right: 0px;
                }
            }

            #template-RGNsTisK\#10 {
                font-size: 25px;
                font-weight: bold;
            }

            #template-RGNsTisK\#11 .uk-button {
                background: #e0790d;
                border-radius: 50px;
            }

            #template-RGNsTisK\#11 .wpcf7-spinner {
                position: absolute;
            }

            #template-RGNsTisK\#11 .uk-input, #template-RGNsTisK\#11 .uk-textarea {
                border-radius: 5px;
            }

            #template-RGNsTisK\#12 .uk-button {
                background: #e0790d;
                border-radius: 50px;
            }

            #template-RGNsTisK\#12 .wpcf7-spinner {
                position: absolute;
            }

            #template-RGNsTisK\#12 .uk-input, #template-RGNsTisK\#12 .uk-textarea {
                border-radius: 5px;
            }

            #template-RGNsTisK\#13 > .uk-panel {
                padding: 5px 20px;
                border: 2px solid #1baee4;
                border-radius: 10px;
                padding-bottom: 0;
            }

            #template-RGNsTisK\#13 .uk-button {
                font-weight: bold;
                font-size: 16px;
                color: #FFF;
            }

            #template-RGNsTisK\#14 {
                font-size: 24px;
                width: fit-content;
                background: #24558f;
                color: #FFF;
                padding: 5px 20px;
                border-radius: 50px;
                margin: 0 auto;
            }

            #template-RGNsTisK\#15 .el-title {
                font-size: 17px;
                font-weight: bold;
                text-align: left;
                color: #24558f;
            }

            #template-RGNsTisK\#15 .el-content {
                font-size: 17px;
                font-weight: 400;
                color: #282828;
            }

            #template-RGNsTisK\#15 .el-meta {
                background: #ed9718;
                padding: 5px;
                color: #FFF;
                font-size: 16px;
                font-weight: bold;
                position: absolute;
                top: 0;
            }

            #template-RGNsTisK\#16 .uk-tile {
                background: #ddf3ff;
                padding: 20px;
            }</style>
        <div class="uk-section-default uk-section uk-padding-remove-vertical">


            <div class="uk-grid tm-grid-expand uk-grid-row-small uk-child-width-1-1 uk-grid-margin-small">
                <div class="uk-width-1-1">


                    <div uk-slideshow="ratio: 1920:648;" class="uk-margin-remove-vertical uk-visible@m">
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
                                                 width="1920" height="648" class="el-image" alt loading="lazy" uk-cover>
                                        </picture>


                                    </div>
                                @endforeach



                            </div>

                            <div class="uk-visible@s"><a class="el-slidenav uk-position-medium uk-position-center-left"
                                                         href="#" uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                    class="el-slidenav uk-position-medium uk-position-center-right" href="#"
                                    uk-slidenav-next uk-slideshow-item="next"></a></div>

                            <div class="uk-position-bottom-center uk-position-medium uk-visible@s">
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
                    <div uk-slideshow="ratio: 415:416;" class="uk-margin uk-margin-remove-top uk-hidden@m">
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
                                                 width="1000" height="1000" class="el-image" alt loading="lazy" uk-cover>
                                        </picture>
                                    </div>
                                @endforeach

                            </div>

                            <div class="uk-visible@s"><a class="el-slidenav uk-position-center-left" href="#"
                                                         uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                    class="el-slidenav uk-position-center-right" href="#" uk-slidenav-next
                                    uk-slideshow-item="next"></a></div>

                            <div class="uk-position-bottom-center uk-position-medium uk-visible@s">
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
        <div class="uk-section-default uk-section uk-section-xsmall">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <nav aria-label="Breadcrumb" id="template-RGNsTisK#0">
                            <ul class="uk-breadcrumb uk-margin-remove-bottom" vocab="https://schema.org/"
                                typeof="BreadcrumbList">

                                <li property="itemListElement" typeof="ListItem"><a href="{{ route('front.home-page') }}" property="item"
                                                                                    typeof="WebPage"><span
                                            property="name">Trang chủ</span></a>
                                    <meta property="position" content="1">
                                </li>
                                <li property="itemListElement" typeof="ListItem"><a href="#!"
                                                                                    property="item"
                                                                                    typeof="WebPage"><span
                                            property="name">{{ $blog->name }}</span></a>
                                    <meta property="position" content="2">
                                </li>
                            </ul>
                        </nav>


                    </div>
                </div>
            </div>


        </div>
        <div class="uk-section-default uk-section uk-section-xsmall">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-grid-column-medium uk-grid-margin" uk-grid>
                    <div class="uk-width-expand@m" id="template-RGNsTisK#9">


                        <h1 class="uk-text-primary" id="template-RGNsTisK#1"> {{ $blog->name }} </h1>
                        <div class="uk-panel uk-margin">

                        </div>

                        <div class="uk-panel uk-margin uk-text-justify" id="template-RGNsTisK#7">
                            {!! $blog->body !!}
                        </div>


                    </div>
                    <div class="uk-width-medium@m">
                        <div class="uk-position-z-index uk-panel" uk-sticky="end: !.tm-grid-expand; media: @m;">


                            <div class="uk-panel uk-margin">
                                <div
                                    class="uk-grid tm-grid-expand uk-grid-column-medium uk-child-width-1-1 uk-grid-margin">
                                    <div class="uk-grid-item-match uk-width-1-1" id="template-RGNsTisK#13">


                                        <div class="uk-panel uk-width-1-1">


                                            <div class="uk-text-primary uk-margin uk-text-center"
                                                 id="template-RGNsTisK#10"> Hỏi đáp chuyên gia
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
                                            <div id="template-RGNsTisK#11" ng-cloak>
                                                <div class="wpcf7 no-js" id="wpcf7-f40560-o1" lang="vi" dir="ltr">
                                                    <div class="screen-reader-response"><p role="status"
                                                                                           aria-live="polite"
                                                                                           aria-atomic="true"></p>
                                                        <ul></ul>
                                                    </div>
                                                    <form class="wpcf7-form init" aria-label="Form liên hệ" id="sendContactForm"
                                                        novalidate="novalidate" data-status="init">

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

                                                                        <div class="invalid-feedback d-block" ng-if="errors['name']"><% errors['name'][0] %></div>
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
                                                                        <div class="invalid-feedback d-block" ng-if="errors['emaill']"><% errors['emaill'][0] %></div>

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

                                                                        <div class="invalid-feedback d-block" ng-if="errors['title']"><% errors['title'][0] %></div>
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


                                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                                    <div class="uk-grid-item-match uk-width-1-1" id="template-RGNsTisK#16">
                                        <div class="uk-tile-default uk-tile  uk-tile-xsmall">


                                            <div class="uk-text-center" id="template-RGNsTisK#14"> Bài viết khác
                                            </div>
                                            <div id="template-RGNsTisK#15" class="uk-margin uk-text-justify">
                                                <div class="uk-grid uk-child-width-1-1 uk-grid-match" uk-grid>
                                                    @foreach($othersBlog as $otherBlog)
                                                        <div>
                                                            <div class="el-item uk-grid-item-match">
                                                                <a class="uk-panel uk-margin-remove-first-child uk-link-toggle"
                                                                   href="{{ route('front.blogDetail', $otherBlog->slug) }}">


                                                                    <picture>
                                                                        <source type="image/webp"
                                                                                srcset="{{ $otherBlog->image->path ?? '' }} 356w,
                                                                                {{ $otherBlog->image->path ?? '' }} 712w"
                                                                                sizes="(min-width: 356px) 356px">
                                                                        <img decoding="async"
                                                                             src="{{ $otherBlog->image->path ?? '' }}"
                                                                             width="356" height="238" alt loading="lazy"
                                                                             class="el-image">
                                                                    </picture>


                                                                    <h3 class="el-title uk-margin-top uk-margin-remove-bottom">
                                                                        {{ $otherBlog->name }} </h3>
                                                                    <div class="el-meta uk-text-meta">{{ \Illuminate\Support\Carbon::parse($otherBlog->created_at)->format('d/m/Y') }}</div>


                                                                    <div class="el-content uk-panel uk-margin-small-top">
                                                                        {{ $otherBlog->intro }}
                                                                    </div>


                                                                </a>
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
        app.controller('blogPage', function ($rootScope, $scope, cartItemSync, $interval) {

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
