@extends('site.layouts.master')
@section('title')
    {{ $product->name }}- {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{@$config->image->path ?? ''}}
@endsection

@section('css')
    <link rel='stylesheet' id='wpdiscuz-frontend-css-css'
          href='/site/wp-content/plugins/wpdiscuz/themes/default/styleed07.css?ver=7.6.21' type='text/css' media='all'/>

    <link rel='stylesheet' id='contact-form-7-css'
          href='/site/wp-content/plugins/contact-form-7/includes/css/styles1014.css?ver=5.9.7' type='text/css'
          media='all'/>

    <link rel='stylesheet' id='wc-blocks-style-css'
          href='/site/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksffe6.css?ver=wc-9.1.2'
          type='text/css'
          media='all'/>

    <link rel='stylesheet' id='wpdiscuz-combo-css-css'
          href='/site/wp-content/plugins/wpdiscuz/assets/css/wpdiscuz-combo.min369f.css?ver=6.6.4' type='text/css'
          media='all'/>

    <style id='wpdiscuz-frontend-css-inline-css' type='text/css'>
        #wpdcom .wpd-blog-administrator .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-administrator .wpd-comment-author, #wpdcom .wpd-blog-administrator .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-administrator .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment.wpd-reply .wpd-comment-wrap.wpd-blog-administrator {
            border-left: 3px solid #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-administrator .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-administrator .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-administrator .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-editor .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-editor .wpd-comment-author, #wpdcom .wpd-blog-editor .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-editor .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment.wpd-reply .wpd-comment-wrap.wpd-blog-editor {
            border-left: 3px solid #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-editor .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-editor .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-editor .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-author .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-author .wpd-comment-author, #wpdcom .wpd-blog-author .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-author .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-author .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-author .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-author .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-contributor .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-contributor .wpd-comment-author, #wpdcom .wpd-blog-contributor .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-contributor .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-contributor .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-contributor .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-contributor .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-subscriber .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-subscriber .wpd-comment-author, #wpdcom .wpd-blog-subscriber .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-subscriber .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-subscriber .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom .wpd-blog-caia_sub_admin .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-caia_sub_admin .wpd-comment-author, #wpdcom .wpd-blog-caia_sub_admin .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-caia_sub_admin .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-caia_sub_admin .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-caia_sub_admin .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-caia_sub_admin .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-caia_client_admin .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-caia_client_admin .wpd-comment-author, #wpdcom .wpd-blog-caia_client_admin .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-caia_client_admin .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-caia_client_admin .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-caia_client_admin .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-caia_client_admin .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-customer .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-customer .wpd-comment-author, #wpdcom .wpd-blog-customer .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-customer .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-customer .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-customer .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-customer .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-shop_manager .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-shop_manager .wpd-comment-author, #wpdcom .wpd-blog-shop_manager .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-shop_manager .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-shop_manager .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-shop_manager .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-shop_manager .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-translator .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-translator .wpd-comment-author, #wpdcom .wpd-blog-translator .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-translator .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-translator .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-translator .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-translator .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-post_author .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-post_author .wpd-comment-author, #wpdcom .wpd-blog-post_author .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom .wpd-blog-post_author .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-1 .wpd-comment .wpd-blog-post_author .wpd-avatar img {
            border-color: #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment.wpd-reply .wpd-comment-wrap.wpd-blog-post_author {
            border-left: 3px solid #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment .wpd-blog-post_author .wpd-avatar img {
            border-bottom-color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-post_author .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-reply .wpd-blog-post_author .wpd-comment-right {
            border-left: 1px solid #00B38F
        }

        #wpdcom .wpd-blog-guest .wpd-comment-label {
            color: #ffffff;
            background-color: #00B38F;
            border: none
        }

        #wpdcom .wpd-blog-guest .wpd-comment-author, #wpdcom .wpd-blog-guest .wpd-comment-author a {
            color: #00B38F
        }

        #wpdcom.wpd-layout-3 .wpd-blog-guest .wpd-comment-subheader {
            border-top: 1px dashed #00B38F
        }

        #comments, #respond, .comments-area, #wpdcom {
        }

        #wpdcom .ql-editor > * {
            color: #777777
        }

        #wpdcom .ql-editor::before {
        }

        #wpdcom .ql-toolbar {
            border: 1px solid #DDDDDD;
            border-top: none
        }

        #wpdcom .ql-container {
            border: 1px solid #DDDDDD;
            border-bottom: none
        }

        #wpdcom .wpd-form-row .wpdiscuz-item input[type="text"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="email"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="url"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="color"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="date"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="datetime"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="datetime-local"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="month"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="number"], #wpdcom .wpd-form-row .wpdiscuz-item input[type="time"], #wpdcom textarea, #wpdcom select {
            border: 1px solid #DDDDDD;
            color: #777777
        }

        #wpdcom .wpd-form-row .wpdiscuz-item textarea {
            border: 1px solid #DDDDDD
        }

        #wpdcom input::placeholder, #wpdcom textarea::placeholder, #wpdcom input::-moz-placeholder, #wpdcom textarea::-webkit-input-placeholder {
        }

        #wpdcom .wpd-comment-text {
            color: #777777
        }

        #wpdcom .wpd-thread-head .wpd-thread-info {
            border-bottom: 2px solid #00B38F
        }

        #wpdcom .wpd-thread-head .wpd-thread-info.wpd-reviews-tab svg {
            fill: #00B38F
        }

        #wpdcom .wpd-thread-head .wpdiscuz-user-settings {
            border-bottom: 2px solid #00B38F
        }

        #wpdcom .wpd-thread-head .wpdiscuz-user-settings:hover {
            color: #00B38F
        }

        #wpdcom .wpd-comment .wpd-follow-link:hover {
            color: #00B38F
        }

        #wpdcom .wpd-comment-status .wpd-sticky {
            color: #00B38F
        }

        #wpdcom .wpd-thread-filter .wpdf-active {
            color: #00B38F;
            border-bottom-color: #00B38F
        }

        #wpdcom .wpd-comment-info-bar {
            border: 1px dashed #33c3a6;
            background: #e6f8f4
        }

        #wpdcom .wpd-comment-info-bar .wpd-current-view i {
            color: #00B38F
        }

        #wpdcom .wpd-filter-view-all:hover {
            background: #00B38F
        }

        #wpdcom .wpdiscuz-item .wpdiscuz-rating > label {
            color: #DDDDDD
        }

        #wpdcom .wpdiscuz-item .wpdiscuz-rating:not(:checked) > label:hover, .wpdiscuz-rating:not(:checked) > label:hover ~ label {
        }

        #wpdcom .wpdiscuz-item .wpdiscuz-rating > input ~ label:hover, #wpdcom .wpdiscuz-item .wpdiscuz-rating > input:not(:checked) ~ label:hover ~ label, #wpdcom .wpdiscuz-item .wpdiscuz-rating > input:not(:checked) ~ label:hover ~ label {
            color: #FFED85
        }

        #wpdcom .wpdiscuz-item .wpdiscuz-rating > input:checked ~ label:hover, #wpdcom .wpdiscuz-item .wpdiscuz-rating > input:checked ~ label:hover, #wpdcom .wpdiscuz-item .wpdiscuz-rating > label:hover ~ input:checked ~ label, #wpdcom .wpdiscuz-item .wpdiscuz-rating > input:checked + label:hover ~ label, #wpdcom .wpdiscuz-item .wpdiscuz-rating > input:checked ~ label:hover ~ label, .wpd-custom-field .wcf-active-star, #wpdcom .wpdiscuz-item .wpdiscuz-rating > input:checked ~ label {
            color: #FFD700
        }

        #wpd-post-rating .wpd-rating-wrap .wpd-rating-stars svg .wpd-star {
            fill: #DDDDDD
        }

        #wpd-post-rating .wpd-rating-wrap .wpd-rating-stars svg .wpd-active {
            fill: #FFD700
        }

        #wpd-post-rating .wpd-rating-wrap .wpd-rate-starts svg .wpd-star {
            fill: #DDDDDD
        }

        #wpd-post-rating .wpd-rating-wrap .wpd-rate-starts:hover svg .wpd-star {
            fill: #FFED85
        }

        #wpd-post-rating.wpd-not-rated .wpd-rating-wrap .wpd-rate-starts svg:hover ~ svg .wpd-star {
            fill: #DDDDDD
        }

        .wpdiscuz-post-rating-wrap .wpd-rating .wpd-rating-wrap .wpd-rating-stars svg .wpd-star {
            fill: #DDDDDD
        }

        .wpdiscuz-post-rating-wrap .wpd-rating .wpd-rating-wrap .wpd-rating-stars svg .wpd-active {
            fill: #FFD700
        }

        #wpdcom .wpd-comment .wpd-follow-active {
            color: #ff7a00
        }

        #wpdcom .page-numbers {
            color: #555;
            border: #555 1px solid
        }

        #wpdcom span.current {
            background: #555
        }

        #wpdcom.wpd-layout-1 .wpd-new-loaded-comment > .wpd-comment-wrap > .wpd-comment-right {
            background: #FFFAD6
        }

        #wpdcom.wpd-layout-2 .wpd-new-loaded-comment.wpd-comment > .wpd-comment-wrap > .wpd-comment-right {
            background: #FFFAD6
        }

        #wpdcom.wpd-layout-2 .wpd-new-loaded-comment.wpd-comment.wpd-reply > .wpd-comment-wrap > .wpd-comment-right {
            background: transparent
        }

        #wpdcom.wpd-layout-2 .wpd-new-loaded-comment.wpd-comment.wpd-reply > .wpd-comment-wrap {
            background: #FFFAD6
        }

        #wpdcom.wpd-layout-3 .wpd-new-loaded-comment.wpd-comment > .wpd-comment-wrap > .wpd-comment-right {
            background: #FFFAD6
        }

        #wpdcom .wpd-follow:hover i, #wpdcom .wpd-unfollow:hover i, #wpdcom .wpd-comment .wpd-follow-active:hover i {
            color: #00B38F
        }

        #wpdcom .wpdiscuz-readmore {
            cursor: pointer;
            color: #00B38F
        }

        .wpd-custom-field .wcf-pasiv-star, #wpcomm .wpdiscuz-item .wpdiscuz-rating > label {
            color: #DDDDDD
        }

        .wpd-wrapper .wpd-list-item.wpd-active {
            border-top: 3px solid #00B38F
        }

        #wpdcom.wpd-layout-2 .wpd-comment.wpd-reply.wpd-unapproved-comment .wpd-comment-wrap {
            border-left: 3px solid #FFFAD6
        }

        #wpdcom.wpd-layout-3 .wpd-comment.wpd-reply.wpd-unapproved-comment .wpd-comment-right {
            border-left: 1px solid #FFFAD6
        }

        #wpdcom .wpd-prim-button {
            background-color: #07B290;
            color: #FFFFFF
        }

        #wpdcom .wpd_label__check i.wpdicon-on {
            color: #07B290;
            border: 1px solid #83d9c8
        }

        #wpd-bubble-wrapper #wpd-bubble-all-comments-count {
            color: #1DB99A
        }

        #wpd-bubble-wrapper > div {
            background-color: #1DB99A
        }

        #wpd-bubble-wrapper > #wpd-bubble #wpd-bubble-add-message {
            background-color: #1DB99A
        }

        #wpd-bubble-wrapper > #wpd-bubble #wpd-bubble-add-message::before {
            border-left-color: #1DB99A;
            border-right-color: #1DB99A
        }

        #wpd-bubble-wrapper.wpd-right-corner > #wpd-bubble #wpd-bubble-add-message::before {
            border-left-color: #1DB99A;
            border-right-color: #1DB99A
        }

        .wpd-inline-icon-wrapper path.wpd-inline-icon-first {
            fill: #1DB99A
        }

        .wpd-inline-icon-count {
            background-color: #1DB99A
        }

        .wpd-inline-icon-count::before {
            border-right-color: #1DB99A
        }

        .wpd-inline-form-wrapper::before {
            border-bottom-color: #1DB99A
        }

        .wpd-inline-form-question {
            background-color: #1DB99A
        }

        .wpd-inline-form {
            background-color: #1DB99A
        }

        .wpd-last-inline-comments-wrapper {
            border-color: #1DB99A
        }

        .wpd-last-inline-comments-wrapper::before {
            border-bottom-color: #1DB99A
        }

        .wpd-last-inline-comments-wrapper .wpd-view-all-inline-comments {
            background: #1DB99A
        }

        .wpd-last-inline-comments-wrapper .wpd-view-all-inline-comments:hover, .wpd-last-inline-comments-wrapper .wpd-view-all-inline-comments:active, .wpd-last-inline-comments-wrapper .wpd-view-all-inline-comments:focus {
            background-color: #1DB99A
        }

        #wpdcom .ql-snow .ql-tooltip[data-mode="link"]::before {
            content: "Nhập link:"
        }

        #wpdcom .ql-snow .ql-tooltip.ql-editing a.ql-action::after {
            content: "Lưu"
        }

        .comments-area {
            width: auto
        }
    </style>
    <style>
        .invalid-feedback {
            font-size: 0.75rem;
        }
    </style>


    <style>
        .cmt-list {
            display: grid;
            gap: 16px;
        }

        .cmt-item {
            display: grid;
            grid-template-columns: 48px 1fr;
            gap: 12px;
            padding: 14px 12px;
            border: 1px solid #e6e8ec;
            border-radius: 10px;
            background: #fff;
        }

        .cmt-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #f3f5f7 center/60% no-repeat;
            border: 1px solid #e6e8ec;
            /* SVG avatar mặc định */
            background-image: url("data:image/svg+xml;utf8,\
      <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'>\
        <circle cx='32' cy='24' r='14' fill='%23d9dfe5'/>\
        <path d='M8,60c0-13,10-22,24-22s24,9,24,22' fill='%23d9dfe5'/>\
      </svg>");
        }

        .cmt-body {
            min-width: 0;
        }

        .cmt-head {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 4px;
            font-size: 14px;
            line-height: 1.4;
        }

        .cmt-name {
            font-weight: 600;
            color: #111827;
        }

        .cmt-phone {
            font-variant-numeric: tabular-nums;
            color: #6b7280;
            font-size: 12px;
            background: #f1f5f9;
            border-radius: 6px;
            padding: 2px 6px;
        }

        .cmt-time {
            margin-left: auto;
            color: #9ca3af;
            font-size: 12px;
        }

        .cmt-content {
            color: #334155;
            font-size: 14px;
            line-height: 1.6;
            word-break: break-word;
        }

        .cmt-content p {
            margin: 0.4em 0;
        }

        @media (max-width: 576px) {
            .cmt-item {
                grid-template-columns:40px 1fr;
                padding: 12px 10px;
            }

            .cmt-avatar {
                width: 40px;
                height: 40px;
            }
        }
    </style>

    <style>
        @media only screen and (max-width: 640px) {
            #page\#31 {
                font-size: 16px;
            }
        }
    </style>
@endsection


@section('content')

    <main id="tm-main" ng-controller="productDetail">

        <!-- Builder #page -->
        <style class="uk-margin-remove-adjacent">
            @media only screen and (max-width: 640px) {
                #page\#0 {
                    max-width: 80%;
                    margin: 0 auto;
                }
            }

            #page\#0 .uk-thumbnav a {
                border: 1px solid #00c7b8;
                padding: 10px;
            }

            #page\#1 {
                font-size: 30px;
                font-weight: bold;
                color: #294a8e;
            }

            #page\#2 {
                font-size: 27px;
            }

            #page\#2 strong {
                font-size: 38px;
                color: #ed9717;
            }

            #page\#3 {
                font-size: 22px;
            }

            #page\#4 .el-content {
                font-size: 18px;
                line-height: 27px;
            }

            #page\#5 .el-title {
                background: #ed9718;
                width: fit-content;
                padding: 5px 20px;
                border-radius: 50px;
                color: #FFF;
                padding-left: 50px;
                position: absolute;
                font-size: 20px;
                top: -2px;
                transform: translatey(-50%);
                left: 20px;
            }

            #page\#5 {
                border: 2px solid #294a8e;
                padding-top: 10px;
                padding-bottom: 20px;
                width: fit-content;
                padding-right: 40px;
            }

            #page\#6 {
                font-size: 25px;
                font-weight: bold;
            }

            #page\#7 .uk-button {
                background: #e0790d;
                border-radius: 50px;
            }

            #page\#7 .wpcf7-spinner {
                position: absolute;
            }

            #page\#7 .uk-input, #page\#7 .uk-textarea {
                border-radius: 5px;
            }

            #page\#8 > .uk-panel {
                padding: 5px 20px;
                border: 2px solid #1baee4;
                border-radius: 10px;
                padding-bottom: 0;
            }

            #page\#8 .uk-button {
                font-weight: bold;
                font-size: 16px;
                color: #FFF;
            }

            #page\#9 {
                font-size: 24px;
                width: fit-content;
                background: #24558f;
                color: #FFF;
                padding: 5px 20px;
                border-radius: 50px;
                margin: 0 auto;
            }

            #page\#10 .el-title {
                font-size: 15px;
                color: #1baee4;
                position: relative;
                top: -5px;
            }

            #page\#11 .uk-tile {
                background: #ddf3ff;
                padding: 20px;
            }

            #page\#12 {
                padding-bottom: 50px;
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

            #macdinh .wc_email {
                display: none;
            }

            #facebook {
                display: none;
            }

            #facebook.ju-active {
                display: block;
            }

            #page\#13 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #page\#13 .el-meta {
                font-size: 20px;
            }

            #page\#13 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #page\#13 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #page\#13 {
                top: -30px;
            }

            #page\#13 .el-link {
                position: absolute;
                top: 130px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #page\#13:hover .el-link {
                display: block;
            }

            #page\#14 .el-content {
                border-radius: 20px;
            }

            #page\#15 .el-title {
                font-size: 22px;
                font-weight: bold;
            }

            #page\#15 .el-meta {
                font-size: 20px;
            }

            #page\#15 .el-meta strong {
                font-size: 36px;
                color: #ed9717;
            }

            #page\#15 .el-content {
                font-size: 20px;
                text-align: justify;
            }

            #page\#15 {
                top: -30px;
            }

            #page\#15 .el-link {
                position: absolute;
                top: 130px;
                left: 50%;
                transform: translatex(-50%);
                border-radius: 50px;
                display: none;
                transition: 0.3s all;
            }

            #page\#15:hover .el-link {
                display: block;
            }

            #page\#16 .el-content {
                border-radius: 20px;
            }
        </style>


        <div class="uk-section-default uk-section uk-padding-remove-vertical">


            <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                <div class="uk-width-1-1">


                    <div uk-slideshow="ratio: 1920:643;" class="uk-margin uk-visible@m">
                        <div class="uk-position-relative">

                            <div class="uk-slideshow-items">
                                <div class="el-item">


                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $product->banner->path ?? '' }} 768w,
                                                , {{ $product->banner->path ?? '' }} 1920w,
                                               {{ $product->banner->path ?? '' }} 4000w"
                                                sizes="(max-aspect-ratio: 4000/1350) 296vh">
                                        <img decoding="async"
                                             src="{{ $product->banner->path ?? '' }}"
                                             width="4000" height="1350" class="el-image" alt loading="lazy" uk-cover>
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

                    <div uk-slideshow="ratio: 415:416;" class="uk-margin-remove-vertical uk-hidden@m">
                        <div class="uk-position-relative">

                            <div class="uk-slideshow-items">
                                <div class="el-item">


                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $product->banner_mobile->path ?? '' }} 768w,
                                                 {{ $product->banner_mobile->path ?? '' }} 1000w"
                                                sizes="(max-aspect-ratio: 1000/1000) 100vh">
                                        <img decoding="async"
                                             src="{{ $product->banner_mobile->path ?? '' }}"
                                             width="1000" height="1000" class="el-image" alt loading="lazy" uk-cover>
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
                                <li property="itemListElement" typeof="ListItem"><a href="{{ route('front.getProductList', $product->category->slug ?? '') }}"
                                                                                    property="item"
                                                                                    typeof="WebPage"><span
                                            property="name">{{ $product->category->name ?? '' }}</span></a>
                                    <meta property="position" content="2">
                                </li>
                                <li property="itemListElement" typeof="ListItem"><span property="name"
                                                                                       aria-current="page">{{ $product->name }}</span>
                                    <meta property="position" content="3">
                                </li>
                            </ul>
                        </nav>


                    </div>
                </div>
                <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                    <div class="uk-width-expand@m">


                        <div uk-slideshow="ratio: 393:380;" id="page#0" class="uk-margin">
                            <div class="uk-position-relative">

                                <div class="uk-slideshow-items">
                                    <div class="el-item">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="{{ $product->image->path ?? '' }} 768w,
                                                     {{ $product->image->path ?? '' }} 1000w"
                                                    sizes="(max-aspect-ratio: 1000/1000) 100vh">
                                            <img decoding="async"
                                                 src="{{ $product->image->path ?? '' }}"
                                                 width="1000" height="1000" class="el-image" alt loading="lazy"
                                                 uk-cover>
                                        </picture>
                                    </div>

                                    @foreach($product->galleries as $gallery)
                                        <div class="el-item">
                                            <picture>
                                                <source type="image/webp"
                                                        srcset="{{ $gallery->image->path ?? '' }} 768w,
                                                        {{ $gallery->image->path ?? '' }} 1000w"
                                                        sizes="(max-aspect-ratio: 1000/1000) 100vh">
                                                <img decoding="async"
                                                     src="{{ $gallery->image->path ?? '' }}"
                                                     width="1000" height="1000" class="el-image" alt loading="lazy"
                                                     uk-cover>
                                            </picture>
                                        </div>
                                    @endforeach

                                </div>

                                <div class="uk-visible@s"><a
                                        class="el-slidenav uk-position-medium uk-position-center-left" href="#"
                                        uk-slidenav-previous uk-slideshow-item="previous"></a><a
                                        class="el-slidenav uk-position-medium uk-position-center-right" href="#"
                                        uk-slidenav-next uk-slideshow-item="next"></a></div>

                            </div>


                            <ul class="el-nav uk-slideshow-nav uk-thumbnav uk-flex-nowrap uk-flex-center uk-margin-top"
                                uk-margin>

                                <li uk-slideshow-item="0">
                                    <a href="#">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="{{ $product->image->path ?? '' }} 100w,
                                                    {{ $product->image->path ?? '' }} 200w"
                                                    sizes="(min-width: 100px) 100px">
                                            <img decoding="async"
                                                 src="{{ $product->image->path ?? '' }}"
                                                 width="100" height="100" alt loading="lazy">
                                        </picture>
                                    </a>
                                </li>

                                @foreach($product->galleries as $keyGal => $gallery)
                                    <li uk-slideshow-item="{{ $keyGal + 1 }}">
                                        <a href="#">
                                            <picture>
                                                <source type="image/webp"
                                                        srcset="{{ $gallery->image->path ?? '' }} 100w,
                                                         {{ $gallery->image->path ?? '' }} 200w"
                                                        sizes="(min-width: 100px) 100px">
                                                <img decoding="async"
                                                     src="{{ $gallery->image->path ?? '' }}"
                                                     width="100" height="100" alt loading="lazy">
                                            </picture>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>

                        </div>


                    </div>
                    <div class="uk-width-3-5@m">


                        <h1 id="page#1"> {{ $product->name }} </h1>
                        <div class="uk-text-primary" id="page#2"> Giá:
                            @if($product->price > 0)
                                <strong>{{ formatCurrency( $product->price)  }} đ</strong>
                            @else
                                <strong>Liên hệ</strong>
                            @endif

                        </div>
                        <div class="uk-text-primary uk-margin-remove-bottom" id="page#3"><strong>Mô tả sản phẩm</strong>
                        </div>
                        <div class="uk-position-relative uk-margin-remove-vertical" style="top: 30px;">
                            <picture>
                                <source type="image/webp"
                                        srcset="/site/img/Vector-Smart-Object-3bd24ec0.webp 35w"
                                        sizes="(min-width: 35px) 35px">
                                <img decoding="async"
                                     src="/site/img/Vector-Smart-Object-4a0cbf4e.png"
                                     width="35" height="23" class="el-image" alt loading="lazy">
                            </picture>

                        </div>
                        <ul class="uk-list uk-margin-remove-top uk-text-justify" id="page#4">


                            <li class="el-item">

                                <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap" uk-grid>
                                    <div class="uk-width-auto">
                                        <picture>
                                            <source type="image/webp"
                                                    srcset="/site/img/Vector-Smart-Object-3bd24ec0.webp 35w"
                                                    sizes="(min-width: 35px) 35px">
                                            <img decoding="async"
                                                 src="/site/img/Vector-Smart-Object-4a0cbf4e.png"
                                                 width="35" height="23" class="el-image" alt loading="lazy">
                                        </picture>
                                    </div>
                                    <div>
                                        <div class="el-content uk-panel"><p><strong>Chi tiết:</strong></p></div>
                                    </div>
                                </div>

                            </li>
                            <li class="el-item">
                                <div class="el-content uk-panel">
                                    {{ $product->intro }}
                                </div>
                            </li>


                        </ul>
                        @if($product->promotions && count($product->promotions))
                            <div class="uk-panel uk-margin-remove-first-child uk-margin-medium" id="page#5">
                                <h3 class="el-title uk-margin-top uk-margin-remove-bottom"> Khuyến mại đặc biệt </h3>

                                <div class="el-content uk-panel uk-margin-top">
                                    <ul>
                                        @foreach($product->promotions as $promotion)
                                            <li>{{ $promotion['title'] }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif


                        <div>
                            <style>
                                #button-list .uk-button {
                                    border-radius: 50px;
                                    text-transform: none;
                                    line-height: 44px;
                                    font-size: 19px;
                                    background: #294a8e;
                                }

                                #button-list .uk-button.add_cart {
                                    background: #ed9718;
                                }

                                #button-incret input {
                                    border-left: 1px solid #FFF !important;
                                    border-right: 1px solid #FFF !important;
                                }

                            </style>
                            <div id="button-list" class="uk-child-width-auto uk-grid-small" uk-grid data-id="43696" ng-cloak>
                                <div class="uk-width-1-5@s uk-width-auto">
                                    <div id="button-incret" class="uk-flex uk-flex-middle">
                                        <span onclick="plus()">+</span><input type="number" min="0" value="0"
                                                                              name="quantity"
                                                                              class="uk-input"><span
                                            onclick="minus()">-</span>
                                    </div>
                                </div>
                                <div class="uk-panel">
                                    <button class="uk-button uk-button-primary add_cart "
                                            ng-click="addToCart({{ $product->id }})">Thêm giỏ hàng
                                    </button>

                                    <a href="{{ route('cart.index') }}" class="added_to_cart wc-forward" title="Xem giỏ hàng" ng-if="addCartSuccess">Xem giỏ hàng</a>
                                </div>
                                <div>
                                    <button class="uk-button uk-button-primary" ng-click="buyNow({{ $product->id }}, 1)">Mua ngay
                                    </button>
                                </div>
                                <div>
                                    <a class="uk-button uk-button-secondary"
                                       href="{{ route('front.getStores') }}">Điểm bán</a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>


        </div>


        {{--         khối body ở trên--}}
        <div id="page#12" class="uk-section-default uk-section uk-padding-remove-vertical">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                    <div class="uk-width-3-4@m uk-visible@m">
                        {!! $product->body !!}


                    </div>


                    <div class="uk-width-1-4@m">


                        <div class="uk-panel uk-margin">
                            <div
                                class="uk-visible@s uk-grid tm-grid-expand uk-grid-column-medium uk-child-width-1-1 uk-grid-margin">
                                <div class="uk-grid-item-match uk-width-1-1" id="page#8">


                                    <div class="uk-panel uk-width-1-1" ng-cloak>


                                        <div class="uk-text-primary uk-margin uk-text-center" id="page#6"> Hỏi đáp
                                            chuyên gia
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
                                        <div id="page#7">
                                            <div class="wpcf7 no-js" id="wpcf7-f40560-o1" lang="vi" dir="ltr">
                                                <div class="screen-reader-response"><p role="status" aria-live="polite"
                                                                                       aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form class="wpcf7-form init" aria-label="Form liên hệ"  id="sendContactForm"
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
                                                                                                        name="emaill"/></span>
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
                                                                          data-name="your-message"><textarea cols="3"
                                                                                                             rows="4"
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
                            <div class="uk-visible@s uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                                <div class="uk-grid-item-match uk-width-1-1" id="page#11">
                                    <div class="uk-tile-default uk-tile  uk-tile-xsmall">


                                        <div class="uk-text-center" id="page#9"> Bài viết liên quan</div>
                                        <div id="page#10" class="uk-margin">
                                            <div class="uk-grid uk-child-width-1-1 uk-grid-row-small uk-grid-match"
                                                 uk-grid>

                                                @foreach($blogs as $blog)
                                                    <div>
                                                        <div class="el-item uk-grid-item-match">
                                                            <a class="uk-panel uk-flex-stretch uk-link-toggle"
                                                               href="{{ route('front.blogDetail', $blog->slug) }}">
                                                                <div class="uk-grid-column-small" uk-grid>
                                                                    <div class="uk-width-auto">


                                                                        <picture>
                                                                            <source type="image/webp"
                                                                                    srcset="{{ $blog->image->path ?? '' }} 116w,
                                                                                     {{ $blog->image->path ?? '' }} 232w"
                                                                                    sizes="(min-width: 116px) 116px">
                                                                            <img decoding="async"
                                                                                 src="{{ $blog->image->path ?? '' }}"
                                                                                 width="116" height="76" alt loading="lazy"
                                                                                 class="el-image">
                                                                        </picture>


                                                                    </div>
                                                                    <div
                                                                        class="uk-width-expand uk-margin-remove-first-child">


                                                                        <h3 class="el-title uk-margin-top uk-margin-remove-bottom">
                                                                           {{ $blog->name }} </h3>


                                                                    </div>
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


        </div>
        {{--         end khối body ở trên--}}





        {{--        khối body ở dươi--}}
        <div class="uk-visible@m uk-section-default uk-section uk-padding-remove-vertical">
            <div class="uk-container">
                <div class="uk-visible@m uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1 uk-visible@m">

                        {!! $product->body_2 !!}

                    </div>

                    <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                        <div class="uk-width-1-1">
                            <div class="uk-panel uk-margin">
                                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                                    <div class="uk-width-1-1">

                                        <h2 class="uk-text-primary uk-margin-remove-bottom uk-text-center">
                                            <strong>Đối tác của chúng tôi</strong>
                                        </h2>


                                        @if(@$partners[1])
                                            <div class="uk-panel uk-text-lead uk-margin-medium uk-margin-remove-top uk-margin-remove-bottom uk-text-center" id="page#31"><p><strong>Hệ thống các shop mẹ bé</strong></p></div>


                                            <div class="uk-margin uk-slider" uk-slider="autoplay: 1;  autoplayInterval: 3000;" id="page#24">
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


                                            <div class="uk-panel uk-text-lead uk-margin-medium uk-margin-remove-top uk-margin-remove-bottom uk-text-center" id="page#31"><p><strong>Hệ
                                                        thống nhà thuốc lớn trên toàn quốc</strong></p></div>


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
                    </div>

                </div>


            </div>
        </div>
        {{--     end   khối body ở dươi--}}


        <div class="uk-hidden@l uk-section-default uk-section uk-padding-remove-top">
            <div class="uk-container">
                {!! $product->body !!}
            </div>
            <div class="uk-container">
                {!! $product->body_2 !!}
            </div>

            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">
                        <div class="uk-panel uk-margin">
                            <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                                <div class="uk-width-1-1">

                                    <h2 class="uk-text-primary uk-margin-remove-bottom uk-text-center">
                                        <strong>Đối tác của chúng tôi</strong>
                                    </h2>


                                    @if(@$partners[1])
                                        <div class="uk-panel uk-text-lead uk-margin-medium uk-margin-remove-top uk-margin-remove-bottom uk-text-center" id="page#31"><p><strong>Hệ thống các shop mẹ bé</strong></p></div>


                                        <div class="uk-margin uk-slider" uk-slider="autoplay: 1;  autoplayInterval: 3000;" id="page#24">
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


                                        <div class="uk-panel uk-text-lead uk-margin-medium uk-margin-remove-top uk-margin-remove-bottom uk-text-center" id="page#31"><p><strong>Hệ
                                                    thống nhà thuốc lớn trên toàn quốc</strong></p></div>


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
                </div>
            </div>

        </div>





        <div class="uk-section-default uk-section">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <h2 class="uk-text-primary uk-text-bold uk-margin-remove-bottom uk-text-center"> Đánh giá sản
                            phẩm </h2>
                        <div class="uk-panel uk-margin">
                            <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                                <div class="uk-width-1-1">


                                    <div id="binhluan" class="uk-margin uk-text-center">
                                        <div class="uk-flex-middle uk-grid-collapse uk-child-width-auto uk-flex-center"
                                             uk-grid>

                                            <div class="el-item">


                                                <a class="el-content uk-button uk-button-secondary" href="#macdinh"
                                                   uk-scroll>

                                                    Bình luận mặc định

                                                </a>

                                            </div>


                                            <div class="el-item">


                                                <a class="el-content uk-button uk-button-primary" href="#facebook"
                                                   uk-scroll>

                                                    Bình luận Facebook

                                                </a>

                                            </div>


                                        </div>
                                    </div>
                                    <div id="macdinh" class="ju-active uk-margin">
                                        <div class="wpdiscuz_top_clearing"></div>
                                        <div id='comments' class='comments-area'>
                                            <div id='respond'
                                                 style='width: 0;height: 0;clear: both;margin: 0;padding: 0;'></div>
                                            <div id="wpdcom"
                                                 class="wpdiscuz_unauth wpd-default wpd-layout-1 wpd-comments-open">
                                                <div class="wc_social_plugin_wrapper">
                                                </div>
                                                <div class="wpd-form-wrap">
                                                    <div class="wpd-form-head">
                                                        <div class="wpd-sbs-toggle">
                                                            <i class="far fa-envelope"></i> <span
                                                                class="wpd-sbs-title">Bình luận</span>
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                        <div class="wpd-auth">
                                                            <div class="wpd-login">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpd-form wpd-form-wrapper wpd-main-form-wrapper"
                                                         id='wpd-main-form-wrapper-0_0'>
                                                        <form enctype="multipart/form-data"
                                                              data-uploading="false"
                                                              class="wpd_comm_form wpd_main_comm_form">
                                                            <div class="wpd-field-comment">
                                                                <div class="wpdiscuz-item wc-field-textarea">
                                                                    <div class="wpdiscuz-textarea-wrap ">
                                                                        <div class="wpd-avatar">
                                                                            <img alt='guest'
                                                                                 src='https://secure.gravatar.com/avatar/f501928f1b394df2e46d17f0359add26?s=56&amp;d=mm&amp;r=g'
                                                                                 srcset='https://secure.gravatar.com/avatar/f501928f1b394df2e46d17f0359add26?s=112&#038;d=mm&#038;r=g 2x'
                                                                                 class='avatar avatar-56 photo'
                                                                                 height='56' width='56'
                                                                                 decoding='async'/></div>
                                                                        <div id="wpd-editor-wraper-0_0"
                                                                             style="display: none;">
                                                                            <div id="wpd-editor-char-counter-0_0"
                                                                                 class="wpd-editor-char-counter"></div>
                                                                            <label style="display: none;"
                                                                                   for="wc-textarea-0_0">Label</label>
                                                                            <textarea id="wc-textarea-0_0"
                                                                                      name="wc_comment"

                                                                                      class="wc_comment wpd-field"></textarea>


                                                                            <div id="wpd-editor-0_0"></div>
                                                                            <div id="wpd-editor-toolbar-0_0">
                                                                                <button title="In đậm"
                                                                                        class="ql-bold"></button>
                                                                                <button title="In nghiêng"
                                                                                        class="ql-italic"></button>
                                                                                <button title="Gạch dưới"
                                                                                        class="ql-underline"></button>
                                                                                <button title="Đình công"
                                                                                        class="ql-strike"></button>
                                                                                <button title="Danh sách đã xếp thứ tự"
                                                                                        class="ql-list"
                                                                                        value='ordered'></button>
                                                                                <button title="Danh sách chưa sắp xếp"
                                                                                        class="ql-list"
                                                                                        value='bullet'></button>
                                                                                <button title="Trích dẫn"
                                                                                        class="ql-blockquote"></button>
                                                                                <button title="Code Block"
                                                                                        class="ql-code-block"></button>
                                                                                <button title="Link"
                                                                                        class="ql-link"></button>
                                                                                <button title="Mã nguồn"
                                                                                        class="ql-sourcecode"
                                                                                        data-wpde_button_name='sourcecode'>
                                                                                    {}
                                                                                </button>
                                                                                <button title="Spoiler"
                                                                                        class="ql-spoiler"
                                                                                        data-wpde_button_name='spoiler'>
                                                                                    [+]
                                                                                </button>
                                                                                <div class="wpd-editor-buttons-right">
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                    <div class="wpd-form-foot" style='display:none;'>
                                                                        <div class="wpd-form-row">
                                                                            <div class="invalid-feedback d-block error"
                                                                                 role="alert"
                                                                                 ng-if="errors && errors['formReview.content_text']">
                                                                                <span>
                                                                                    <% errors['formReview.content_text'][0] %>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="wpd-form-foot" style='display:none;'>
                                                                <div class="wpdiscuz-textarea-foot">
                                                                    <div class="wpdiscuz-button-actions"></div>
                                                                </div>
                                                                <div class="wpd-form-row">
                                                                    <div class="wpd-form-col-left">
                                                                        <div
                                                                            class="wpdiscuz-item wc_name-wrapper wpd-has-icon">
                                                                            <div class="wpd-field-icon"><i
                                                                                    class="fas fa-user"></i>
                                                                            </div>
                                                                            <input id="wc_name-0_0" value=""
                                                                                   required='required'
                                                                                   aria-required='true'
                                                                                   class="wc_name wpd-field" type="text"
                                                                                   name="wc_name"
                                                                                   ng-model="formReview.name"
                                                                                   placeholder="Tên*"
                                                                                   maxlength="50" pattern='.{3,50}'
                                                                                   title="">
                                                                            <div class="invalid-feedback d-block error"
                                                                                 role="alert"
                                                                                 ng-if="errors && errors['formReview.name']">
                                                                                <span>
                                                                                    <% errors['formReview.name'][0] %>
                                                                                </span>
                                                                            </div>
                                                                            <label for="wc_name-0_0"
                                                                                   class="wpdlb">Tên*</label>
                                                                        </div>
                                                                        <div
                                                                            class="wpdiscuz-item wc_email-wrapper wpd-has-icon">
                                                                            <div class="wpd-field-icon"><i
                                                                                    class="fas fa-at"></i>
                                                                            </div>
                                                                            <input id="wc_email-0_0" value=""
                                                                                   class="wc_email wpd-field"
                                                                                   type="email"
                                                                                   name="wc_email"
                                                                                   placeholder="Email"/>
                                                                            <label for="wc_email-0_0"
                                                                                   class="wpdlb">Email</label>
                                                                        </div>
                                                                        <div
                                                                            class="wpdiscuz-item custom_field_630d71dd9cf34-wrapper wpd-has-icon">
                                                                            <div class="wpd-field-icon"><i
                                                                                    style="opacity: 0.8;"
                                                                                    class="fas fa-phone-alt"></i>
                                                                            </div>
                                                                            <input id="custom_field_630d71dd9cf34-0_0"
                                                                                   required='required'
                                                                                   aria-required='true'
                                                                                   class="custom_field_630d71dd9cf34 wpd-field wpd-field-number"
                                                                                   type="text"
                                                                                   name="custom_field_630d71dd9cf34"
                                                                                   value=""
                                                                                   ng-model="formReview.phone"
                                                                                   placeholder="Số điện thoại*">
                                                                            <div class="invalid-feedback d-block error"
                                                                                 role="alert"
                                                                                 ng-if="errors && errors['formReview.phone']">
                                                                                <span>
                                                                                    <% errors['formReview.phone'][0] %>
                                                                                </span>
                                                                            </div>
                                                                            <label for="custom_field_630d71dd9cf34-0_0"
                                                                                   class="wpdlb">Số điện thoại*</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpd-form-col-right">
                                                                        <div class="wc-field-submit">
                                                                            <label class="wpd_label"
                                                                                   wpd-tooltip="Thông báo nếu có phản hồi mới cho bình luận này">
                                                                                <input
                                                                                    id="wc_notification_new_comment-0_0"
                                                                                    class="wc_notification_new_comment-0_0 wpd_label__checkbox"
                                                                                    value="comment" type="checkbox"
                                                                                    name="wpdiscuz_notification_type"/>
                                                                                <span class="wpd_label__text">
                                <span class="wpd_label__check">
                                    <i class="fas fa-bell wpdicon wpdicon-on"></i>
                                    <i class="fas fa-bell-slash wpdicon wpdicon-off"></i>
                                </span>
                            </span>
                                                                            </label>
                                                                            <input id="wpd-field-submit-0_0"
                                                                                   class="wc_comm_submit wpd_not_clicked wpd-prim-button"
                                                                                   type="button"
                                                                                   ng-click="submitReview()"
                                                                                   name="" value="Đăng bình luận"
                                                                                   aria-label="Đăng bình luận"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="wpdiscuz_hidden_secondary_form" style="display: none;">
                                                        <div
                                                            class="wpd-form wpd-form-wrapper wpd-secondary-form-wrapper"
                                                            id='wpd-secondary-form-wrapper-wpdiscuzuniqueid'
                                                            style='display: none;'>
                                                            <div class="wpd-secondary-forms-social-content"></div>
                                                            <div class="clearfix"></div>
                                                            <form enctype="multipart/form-data"
                                                                  data-uploading="false"
                                                                  class="wpd_comm_form wpd-secondary-form-wrapper">
                                                                <div class="wpd-field-comment">
                                                                    <div class="wpdiscuz-item wc-field-textarea">
                                                                        <div class="wpdiscuz-textarea-wrap ">
                                                                            <div class="wpd-avatar">
                                                                                <img alt='guest'
                                                                                     src='https://secure.gravatar.com/avatar/12e8be8d08b804dde302cb3627588a4d?s=56&amp;d=mm&amp;r=g'
                                                                                     srcset='https://secure.gravatar.com/avatar/12e8be8d08b804dde302cb3627588a4d?s=112&#038;d=mm&#038;r=g 2x'
                                                                                     class='avatar avatar-56 photo'
                                                                                     height='56' width='56'
                                                                                     decoding='async'/></div>
                                                                            <div id="wpd-editor-wraper-wpdiscuzuniqueid"
                                                                                 style="display: none;">
                                                                                <div
                                                                                    id="wpd-editor-char-counter-wpdiscuzuniqueid"
                                                                                    class="wpd-editor-char-counter"></div>
                                                                                <label style="display: none;"
                                                                                       for="wc-textarea-wpdiscuzuniqueid">Label</label>
                                                                                <textarea
                                                                                    id="wc-textarea-wpdiscuzuniqueid"
                                                                                    name="wc_comment"
                                                                                    class="wc_comment wpd-field"></textarea>
                                                                                <div
                                                                                    id="wpd-editor-wpdiscuzuniqueid"></div>
                                                                                <div
                                                                                    id="wpd-editor-toolbar-wpdiscuzuniqueid">
                                                                                    <button title="In đậm"
                                                                                            class="ql-bold"></button>
                                                                                    <button title="In nghiêng"
                                                                                            class="ql-italic"></button>
                                                                                    <button title="Gạch dưới"
                                                                                            class="ql-underline"></button>
                                                                                    <button title="Đình công"
                                                                                            class="ql-strike"></button>
                                                                                    <button
                                                                                        title="Danh sách đã xếp thứ tự"
                                                                                        class="ql-list"
                                                                                        value='ordered'></button>
                                                                                    <button
                                                                                        title="Danh sách chưa sắp xếp"
                                                                                        class="ql-list"
                                                                                        value='bullet'></button>
                                                                                    <button title="Trích dẫn"
                                                                                            class="ql-blockquote"></button>
                                                                                    <button title="Code Block"
                                                                                            class="ql-code-block"></button>
                                                                                    <button title="Link"
                                                                                            class="ql-link"></button>
                                                                                    <button title="Mã nguồn"
                                                                                            class="ql-sourcecode"
                                                                                            data-wpde_button_name='sourcecode'>
                                                                                        {}
                                                                                    </button>
                                                                                    <button title="Spoiler"
                                                                                            class="ql-spoiler"
                                                                                            data-wpde_button_name='spoiler'>
                                                                                        [+]
                                                                                    </button>
                                                                                    <div
                                                                                        class="wpd-editor-buttons-right">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpd-form-foot" style='display:none;'>
                                                                    <div class="wpdiscuz-textarea-foot">
                                                                        <div class="wpdiscuz-button-actions"></div>
                                                                    </div>
                                                                    <div class="wpd-form-row">
                                                                        <div class="wpd-form-col-left">
                                                                            <div
                                                                                class="wpdiscuz-item wc_name-wrapper wpd-has-icon">
                                                                                <div class="wpd-field-icon"><i
                                                                                        class="fas fa-user"></i>
                                                                                </div>
                                                                                <input id="wc_name-wpdiscuzuniqueid"
                                                                                       value="" required='required'
                                                                                       aria-required='true'
                                                                                       class="wc_name wpd-field"
                                                                                       type="text"
                                                                                       name="wc_name"
                                                                                       placeholder="Tên*"
                                                                                       maxlength="50" pattern='.{3,50}'
                                                                                       title="">
                                                                                <label for="wc_name-wpdiscuzuniqueid"
                                                                                       class="wpdlb">Tên*</label>
                                                                            </div>
                                                                            <div
                                                                                class="wpdiscuz-item wc_email-wrapper wpd-has-icon">
                                                                                <div class="wpd-field-icon"><i
                                                                                        class="fas fa-at"></i>
                                                                                </div>
                                                                                <input id="wc_email-wpdiscuzuniqueid"
                                                                                       value=""
                                                                                       class="wc_email wpd-field"
                                                                                       type="email"
                                                                                       name="wc_email"
                                                                                       placeholder="Email"/>
                                                                                <label for="wc_email-wpdiscuzuniqueid"
                                                                                       class="wpdlb">Email</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpd-form-col-right">
                                                                            <div class="wc-field-submit">
                                                                                <label class="wpd_label"
                                                                                       wpd-tooltip="Thông báo nếu có phản hồi mới cho bình luận này">
                                                                                    <input
                                                                                        id="wc_notification_new_comment-wpdiscuzuniqueid"
                                                                                        class="wc_notification_new_comment-wpdiscuzuniqueid wpd_label__checkbox"
                                                                                        value="comment"
                                                                                        type="checkbox"
                                                                                        name="wpdiscuz_notification_type"/>
                                                                                    <span class="wpd_label__text">
                                <span class="wpd_label__check">
                                    <i class="fas fa-bell wpdicon wpdicon-on"></i>
                                    <i class="fas fa-bell-slash wpdicon wpdicon-off"></i>
                                </span>
                            </span>
                                                                                </label>
                                                                                <input
                                                                                    id="wpd-field-submit-wpdiscuzuniqueid"
                                                                                    class="wc_comm_submit wpd_not_clicked wpd-prim-button"
                                                                                    type="submit"
                                                                                    name="submit"
                                                                                    value="Đăng bình luận"
                                                                                    aria-label="Đăng bình luận"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" class="wpdiscuz_unique_id"
                                                                       value="wpdiscuzuniqueid"
                                                                       name="wpdiscuz_unique_id">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>if (window.commentform) {
                                                        commentform.removeAttribute("novalidate")
                                                    }</script>
                                                <div id="wpd-threads" class="wpd-thread-wrapper">
                                                    <div class="wpd-thread-head">
                                                        <div class="wpd-thread-info "
                                                             data-comments-count="0">
                                                            <span class='wpdtc'
                                                                  title='{{ $reviews->count() }}'>{{ $reviews->count() }}</span>
                                                            Góp ý
                                                        </div>
                                                        <div class="wpd-space"></div>
                                                        <div class="wpd-thread-filter">
                                                        </div>
                                                    </div>
                                                    <div class="wpd-comment-info-bar">

                                                        <div class="wpd-current-view"><i
                                                                class="fas fa-quote-left"></i> Phản hồi nội tuyến
                                                        </div>


                                                        <div class="wpd-filter-view-all">Xem tất cả bình luận</div>
                                                    </div>
                                                    <div class="wpd-thread-list">
                                                        <div class="cmt-list">
                                                            @forelse($reviews as $review)
                                                                @php
                                                                    $digits = preg_replace('/\D+/', '', $review->user_phone ?? '');
                                                                    if (strlen($digits) >= 7) {
                                                                        // 3 số đầu + 'xxx' + 4 số cuối
                                                                        $masked = substr($digits, 0, 3) . 'xxx' . substr($digits, -2);
                                                                    } elseif (strlen($digits) >= 5) {
                                                                        // Số ngắn hơn thì fallback: 2 số đầu + 'x..' + 2 số cuối
                                                                        $masked = substr($digits, 0, 2) . str_repeat('x', strlen($digits) - 4) . substr($digits, -2);
                                                                    } else {
                                                                        // quá ngắn thì để nguyên / hoặc thay bằng '***'
                                                                        $masked = $digits;
                                                                    }
                                                                    $safeHtml = $review->content;
                                                                @endphp

                                                                <article class="cmt-item">
                                                                    <div class="cmt-avatar" aria-hidden="true"></div>
                                                                    <div class="cmt-body">
                                                                        <div class="cmt-head">
                                                                            <span
                                                                                class="cmt-name">{{ $review->user_name }}</span>
                                                                            <span class="cmt-phone">{{ $masked }}</span>
                                                                            <time class="cmt-time"
                                                                            >
                                                                                {{ $review->created_at->diffForHumans() }}
                                                                            </time>
                                                                        </div>
                                                                        <div class="cmt-content">{!! $safeHtml !!}</div>
                                                                    </div>
                                                                </article>
                                                            @empty
                                                                <p>Chưa có góp ý nào.</p>
                                                            @endforelse
                                                        </div>

                                                        <div class="wpdiscuz-comment-pagination">
                                                            {{-- Tuỳ bạn nhúng paginate ở đây --}}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div id="wpdiscuz-loading-bar"
                                             class="wpdiscuz-loading-bar-unauth"></div>
                                        <div id="wpdiscuz-comment-message"
                                             class="wpdiscuz-comment-message-unauth"></div>
                                    </div>
                                    <div class="uk-panel uk-margin">
                                        <div id="facebook"
                                             class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                                            <div class="uk-width-1-1">


                                                <div>
                                                    <div id="fb-root"></div>
                                                    <script async defer crossorigin="anonymous"
                                                            src="../../connect.facebook.net/vi_VN/sdk.js#xfbml=1&#038;version=v14.0&#038;appId=1593586247557287&#038;autoLogAppEvents=1"
                                                            nonce="YDdP67BV"></script>
                                                </div>
                                                <div class="uk-panel uk-margin">
                                                    <div class="fb-comments"
                                                         data-href="https://kutieskin.vn/sp/kem-boi-tuti-kutieskin-mama"
                                                         data-width="100%" data-numposts="5"></div>
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


        </div>



        <div class="uk-section-default uk-section">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
                    <div class="uk-width-1-1">


                        <h2 class="uk-text-primary uk-text-bold uk-text-center"> Sản phẩm liên quan </h2>


                    </div>
                </div>
            </div>


        </div>
        <div class="uk-section-default uk-section">


            <div class="uk-container">
                <div class="uk-grid tm-grid-expand uk-grid-margin" uk-grid>
                    @foreach($productsLq as $productLq)
                        <div class="uk-width-1-2@m">


                            <div class="uk-panel uk-margin-remove-first-child uk-margin uk-text-center" id="page#13">


                                <picture>
                                    <source type="image/webp"
                                            srcset="{{ $productLq->image->path ?? '' }} 170w"
                                            sizes="(min-width: 170px) 170px">
                                    <img decoding="async"
                                         src="{{ $productLq->image->path ?? '' }}"
                                         width="170"
                                         height="288" alt loading="lazy" class="el-image">
                                </picture>


                                <h3 class="el-title uk-text-primary uk-margin-top uk-margin-remove-bottom">{{ $productLq->name }} </h3>
                                <div class="el-meta uk-text-meta uk-text-primary uk-margin-top">
                                    Giá:
                                    @if($productLq->price > 0)
                                        <strong>{{ formatCurrency($productLq->price) }}đ</strong>
                                    @else
                                        <strong>Liên hệ</strong>
                                    @endif

                                </div>


                                <div class="el-content uk-panel uk-margin-top">
                                    <p>
                                        {{ $productLq->intro }}
                                    </p>
                                </div>


                            </div>
                            <div id="page#14" class="uk-position-relative uk-margin uk-text-center" style="top: -30px;">
                                <div class="uk-flex-middle uk-grid-small uk-child-width-auto uk-flex-center" uk-grid>

                                    <div class="el-item">


                                        <a class="el-content uk-button uk-button-secondary"
                                           href="{{ route('front.getProductDetail', $productLq->slug ) }}">

                                            Xem chi tiết

                                        </a>

                                    </div>


                                    <div class="el-item">


                                        <a class="el-content uk-button uk-button-primary"      ng-click="addToCart({{ $productLq->id }}, 1)"
                                           href="javascript:void(0)">

                                            Thêm giỏ hàng

                                        </a>

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
    <script type="text/javascript" id="wpdiscuz-combo-js-js-extra">
        /* <![CDATA[ */
        var wpdiscuzAjaxObj = {
            "wc_hide_replies_text": "\u1ea8n tr\u1ea3 l\u1eddi",
            "wc_show_replies_text": "Xem tr\u1ea3 l\u1eddi",
            "wc_msg_required_fields": "H\u00e3y \u0111i\u1ec1n \u0111\u1ee7 th\u00f4ng tin cho c\u00e1c tr\u01b0\u1eddng b\u1eaft bu\u1ed9c",
            "wc_invalid_field": "M\u1ed9t s\u1ed1 gi\u00e1 tr\u1ecb tr\u01b0\u1eddng kh\u00f4ng h\u1ee3p l\u1ec7",
            "wc_error_empty_text": "h\u00e3y \u0111i\u1ec1n v\u00e0o tr\u01b0\u1eddng n\u00e0y \u0111\u1ec3 b\u00ecnh lu\u1eadn",
            "wc_error_url_text": "url kh\u00f4ng h\u1ee3p l\u1ec7",
            "wc_error_email_text": "\u0111\u1ecba ch\u1ec9 email kh\u00f4ng h\u1ee3p l\u1ec7",
            "wc_invalid_captcha": "M\u00e3 Captcha kh\u00f4ng h\u1ee3p l\u1ec7",
            "wc_login_to_vote": "B\u1ea1n ph\u1ea3i \u0111\u0103ng nh\u1eadp \u0111\u1ec3 b\u00ecnh ch\u1ecdn.",
            "wc_deny_voting_from_same_ip": "B\u1ea1n kh\u00f4ng \u0111\u01b0\u1ee3c ph\u00e9p b\u00ecnh ch\u1ecdn cho b\u00ecnh lu\u1eadn n\u00e0y",
            "wc_self_vote": "B\u1ea1n kh\u00f4ng th\u1ec3 b\u00ecnh ch\u1ecdn cho b\u00ecnh lu\u1eadn c\u1ee7a m\u00ecnh",
            "wc_vote_only_one_time": "B\u1ea1n \u0111\u00e3 b\u00ecnh ch\u1ecdn cho b\u00ecnh lu\u1eadn n\u00e0y",
            "wc_voting_error": "L\u1ed7i khi \u0111\u00e1nh gi\u00e1",
            "wc_comment_edit_not_possible": "Xin l\u1ed7i, b\u1ea1n kh\u00f4ng th\u1ec3 s\u1eeda b\u00ecnh lu\u1eadn n\u00e0y n\u1eefa",
            "wc_comment_not_updated": "Xin l\u1ed7i, b\u00ecnh lu\u1eadn ch\u01b0a \u0111\u01b0\u1ee3c c\u1eadp nh\u1eadt",
            "wc_comment_not_edited": "B\u1ea1n ch\u01b0a th\u1ef1c hi\u1ec7n b\u1ea5t k\u1ef3 thay \u0111\u1ed5i n\u00e0o",
            "wc_msg_input_min_length": "\u0110\u1ea7u v\u00e0o qu\u00e1 ng\u1eafn",
            "wc_msg_input_max_length": "\u0110\u1ea7u v\u00e0o qu\u00e1 d\u00e0i",
            "wc_spoiler_title": "Ti\u00eau \u0111\u1ec1 Spoiler",
            "wc_cannot_rate_again": "B\u1ea1n kh\u00f4ng th\u1ec3 \u0111\u00e1nh gi\u00e1 l\u1ea1i",
            "wc_not_allowed_to_rate": "B\u1ea1n kh\u00f4ng \u0111\u01b0\u1ee3c ph\u00e9p \u0111\u00e1nh gi\u00e1 \u1edf \u0111\u00e2y",
            "wc_follow_user": "Theo d\u00f5i ng\u01b0\u1eddi n\u00e0y",
            "wc_unfollow_user": "H\u1ee7y theo d\u00f5i ng\u01b0\u1eddi d\u00f9ng n\u00e0y",
            "wc_follow_success": "B\u1ea1n \u0111\u00e3 b\u1eaft \u0111\u1ea7u theo d\u00f5i t\u00e1c gi\u1ea3 c\u1ee7a b\u00ecnh lu\u1eadn n\u00e0y",
            "wc_follow_canceled": "B\u1ea1n \u0111\u00e3 d\u1eebng theo d\u00f5i t\u00e1c gi\u1ea3 c\u1ee7a b\u00ecnh lu\u1eadn n\u00e0y.",
            "wc_follow_email_confirm": "Vui l\u00f2ng ki\u1ec3m tra email c\u1ee7a b\u1ea1n v\u00e0 x\u00e1c nh\u1eadn y\u00eau c\u1ea7u theo d\u00f5i c\u1ee7a ng\u01b0\u1eddi d\u00f9ng.",
            "wc_follow_email_confirm_fail": "R\u1ea5t ti\u1ebfc, ch\u00fang t\u00f4i kh\u00f4ng th\u1ec3 g\u1eedi email x\u00e1c nh\u1eadn.",
            "wc_follow_login_to_follow": "Vui l\u00f2ng \u0111\u0103ng nh\u1eadp \u0111\u1ec3 theo d\u00f5i ng\u01b0\u1eddi d\u00f9ng.",
            "wc_follow_impossible": "Ch\u00fang t\u00f4i r\u1ea5t ti\u1ebfc, nh\u01b0ng b\u1ea1n kh\u00f4ng th\u1ec3 theo d\u00f5i ng\u01b0\u1eddi d\u00f9ng n\u00e0y.",
            "wc_follow_not_added": "Theo d\u00f5i kh\u00f4ng th\u00e0nh c\u00f4ng. Vui l\u00f2ng th\u1eed l\u1ea1i sau.",
            "is_user_logged_in": "",
            "commentListLoadType": "0",
            "commentListUpdateType": "0",
            "commentListUpdateTimer": "60",
            "liveUpdateGuests": "0",
            "wordpressThreadCommentsDepth": "2",
            "wordpressIsPaginate": "",
            "commentTextMaxLength": "0",
            "replyTextMaxLength": "0",
            "commentTextMinLength": "1",
            "replyTextMinLength": "1",
            "storeCommenterData": "100000",
            "socialLoginAgreementCheckbox": "1",
            "enableFbLogin": "0",
            "fbUseOAuth2": "0",
            "enableFbShare": "0",
            "facebookAppID": "",
            "facebookUseOAuth2": "0",
            "enableGoogleLogin": "0",
            "googleClientID": "",
            "googleClientSecret": "",
            "cookiehash": "",
            "isLoadOnlyParentComments": "0",
            "scrollToComment": "0",
            "commentFormView": "collapsed",
            "enableDropAnimation": "1",
            "isNativeAjaxEnabled": "1",
            "enableBubble": "0",
            "bubbleLiveUpdate": "0",
            "bubbleHintTimeout": "45",
            "bubbleHintHideTimeout": "10",
            "cookieHideBubbleHint": "wpdiscuz_hide_bubble_hint",
            "bubbleHintShowOnce": "1",
            "bubbleHintCookieExpires": "7",
            "bubbleShowNewCommentMessage": "0",
            "bubbleLocation": "content_left",
            "firstLoadWithAjax": "0",
            "wc_copied_to_clipboard": "Sao ch\u00e9p v\u00e0o clipboard!",
            "inlineFeedbackAttractionType": "blink",
            "loadRichEditor": "1",
            "wpDiscuzReCaptchaSK": "",
            "wpDiscuzReCaptchaTheme": "light",
            "wpDiscuzReCaptchaVersion": "2.0",
            "wc_captcha_show_for_guest": "0",
            "wc_captcha_show_for_members": "0",
            "wpDiscuzIsShowOnSubscribeForm": "0",
            "wmuEnabled": "1",
            "wmuInput": "wmu_files",
            "wmuMaxFileCount": "1",
            "wmuMaxFileSize": "2097152",
            "wmuPostMaxSize": "524288000",
            "wmuIsLightbox": "1",
            "wmuMimeTypes": {
                "jpg": "image\/jpeg",
                "jpeg": "image\/jpeg",
                "jpe": "image\/jpeg",
                "gif": "image\/gif",
                "png": "image\/png",
                "bmp": "image\/bmp",
                "tiff": "image\/tiff",
                "tif": "image\/tiff",
                "ico": "image\/x-icon"
            },
            "wmuPhraseConfirmDelete": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n x\u00f3a \u0111\u00ednh k\u00e8m n\u00e0y kh\u00f4ng?",
            "wmuPhraseNotAllowedFile": "Lo\u1ea1i t\u1ec7p kh\u00f4ng \u0111\u01b0\u1ee3c ph\u00e9p",
            "wmuPhraseMaxFileCount": "S\u1ed1 l\u01b0\u1ee3ng t\u1ec7p \u0111\u01b0\u1ee3c t\u1ea3i l\u00ean t\u1ed1i \u0111a l\u00e0 1",
            "wmuPhraseMaxFileSize": "K\u00edch th\u01b0\u1edbc t\u1ec7p t\u1ea3i l\u00ean t\u1ed1i \u0111a l\u00e0 2MB",
            "wmuPhrasePostMaxSize": "K\u00edch th\u01b0\u1edbc b\u00e0i \u0111\u0103ng t\u1ed1i \u0111a l\u00e0 500MB",
            "wmuPhraseDoingUpload": "Uploading in progress! Please wait.",
            "msgEmptyFile": "File is empty. Please upload something more substantial. This error could also be caused by uploads being disabled in your php.ini or by post_max_size being defined as smaller than upload_max_filesize in php.ini.",
            "msgPostIdNotExists": "ID b\u00e0i vi\u1ebft kh\u00f4ng t\u1ed3n t\u1ea1i",
            "msgUploadingNotAllowed": "Xin l\u1ed7i, t\u1ea3i l\u00ean kh\u00f4ng \u0111\u01b0\u1ee3c ph\u00e9p cho b\u00e0i \u0111\u0103ng n\u00e0y",
            "msgPermissionDenied": "B\u1ea1n kh\u00f4ng c\u00f3 \u0111\u1ee7 quy\u1ec1n \u0111\u1ec3 th\u1ef1c hi\u1ec7n h\u00e0nh \u0111\u1ed9ng n\u00e0y",
            "wmuKeyImages": "images",
            "wmuSingleImageWidth": "auto",
            "wmuSingleImageHeight": "200",
            "version": "7.6.21",
            "wc_post_id": "9999999",
            "isCookiesEnabled": "1",
            "loadLastCommentId": "0",
            "dataFilterCallbacks": [],
            "phraseFilters": [],
            "scrollSize": "32",
            "is_email_field_required": "0",
            "url": "",
            "customAjaxUrl": "",
            "bubbleUpdateUrl": "",
            "restNonce": "94ed67d45f"
        };
        var wpdiscuzUCObj = {
            "msgConfirmDeleteComment": "B\u1ea1n c\u00f3 ch\u1eafc l\u00e0 b\u1ea1n mu\u1ed1n xo\u00e1 b\u00ecnh lu\u1eadn n\u00e0y kh\u00f4ng?",
            "msgConfirmCancelSubscription": "\u0110\u00f3ng c\u00e1c li\u00ean k\u1ebft tr\u01b0\u1edbc ti\u1ebfp theo\nB\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n h\u1ee7y \u0111\u0103ng k\u00fd n\u00e0y kh\u00f4ng?",
            "msgConfirmCancelFollow": "B\u1ea1n c\u00f3 ch\u1eafc ch\u1eafn mu\u1ed1n h\u1ee7y theo d\u00f5i kh\u00f4ng?",
            "additionalTab": "0"
        };
        /* ]]> */
    </script>

    <script type="text/javascript" id="wpdiscuz-combo-js-js-before">
        /* <![CDATA[ */
        var wpdiscuzEditorOptions = {
            modules: {
                toolbar: "",
                counter: {
                    uniqueID: "",
                    commentmaxcount: 0,
                    replymaxcount: 0,
                    commentmincount: 1,
                    replymincount: 1,
                },
            },
            wc_be_the_first_text: "H\u00e3y tr\u1edf th\u00e0nh ng\u01b0\u1eddi \u0111\u1ea7u ti\u00ean b\u00ecnh lu\u1eadn!",
            wc_comment_join_text: "Tham gia th\u1ea3o lu\u1eadn",
            theme: 'snow',
            debug: 'error'
        };

        /* ]]> */
    </script>
    <script type="text/javascript"
            src="/site/wp-content/plugins/wpdiscuz/assets/js/wpdiscuz-combo.mined07.js?ver=7.6.21"
            id="wpdiscuz-combo-js-js"></script>
    <script type="text/javascript" src="/site/wp-includes/js/comment-reply.min369f.js?ver=6.6.4" id="comment-reply-js"
            async="async" data-wp-strategy="async"></script>

    <script>
        app.controller('productDetail', function ($rootScope, $scope, cartItemSync, $interval) {
            $scope.cart = cartItemSync;
            $scope.addCartSuccess = false;

            $scope.addToCart = function (productId, qty = null) {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);

                if (!qty) {
                    var currentVal = parseInt(jQuery('input[name="quantity"]').val());
                } else {
                    var currentVal = parseInt(qty);
                }

                if (!currentVal) {
                    alert('Vui lòng nhập số lượng');
                    return;
                }

                const payload = {qty: currentVal};

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: payload,
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);
                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);
                            toastr.success('Đã thêm sản phẩm vào giỏ hàng!');

                            $scope.addCartSuccess = true;
                        }
                    },
                    error: function () {
                        toastr.error('Có lỗi xảy ra. Vui lòng thử lại.');

                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.buyNow = function (productId) {
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);
                var currentVal = parseInt(jQuery('input[name="quantity"]').val());

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

                            window.location.href = "{{ route('cart.checkout') }}";

                        }
                    },
                    error: function () {
                        jQuery.toast('Thao tác thất bại !')
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }

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

            $scope.formReview = {};
            $scope.formReview.product_id = {{ $product->id }};
            $scope.submitReview = function () {
                var editor = document.querySelector('#wpd-editor-0_0 .ql-editor');
                // nếu id khác, có thể dùng: document.querySelector('.wpd-field-comment .ql-editor')

                var html = editor ? editor.innerHTML.trim() : '';
                var text = editor ? editor.innerText.trim() : '';

                if (!text || /^<p><br><\/p>$/.test(html)) {
                    alert('Vui lòng nhập nội dung bình luận');
                    return;
                }

                $scope.formReview.content_html = html; // giữ format (p, br, b, i…)
                $scope.formReview.content_text = text; // bản text để server dễ kiểm tra min length

                jQuery.ajax({
                    type: 'POST',
                    url: '{{ route('front.submitRating') }}',
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        formReview: $scope.formReview
                    },
                    success: function (response) {
                        if (response.success) {
                            $scope.checkSendRating = true;
                            toastr.success('Gứi đánh giá thành công. Đánh giá của bạn đang được xét duyệt !');

                            $scope.formReview = {};
                            $scope.formReview.product_id = {{ $product->id }};
                        } else {
                            $scope.errors = response.errors;
                            toastr.warning('Thao tác thất bại');
                        }
                    },
                    error: function () {
                        toastr.error('Operation failed')
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }


        })

    </script>

@endpush
