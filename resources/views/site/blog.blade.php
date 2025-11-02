@extends('site.layouts.master')
@section('title')
    Tin tức - {{ $config->web_title }}
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

        <!-- Builder #template-oFhJ4BUx -->
        <style class="uk-margin-remove-adjacent">#template-oFhJ4BUx\#0 .el-title {
                font-size: 20px;
                font-weight: bold;
            }

            #template-oFhJ4BUx\#0 .el-content {
                font-size: 18px;
                color: #666666;
            }

            #template-oFhJ4BUx\#0 .el-meta {
                background: #ed9718;
                padding: 5px;
                color: #FFF;
                font-size: 16px;
                font-weight: bold;
                position: absolute;
                top: 0;
            }

            #template-oFhJ4BUx\#0 .el-link {
                border-radius: 10px;
            }

            #template-oFhJ4BUx\#0 .el-content + .uk-margin-small-top {
                text-align: right;
            }

            #template-oFhJ4BUx\#1 {
                font-size: 25px;
                font-weight: bold;
            }

            #template-oFhJ4BUx\#2 .uk-button {
                background: #e0790d;
                border-radius: 50px;
            }

            #template-oFhJ4BUx\#2 .wpcf7-spinner {
                position: absolute;
            }

            #template-oFhJ4BUx\#2 .uk-input, #template-oFhJ4BUx\#2 .uk-textarea {
                border-radius: 5px;
            }

            #template-oFhJ4BUx\#2 {
                position: relative;
                z-index: 1;
            }

            #template-oFhJ4BUx\#3 .uk-tile-default {
                border-radius: 20px;
                border: 1px solid #24558f;
                padding: 20px 20px;
            }

            #template-oFhJ4BUx\#3 {
                display: block !important;
            }</style>

        <div class="uk-section-default uk-section uk-section-xsmall">
            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <nav aria-label="Breadcrumb">
                            <ul class="uk-breadcrumb uk-margin-remove-bottom" vocab="https://schema.org/"
                                typeof="BreadcrumbList">

                                <li property="itemListElement" typeof="ListItem"><a href="{{ route('front.home-page') }}" property="item"
                                                                                    typeof="WebPage"><span
                                            property="name">Trang chủ</span></a>
                                    <meta property="position" content="1">
                                </li>
                                @if($category)
                                    <li property="itemListElement" typeof="ListItem"><span property="name"
                                                                                           aria-current="page">{{ $category->name }}</span>
                                        <meta property="position" content="2">
                                    </li>
                                @else
                                    <li property="itemListElement" typeof="ListItem"><span property="name"
                                                                                           aria-current="page">Tin tức</span>
                                        <meta property="position" content="2">
                                    </li>
                                @endif

                            </ul>
                        </nav>


                    </div>
                </div>
            </div>


        </div>
        <div class="uk-section-default uk-section uk-padding-remove-vertical">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-grid-column-medium uk-grid-margin" uk-grid>
                    <div class="uk-width-expand@m">


{{--                        <div id="template-oFhJ4BUx#0" class="uk-margin">--}}
{{--                            <div--}}
{{--                                class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m uk-grid-column-medium uk-grid-match"--}}
{{--                                uk-grid>--}}
{{--                                @foreach($blogs as $blog)--}}
{{--                                    <div>--}}
{{--                                        <div class="el-item uk-grid-item-match">--}}
{{--                                            <a class="uk-panel uk-margin-remove-first-child uk-link-toggle"--}}
{{--                                               href="{{ route('front.blogDetail', $blog->slug) }}">--}}


{{--                                                <picture>--}}
{{--                                                    <source type="image/webp"--}}
{{--                                                            srcset="{{ $blog->image->path ?? '' }} 395w,--}}
{{--                                                             {{ $blog->image->path ?? '' }} 768w,--}}
{{--                                                             {{ $blog->image->path ?? '' }} 790w"--}}
{{--                                                            sizes="(min-width: 395px) 395px">--}}
{{--                                                    <img decoding="async"--}}
{{--                                                         src="{{ $blog->image->path ?? '' }}"--}}
{{--                                                         width="395" height="263" alt loading="lazy" class="el-image">--}}
{{--                                                </picture>--}}


{{--                                                <h3 class="el-title uk-text-primary uk-margin-top uk-margin-remove-bottom">--}}
{{--                                                    {{ $blog->name }} </h3>--}}
{{--                                                <div class="el-meta uk-text-meta"> {{ \Illuminate\Support\Carbon::parse($blog->created_at)->format('d/m/Y') }}</div>--}}


{{--                                                <div class="el-content uk-panel uk-margin-small-top">--}}
{{--                                                    {{ $blog->intro }}--}}
{{--                                                </div>--}}

{{--                                                <div class="uk-margin-small-top">--}}
{{--                                                    <div class="el-link uk-button uk-button-secondary uk-button-small">Xem--}}
{{--                                                        ngay--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <style>
                            /* Giới hạn phạm vi theo id template */
                            #template-oFhJ4BUx\#0 .blog-thumb{
                                aspect-ratio: 4 / 3;        /* giữ tỷ lệ ảnh */
                                border-radius: 8px;
                                overflow: hidden;
                            }
                            #template-oFhJ4BUx\#0 .blog-thumb img{
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                display: block;
                            }

                            /* Intro clamp 3 dòng */
                            #template-oFhJ4BUx\#0 .blog-intro{
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 3;
                                overflow: hidden;
                            }
                            @supports (line-clamp: 3) {
                                #template-oFhJ4BUx\#0 .blog-intro { line-clamp: 3; }
                            }

                            /* Khoảng cách dọc giữa các item (đã có uk-grid-row-medium, nhưng thêm tí padding nếu thích) */
                            #template-oFhJ4BUx\#0 .blog-row{
                                padding: 4px 0;
                            }

                        </style>
                        <div id="template-oFhJ4BUx#0" class="uk-margin">
                            <div
                                class="uk-grid uk-child-width-1-1 uk-grid-row-medium uk-grid-match"
                                uk-grid>
                                @foreach($blogs as $blog)
                                    <div>
                                        <a class="uk-link-toggle" href="{{ route('front.blogDetail', $blog->slug) }}">
                                            <div class="uk-grid-small uk-flex-middle blog-row" uk-grid>
                                                <!-- Cột ảnh -->
                                                <div class="uk-width-1-1 uk-width-1-3@m">
                                                    <div class="blog-thumb">
                                                        <picture>
                                                            <source type="image/webp"
                                                                    srcset="{{ $blog->image->path ?? '' }} 395w,
                              {{ $blog->image->path ?? '' }} 768w,
                              {{ $blog->image->path ?? '' }} 790w"
                                                                    sizes="(min-width: 960px) 33vw, 100vw">
                                                            <img decoding="async"
                                                                 src="{{ $blog->image->path ?? '' }}"
                                                                 alt="{{ $blog->name }}"
                                                                 loading="lazy">
                                                        </picture>
                                                    </div>
                                                </div>

                                                <!-- Cột nội dung -->
                                                <div class="uk-width-1-1 uk-width-expand@m">
                                                    <h3 class="el-title uk-text-primary uk-margin-remove-bottom">
                                                        {{ $blog->name }}
                                                    </h3>
                                                    <div class="el-meta uk-text-meta uk-margin-xsmall-top">
                                                        {{ \Illuminate\Support\Carbon::parse($blog->created_at)->format('d/m/Y') }}
                                                    </div>

                                                    <div class="blog-intro uk-margin-small-top">
                                                        {{ $blog->intro }}
                                                    </div>

                                                    <div class="uk-margin-small-top">
                                                        <span class="el-link uk-button uk-button-secondary uk-button-small">Xem ngay</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        {{ $blogs->links('site.pagination.paginate2') }}

                    </div>
                    <div class="uk-width-medium@m" id="template-oFhJ4BUx#3">
                        <div class="uk-tile-default uk-position-z-index uk-tile  uk-tile-xsmall"
                             uk-sticky="offset: 150; end: !.tm-grid-expand; media: @m;">


                            <div class="uk-panel uk-width-1-1">


                                <div class="uk-text-primary uk-text-center" id="template-oFhJ4BUx#1"> Hỏi đáp chuyên
                                    gia
                                </div>
                                <div class="uk-position-absolute uk-width-1-1"
                                     style="left: 83%; top: 250px; z-index: 2;">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/babi-9979db43.webp 48w"
                                                sizes="(min-width: 48px) 48px">
                                        <img decoding="async"
                                             src="/site/img/babi-e82ea3b8.png" width="48"
                                             height="54" class="el-image" alt loading="lazy">
                                    </picture>

                                </div>
                                <div class="uk-position-absolute uk-width-1-1"
                                     style="left: 90%; top: -16px; z-index: 2;">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="/site/img/baby-d127d7d1.webp 45w"
                                                sizes="(min-width: 45px) 45px">
                                        <img decoding="async"
                                             src="/site/img/baby-afbc691c.png" width="45"
                                             height="63" class="el-image" alt loading="lazy">
                                    </picture>

                                </div>
                                <div id="template-oFhJ4BUx#2"  ng-cloak>
                                    <div class="wpcf7 no-js" id="wpcf7-f40560-o1" lang="vi" dir="ltr">
                                        <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                               aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form  id="sendContactForm"
                                              class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate"
                                              data-status="init">
                                            <div class="uk-child-width-1-1 uk-grid-small uk-margin-bottom" uk-grid>
                                                <div>
                                                    <p><label> Tên của bạn<br/>
                                                            <span class="wpcf7-form-control-wrap" data-name="your-name"><input
                                                                    size="40" maxlength="400"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required uk-input"
                                                                    autocomplete="name" aria-required="true"
                                                                    aria-invalid="false" value="" type="text"
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
                                                                                                value="" type="email"
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
                                                                                                  value="" type="text"
                                                                                                  name="title"/></span>

                                                            <div class="invalid-feedback d-block" ng-if="errors['title']"><% errors['title'][0] %></div>

                                                        </label>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p><label> Tin nhắn của bạn (không bắt buộc)<br/>
                                                            <span class="wpcf7-form-control-wrap"
                                                                  data-name="your-message"><textarea cols="3" rows="4"
                                                                                                     maxlength="2000"
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
        <div class="uk-section-default uk-section uk-padding-remove-bottom">


            <div class="uk-container">
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
