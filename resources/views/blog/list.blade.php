@extends('layouts.main.master')
@section('title')
    {{ $title_page }}
@endsection
@section('description')
    Tin tức nổi bật và mới nhất
@endsection
@section('image')
    {{ url('' . $banners[0]->image) }}
@endsection
@section('css')
@endsection
@section('content')
<div class="page-title title-left solid-bg breadcrumbs-mobile-off page-title-responsive-enabled bg-img-enabled">
    <div class="wf-wrap">
       <div class="page-title-head hgroup">
          <h1 >Blog &#038; News</h1>
       </div>
       <div class="page-title-breadcrumbs">
          <div class="assistive-text">You are here:</div>
          <ol class="breadcrumbs text-small" itemscope itemtype="https://schema.org/BreadcrumbList">
             <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('home')}}" title=""><span itemprop="name">Home</span></a>
                <meta itemprop="position" content="1" />
             </li>
             <li class="current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name">Blog &#038; News</span>
                <meta itemprop="position" content="2" />
             </li>
          </ol>
       </div>
    </div>
 </div>
 <div id="main" class="sidebar-none sidebar-divider-vertical">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
       <div class="wf-container-main">
          <div id="content" class="content" role="main">
             <div class="vc_row wpb_row vc_row-fluid vc_custom_1498223944066">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                   <div class="vc_column-inner ">
                      <div class="wpb_wrapper">
                         <style type="text/css" data-type="the7_shortcodes-inline-css">.blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.dividers-on.classic-layout-list article {
                            margin-top: ;
                            padding-top: 0;
                            border-color: ;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.dividers-on.classic-layout-list article:first-of-type {
                            margin-top: 0;
                            padding-top: 0;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.classic-layout-list.mode-list .post-thumbnail-wrap {
                            width: ;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.classic-layout-list.mode-list .post-entry-content {
                            width: calc(100% - );
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.classic-layout-list.mode-list .no-img .post-entry-content {
                            width: 100%;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .filter {
                            margin-bottom: 40px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .filter-bg-decoration .filter-categories a.act {
                            color: #fff;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.mode-masonry) article {
                            margin-top: ;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.mode-masonry) article:first-of-type,
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.mode-masonry) article.visible.first:not(.product) {
                            margin-top: 0;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.dividers-on:not(.mode-masonry) article {
                            margin-top: 0;
                            padding-top: ;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.dividers-on:not(.mode-masonry) article:first-of-type,
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.dividers-on:not(.mode-masonry) article.visible.first:not(.product) {
                            margin-top: 0;
                            padding-top: 0;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .post-thumbnail-wrap {
                            padding: 0px 0px 0px 0px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.enable-bg-rollover .post-thumbnail-rollover:after {
                            background: ;
                            background: -webkit-linear-gradient();
                            background: linear-gradient();
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico {
                            width: 44px;
                            height: 44px;
                            line-height: 44px;
                            border-radius: 100px;
                            margin: -22px 0 0 -22px;
                            border-width: 0px;
                            color: #ffffff;
                            }
                            .bottom-overlap-layout-list.blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico {
                            margin-top: -72px;
                            }
                            .gradient-overlay-layout-list.blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico,
                            .content-rollover-layout-list.blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico {
                            margin: 0 0 10px;
                            }
                            .content-align-center.gradient-overlay-layout-list.blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico,
                            .content-align-center.content-rollover-layout-list.blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico {
                            margin: 0 auto 10px;
                            }
                            .dt-icon-bg-on.blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico {
                            background: rgba(255,255,255,0.3);
                            box-shadow: none;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico > span,
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico:before {
                            font-size: 32px;
                            line-height: 44px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico > span,
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .gallery-zoom-ico:before {
                            color: #ffffff;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .fancy-date a * {
                            color: #1f365c;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .entry-title,
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.owl-carousel .entry-title {
                            margin-bottom: 5px;
                            font-size: 20px;
                            line-height: 26px;
                            font-weight: bold;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .entry-meta {
                            margin-bottom: 15px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .portfolio-categories {
                            margin-bottom: 15px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .entry-excerpt {
                            margin-bottom: 5px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.centered-layout-list) .post-entry-content {
                            padding: 15px 15px 15px 15px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.centered-layout-list):not(.content-bg-on):not(.mode-list) .no-img .post-entry-content {
                            padding: 0;
                            }
                            @media screen and (max-width: ) {
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 article {
                            -ms-flex-flow: column nowrap;
                            flex-flow: column nowrap;
                            margin-top: 20px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.dividers-on article {
                            border: none;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.content-bg-on.centered-layout-list article {
                            padding: 0;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.blog-shortcode.dividers-on article,
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.dividers-on.classic-layout-list article {
                            margin-top: 20px;
                            padding: 0;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.blog-shortcode.dividers-on article:first-of-type,
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.dividers-on.classic-layout-list article:first-of-type {
                            padding: 0;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .post-thumbnail-wrap,
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .post-entry-content {
                            width: 100%;
                            margin: 0;
                            top: 0;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .post-thumbnail-wrap {
                            padding: 0;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .post-entry-content:after {
                            display: none;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .project-even .post-thumbnail-wrap,
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.centered-layout-list .post-thumbnail-wrap {
                            -ms-flex-order: 0;
                            order: 0;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.centered-layout-list .post-entry-title-content {
                            -ms-flex-order: 1;
                            order: 1;
                            width: 100%;
                            padding: 20px 20px 0;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.centered-layout-list .post-entry-content {
                            -ms-flex-order: 2;
                            order: 2;
                            padding-top: 0;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .fancy-categories {
                            top: 10px;
                            left: 10px;
                            bottom: auto;
                            right: auto;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .fancy-date a {
                            top: 10px;
                            right: 10px;
                            left: auto;
                            bottom: auto;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .post-entry-content {
                            padding: 20px;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .entry-title {
                            margin: 3px 0 5px;
                            font-size: 20px;
                            line-height: 26px;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .entry-meta {
                            margin: 5px 0 5px;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .entry-excerpt {
                            margin: 15px 0 0;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .post-details {
                            margin: 5px 0 10px;
                            }
                            #page .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 .post-details.details-type-link {
                            margin-bottom: 2px;
                            }
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.resize-by-browser-width) .dt-css-grid {
                            grid-row-gap: 50px;
                            grid-column-gap: 50px;
                            grid-template-columns: repeat(auto-fill,minmax(,1fr));
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.resize-by-browser-width) .dt-css-grid .double-width {
                            grid-column: span 2;
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.resize-by-browser-width) .dt-css-grid,
                            .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.resize-by-browser-width) .dt-css-grid {
                            display: flex;
                            flex-flow: row wrap;
                            margin: -25px;
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.resize-by-browser-width) .dt-css-grid .wf-cell,
                            .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674:not(.resize-by-browser-width) .dt-css-grid .wf-cell {
                            flex: 1 0 ;
                            min-width: ;
                            max-width: 100%;
                            padding: 25px;
                            box-sizing: border-box;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid {
                            grid-template-columns: repeat(4,1fr);
                            grid-template-rows: auto;
                            grid-column-gap: 50px;
                            grid-row-gap: 50px;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .double-width {
                            grid-column: span 2;
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid {
                            margin: -25px;
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell {
                            width: 25%;
                            padding: 25px;
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                            width: calc(25%) * 2;
                            }
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width:not(.centered-layout-list):not(.content-bg-on) .dt-css-grid {
                            grid-row-gap: 35px;
                            }
                            @media screen and (max-width: 1199px) {
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid {
                            grid-template-columns: repeat(3,1fr);
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell,
                            .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell {
                            width: 33.333333333333%;
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                            .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                            width: calc(33.333333333333%)*2;
                            }
                            }
                            @media screen and (max-width: 991px) {
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid {
                            grid-template-columns: repeat(2,1fr);
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell,
                            .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell {
                            width: 50%;
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                            .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                            width: calc(50%)*2;
                            }
                            }
                            @media screen and (max-width: 767px) {
                            .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid {
                            grid-template-columns: repeat(1,1fr);
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell,
                            .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell {
                            width: 100%;
                            }
                            .cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
                            .no-cssgridlegacy.no-cssgrid .blog-shortcode.blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
                            width: calc(100%)*2;
                            }
                            }
                         </style>
                         <div class="blog-shortcode blog-masonry-shortcode-id-6b50a044ce2ddfd708f7978a6074c674 mode-grid classic-layout-list jquery-filter horizontal-fancy-style dt-css-grid-wrap dt-icon-bg-off resize-by-browser-width loading-effect-none description-under-image " data-padding="25px" data-cur-page="1" data-post-limit="12" data-pagination-mode="load-more" data-desktop-columns-num="4" data-v-tablet-columns-num="2" data-h-tablet-columns-num="3" data-phone-columns-num="1" data-width="0px" data-columns="0">
                         
                            <div class="dt-css-grid pd-t-10 pd-100" >
                                @foreach ($blog as $item)
                                    @include('layouts.blog.conten',['blog'=>$item])
                                @endforeach
                            </div>
                            <!-- iso-container|iso-grid -->
                          
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- #content -->
       </div>
       <!-- .wf-container -->
    </div>
    <!-- .wf-wrap -->
 </div>
 <!-- #main -->
@endsection
