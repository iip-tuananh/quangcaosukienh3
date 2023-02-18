@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="page-title title-left solid-bg breadcrumbs-mobile-off page-title-responsive-enabled bg-img-enabled">
   <div class="wf-wrap">
      <div class="page-title-head hgroup">
         <h1 ><span>Làm biển quảng cáo</span></h1>
      </div>
      <div class="page-title-breadcrumbs">
         <div class="assistive-text">You are here:</div>
         <ol class="breadcrumbs text-small" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="https://duckienad.com/" title=""><span itemprop="name">Home</span></a>
               <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <a itemprop="item" href="https://duckienad.com/chuyen-muc/tu-van-quang-cao/" title=""><span itemprop="name">Tư vấn</span></a>
               <meta itemprop="position" content="2" />
            </li>
            <li class="current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
               <span itemprop="name">Chuyên mục "Làm biển quảng cáo"</span>
               <meta itemprop="position" content="3" />
            </li>
         </ol>
      </div>
   </div>
</div>
<div id="main" class="sidebar-none sidebar-divider-vertical pd-100 pd-t-10">
   <div class="main-gradient"></div>
   <div class="wf-wrap">
      <div class="wf-container-main">
         <!-- Content -->
         <div id="content" class="content" role="main">
            <style type="text/css" data-type="the7_shortcodes-inline-css">.blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.dividers-on.classic-layout-list article {
               padding-top: 0;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.dividers-on.classic-layout-list article:first-of-type {
               margin-top: 0;
               padding-top: 0;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.classic-layout-list.mode-list .post-entry-content {
               width: calc(100% - );
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.classic-layout-list.mode-list .no-img .post-entry-content {
               width: 100%;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .filter-bg-decoration .filter-categories a.act {
               color: #fff;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.mode-masonry) article:first-of-type,
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.mode-masonry) article.visible.first:not(.product) {
               margin-top: 0;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.dividers-on:not(.mode-masonry) article {
               margin-top: 0;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.dividers-on:not(.mode-masonry) article:first-of-type,
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.dividers-on:not(.mode-masonry) article.visible.first:not(.product) {
               margin-top: 0;
               padding-top: 0;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .post-thumbnail-wrap {
               padding: 0px 0px 0px 0px;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.enable-bg-rollover .post-thumbnail-rollover:after {
               background: -webkit-linear-gradient();
               background: linear-gradient();
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico {
               width: 44px;
               height: 44px;
               line-height: 44px;
               border-radius: 100px;
               margin: -22px 0 0 -22px;
               border-width: 0px;
               color: #ffffff;
               }
               .bottom-overlap-layout-list.blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico {
               margin-top: -72px;
               }
               .gradient-overlay-layout-list.blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico,
               .content-rollover-layout-list.blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico {
               margin: 0 0 10px;
               }
               .content-align-center.gradient-overlay-layout-list.blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico,
               .content-align-center.content-rollover-layout-list.blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico {
               margin: 0 auto 10px;
               }
               .dt-icon-bg-on.blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico {
               background: rgba(255,255,255,0.3);
               box-shadow: none;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico > span,
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico:before {
               font-size: 32px;
               line-height: 44px;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico > span,
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .gallery-zoom-ico:before {
               color: #ffffff;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .entry-title,
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.owl-carousel .entry-title {
               margin-bottom: 5px;
               font-weight: bold;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .entry-meta {
               margin-bottom: 15px;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .portfolio-categories {
               margin-bottom: 15px;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .entry-excerpt {
               margin-bottom: 5px;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.centered-layout-list) .post-entry-content {
               padding: 15px 15px 15px 15px;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.centered-layout-list):not(.content-bg-on):not(.mode-list) .no-img .post-entry-content {
               padding: 0;
               }
               @media screen and (max-width: ) {
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf article {
               -ms-flex-flow: column nowrap;
               flex-flow: column nowrap;
               margin-top: 20px;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.dividers-on article {
               border: none;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.content-bg-on.centered-layout-list article {
               padding: 0;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.blog-shortcode.dividers-on article,
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.dividers-on.classic-layout-list article {
               margin-top: 20px;
               padding: 0;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.blog-shortcode.dividers-on article:first-of-type,
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.dividers-on.classic-layout-list article:first-of-type {
               padding: 0;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .post-thumbnail-wrap,
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .post-entry-content {
               width: 100%;
               margin: 0;
               top: 0;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .post-thumbnail-wrap {
               padding: 0;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .post-entry-content:after {
               display: none;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .project-even .post-thumbnail-wrap,
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.centered-layout-list .post-thumbnail-wrap {
               -ms-flex-order: 0;
               order: 0;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.centered-layout-list .post-entry-title-content {
               -ms-flex-order: 1;
               order: 1;
               width: 100%;
               padding: 20px 20px 0;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.centered-layout-list .post-entry-content {
               -ms-flex-order: 2;
               order: 2;
               padding-top: 0;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .fancy-categories {
               top: 10px;
               left: 10px;
               bottom: auto;
               right: auto;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .fancy-date a {
               top: 10px;
               right: 10px;
               left: auto;
               bottom: auto;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .post-entry-content {
               padding: 20px;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .entry-title {
               margin: 3px 0 5px;
               font-size: 20px;
               line-height: 26px;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .entry-meta {
               margin: 5px 0 5px;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .entry-excerpt {
               margin: 15px 0 0;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .post-details {
               margin: 5px 0 10px;
               }
               #page .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf .post-details.details-type-link {
               margin-bottom: 2px;
               }
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.resize-by-browser-width) .dt-css-grid {
               grid-row-gap: 30px;
               grid-column-gap: 30px;
               grid-template-columns: repeat(auto-fill,minmax(,1fr));
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.resize-by-browser-width) .dt-css-grid .double-width {
               grid-column: span 2;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.resize-by-browser-width) .dt-css-grid,
               .no-cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.resize-by-browser-width) .dt-css-grid {
               display: flex;
               flex-flow: row wrap;
               margin: -15px;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.resize-by-browser-width) .dt-css-grid .wf-cell,
               .no-cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf:not(.resize-by-browser-width) .dt-css-grid .wf-cell {
               flex: 1 0 ;
               max-width: 100%;
               padding: 15px;
               box-sizing: border-box;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid {
               grid-template-columns: repeat(4,1fr);
               grid-template-rows: auto;
               grid-column-gap: 30px;
               grid-row-gap: 30px;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .double-width {
               grid-column: span 2;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid {
               margin: -15px;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell {
               width: 25%;
               padding: 15px;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
               width: calc(25%) * 2;
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width:not(.centered-layout-list):not(.content-bg-on) .dt-css-grid {
               grid-row-gap: 15px;
               }
               @media screen and (max-width: 1199px) {
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid {
               grid-template-columns: repeat(3,1fr);
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell,
               .no-cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell {
               width: 33.333333333333%;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
               .no-cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
               width: calc(33.333333333333%)*2;
               }
               }
               @media screen and (max-width: 991px) {
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid {
               grid-template-columns: repeat(2,1fr);
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell,
               .no-cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell {
               width: 50%;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
               .no-cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
               width: calc(50%)*2;
               }
               }
               @media screen and (max-width: 767px) {
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid {
               grid-template-columns: repeat(1,1fr);
               }
               .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .double-width {
               grid-column: span 1;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell,
               .no-cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell {
               width: 100%;
               }
               .cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell.double-width,
               .no-cssgridlegacy.no-cssgrid .blog-shortcode.archive-97edc79703c94cc1fc4e275a029cfebf.resize-by-browser-width .dt-css-grid .wf-cell.double-width {
               width: calc(100%)*2;
               }
               }
            </style>
            <div class="blog-shortcode archive-97edc79703c94cc1fc4e275a029cfebf mode-grid classic-layout-list content-bg-on meta-info-off dt-css-grid-wrap dt-icon-bg-off resize-by-browser-width loading-effect-none description-under-image " data-padding="15px" data-cur-page="1" data-post-limit="-1" data-pagination-mode="pages" data-desktop-columns-num="4" data-v-tablet-columns-num="2" data-h-tablet-columns-num="3" data-phone-columns-num="1" data-width="0px" data-columns="0">
               <div class="dt-css-grid" >
                @foreach ($list as $pro)
                @php
                    $img=json_decode($pro->images);
                @endphp
                    <div class="visible wf-cell" data-post-id="8160" data-date="2023-02-03T11:41:59+07:00" data-name="{{languageName($pro->name)}}">
                    <article class="post project-odd visible post-8160 type-post status-publish format-standard has-post-thumbnail hentry category-lam-bien-quang-cao tag-bien-hang-rao tag-bien-quang-cao-cong-trinh category-71" data-name="{{languageName($pro->name)}}" data-date="2023-02-03T11:41:59+07:00">
                        <div class="post-thumbnail-wrap">
                            <div class="post-thumbnail">
                                <span class="fancy-categories"><a href="{{route('detailProduct',['slug'=>$pro->slug])}}" rel="category tag" style="background-color:#;color:#;">Làm biển quảng cáo</a></span>
                                <a href="{{route('detailProduct',['slug'=>$pro->slug])}}" class="post-thumbnail-rollover layzr-bg layzr-bg" ><img class="iso-lazy-load preload-me iso-lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20768%20576&#39;%2F%3E" data-src="{{$img[0]}}" data-srcset="{{$img[0]}} 768w,{{$img[0]}}  1152w" alt="" title="bien quang cao cong trinh xay dung vincons dream city" width="768" height="576"  /></a>	
                            </div>
                        </div>
                        <div class="post-entry-content">
                            <h3 class="entry-title">
                                <a href="{{route('detailProduct',['slug'=>$pro->slug])}}" title="{{languageName($pro->name)}}" rel="bookmark">{{languageName($pro->name)}}</a>
                            </h3>
                            <div class="entry-excerpt limit-text-3">
                               {{languageName($pro->description)}}
                            </div>
                            <a href="{{route('detailProduct',['slug'=>$pro->slug])}}" class="post-details details-type-link" aria-label="Read more about {{languageName($pro->name)}}" rel="nofollow">Xem thêm...<i class="dt-icon-the7-arrow-03" aria-hidden="true"></i></a>
                        </div>
                    </article>
                    </div>
                @endforeach
               </div>
               <!-- iso-container|iso-grid -->
               <div class="pagenav">
                {{$list->links()}}
                </div>
          
                <style>
                .pagenav{
                   
                   width: 100% !important;
                   display: flex !important;
                   justify-content: center !important;
                   padding: 40px 0 !important;
                }
                .pagenav ul.pagination{
                   background-color: rgb(255 255 255) !important;
                   display: flex !important;
                   list-style: none !important;
                }
                .pagenav ul.pagination li span{
                
                   height:41px !important;
                   width: 35px!important;
                   display: flex;
                   justify-content: center!important;
                   align-items: center!important;
                }
                .pagenav .pagination a{
                   height:41px!important;
                   width: 35px!important;
                   display: flex!important;
                   justify-content: center!important;
                   align-items: center!important;
                }
                .pagenav .pagination a:hover{
                   background-color: #847467!important;
                   color: antiquewhite!important;
                }
                .pagenav li.active{
                   background-color: #847467!important;
                   color: antiquewhite!important;
                }
                </style>
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

